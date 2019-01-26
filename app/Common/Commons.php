<?php

    /**
     * 打印msg信息
     * @param $code
     * @param $msg
     * @param string $data
     * @return false|string
     */
    function showMsg($code,$msg,$data=''){
        $result =  ['code'=>$code,'msg'=>$msg,'data'=>$data];
        return response()->json($result);
    }

    /**
     * 失败信息返回
     * @param $res
     * @param string $msg
     * @param string $data
     * @return false|string
     */
    function failMsg($res,$msg='',$data='')
    {
        if(!empty($res)){
            return( json_encode($res));
        }
        $result =  ['code'=>0,'msg'=>$msg,'data'=>$data];
        return response()->json($result);
    }

    /**
     * 成功消息返回
     * @param $msg
     * @param $data
     * @return false|string
     */
    function successMsg($msg,$data)
    {
        $result =  ['code'=>200,'msg'=>$msg,'data'=>$data];
        return response()->json($result);
    }

    /**
     * 通用消息
     * @param $data
     * @return false|string
     */
    function apiDisplay( $data )
    {
        return response()->json($result);
    }

    /**
     * @param $code
     * @param $message
     * @param array $data
     * @return false|string
     */
    function jsonError( $code , $message ,$data = [] )
    {
       return response()->json([
                'status'  => $code,
                'message' => $message,
                'data'    => $data]
        );
    }

    /**
     * @param $message
     * @param array $data
     * @return false|string
     */
    function jsonSuccess( $message ,$data = []){
       return response()->json([
            'status'  => 0,
            'message' => $message,
            'data'    => $data
        ],true);

    }

    /**
     * 生成唯一的标识符
     * @return string
     */
    function createCauth()
    {
        $rand   =   mb_strcut(random(),9,16);
        return $rand;
    }

    /**
     * 生成用户token
     * @param $uid
     */
    function createToken($uid)
    {
        if(is_int($uid)==false){
            return false;
        }

        $token  =   random();
        return $token;
    }

    /**
     * 生成随机字符串
     * @return string
     */
    function random()
    {
        $len    =   mt_rand(20,30);
        $str="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $result = "";
        for($i=0;$i<$len;$i++)
        {
            $result .= $str{mt_rand(0,$len)};    //生成php随机数
        }
        $result =   base64_encode(sha1($result.time().uniqid()));
        return $result;
    }

    /**
     * 对象转数组
     * @param $data
     */
    function obj2arr($data)
    {
        $result     =   json_decode(json_encode($data),true);
        return $result;
    }