<?php

/**
 * Created by PhpStorm.
 * User: kopa
 * Date: 19-1-15
 * Time: 下午8:51
 */

namespace App\Service\General;

use App\Models\funx\TabAdminUser;
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
    public function createUser($name,$password,$level)
    {
        //TODO create adminUser
    }

    /**
     * @param string $name rule name
     * @param string $title rule title
     * @param string $type if type = 1,$condtion can custom Regular expression(自定义表达式) like {score}>5 and {score}<100
     * @param int $status
     * @param $condition
     * create auth group
     * table tab_auth_rule tab_auth_group
     */

    public function createGroup($name,$title,$type=1,$status=0,$condition)
    {

    }
}

