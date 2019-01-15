<?php

namespace App\Http\Controllers\General;
use App\Http\Controllers\Controller;
use App\Service\General\ApiService;
use App\Service\Rules;
use QL\QueryList;
use Illuminate\Http\Request;
class ApiController extends Controller
{

    /**
     * @param Request $request
     * 获取oss设置
     */
        public function OssSet(REQUEST $request)
        {
            $data['accessKey']  =   $request->post('accessKey');
            $data['secretKey']  =   $request->post('secretKey');
            $data['bucket'] =   $request->post('bucket');
            $data['name']   =   $request->post('name');

            $service    =   new ApiService();
            $res    =   $service->setOss($data);
            $res    =   $res==1?'更新成功':'更新失败';
            return $res;
        }

        public function uploadToOss(REQUEST $request)
        {
            $data['file'] = $request->file('pic') ;
            $data['name']   =   'qiniu';
            $service    =   new ApiService();
            $res    =   $service->uploadToOss($data);
            return $res;
        }


}
