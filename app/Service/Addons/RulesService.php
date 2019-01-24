<?php
/**
 * Created by PhpStorm.
 * User: whoami
 * Date: 18-12-25
 * Time: 下午3:47
 */

namespace App\Service\Addons;
use Illuminate\Support\Facades\DB;
use QL\QueryList;
class RulesService
{
    /**
     * 17173采集规则
     * type 1 采集第一页 2 指定页数
     */
    public function rules($pageCount,$type=1)
    {
        $res    =   [];
        if($type == 2 && $pageCount > 1){
            for ($i=1;$i<=$pageCount;$i++){
                $url = 'http://news.17173.com/data/content/list.json?pageSize=10&pageNo='.$i;
                $getRule[$i]   =   $this->rulesString('17173',$url,$type);
                $totalCount    =   $getRule[$i]['totalCount'];
                $titleData[$i]  =   $getRule[$i]['data'];
            }

            foreach ($titleData as $key =>$val){

                foreach ($val as $k=>$v){
                    for ($i=0;$i<count($v);$i++){
                        $res[$i]['title']     =   $v['title'];
                        $res[$i]['img']     =   empty($v['imgPath'])?'default.jpg':ltrim($v['imgPath'],'/');
                        $res[$i]['link']     =   $v['pageUrl'];
                    }
                }
            }
            if(empty($res)){
                $data   =   ['data'=>null];
                return $data;
            }
            $result     =   $this->getGameContent('17173',$res);
            $data   =   ['totalCount'=>$totalCount,'titleCount'=>count($result),'data'=>$result];
            return $result;
        }

        $url    =   'http://news.17173.com';
        $getRule    =   $this->rulesString('17173',$url);
        $imgData    =   $getRule['imgData'];
        $titleData  =   $getRule['titleData'];


        foreach ($titleData as $key =>$val){
            foreach ($imgData as $k =>$v){
                if(empty($v['link']) || empty(strstr($v['link'],'com')))
                    unset($imgData[$k]);
                if($val['link'] == $v['link']){
                    $res[$key]['title'] =   $val['title'];
                    $res[$key]['img']   =   ltrim($v['img'],'/');
                    $res[$key]['link']   =  $v['link'];
                }
            }
        }
        $result     =   $this->getGameContent('17173',$res);
        if(empty($res)){
            $data   =   ['data'=>null];
            return $data;
        }
//            print_r($result);
        $return     =   $this->cleanData($result['data'],$url,'17173','17173');
//        $data   =   ['titleCount'=>count($result),'data'=>$result];
        return $return;
    }

    /**
     * @param $type  1 首页 2 页数
     * 获取九游新闻列表内容
     */
    public function nineGameRules($page,$type=1)
    {

        $url    =   'http://www.9game.cn/news/0_1';
        $getRule   =   $this->rulesString('9you',$url,$type);
        $content    =   $this->getGameContent('9you',$getRule,$type);
        $return     =   $this->cleanData($content,$url,'九游','9you');
        return $return;
    }

    public function returnContent($name,$type,$prefix,$author)
    {

        $url    =   $prefix;
        $getRule    =   $this->rulesString($name,$url,$type);
        $content    =   $this->getGameContent($name,$getRule,$prefix);
        if($name=='uuu9'){//特殊处理数组
            $return     =   $this->cleanData($content[0],$url,$author,$name);
        }else{
            $return     =   $this->cleanData($content,$url,$author,$name);
        }

        return $return;
    }


