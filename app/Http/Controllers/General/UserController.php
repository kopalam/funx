<?php

namespace App\Http\Controllers\General;
use App\Http\Controllers\Controller;
use App\Models\funx\TabUsers;
use App\Service\General\ApiService;
use App\Service\General\AuthService;
use App\Service\General\UseRedisService;
use App\Services\WxSdk\WXLoginHelper;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;

class UserController extends Controller
{

    /**
     * @param Request $request
     * 小程序登陆
     *接收code，获取用户资料
     *'code',
     *'rawData',
     *'signature',
     *'encryptedData',
     *'iv'
     */
    public function miniLogin(REQUEST $request)
    {
        $code = $request->post('code');
        $rawData = $request->post('rawData');
        $signature = $request->post('signature');
        $encryptedData = $request->post('encryptedData');
        $iv = $request->post('iv');
        $cauthIden 	=	$request->post('cauth_iden');//根据appId，传递到微信登录中，查找对应的secrect

        try{
            $getData = new WXLoginHelper();

            $userData = $getData->checkLogin($code, $rawData, $signature, $encryptedData,$iv,$cauthIden);

            if(isset($userData['code']))
                showMsg(200,'success',$userData);
//                showMsg::apiDisplay(  );

            /*检查user表是否存在该用户，如果存在，则返回session，如果不存在，写入表再发回session*/
            $openId = $userData['openId'];
            $unionId = empty($userData['unionId'])?0:$userData['unionId'];
            $paramers 	=	$unionId !== 0 ?  ['conditions' => "unionId = '".$unionId."'"] : ['conditions' => "openId = '".$openId."'"];


            $has_user 	= 	Users::findFirst( $paramers );

            $info 	=	!empty($has_user) ? 1 : 0; //has_user为空，等于0，不为空，等于1；



            switch ($info) {
                case 0:
                    $user = new TabUsers();
                    $user->openId = $userData['openId'];
                    $user->unionId = $userData['unionId'];
                    $user->nickName = preg_replace('/[\x{10000}-\x{10FFFF}]/u','',$userData['nickName']);
                    $user->gender = $userData['gender'];
                    $user->language = $userData['language'];
                    $user->city = $userData['city'];
                    $user->province = $userData['province'];
                    $user->country = $userData['country'];
                    $user->avatarUrl = $userData['avatarUrl'];
                    $user->reg_time = time();
                    $user->save();

                    $data = ['user_id'=>$user->id,'openId'=>$user->openId,'unionId'=>$user->unionId];
                    break;
                case 1:

                    $data = ['user_id'=>$has_user->id,'unionId'=>$has_user->unionId,'openId'=>$has_user->openId,'telephone'=>$has_user->telephone];
                    break;
                default:
                    failMsg('登录出错，错误代码01187');
                    break;
            }



            $data['token']=$userData['session3rd'];


            $redis = new UseRedisService();
            $redis->set($userData['session3rd'],json_encode($userData['sessionKey'].'='.$unionId),259200);//保存3天

            // $data['testRedis'] =  $redis->get($userData['session3rd']);

        }catch(\Exception $e){
            $data['status']  = $e->getCode();
            $data['message'] = $e->getMessage();
          failMsg($data);
        }
        showMsg(200,$data);

    }

    public function test()
    {

        $service    =   new AuthService();
        $cauth  =   $service->check('admin/index/index',6) == false ? 0 : 1;

        return $cauth;
    }
}
