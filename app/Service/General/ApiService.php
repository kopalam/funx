<?php

/**
 * Created by PhpStorm.
 * User: kopa
 * Date: 19-1-15
 * Time: 下午8:51
 */

namespace App\Service\General;

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use App\Models\funx\TabTools;

class ApiService
{
    protected $url  =   'http://image.funkits.cn/';
    /**
     * @param $data
     * 查询tools表中，是否有七牛
     */
    function setOss($data){
        $res    =   TabTools::where('name',$data['name'])->first();
        $ossData    =   json_encode($data);
        if(empty($res)){
            //结果为空，则写入
            $return     =   TabTools::insert(['name'=>$data['name'],'set_tools'=>$ossData]);
        }else{
            $return    =   TabTools::where('name',$data['name'])->update(['set_tools'=>$ossData]);
        }

        return $return;
    }

    function uploadToOss($data)
    {
        $resData    =   TabTools::where('name',$data['name'])->first();
        $setTools    =   json_decode($resData['set_tools'],true);
        $auth   =   new Auth($setTools['accessKey'],$setTools['secretKey']);
        $token  =   $auth->uploadToken($setTools['bucket']);
        $filePath = $data['file']->getRealPath();
        // 上传到七牛后保存的文件名
        $date = time();
        $key = 'funkits/'.$date.'.'.$data['file']->getClientOriginalExtension();
        // 初始化 UploadManager 对象并进行文件的上传。
        $uploadMgr = new UploadManager();
        // 调用 UploadManager 的 putFile 方法进行文件的上传。
        list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
        if(!empty($err)){
            return response()->json(['ResultData'=>'失败','info'=>'失败']);
        }
        $return     =   ['url'=>$this->url.$ret['key']];

        return $return;

    }
}

