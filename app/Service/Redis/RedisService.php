<?php
/**
 * Created by PhpStorm.
 * User: whoami
 * Date: 18-12-25
 * Time: 下午3:47
 */

namespace App\Service\Redis;

class RedisService
{
    /**
     * 获取一个连接好的 Redis 连接。
     * @param null $logger
     * @return Redis
     * @throws RedisException
     */
    function    __construct($logger = null){
        $this->redis     = new \Redis();
        $host      = '127.0.0.1';
        $port      = 6379;
        if ( ! $this->redis->connect($host, $port) ){
            if ($logger) {
                $logger->error("fail to connect to redis: host=$host:$port");
            }
            throw new \RedisException("fail to connect to redis: $host:$port");
        };
        return $this->redis;
    }

    public function set($key , $value, $expire)
    {
        $this->redis->set($key,$value,$expire);
    }
    public function del($key)
    {
        $this->redis->delete($key);
    }
    public function get($key)
    {
        return $this->redis->get($key);
    }

    /**
     * 在队列头部插入一个元素
     * @param unknown $key
     * @param unknown $value
     * 返回队列长度
     */
    public function lPush($key,$value)
    {
        return $this->redis->lPush($key,$value);
    }

    /**
     * 删除并返回队列中的头元素。
     * @param unknown $key
     */
    public function lPop($key)
    {
        return $this->redis->lPop($key);
    }

    /**
     * 返回队列指定区间的元素
     * @param unknown $key
     * @param unknown $start
     * @param unknown $end
     */
    public function lRange($key,$start,$end)
    {
        return $this->redis->lrange($key,$start,$end);
    }

    /**
     * 返回队列长度
     * @param unknown $key
     */
    public function lLen($key)
    {
        return $this->redis->lLen($key);
    }

    /**
     * 在队列尾部插入一个元素
     * @param unknown $key
     * @param unknown $value
     * 返回队列长度
     */
    public function rPush($key,$value)
    {
        return $this->redis->rPush($key,$value);
    }
}