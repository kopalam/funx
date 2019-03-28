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
        $password = $request->post('password');
        $service = new UserService();
        try {
            $res = $service->checkLogin($nick_name, $password);
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
        $uid = $request->post('uid');
        $level = $request->post('level');
        $password = $request->post('password');
        $email = $request->post('email');
        $uid = empty($uid) ? 0 : $uid;
        $service = new UserService();
        try {
            $res = $service->creatEditUser($name,$password,$email,$level,$uid);
        } catch (\Exception $e) {

            return static::showMsg($e->getCode(),$e->getMessage());

        }

        return static::showMsg(200,'success');

    }




}
