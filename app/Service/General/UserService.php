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
use Illuminate\Support\Facades\Config;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use App\Models\funx\TabTools;

class UserService
{
    /**
     * @param string $name
     * @param string $password
     */
    public function checkLogin($name,$password)
    {
        $userData = TabAdminUser::find(['nick_name'=>$name]);
        if (!$userData)
            throw new \Exception('用户名不存在', 1001);
        if (false == password_verify($password, $userData->password))
            throw new \Exception('密码不正确', 1002);

        //TODO login success ,update last_login_time ,token set redis, key = token value = uid,signature,nick_name,level
        return $userData;
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
    public function creatEditUser($name,$password,$email,$level,$uid=null)
    {
        //if !empty $uid ,to save else to insert
        $password =  password_hash($password,PASSWORD_DEFAULT);
        if ($uid !== 0) {
            $user = TabAdminUser::find($uid);
            if(!$user)
                throw new \Exception('该用户不存在',1005);
            $user->nick_name = $name;
            $user->password = $password;
            $user->level = $level;
            $user->email = $email;
            if ($user->save() == false)
                throw new \Exception('修改用户信息失败',1004);
        } else {
            $condition = [
                'nick_name' => $name,
                'password' => $password,
                'signature' => createCauth(),
                'create_time' => time(),
                'last_login_time' => 0,
                'level' => $level,
                'email' => $email
                ];
            $res = TabAdminUser::insert($condition);
            if($res == false)
                throw new \Exception('新增用户失败',1003);
        }

        return true;
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

                break;
            default :
                throw new \Exception('查找失败',2001);
                break;
        }
        $group = TabAuthGroup::all(['id','title']);
        return $group;
    }


}

