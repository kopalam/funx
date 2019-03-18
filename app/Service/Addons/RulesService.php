<?php
/**
 * Created by PhpStorm.
 * User: whoami
 * Date: 18-12-25
 * Time: 下午3:47
 */

namespace App\Service\Addons;
use App\Models\funx\TabHeadlineArticles;
use App\Models\funx\TabHeadlineGatherRules;
use App\Models\funx\TabHeadlineGatherTypes;
use App\Models\funx\TabTools;
use Illuminate\Support\Facades\DB;
use QL\QueryList;
use GuzzleHttp\Psr7\Response;
class RulesService
{
    private $tabRule;
    private $tabHeadlineArticle;
    private $tabGatherTypes;
    function __construct()
    {
//        $data   =   DB::table('tab_tools')->where('name','oss_storage')->get();
//        $data   =   json_decode($data,true);
//        $config     =   json_decode($data[0]['config'],true);;
//        // 阿里云主账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM账号进行API访问或日常运维，请登录 https://ram.console.aliyun.com 创建RAM账号。
//        $this->accessKeyId = $config['accesskeyid'];
//        $this->accessKeySecret = $config['accesskeysecr'];
//// Endpoint以杭州为例，其它Region请按实际情况填写。
//        $this->endpoint = $config['domain'];
//// 存储空间名称
//        $this->bucket= $config['bucket'];
        $this->tabRule = DB::table('tab_headline_gather_rules');
        $this->tabHeadlineArticle = DB::table('tab_headline_articles');
        $this->tabGatherTypes = DB::table('tab_headline_gather_types');
    }

    /**
     * @param $data
     * @测试是否可采集资讯
     * @param $type 1 测试列表是否可取  2 测试内容是否可取 3 规则入表
     */
    function getRuleTest($data)
    {
        $data['encoding'] = $data['encoding'] == 0 ? false : true;
        switch (intval($data['type'])) {
            case 1 :
                $getList = $this->generalTitleArr($data['url'], $data['range_list'], $data['rule_list'], $data['encoding']);
                $res = $this->checkTitleSameple($getList, $data['author']);
                if (empty($res))
                    return false;
                break;
            case 2 :
                $getList = $this->generalTitleArr($data['url'], $data['range_list'], $data['rule_list'], $data['encoding']);
                $titleData = $this->checkTitleSameple($getList, $data['author']);
                if (empty($titleData))
                    return false;
                if ($this->checkArrEmpty($titleData) == false) { //剔除数据后，如果为空则返回没有数据
                    return false;
                }
                if (strstr($data['handle'], 'qq')) {
                    $titleData = $this->deleteEmptyString($titleData, 'video');
                }
                $content = $this->generalFormatArrContent($data['range_content'], $data['rule_content'], $titleData, $data['encoding'],$data['full_url']);
                if ($content == false) {
                    return ['msg' => '暂时没有新的数据', 'code' => 0];
                }
                $res     =   $this->cleanData($content,$data['name'],$data['author'],$data['handle'],$data['type']);
                break;
            case 3 :
                //如果type = 3,则入表。 表中存在handle则更新，否则写入
                $data['rule_list'] = json_encode($data['rule_list']);
                $data['rule_content'] = json_encode($data['rule_content']);
                unset($data['type']);
                $handleData = $this->tabRule->where('handle',$data['handle'])->get();
                $getData = TabHeadlineGatherRules::firstOrCreate($data);
                $id = strval($getData->id);
                //把分类加入types表中
                $gatherTypes = TabHeadlineGatherTypes::find($data['gather_types']);
                if($gatherTypes) {
                    //是否已经存在该分类，如果是，则不处理，否则加入
                    $findTypes = strstr($gatherTypes->gather_rule_id,$id) !== false ? $gatherTypes->gather_rule_id
                                 :substr_replace($gatherTypes->gather_rule_id,$id.',',0,0); //替换字符串
                    //$this->tabGatherTypes->where('id',$data['gather_types'])->update(['gather_rule_id'=>$findTypes]);
                    $gatherTypes->gather_rule_id = $findTypes;
                    $gatherTypes->save();
                }
                return true;
                break;
            default :
                return false;
                break;
        }
        return $res;
    }

    /**
     * 获取规则列表
     */
    public function getRulesList($page)
    {
        $res = $this->tabRule->where('status', '>=','0')->paginate(15);
        $result = [];
        if (empty($res))
            throw new \Exception('目前还没有数据', 0);
        return $res;
    }

    /**
     * 获取规则编辑内容
     */
    public function getRule($id)
    {
        $res = TabHeadlineGatherRules::where('id', $id)->get()->toArray();
        foreach ( $res as $key => &$val) {
            $types = TabHeadlineGatherTypes::find($val['gather_types']);
            if($types) {
                $val['defaultType'] = ['id'=>$types->id,'name'=>$types->name];
            }

        }
        if (empty($res))
            throw new \Exception('目前还没有数据', 0);
        return $res;
    }

