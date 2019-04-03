<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\General\UserService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Request post
     * get the rules and group from table
     */
    public function getRules(Request $request)
    {
        $handle = $request->post('handle');
        $service = new UserService();
        try {
            $res = $service->getGroupRule($handle);
        } catch (\Exception $e) {
            return static::showMsg($e->getCode(),$e->getMessage());
        }
        return static::showMsg(200,'success',$res);
    }
}
