<?php
/**
 * Created by PhpStorm.
 * User: kopa
 * Date: 12/24/18
 * Time: 11:17 AM
 */

namespace App\Http\Controllers\General;

use App\Service\Common\RewardService;
use App\Http\Controllers\Controller;
use App\Service\RulesService;
use Illuminate\Http\Request;


Class GatherController extends Controller
{

    /**
     * @methods(POST)
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * 获取规则
     * 目前情况建议采集首页内容，其他内容容易出错
     */
    public function Content(REQUEST $request)
    {

        $pageCount   =   $request->post('pageCount'); //获取多少页内容
        $type   =   $request->post('type'); //
        $handle     =   $request->post('handle');
        $pageCount   =   empty($pageCount) ? 1 : $pageCount;
        $service    =   new RulesService();
        $prefix     =   $request->post('prefix');

        try{
            switch ($handle){
                case '17173':
                    $result     =   $service->rules($pageCount,$type);
                    break;
                case '9you':
                    $result     =   $service->nineGameRules($pageCount,$type);
                    break;
                case 'uuu9':
                    $result     =   $service->returnContent('uuu9',$type,$prefix,'游久网');
                    break;
                case 'chinaGame':
                    $result     =   $service->returnContent('chinaGame',$type,$prefix,'中华游戏网');
                    break;
                case 'qqGame':
                    $result =   $service->returnContent('qqGame',$type,$prefix,'QQ游戏网');
                default:
                    $result     =   ['code'=>0,'message'=>'出错了1'];
                    break;
            }
            return $result;
        }catch(\Exception $e){

        }

    }
}