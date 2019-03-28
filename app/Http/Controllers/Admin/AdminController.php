<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\General\UserService;

class AdminController extends Controller
{
    /**
     * Request GET
     * get the rules and group from table
     */
    public function getRules()
    {
        $service = new UserService();
        try {
            $res = $service->getRules();
        } catch (\Exception $e) {
            return static::showMsg($e->getCode(),$e->getMessage());
        }
        return static::showMsg(200,'success',$res);
    }
}