    /**
     * @param $id
     * @param $tab
     * @param $handler
     * 根据handler进行对应的处理
     */
    public static function generalSet($id, $tab, $handler)
    {
        $data = DB::table($tab)->where('id', $id)->get();
        $data = json_decode($data, true);
        if (empty($data))
            return false;
        switch ($handler) {
            case 'delete' :
                $res = DB::table($tab)->where('id', $id)->update(['status' => -1]);
                break;
            case 'disable':
                $state = $data[0]['status'] == 0 ? 1 : 0;
                $res = DB::table($tab)->where('id', $id)->update(['status' => $state]);
                break;
            default:
                $res = 0;
                break;
        }

        return $res;

    }

    /**
     * 获取分类列表
     */
    public function gatherTypelist($simple=false)
    {
        if($simple == true) {
            $typesData = TabHeadlineGatherTypes::where('status','>=','0')->get(['id','name'])->toArray();
//            $typesData = json_decode(json_encode($typesData),true);
            return $typesData;
        }
        $typesData = TabHeadlineGatherTypes::where('status','>=','0')->get();
        $typesData = json_decode(json_encode($typesData),true);
        $res = [];
        foreach ($typesData as $key =>&$val) {
            //改变数据，有id 1,2,3变成 qqEnt,chianGame
            $rulesName = DB::select("select * from tab_headline_gather_rules where find_in_set(id,'".$val['gather_rule_id']."')");
            if(empty($rulesName)) {
                $val['rules'] = null;
            }else {
                $rulesName =  json_decode(json_encode($rulesName),true);
                foreach ($rulesName as $k =>$v) {
                    $res[] = $v['name'];
                }
                $val['rules'] = implode(',',$res);
            }

        }
        return $typesData;
    }

    /**
     * @param $id
     * 分类创建、编辑
     */
    public function gatherTypeCredit($id=null,$name,$gather_rule_id=null)
    {
        $data = [
            'name'=>$name,
        ];
        if ($id == null) {
           TabHeadlineGatherTypes::insert($data);
        } else {
            //编辑
            $data['gather_rule_id'] = $gather_rule_id;
            $this->tabGatherTypes->where('id',$id)->update($data);
        }
        return true;
    }



    /**
     * 17173采集规则
     * type 1 采集第一页 2 指定页数
     */
    public function rules($pageCount, $type = 1)
    {
        $res = [];
        //一般采集从这里开始 type = 1
        $url = 'http://news.17173.com';
        $getRule = $this->rulesString('17173', $url);
        $ruleData = $getRule['titleData'];
        $handleRules = $this->deleteEmptyString($ruleData);
        $rule = $this->checkTitleSameple($handleRules, 17173);
        $result = $this->getGameContent('17173', $rule);
        $return = $this->cleanData($result['data'], $url, '17173', '17173');
        return $return;
    }

    /**
     * @param $type 1 首页 2 页数
     * 获取九游新闻列表内容
     */
    public function nineGameRules($page, $type = 1)
    {
        $url = 'http://www.9game.cn/news/0_1';
        $getRule = $this->rulesString('9you', $url, $type);
        $rule = $this->checkTitleSameple($getRule);
        $content = $this->getGameContent('9you', $rule, $type);
        $return = $this->cleanData($content, $url, '九游', '9you');
        return $return;
    }

    /**
     * @param $name 对应的网站简称
     * @param $type　类型
     * @param $prefix　
     * @param $author　作者
     * @return mixed
     */
    public function returnContent($name, $type, $prefix, $author)
    {
        $stime = microtime(true);
        $url = $prefix;
        $getRule = $this->rulesString($name, $url, $type);
        $rule = $this->checkTitleSameple($getRule, $author);
        $contentTtime = microtime(true);
        $content = $this->getGameContent($name, $rule, $prefix);
        $contentEndTtime = microtime(true);
        if ($content == false) {
            return ['msg' => '暂时没有新的数据', 'code' => 0];
        }
        if ($name == 'uuu9') {//特殊处理数组
            $return = $this->cleanData($content[0], $url, $author, $name);
        } else {
            $cleanTime = microtime(true);
            $return = $this->cleanData($content, $url, $author, $author);
            $cleanEndTime = microtime(true);
        }
        $etime = microtime(true);
        $return['time'] = round($etime - $stime, 2) . '秒';
        $return['contentTime'] = round($contentEndTtime - $contentTtime, 2) . '秒';
        $return['cleanTime'] = round($cleanEndTime - $cleanTime, 2) . '秒';
        return $return;
    }

