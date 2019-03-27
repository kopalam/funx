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
    public function create(Request $request)
    {

    }



}
