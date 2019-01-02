<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabBindSpend
 * 
 * @property int $id
 * @property int $user_id
 * @property string $user_account
 * @property string $user_nickname
 * @property int $game_id
 * @property string $game_appid
 * @property string $game_name
 * @property string $order_number
 * @property string $pay_order_number
 * @property string $props_name
 * @property float $pay_amount
 * @property string $extend
 * @property int $pay_time
 * @property int $pay_status
 * @property int $pay_game_status
 * @property int $pay_way
 * @property int $pay_source
 * @property string $spend_ip
 * @property string $promote_account
 * @property int $promote_id
 * @property int $sdk_version
 * @property int $server_id
 * @property string $server_name
 * @property int $game_player_id
 * @property string $game_player_name
 * @property float $cost
 * @property int $discount_type
 * @property int $auto_compensation
 *
 * @package App\Models\bgcc
 */
class TabBindSpend extends Model
{
	protected $table = 'tab_bind_spend';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'game_id' => 'int',
		'pay_amount' => 'float',
		'pay_time' => 'int',
		'pay_status' => 'int',
		'pay_game_status' => 'int',
		'pay_way' => 'int',
		'pay_source' => 'int',
		'promote_id' => 'int',
		'sdk_version' => 'int',
		'server_id' => 'int',
		'game_player_id' => 'int',
		'cost' => 'float',
		'discount_type' => 'int',
		'auto_compensation' => 'int'
	];

	protected $fillable = [
		'user_id',
		'user_account',
		'user_nickname',
		'game_id',
		'game_appid',
		'game_name',
		'order_number',
		'pay_order_number',
		'props_name',
		'pay_amount',
		'extend',
		'pay_time',
		'pay_status',
		'pay_game_status',
		'pay_way',
		'pay_source',
		'spend_ip',
		'promote_account',
		'promote_id',
		'sdk_version',
		'server_id',
		'server_name',
		'game_player_id',
		'game_player_name',
		'cost',
		'discount_type',
		'auto_compensation'
	];
}