    public function rulesString($name, $url, $type = 1)
    {
        $result = [];
        switch ($name) {
            case '17173':

                $titleRules = [
                    'title' => ['h2', 'text'],
                    'link' => ['a', 'href']
                ];
                $range = '.text';

                $titleData = QueryList::get($url)->rules($titleRules)->range($range)->queryData();

                $imgRules = [
                    'img' => ['img', 'src'],
                    'link' => ['a', 'href']
                ];
                $imgRang = '.pic';
                $imgData = $this->generalTitleArr($url, $imgRang, $imgRules, false);//QueryList::get($url)->rules($imgRules)->range($imgRang)->queryData();
                $titleData = ['titleData' => $titleData, 'imgData' => $imgData];
//                return $titleData;
                break;
            case '9you':
                $stringUrl = 'http://www.9game.cn';
                $titleRules = [
                    'title' => ['h2', 'text'],
                    'link' => ['a', 'href'],
                    'dates' => ['.time', 'text']
                ];
                $titleRange = '.title';
                $title = $this->generalTitleArr($url, $titleRange, $titleRules, false);//QueryList::get($url)->rules($titleRules)->range($titleRange)->queryData();
                foreach ($title as $key => $val) {
                    $titleData[$key]['title'] = $val['title'];
                    $titleData[$key]['link'] = $stringUrl . $val['link'];
                    $titleData[$key]['dates'] = strtotime(preg_replace('/([\x80-\xff]*)/i', '', $val['dates']));
                }
//                return $titleData;
                break;
            case 'uuu9':
                if ($url == 'news') {//采集新闻页面
                    $getUrl = 'http://news.uuu9.com/api/GetNewsArticleList.ashx?cid=383,1414,1409,1410,1411,1412&p=100';
                    $data = json_decode(file_get_contents($getUrl), true);
                    foreach ($data['result'] as $key => $val) {
                        $result[$key]['title'] = $val['title'];
                        $result[$key]['link'] = $val['url'];
                        $result[$key]['img'] = $val['img'];
                        $result[$key]['md5'] = md5($val['url']);
                    }
                    return $result;
                }
                if ($url == 'game') {//采集综合页面
                    $getUrl = 'http://www.uuu9.com/';
                    $titleRules = [
                        'title' => ['h4>a', 'title'],
                        'link' => ['h4>a', 'href'],
                    ];
                    $titleRange = '.newsbox';
                    $titleData = $this->generalTitleArr($getUrl, $titleRange, $titleRules, false);//QueryList::get($getUrl)->rules($titleRules)->range($titleRange)->encoding('UTF-8','GB2312')->queryData();
                }

                break;
            case 'chinaGame':
                $url = 'https://game.china.com/news/jx/';
                $titleRules = [
                    'title' => ['.item-text>h3', 'text'],
                    'link' => ['.item-tit>a', 'href']
                ];
                $titleRange = '.item-phototext';
                $titleData = $this->generalTitleArr($url, $titleRange, $titleRules, false);//QueryList::get($url)->rules($titleRules)->range($titleRange)->queryData();
//                return $titleData;
                break;
            case 'qqGame':
                $url = 'https://new.qq.com/ch/games/';
                $titleRules = [
                    'title' => ['h3>a', 'text'],
                    'link' => ['h3>a', 'href']
                ];
                $titleRange = '.detail';
                $titleData = $this->generalTitleArr($url, $titleRange, $titleRules, true);
                $titleData = $this->deleteEmptyString($titleData, 'video');
                //QueryList::get($url)->rules($titleRules)->encoding('UTF-8','GB2312')->range($titleRange)->queryData();
//                return $titleData;
                break;
            case 'chinaDaily':
                $url = 'http://world.chinadaily.com.cn/5bd97038a3101a87ca904233';
                $titleRange = '.busBox1';
                $titleRules = [
                    'title' => ['h3', 'text'],
                    'link' => ['h3>a', 'href']
                ];
                $titleData = $this->generalTitleArr($url, $titleRange, $titleRules, false);//QueryList::get($url)->rules($titleRules)->range($titleRange)->queryData();
//                return $titleData;
                break;
            case 'qqComic':
                $url = 'https://new.qq.com/ch/comic/';
                $titleRange = '.detail';
                $titleRules = [
                    'title' => ['h3>a', 'text'],
                    'link' => ['h3>a', 'href']
                ];
                $titleData = $this->generalTitleArr($url, $titleRange, $titleRules, true);
                $titleData = $this->deleteEmptyString($titleData, 'video');
                //QueryList::get($url)->rules($titleRules)->encoding('UTF-8','GB2312')->range($titleRange)->queryData();
//                return $titleData;
                break;
            case 'ifeng':
                $url = 'http://esports.ifeng.com/';
                $titleRange = '.item';
                $titleRules = [
                    'title' => ['h3>a', 'text'],
                    'link' => ['h3>a', 'href']
                ];
                $setData = $this->generalTitleArr($url, $titleRange, $titleRules, false);
                foreach ($setData as $k => $v) {

                    if (empty($v['link'])) {
                        unset($setData[$k]);
                    }
                }
                $titleData = array_slice($setData, 0, 20); //只现实20条数据
                break;
            case 'vgtime':
                $url = 'https://www.vgtime.com/topic/index/load.jhtml?page=1&pageSize=15';
//                $titleData  =   json_decode(file_get_contents($url),true);
                $titleRange = '.news';
                $titleRules = [
                    'title' => ['h2', 'text'],
                    'link' => ['a', 'href']
                ];
                $res = $this->generalTitleArr($url, $titleRange, $titleRules);
                foreach ($res as $k => $v) {
                    $titleData[$k]['link'] = 'https://www.vgtime.com' . $v['link'];
                    $titleData[$k]['title'] = $v['title'];
                }
                break;
            case '163':
                $url = 'http://play.163.com/column/';
                $titleRange = '.item';
                $titleRules = [
                    'title' => ['a', 'text'],
                    'link' => ['a', 'href']
                ];
                $res = $this->generalTitleArr($url, $titleRange, $titleRules, true);
                foreach ($res as $k => $v) {
                    $titleData[$k]['title'] = str_replace("\r\n\t", "", preg_replace("/\\d+/", '', $v['title']));
                    $titleData[$k]['link'] = $v['link'];
                }
                break;
            case 'qqEnt':
                $url = 'https://new.qq.com/ch/ent/';
                $titleRange = '.detail';
                $titleRules = [
                    'title' => ['h3', 'text'],
                    'link' => ['h3>a', 'href']
                ];
                $titleData = $this->generalTitleArr($url, $titleRange, $titleRules, true);
                $titleData = $this->deleteEmptyString($titleData, 'video');
                break;
            case 'qianzhan':
                $url = 'https://t.qianzhan.com/';
                $titleRange = '.ptb20';
                $titleRules = [
                    'title' => ['.f22>a', 'text'],
                    'link' => ['.l>a', 'href']
                ];
                $res = $this->generalTitleArr($url, $titleRange, $titleRules);
                //拼接网址
                foreach ($res as $k => $v) {
                    $titleData[$k]['title'] = $v['title'];
                    $titleData[$k]['link'] = strstr($v['link'], 'http') == true ? $v['link'] : 'https://' . ltrim($v['link'], '\//'); //17173,qqGame，需要拼接网址
                }
                break;
            case 'qqTeach':
                $url = 'https://new.qq.com/ch/tech/';
                $titleRange = '.detail';
                $titleRules = [
                    'title' => ['h3>a', 'text'],
                    'link' => ['h3>a', 'href']
                ];
                $titleData = $this->generalTitleArr($url, $titleRange, $titleRules, true);
                $titleData = $this->deleteEmptyString($titleData, 'video');

                //QueryList::get($url)->rules($titleRules)->encoding('UTF-8','GB2312')->range($titleRange)->queryData();
//                return $titleData;
                break;
            case 'qqFinance':
                $url = 'https://new.qq.com/ch/finance/';
                $titleRange = '.detail';
                $titleRules = [
                    'title' => ['h3>a', 'text'],
                    'link' => ['h3>a', 'href']
                ];
                $titleData = $this->generalTitleArr($url, $titleRange, $titleRules, true);
                $titleData = $this->deleteEmptyString($titleData, 'video');

                break;
            case 'qqFashion':
                $url = 'https://new.qq.com/ch/fashion/';
                $titleRange = '.detail';
                $titleRules = [
                    'title' => ['h3>a', 'text'],
                    'link' => ['h3>a', 'href']
                ];
                $titleData = $this->generalTitleArr($url, $titleRange, $titleRules, true);
                $titleData = $this->deleteEmptyString($titleData, 'video');

                break;
            case 'qqAuto':
                $url = 'https://new.qq.com/ch/auto/';
                $titleRange = '.detail';
                $titleRules = [
                    'title' => ['h3>a', 'text'],
                    'link' => ['h3>a', 'href']
                ];
                $titleData = $this->generalTitleArr($url, $titleRange, $titleRules, true);
                $titleData = $this->deleteEmptyString($titleData, 'video');

                break;
            case 'qqPhoto':
                $url = 'https://new.qq.com/ch/photo/';
                $titleRange = '.item-pics';
                $titleRules = [
                    'title' => ['h3>a', 'text'],
                    'link' => ['h3>a', 'href']
                ];
                $titleData = $this->generalTitleArr($url, $titleRange, $titleRules, true);
                $titleData = $this->deleteEmptyString($titleData, 'video');

                break;
            case 'qqMilite':
                $url = 'https://new.qq.com/ch/milite/';
                $titleRange = '.item-pics';
                $titleRules = [
                    'title' => ['h3>a', 'text'],
                    'link' => ['h3>a', 'href']
                ];
                $titleData = $this->generalTitleArr($url, $titleRange, $titleRules, true);
                $titleData = $this->deleteEmptyString($titleData, 'video');
                break;
            case 'bilibili':
                $url = 'https://www.bilibili.com/read/douga?from=articleDetail';
                $titleRange = '.article-left-block';
                $titleRules = [
                    'title' => ['a', 'text'],
                    'link' => ['a', 'href']
                ];
                $titleData = $this->generalTitleArr($url, $titleRange, $titleRules, true);
                break;
            default :

                break;
        }
        return $titleData;
    }

