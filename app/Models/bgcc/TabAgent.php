<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabAgent
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
 * @property int $create_time
 * @property int $zhekou
 * @property int $pay_way
 *
 * @package App\Models\bgcc
 */
class TabAgent extends Model
{
	protected $table = 'tab_agent';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'promote_id' => 'int',
		'user_id' => 'int',
		'amount' => 'float',
		'real_amount' => 'float',
		'pay_status' => 'int',
		'pay_type' => 'int',
		'create_time' => 'int',
		'zhekou' => 'int',
		'pay_way' => 'int'
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
		'create_time',
		'zhekou',
		'pay_way'
	];
}
