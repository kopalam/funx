<?php
/**
 * Created by PhpStorm.
 * User: whoami
 * Date: 19-1-22
 * Time: 下午4:49
 */

namespace App\Service\General;
use Illuminate\Support\Facades\Redis;

class UseRedisService
{


    public function set($key , $value, $expire=null)
    {
        if(empty($expire))
            $expire =   7200;

       return  Redis::setex($key,$expire,$value);
    }
    public function del($key)
    {
       return Redis::delete($key);
    }
    public function get($key)
    {
        return Redis::get($key);
    }
    /**
     * 在队列头部插入一个元素
     * @param unknown $key
     * @param unknown $value
     * 返回队列长度
     */
    public function lPush($key,$value)
    {
        return Redis::lPush($key,$value);
    }
    /**
     * 删除并返回队列中的头元素。
     * @param unknown $key
     */
    public function lPop($key)
    {
        return Redis::lPop($key);
    }
    /**
     * 返回队列指定区间的元素
     * @param unknown $key
     * @param unknown $start
     * @param unknown $end
     */
    public function lRange($key,$start,$end)
    {
        return Redis::lrange($key,$start,$end);
    }

    /**
     * 返回队列长度
     * @param unknown $key
     */
    public function lLen($key)
    {
        return Redis::lLen($key);
    }

    /**
     * 在队列尾部插入一个元素
     * @param unknown $key
     * @param unknown $value
     * 返回队列长度
     */
    public function rPush($key,$value)
    {
        return Redis::rPush($key,$value);
    }
}