    /**
     * @param (GET)
     * @通过网址获取对应文章内容
     */
    public function getGameContent($name, $data, $type = null)
    {
        switch ($name) {
            case '17173':

                $result = [];
                $rules = [
                    "title" => ["h1", "text"],
                    "dates" => [".gb-final-date", "text"],
                    "content" => ['#mod_article', 'html']
                ];
                $range = '.gb-final-pn-article';
                $result = $this->generalFormatArrContent($range, $rules, $data, false);
                $count = count($result);
                $res = ['count' => $count, 'data' => $result];
//                return $res;
                break;
            case '9you':
                $range = '.left-con';
                $rules = [
                    'title' => ['.text-title h1', 'text'],
                    'content' => ['.text-con', 'html'],
                    'dates' => ['.summary', 'text']
                ];
                //首页内容
                if ($type == 1) {
                    foreach ($data as $key => $val) {
                        $result[$key] = QueryList::get($val['link'])->rules($rules)->range($range)->query()->getData();
                        $result[$key] = json_decode(json_encode($result[$key]), true);
                    }
                    foreach ($result as $k => $v) {
                        if (!$v)
                            unset($result[$k]);
                    }
                } else {
                    //多页内容
                    foreach ($data as $key => $val) {
                        foreach ($val as $k => $v) {
                            $result[$k] = QueryList::get($v['link'])->rules($rules)->range($range)->query()->getData();
                            $result[$k] = json_decode(json_encode($result[$k]), true);
                        }
                    }
                }

                return $result;
                break;
            case 'uuu9':
                if ($type == 'news') {
                    //处理网址，link为空的去掉
                    foreach ($data as $k => $v) {
                        if (empty($v['link'])) {
                            unset($data[$k]);
                        }
                        if (strstr($v['link'], 'bagua')) {
                            unset($data[$k]);
                        }
                    }
                }
                $range = '.mt30';
                $rules = [
                    'title' => ['h1', 'text'],
                    'dates' => ['.textdetail>h4', 'text'],
                    'content' => ['#content', 'html']
                ];
//              foreach($data as $key=>$val){
//                  $res[$key] = QueryList::get($val['link'])->rules($rules)->range($range)->encoding('UTF-8','GB2312')->query()->getData();
//                  $res[$key] = json_decode(json_encode($res[$key]), true);
//              }
                $result = $this->generalFormatArrContent($range, $rules, $data, true);
                if (empty($result))
                    return false;
                foreach ($result as $k => $v) {//去掉空数组
                    foreach ($v as $get => $da) {
                        if (empty($get)) {
                            unset($v[$get]);
                        }
                        $res[$get][] = $da;
                    }
                }
                if ($this->checkArrEmpty($res) == false) { //剔除数据后，如果为空则返回没有数据
                    return false;
                }
                return $res;
                break;
            case 'chinaGame':
                $range = '#chan_newsBlk';
                $rules = [
                    'title' => ['h1', 'text'],
                    'content' => ['#chan_newsDetail', 'html']
                ];
                $res = $this->generalFormatArrContent($range, $rules, $data, false);
//                return $res;
                break;
            case 'qqGame':
                $range = '.LEFT';
                $rules = [
                    'title' => ['h1', 'text'],
                    'content' => ['.content-article', 'html']
                ];
                foreach ($data as $k => $v) {
                    if (empty($v['link'])) {
                        unset($data[$k]);
                    }
                    if (strstr($v['link'], 'video')) {
                        unset($data[$k]);
                    }
                }
                if ($this->checkArrEmpty($data) == false) { //剔除数据后，如果为空则返回没有数据
                    return false;
                }
                $res = $this->generalFormatArrContent($range, $rules, $data, true);
//                return $res;
                break;
            case 'chinaDaily':
                $range = '.dat';
                $rules = [
                    'title' => ['h1', 'text'],
                    'content' => ['#Content', 'html'],
                    'dates' => ['xinf-le', 'text']
                ];

                $res = $this->generalFormatArrContent($range, $rules, $data, false);
//               return $res;
                break;
            case 'qqComic':
                $range = '.LEFT';
                $rules = [
                    'title' => ['h1', 'text'],
                    'content' => ['.content-article', 'html']
                ];
                foreach ($data as $k => $v) {
                    if (empty($v['link'])) {
                        unset($data[$k]);
                    }
                    if (strstr($v['link'], 'video')) {
                        unset($data[$k]);
                    }
                }
                if ($this->checkArrEmpty($data) == false) { //剔除数据后，如果为空则返回没有数据
                    return false;
                }
                $res = $this->generalFormatArrContent($range, $rules, $data, true);
                break;
            case 'ifeng':
                $range = '#artical';
                $rules = [
                    'title' => ['h1', 'text'],
                    'dates' => ['#artical_sth>p', 'text'],
                    'content' => ['#main_content', 'html']
                ];
                if ($this->checkArrEmpty($data) == false) {
                    return false;
                }
                $res = $this->generalFormatArrContent($range, $rules, $data);
                break;
            case 'vgtime':
                $range = '.main_cent';
                $rules = [
                    'title' => ['h1', 'text'],
                    'content' => ['.topicContent', 'html'],
                    'dates' => ['.time_box', 'text']
                ];
                if ($this->checkArrEmpty($data) == false)
                    return false;
                $res = $this->generalFormatArrContent($range, $rules, $data);
                break;
            case '163':
                $range = '.g-wrap';
                $rules = [
                    'title' => ['.g-w1200>h1', 'text'],
                    'content' => ['.end-text', 'html'],
                ];
                if ($this->checkArrEmpty($data) == false)
                    return false;
                $res = $this->generalFormatArrContent($range, $rules, $data, true);
                break;
            case 'qqEnt':
                $range = '.LEFT';
                $rules = [
                    'title' => ['h1', 'text'],
                    'content' => ['.content-article', 'html']
                ];
                if ($this->checkArrEmpty($data) == false)
                    return false;
                $res = $this->generalFormatArrContent($range, $rules, $data, true);
                break;
            case 'qianzhan':
                $range = '.w1200';
                $rules = [
                    'title' => ['h1', 'text'],
                    'content' => ['.art', 'html']
                ];
                if ($this->checkArrEmpty($data) == false)
                    return false;
                $res = $this->generalFormatArrContent($range, $rules, $data);
                break;
            case 'qqTeach':
                $range = '.LEFT';
                $rules = [
                    'title' => ['h1', 'text'],
                    'content' => ['.content-article', 'html']
                ];
                foreach ($data as $k => $v) {
                    if (empty($v['link'])) {
                        unset($data[$k]);
                    }
                    if (strstr($v['link'], 'video')) {
                        unset($data[$k]);
                    }
                }
                if ($this->checkArrEmpty($data) == false) { //剔除数据后，如果为空则返回没有数据
                    return false;
                }
                $res = $this->generalFormatArrContent($range, $rules, $data, true);
                break;
            case 'qqFinance':
                $range = '.LEFT';
                $rules = [
                    'title' => ['h1', 'text'],
                    'content' => ['.content-article', 'html']
                ];
                foreach ($data as $k => $v) {
                    if (empty($v['link'])) {
                        unset($data[$k]);
                    }
                    if (strstr($v['link'], 'video')) {
                        unset($data[$k]);
                    }
                }
                if ($this->checkArrEmpty($data) == false) { //剔除数据后，如果为空则返回没有数据
                    return false;
                }
                $res = $this->generalFormatArrContent($range, $rules, $data, true);
                break;
            case 'qqFashion':
                $range = '.LEFT';
                $rules = [
                    'title' => ['h1', 'text'],
                    'content' => ['.content-article', 'html']
                ];
                foreach ($data as $k => $v) {
                    if (empty($v['link'])) {
                        unset($data[$k]);
                    }
                    if (strstr($v['link'], 'video')) {
                        unset($data[$k]);
                    }
                }
                if ($this->checkArrEmpty($data) == false) { //剔除数据后，如果为空则返回没有数据
                    return false;
                }
                $res = $this->generalFormatArrContent($range, $rules, $data, true);
                break;
            case 'qqAuto':
                $range = '.LEFT';
                $rules = [
                    'title' => ['h1', 'text'],
                    'content' => ['.content-article', 'html']
                ];
                foreach ($data as $k => $v) {
                    if (empty($v['link'])) {
                        unset($data[$k]);
                    }
                    if (strstr($v['link'], 'video')) {
                        unset($data[$k]);
                    }
                }
                if ($this->checkArrEmpty($data) == false) { //剔除数据后，如果为空则返回没有数据
                    return false;
                }
                $res = $this->generalFormatArrContent($range, $rules, $data, true);
                break;
            case 'qqPhoto':
                $range = '.LEFT';
                $rules = [
                    'title' => ['h1', 'text'],
                    'content' => ['.content-article', 'html']
                ];
                foreach ($data as $k => $v) {
                    if (empty($v['link'])) {
                        unset($data[$k]);
                    }
                    if (strstr($v['link'], 'video')) {
                        unset($data[$k]);
                    }
                }
                if ($this->checkArrEmpty($data) == false) { //剔除数据后，如果为空则返回没有数据
                    return false;
                }
                $res = $this->generalFormatArrContent($range, $rules, $data, true);
                break;
            case 'qqMilite':
                $range = '.LEFT';
                $rules = [
                    'title' => ['h1', 'text'],
                    'content' => ['.content-article', 'html']
                ];
                foreach ($data as $k => $v) {
                    if (empty($v['link'])) {
                        unset($data[$k]);
                    }
                    if (strstr($v['link'], 'video')) {
                        unset($data[$k]);
                    }
                }
                if ($this->checkArrEmpty($data) == false) { //剔除数据后，如果为空则返回没有数据
                    return false;
                }
                $res = $this->generalFormatArrContent($range, $rules, $data, true);
                break;
            default:

                break;
        }
        return $res;
    }

