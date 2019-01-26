<?php
/**
 * Created by PhpStorm.
 * User: kopa
 * Date: 12/24/18
 * Time: 11:17 AM
 */

namespace App\Http\Controllers\Addons;

use App\Http\Controllers\Controller;
use App\Service\Addons\RulesService;
use Illuminate\Http\Request;

Class GatherController extends Controller
{

    /**
     * @methods(GET)
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * 获取规则
     * 目前情况建议采集首页内容，其他内容容易出错
     */
    public function get_content(REQUEST $request)
    {

        $pageCount   =   $request->post('pageCount'); //获取多少页内容
        $type   =   $request->post('type'); //
        $handle     =   $request->post('handle');
        $pageCount   =   empty($pageCount) ? 1 : $pageCount;
        $service    =   new RulesService();
        try{
            switch ($handle){
                case '17173':
                    $result     =   $service->rules($pageCount,$type);
                    break;
                case '9you':
                    $result     =   $service->nineGameRules($pageCount,$type);
                    break;
                case 'sougou':
                    $result     =   $service->returnContent('搜狗',1,'sougou','搜狗');
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