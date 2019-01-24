<?php

namespace App\Http\Controllers\General;
use App\Http\Controllers\Controller;
use App\Service\General\ApiService;
use Illuminate\Http\Request;
class ApiController extends Controller
{

    /**
     * @param Request $request
     * @param $data
     * json_data insert to de tab_tools
     * Get the 七牛OSS save setting & To handle in APIService
     */
    public function qiniuSet(REQUEST $request)
    {
        $data['accessKey']  =   $request->post('accessKey');
        $data['secretKey']  =   $request->post('secretKey');
         $data['bucket'] =   $request->post('bucket');//空间名称

        $service    =   new ApiService();
        $res    =   $service->qiniuSet($data);
        return $res;
    }

    /**
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

    /**
     * @param Request $request
     * Upload image to the oss
     * @return array|\Illuminate\Http\JsonResponse
     */
        public function uploadToOss(REQUEST $request)
        {
            $data['file'] = $request->file('pic') ;
            $data['name']   =   'qiniu';
            $service    =   new ApiService();
            $res    =   $service->uploadToOss($data);
            return $res;
        }


}