    /**
     * 检测是否空数组
     * @param $data
     * @return bool
     */
    public function checkArrEmpty($data)
    {
        if (empty($data)) {
            return false;
        }

        return $data;
    }

    /**
     * @param $data
     * 删除空的数组
     */
    public function deleteEmptyString($data, $string = null)
    {
        foreach ($data as $key => $val) {
            if (empty($val['link']) || empty(strstr($val['link'], 'com'))) {
                unset($data[$key]);
            }
        }
        if (!empty($string)) {
            //删除有指定元素的数组
            foreach ($data as $k => $v) {
                if (strstr($v['link'], $string)) {
                    unset($data[$k]);
                }
            }
        }
        return $data;

    }

    /**
     * 获取列表标题与链接
     * @param $range
     * @param $rules
     * @param $data
     * @param bool $encoding
     */
    public function generalTitleArr($url, $range, $rules, $encoding = false)
    {
        if ($encoding == true) {
            $res = QueryList::get($url)->rules($rules)->encoding('UTF-8', 'gb2312')->range($range)->query()->getData();
            if ($res == false)
                $res = QueryList::get($url)->rules($rules)->encoding('UTF-8', 'gb2312')->removeHead()->range($range)->query()->getData();
        } else {
            $res = QueryList::get($url)->rules($rules)->range($range)->query()->getData();
        }
        // 当list超过20的时候,只取20条
        $res = $res->take(20)->all();

        return $res;
    }

