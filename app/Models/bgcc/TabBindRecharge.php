<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabBindRecharge
 * 
 * @property int $id
 * @property string $order_number
 * @property string $pay_order_number
 * @property int $game_id
 * @property string $game_appid
 * @property string $game_name
 * @property int $promote_id
 * @property string $promote_account
 * @property int $user_id
 * @property string $user_account
 * @property string $user_nickname
 * @property float $amount
 * @property float $real_amount
 * @property int $pay_status
 * @property int $pay_type
 * @property float $zhekou
 * @property int $pay_way
 * @property int $create_time
 * @property string $recharge_ip
 *
 * @package App\Models\bgcc
 */
class TabBindRecharge extends Model
{
	protected $table = 'tab_bind_recharge';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'promote_id' => 'int',
		'user_id' => 'int',
		'amount' => 'float',
		'real_amount' => 'float',
		'pay_status' => 'int',
		'pay_type' => 'int',
		'zhekou' => 'float',
		'pay_way' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'order_number',
		'pay_order_number',
		'game_id',
		'game_appid',
		'game_name',
		'promote_id',
		'promote_account',
		'user_id',
		'user_account',
		'user_nickname',
		'amount',
		'real_amount',
		'pay_status',
		'pay_type',
		'zhekou',
		'pay_way',
		'create_time',
		'recharge_ip'
	];
}