    public function rulesString($name,$url,$type=1)
    {
        $result =   [];
        switch ($name){
            case '17173':
                if($type == 2){
                    $ql = QueryList::get($url);
                    $title  =   $ql->getHtml();
                    $result  =   json_decode(json_decode(json_encode($title)),true);
                    return $result;
                }

                $titleRules = [
                    'title' =>['h2','text'],
                    'link' =>['a','href']
                ];
                $range  =   '.text';

                $titleData = QueryList::get($url)->rules($titleRules)->range($range)->queryData();

                $imgRules = [
                    'img'=>['img','src'],
                    'link'=>['a','href']
                ];
                $imgRang='.pic';
                $imgData = QueryList::get($url)->rules($imgRules)->range($imgRang)->queryData();
                $result     =   ['titleData'=>$titleData,'imgData'=>$imgData];
                return $result;
                break;
            case '9you':
                $stringUrl    =   'http://www.9game.cn';
                $titleRules     =   [
                    'title'=>['h2','text'],
                    'link'=>['a','href'],
                    'dates'=>['.time','text']
                ];
                $titleRange     =   '.title';
                $titleData = QueryList::get($url)->rules($titleRules)->range($titleRange)->queryData();
                foreach ($titleData as $key =>$val){
                    $result[$key]['title'] =  $val['title'];
                    $result[$key]['link'] =   $stringUrl.$val['link'];
                    $result[$key]['dates'] =  strtotime(preg_replace('/([\x80-\xff]*)/i','',$val['dates']));
                }
                return $result;
                break;
            case 'uuu9':
                if($url == 'news'){//采集新闻页面
                    $getUrl    =   'http://news.uuu9.com/api/GetNewsArticleList.ashx?cid=383,1414,1409,1410,1411,1412&p=100';
                    $data   =  json_decode(file_get_contents($getUrl),true);
                    foreach($data['result'] as $key=>$val){
                        $result[$key]['title'] =  $val['title'];
                        $result[$key]['link'] =   $val['url'];
                        $result[$key]['img']  =    $val['img'];
                        $result[$key]['md5']    =   md5($val['url']);
                    }
                    return $result;
                }
                if($url=='game'){//采集综合页面
                    $getUrl     =   'http://www.uuu9.com/';
                    $titleRules   =   [
                        'title'=>['h4>a','title'],
                        'link'=>['h4>a','href']
                    ];
                    $titleRange     =   '.newsbox';
                    $titleData = QueryList::get($getUrl)->rules($titleRules)->range($titleRange)->encoding('UTF-8','GB2312')->queryData();
                    foreach($titleData as $key=>$val){
                        $result[$key]['title'] =  $val['title'];
                        $result[$key]['link'] =   $val['link'];
                        $result[$key]['md5']    =   md5($val['link']);
                    }
                    return $result;
                }
                break;
            case 'chinaGame':
                $url    =   'https://game.china.com/news/jx/';
                $titleRules   =   [
                    'title'=>['.detail>a','text'],
                    'link'=>['.detail>a','href']
                ];
                $titleRange     =   '.item-phototext';
                $titleData = QueryList::get($url)->rules($titleRules)->range($titleRange)->queryData();
                return $titleData;
                break;
            case 'qqGame':
                $url    =   'https://new.qq.com/ch/games/';
                $titleRules   =   [
                    'title'=>['h3>a','text'],
                    'link'=>['h3>a','href']
                ];
                $titleRange     =   '.list';
                $titleData = QueryList::get($url)->rules($titleRules)->range($titleRange)->queryData();
                print_r($titleData);exit;
                break;
            default :

                break;
        }
        return $result;
    }

