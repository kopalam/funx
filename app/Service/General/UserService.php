<?php

/**
 * Created by PhpStorm.
 * User: kopa
 * Date: 19-1-15
 * Time: 下午8:51
 */

namespace App\Service\General;

use App\Models\funx\TabAdminUser;
use App\Models\funx\TabAuthGroup;
use App\Models\funx\TabAuthRule;
use App\Service\Redis\RedisService;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use App\Models\funx\TabTools;

class UserService
{
    /**
     * @param string $name
     * @param string $password
     */
    public function checkLogin($name,$passwd)
    {
        $user = TabAdminUser::where('nick_name',$name)->first();
        if (!$user)
            throw new \Exception('用户名不存在', 1001);
        if (false == password_verify($passwd, $user->passwd))
            throw new \Exception('密码不正确', 1002);
        $user->last_login_time = time();
        $user->save();
        //TODO login success ,update last_login_time ,token set redis, key = token value = uid,signature,nick_name,level

        $param =  [
            'user_id'=>$user->id,
            'signature'=>$user->signature,
            'nick_name'=>$user->nick_name,
            'levels'=>$user->levels,
            'email'=>$user->email,
        ];
        $tokenData = [
          'token'=>  random().md5(time()),
          'data'=>$param
        ];

        $redis = new RedisService();

        $redis->set($tokenData['token'],json_encode($tokenData['data']),18600);
        return $tokenData;
    }

    /**
     * @param string $name
     * @param string $password
     * @param int $level
     * create adminUser
     * use createCauth can create signature
     * level can not empty
     * table tab_auth_group tab_auth_group_access
     */
    public function creatEditUser($name,$passwd,$email,$levels,$uid=0)
    {
        //if !empty $uid ,to save else to insert

        $passwd =  password_hash($passwd,PASSWORD_DEFAULT);
        if ($uid !== 0) {
            $user = TabAdminUser::find($uid);
            if(!$user)
                throw new \Exception('该用户不存在',1005);
            $user->nick_name = $name;
            $user->passwd = $passwd;
            $user->levels = $levels;
            $user->email = $email;
            if ($user->save() == false)
                throw new \Exception('修改用户信息失败',1004);
            return true;
        } else {

            $checkName = TabAdminUser::where('nick_name',$name)->get()->toArray();
            if($checkName)
                throw new \Exception('用户名已存在',1007);
            $condition = [
                'nick_name' => $name,
                'passwd' => $passwd,
                'signature' => createCauth(),
                'create_time' => time(),
                'last_login_time' => 0,
                'levels' => $levels,
                'email' => $email
                ];
            $res = TabAdminUser::insert($condition);
            if($res == false)
                throw new \Exception('新增用户失败',1003);
            $redis = new RedisService();
            unset($condition['signature'],$condition['password'],$condition['create_time'],$condition['last_login_time']);
            $tokenData = [
                'token'=>  random().md5(time()),
                'data'=> json_encode($condition)
            ];
            $tokenData['data'] = serialize($tokenData['data']);
            $redis->set($tokenData['token'],$tokenData['data'],18600);
            return $tokenData['token'];
        }
    }

    /**
     * @param string $name rule name sample '/admin/writer'
     * @param string $title rule title sample 超级管理员
     * @param string $type if type = 1,$condtion can custom Regular expression(自定义表达式) like {score}>5 and {score}<100
     * @param int $status
     * @param $condition
     * create auth group
     * table tab_auth_rule tab_auth_group
     */

    public function createGroup($name,$title,$type=1,$status=0,$condition=null)
    {

    }

    /**
     * Get the rules or group in the table
     * return array
     */
    public function getGroupRule($handle)
    {

        switch ($handle) {
            case 'rule' :
                $res = TabAuthRule::all(['id','title']);
                break;
            case 'group' :
                $res = TabAuthGroup::where('status','>=','0')->get();
                foreach ($res as $key => $val) {
//                    $val->rules = explode(',',$val->rules);
                    $rulesName = DB::select("select * from tab_auth_rule where find_in_set(id,'".$val->rules."')");
                    $rulesName = json_decode(json_encode($rulesName),true);
                    foreach ($rulesName as $k =>$v) {
                        $get[$k]['title'] = $v['title'];
                        $get[$k]['rule_id'] = $v['id'];
                    }
                    $val->rules = $get;
                }

                break;
            default :
                throw new \Exception('查找失败',2001);
                break;
        }

        return $res;
    }


}