    /**
     * @param $range
     * @param $rules规则
     * @param $data array 数据数组
     * @param null $encoding 是否要转字符格式
     */
    public function generalFormatArrContent($range, $rules, $data, $encoding = false,$full_url=null)
    {
        foreach ($data as $key => $val) {
            if(strstr($val['link'], 'http') == false){
                // 判断如何拼接
                $val['link'] = $full_url . $val['link'];
            }
            $url[] = $val['link'];
        }
        if ($encoding == true) {
            $res = [];
            QueryList::rules($rules)
                ->range($range)
                ->multiGet($url)
                // 设置并发数为2
                ->concurrency(5)
                // 设置GuzzleHttp的一些其他选项
                ->withOptions([
                    'timeout' => 60
                ])
                // 设置HTTP Header
                ->withHeaders(['User-Agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X)
                    AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1'])
                // HTTP success回调函数
                ->success(function (QueryList $ql, Response $response, $index) use (&$res) {
                    $data = $ql->encoding('UTF-8', 'GB2312')->queryData();
                    if (!$data)
                        $data = $ql->removeHead()->queryData();
                    $res[] = $data;
                })->send();
        } else {
            $res = [];
            QueryList::rules($rules)
                ->range($range)
                ->multiGet($url)
                // 设置并发数为2
                ->concurrency(5)
                // 设置GuzzleHttp的一些其他选项
                ->withOptions([
                    'timeout' => 60
                ])// 设置HTTP Header
//                ->withHeaders(['User-Agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X)
//                    AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1'])
                // HTTP success回调函数
                ->success(function (QueryList $ql, Response $response, $index) use (&$res) {
                    $data = $ql->queryData();
                    $res[] = $data;
                })->send();
        }


        foreach ($res as $datum => $v) {
            if (empty($v))
                unset($res[$datum]);
        }
        return $res;
    }

    /**
     * @param $data
     * @param $url
     * @param $author
     * @param $name
     * @return mixed
     * @清洗数据，重新归类
     */

    public function cleanData($data, $url, $author, $name,$type=null)
    {

        $return = [];
        if($type == 2)
        {
            foreach ($data as $key =>$val) {
                foreach ($val as $get => $datas) {
                    if(empty($datas['title'])){
                        unset($val[$get]);
                    }
                    $return[$key]['title'] = $datas['title'];
                    $return[$key]['content'] = mb_substr($datas['link'],0,250)."...";//$datas['link'];//
                }
            }
            return $return;
        }
        if ($name == 'uuu9') {
            foreach ($data as $key => $datas) {
                $return[$key]['article_title'] = $datas['title'];
                $return[$key]['article_content'] = $datas['content'];//$this->replaceimg($datas['content']);//$datas['content'];
                $return[$key]['article_create_time'] = time();
                $return[$key]['article_author'] = $author;
                $return[$key]['article_come'] = $url;
                $return[$key]['article_type'] = 1;
                $return[$key]['oss_url'] = 0;
                $return[$key]['article_upload_video'] = 0;
                $return[$key]['article_tags'] = 0;
                $return[$key]['status'] = 0;
                $return[$key]['article_cate_id'] = 0;
                $return[$key]['article_cover_image'] = !empty($datas['article_cover_image']) ? $datas['article_cover_image'] : 0;
                $return[$key]['md5'] = md5($datas['title'] . $author);
            }
        } else {
            foreach ($data as $key => $val) {
                foreach ($val as $get => $datas) {
                    if (empty($datas['title'])) {
                        unset($val[$get]);
                    }
                    if (strstr($datas['content'], 'script') == true) unset($val[$get]);

                    $return[$key]['article_title'] = $datas['title'];
                    $return[$key]['article_content'] = $datas['content'];//$name == '17173' ? $datas['content'] :$this->replaceimg($datas['content']);
                    $return[$key]['article_create_time'] = $name == '9you' ? strtotime(preg_replace('/([\x80-\xff]*)/i', '', $datas['dates'])) : $return[$key]['article_create_time'] = time();
                    $return[$key]['article_author'] = $author;
                    $return[$key]['article_come'] = $author;
                    $return[$key]['article_type'] = 1;
                    $return[$key]['article_upload_video'] = 0;
                    $return[$key]['article_tags'] = 0;
                    $return[$key]['oss_url'] = 0;
                    $return[$key]['status'] = 0;
                    $return[$key]['article_cate_id'] = 0;
                    $return[$key]['article_cover_image'] = !empty($datas['article_cover_image']) ? $datas['article_cover_image'] : 0;
                    $return[$key]['md5'] = md5($datas['title'] . $author);
                }
            }
        }
        //如果数据全部重复，则为false
        if (empty($return)) {
            $res = ['msg' => '暂时没有新的数据', 'code' => 0];
            return $res;
        }
        //清理重复数据后，直接插入
        if (is_array($return)) {
            TabHeadlineArticle::insert($return);
            $res = ['code' => 200, 'count' => count($return), 'msg' => '采集成功'];
            dispatch(new PhotoJob($return));
            return $res;
        }
    }

    /**
     * $data 获取到标题后，对比数据库是否存在
     *
     */
    public function checkTitleSameple($data, $author = null)
    {
        if ($author !== null) {
            $article = $this->tabHeadlineArticle->where('article_author', $author)->get(['article_title']);
            $article = json_decode($article, true);
        } else {
            $article = $this->tabHeadlineArticle->where('status', '>=', 0)->get(['article_title']);
            $article = json_decode($article, true);
        }

        foreach ($article as $key => $val) {
            foreach ($data as $k => $v) {
                if ($val['article_title'] == $v['title']) {
                    unset($data[$k]);
                }
                if (empty($v['title']) || strpos($v['link'], 'http') === false) {
                    unset($data[$k]);
                }
            }
        }
        return $data;
    }

    /**
     * 获取替换文章中的图片路径
     * @param string $xstr 内容
     * @param string $keyword 创建照片的文件名
     * @param string $oriweb 网址
     * @return string
     *
     */
    public function replaceimg($xstr)
    {

        //保存路径
        $d = date('Y-m-d', time());
        $dirslsitss = TP::root_path() . '/Uploads/Picture' . '/' . $d;//分类是否存在
        $savePath = '/Uploads/Headline' . '/' . $d; //入库路径
        if (!is_dir($dirslsitss)) {
            @mkdir($dirslsitss, 0777);
        }
        //匹配图片的src
        preg_match_all('#<img.*?src="([^"]*)"[^>]*>#i', $xstr, $match);
        foreach ($match[1] as $imgurl) {
            if (is_int(strpos($imgurl, 'http'))) {
                $arcurl = $imgurl;
            } else {
                $arcurl = 'http://' . ltrim($imgurl, '\//'); //17173,qqGame，需要拼接网址
            }
            $file = @file_get_contents($arcurl);
            $imgAttr = get_headers($arcurl, true);
            switch ($imgAttr['Content-Type']) {
                case 'image/png' :
                    $ext = 'png';
                    break;
                case 'image/jpeg' :
                    $ext = 'jpg';
                    break;
                case 'image/gif' :
                    $ext = 'gif';
                    break;
                default:
                    $ext = 'jpg';
            }
            if ($arcurl) {
                //保存图片到服务器
                $fileimgname = time() . rand(1000, 9999) . '.' . $ext;
                $filecachs = $dirslsitss . '/' . $fileimgname;
                $oss_file_path = "icon/" . $fileimgname;
                $fanhuistr = file_put_contents($filecachs, $file);
                $saveimgfile = $savePath . "/" . $fileimgname;
                $ossClient = new OssClient($this->accessKeyId, $this->accessKeySecret, $this->endpoint);//上传到oss中
                $ossClient->uploadFile($this->bucket, $oss_file_path, $filecachs);
                $to = "http://" . $this->bucket . "." . $this->endpoint . "/icon/" . $fileimgname;
                $xstr = str_replace($imgurl, $to, $xstr);
            } else {
                $xstr = false;
            }
        }

        return $xstr;
    }
}