    /**
     * @param (GET)
     * @通过网址获取对应文章内容
     */
    public function getGameContent($name,$data,$type = null)
    {
        switch($name){
            case '17173':

                $result     =   [];
                $rules  =   [
                    "title"=>["h1","text"],
                    "dates"=>[".gb-final-date","text"],
                    "content"=>['#mod_article','html']
                ];
                $range  =   '.gb-final-pn-article';

                foreach ($data as $key =>$val)
                {
                    $result[$key]= QueryList::get($val['link'])->rules($rules)->range($range)->query()->getData();
                    $result[$key]   =   json_decode(json_encode($result[$key]),true);
                }

                $count  =   count($result);
                $res   =   ['count'=>$count,'data'=>$result];
                return $res;
                break;
            case '9you':
                $range  =   '.left-con';
                $rules  =   [
                    'title'=>['.text-title h1','text'],
                    'content'=>['.text-con','html'],
                    'dates'=>['.summary','text']
                ];
                //首页内容
                if($type == 1){
                    foreach ($data as $key =>$val){
                        $result[$key] = QueryList::get($val['link'])->rules($rules)->range($range)->query()->getData();
                        $result[$key] = json_decode(json_encode($result[$key]), true);
                    }
                    foreach($result as $k =>$v){
                        if(!$v)
                            unset($result[$k]);
                    }
                }else{
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
                if($type=='news'){
                    //处理网址，link为空的去掉
                    foreach ($data as $k=>$v){
                        if(empty($v['link'])){
                            unset($data[$k]);
                        }
                        if(strstr($v['link'],'bagua')){
                            unset($data[$k]);
                        }
                    }
                }
                $range    =   '.mt30';
                $rules    =   [
                    'title'=>['h1','text'],
                    'dates'=>['.textdetail>h4','text'],
                    'content'=>['#content','html']
                ];
                foreach($data as $key=>$val){
                    $res[$key] = QueryList::get($val['link'])->rules($rules)->range($range)->encoding('UTF-8','GB2312')->query()->getData();
                    $res[$key] = json_decode(json_encode($res[$key]), true);

                }

                foreach ($res as $k=>$v){//去掉空数组
                    foreach ($v as $get=>$da){
                        if(empty($get)){
                            unset($v[$get]);
                        }
                        $result[$get][]=$da;
                    }
                }
                return $result;
                break;
            case 'chinaGame':
                $range  =   '#chan_newsBlk';
                $rules  =   [
                    'title'=>['h1','text'],
                    'content'=>['#chan_newsDetail','html']
                ];
                foreach($data as $key=>$val){
                    $res[$key] = QueryList::get($val['link'])->rules($rules)->range($range)->query()->getData();
                    $res[$key] = json_decode(json_encode($res[$key]), true);
                }
                return $res;
                break;
            default:

                break;
        }
    }

    /**
     * @param $data
     * @param $url
     * @param $author
     * @param $name
     * @return mixed
     * @清洗数据，重新归类
     */

    public function cleanData($data,$url,$author,$name)
    {

        $model  =   new TabHeadlineArticle();
        $return     =   [];

        if($name=='uuu9'){
            foreach ($data as $key=>$datas){
                $return[$key]['article_title'] = $datas['title'];
                $return[$key]['article_content'] = $datas['content'];
                if($name == '9you'){
                    $return[$key]['article_create_time'] = strtotime(preg_replace('/([\x80-\xff]*)/i', '', $datas['dates']));
                }else{
                    $return[$key]['article_create_time'] = time();
                }
                $return[$key]['article_author'] = $author;
                $return[$key]['article_come'] = $url;
                $return[$key]['article_type'] = 3;
                $return[$key]['article_upload_video'] = 0;
                $return[$key]['article_tags'] = 0;
                $return[$key]['status'] = 0;
                $return[$key]['article_cate_id'] = 0;
                $return[$key]['article_cover_image']    =   !empty($datas['article_cover_image']) ?$datas['article_cover_image']:0;
                $return[$key]['md5']    =   md5($datas['title'].$author);
            }
        }else{
            foreach ($data as $key =>$val) {
                foreach ($val as $get => $datas) {
                    $return[$key]['article_title'] = $datas['title'];
                    $return[$key]['article_content'] = $datas['content'];
                    if($name == '9you'){
                        $return[$key]['article_create_time'] = strtotime(preg_replace('/([\x80-\xff]*)/i', '', $datas['dates']));
                    }else{
                        $return[$key]['article_create_time'] = time();
                    }
                    $return[$key]['article_author'] = $author;
                    $return[$key]['article_come'] = $url;
                    $return[$key]['article_type'] = 3;
                    $return[$key]['article_upload_video'] = 0;
                    $return[$key]['article_tags'] = 0;
                    $return[$key]['status'] = 0;
                    $return[$key]['article_cate_id'] = 0;
                    $return[$key]['article_cover_image']    =   !empty($datas['article_cover_image']) ?$datas['article_cover_image']:0;
                    $return[$key]['md5']    =   md5($datas['title'].$author);
                }
            }
        }

        //检查表中是否已经存在相同的标题，如果是，则删除数组中的
    print_r($return);exit;
        $checkData  =   $this->checkTitle($return);
        //TODO::尚未进行入库测试（中华游戏网）
        //TODO::BUG:用标题加密md5，如果修改标题后，将会重新增加一篇相同文章

        //如果数据全部重复，则为false
        if($checkData == false){
            $res =  ['msg'=>'暂时没有新的数据','code'=>0];
            DB::table('tab_headline_article_gather')->truncate();
            //TabHeadlineArticleGather::where(['status','=',0])->update(['status'=>1]);
            return $res;
        }
        //清理重复数据后，直接插入
        if(is_array($checkData)){
            TabHeadlineArticle::insert($checkData);
            $res    =   ['code'=>200,'count'=>count($return),'msg'=>'采集成功'];
            DB::table('tab_headline_article_gather')->truncate();
            return $res;
        }
    }

    /**
     * 检测是否已经存在文章或标题
     * 写入采集表
     * 读取采集表
     * 对比完成，写入article表
     * 删除采集表的内容
     */
    public function checkTitle($data)
    {
        $findSample = [];
        TabHeadlineArticleGather::insert($data);
        //采集的数据先写入gather表
        $gather     =  DB::table('tab_headline_article_gather')->where('status','=',0)->get();
        $gather     =   json_decode($gather,true);

        $article     =   DB::table('tab_headline_article')->where('status',0)->get();
        $article    =   json_decode($article,true);

        //否则应该处理掉重复的标题数组，再返回
        foreach ($article as $k =>$v){
            foreach ($gather as $get=>$datum){
                if($v['md5'] == $datum['md5']){
                    unset($gather[$get]);
                }

            }
        }

        if(empty($gather)){
            return false; //删除后如果为空,则返回false
        }
        return $gather;

    }


}