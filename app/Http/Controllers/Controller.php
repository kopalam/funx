<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @param $code
     * @param $msg
     * @param string $data
     * @return false|string
     * 消息返回
     */
    public static function showMsg($code, $msg, $data = '')
    {
        $result = ['status' => $code, 'msg' => $msg, 'data' => $data];
        return (json_encode($result));
    }
}
