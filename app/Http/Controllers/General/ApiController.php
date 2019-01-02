<?php

namespace App\Http\Controllers\General;
use App\Http\Controllers\Controller;
use App\Service\Rules;
use QL\QueryList;
use Illuminate\Http\Request;
class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
     * 获取规则
     * 目前情况建议采集首页内容，其他内容容易出错
     */
    public function getGameTitle(Request $request)
    {
        $pageCount   =   $request->post('pageCount'); //获取多少页内容
        $type   =   $request->post('type'); //
        $handle     =   $request->post('handle');
        $pageCount   =   empty($pageCount) ? 1 : $pageCount;
        $service    =   new Rules();
        try{
            switch ($handle){
                case '17173':
                    $result     =   $service->rules($pageCount,$type);
                    break;
                case '9you':
                    $result     =   $service->nineGameRules($pageCount,$type);
                    break;
                default:

                    break;
            }
            print_r($result);
        }catch(\Exception $e){

        }

        //测试请求获取内容页面
//        $contentResult  =   $service->getGameContent('17173',$result);
//        print_r($contentResult);
    }



}
