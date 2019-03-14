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
     * @param Request $request
     * 获取列表
     */
    public function getListRule(REQUEST $request)
    {
        $data['rule_list'] = $request->post('rule');
        $data['range_list'] = $request->post('range');
        $data['encoding'] = $request->post('encoding');
        $data['url'] = $request->post('url');
        $data['full_url'] = $request->post('full_url');
        $data['author'] = $request->post('author');
        $data['type'] = $request->post('type');
        $service = new RulesService();
        $getList = $service->getRuleTest($data);
        $res = ['data'=>$getList,'status'=>200];
        return json_encode($res,true);
    }

    /**
     * @param Request $request
     * @return false|string
     * 测试获取内容
     */
    public function getContentRule(REQUEST $request)
    {
        $data['rule_list'] = $request->post('ruleList');
        $data['range_list'] = $request->post('range');
        $data['name'] = $request->post('name');
        $data['handle'] = $request->post('handle');
        $data['author'] = $request->post('author');
        $data['url'] = $request->post('url');
        $data['full_url'] = $request->post('full_url');
        $data['type'] = $request->post('type');
        $data['encoding'] = $request->post('encoding');
        $data['rule_content'] = $request->post('ruleContentList');
        $data['range_content'] = $request->post('contentRange');
        $data['full_url'] = $request->post('full_url');
        $service = new RulesService();
        $getList = $service->getRuleTest($data);
        $res = ['data'=>$getList,'status'=>200];
        return json_encode($res,true);
    }

    /**
     * @param Request $request
     * 获取已有规则列表
     */
    public function getRule(Request $request)
    {
        $page = $request->post('page');
        $service = new RulesService();
        try {
            $res = $service->getRulesList($page);
            $data = ['message' => 'success', 'status' => 200, 'data' => $res];
        } catch (\Exception $e) {
            $data = ['message' => '目前还没有数据', 'status' => 0];
            return json_encode($data, true);
        }
        return json_encode($data, true);
    }

    /**
     * @param Request $request
     * 获取编辑内容
     */
    public function editRule(Request $request)
    {
        $id = $request->post('id');
        $service = new RulesService();
        try {
            $res = $service->getRule($id);
            $data = ['message' => 'success', 'status' => 200, 'data' => $res];
        } catch (\Exception $e) {
            $data = ['message' => '目前还没有数据', 'status' => 0];
            return json_encode($data, true);
        }
        return json_encode($data, true);
    }
    public function refresh(Request $request)
    {
        $token = new Token();
        $data = $token::createTestToken(100,18923087481);
        echo $data;
    }

    /**
     * @param INT id
     * handler : delete 删除 disable 禁用
     * status 当前的用户状态
     */
    public function ruleSet(Request $request)
    {
        $handler = $request->post('handler');
        $id = $request->post('id');
        $tab = 'tab_headline_gather_rule';
        $service = new RulesService();
        $res = $service::generalSet($id,$tab,$handler);
        $return = ['status'=>$res==1?200:0,'message'=>$res==1 ? 'success' : 'faile'];
        return $return;
    }

}