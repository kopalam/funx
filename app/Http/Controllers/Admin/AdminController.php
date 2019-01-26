<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\funx\TabUsers;
use App\Service\General\ApiService;
use App\Service\General\AuthoryService;
use App\Service\General\UseRedisService;
use App\Service\General\UserService;
use App\Services\WxSdk\WXLoginHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    /**
     * LoginCheck for admin
     * @param Request $request
     */
        public function login(Request $request)
        {
//            $name   =   $request->post('name');
//            $password     =   $request->post('password');
//            $uid    =   $request->post('uid');
//            $token  =   $request->post('token');
//            $authory    =   new AuthoryService($token);
//            $authory->checkToken($uid);
//            return $token;
            $redis  =   new UseRedisService();
               $redis->set(111,222);
            $data   = $redis->get(111);
            echo $data;
        }



}
