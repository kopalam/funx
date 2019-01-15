<?php

namespace App\Http\Controllers\General;
use App\Http\Controllers\Controller;
use App\Service\General\ApiService;
use Illuminate\Http\Request;
class ApiController extends Controller
{

    /**
     * @param Request $request
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

}
