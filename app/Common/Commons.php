<?php

    function showMsg($code,$msg,$data=''){
        $result =  ['code'=>$code,'msg'=>$msg,'data'=>$data];
        exit( json_encode($result));
    }

    function failMsg($msg,$data)
    {
        $result =  ['code'=>0,'msg'=>$msg,'data'=>$data];
        exit( json_encode($result));
    }

    function successMsg($msg,$data)
    {
        $result =  ['code'=>200,'msg'=>$msg,'data'=>$data];
        exit( json_encode($result));
    }