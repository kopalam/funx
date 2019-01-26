<?php
/**
 * Created by PhpStorm.
 * User: whoami
 * Date: 19-1-25
 * Time: 下午1:04
 */

namespace App\Service\General;

use App\Models\funx\TabAuthGroupAccess;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

/**
 * Class AuthService
 * @package App\Service\General
 * token验证
 */
class AuthoryService
{
    protected $token;

    public function __construct( $token=null ){
        $this->token = $token;
    }

    public function loggingVerify(){

        if( !$this->token )
           apiDisplay(["status" => 2,"message" => "用户未登录"]);

        $redis = new UseRedisService();
        $user  = $redis->get( $this->token );

        if( !$user )
            apiDisplay(["status" => 2,"message" => "用户未登录"]);
    }

    public function checkToken($uid){
        if( !$this->token )
            apiDisplay(["status" => 2,"message" => "用户未登录"]);

        $redis = new UseRedisService();
        $user  = $redis->get( $this->token );

        if( !$user )
            apiDisplay(["status" => 2,"message" => "用户未登录"]);

        $user = json_decode($user,TRUE);
        if ($user['id'] !== $uid)
            apiDisplay(["status" => 2,"message" => "非法登录"]);
    }

    public function getUid(){
        $redis = new UseRedisService();
        $user  = $redis->get($this->token);
        $user = json_decode($user,TRUE);
        return $user['id'];
    }

}