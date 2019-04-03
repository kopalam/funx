<?php
/**
 * Created by PhpStorm.
 * User: kopalam
 * Date: 19-3-27
 * Time: 下午17:58
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Service\General\UserService;
use App\Service\Redis\RedisService;
use App\User;
use Illuminate\Http\Request;


class PublicController extends Controller
{
    /**
     * LoginCheck for admin
     * @param Request $request
     * return bool true/false
     */
    public function login(Request $request)
    {
        $nick_name = $request->post('name');
        $passwd = $request->post('passwd');
        $service = new UserService();
        try {
            $res = $service->checkLogin($nick_name, $passwd);
        } catch (\Exception $e) {
            return showMsg($e->getCode(),$e->getMessage());
        }
        return showMsg(200,'success',$res);

    }

    /**
     * @param Request $request
     * create admin
     * @signature When create the admin_user,generate the signature
     * @level The admin_user level,like writer , super manager...
     */
    public function createUser(Request $request)
    {
        $name = $request->post('name');
        $user_id = $request->post('user_id');
        $levels = $request->post('levels');
        $passwd = $request->post('passwd');
        $email = $request->post('email');
        $user_id = empty($user_id) ? 0 : $user_id;
        $service = new UserService();
        try {
            $res = $service->creatEditUser($name,$passwd,$email,$levels,$user_id);

        } catch (\Exception $e) {
            return static::showMsg($e->getCode(),$e->getMessage());
        }
        return static::showMsg(200,'success',$res = is_string($res) ?  $res : '');
    }

    public function testRedis()
    {
        $redis = new RedisService();
        $set = $redis->set(111,222,300);
        $get = $redis->get(111);
        echo $get;

    }




}
