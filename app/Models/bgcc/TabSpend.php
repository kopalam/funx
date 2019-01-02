<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSpend
 * 
 * @property int $id
 * @property int $user_id
 * @property string $user_account
 * @property string $user_nickname
 * @property int $game_id
 * @property string $game_appid
 * @property string $game_name
 * @property int $server_id
 * @property string $server_name
 * @property int $game_player_id
 * @property string $game_player_name
 * @property int $promote_id
 * @property string $promote_account
 * @property string $order_number
 * @property string $pay_order_number
 * @property string $props_name
 * @property float $pay_amount
 * @property int $pay_time
 * @property int $pay_status
 * @property int $pay_game_status
 * @property string $extend
 * @property int $pay_way
 * @property string $spend_ip
 * @property int $is_check
 * @property int $settle_check
 * @property int $selle_status
 * @property float $selle_ratio
 * @property int $sub_status
 * @property string $selle_time
 * @property int $sdk_version
 * @property float $cost
 * @property int $discount_type
 * @property string $receipt
 *
 * @package App\Models\bgcc
 */
class TabSpend extends Model
{
	protected $table = 'tab_spend';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'game_id' => 'int',
		'server_id' => 'int',
		'game_player_id' => 'int',
		'promote_id' => 'int',
		'pay_amount' => 'float',
		'pay_time' => 'int',
		'pay_status' => 'int',
		'pay_game_status' => 'int',
		'pay_way' => 'int',
		'is_check' => 'int',
		'settle_check' => 'int',
		'selle_status' => 'int',
		'selle_ratio' => 'float',
		'sub_status' => 'int',
		'sdk_version' => 'int',
		'cost' => 'float',
		'discount_type' => 'int'
	];

	protected $fillable = [
		'user_id',
		'user_account',
		'user_nickname',
		'game_id',
		'game_appid',
		'game_name',
		'server_id',
		'server_name',
		'game_player_id',
		'game_player_name',
		'promote_id',
		'promote_account',
		'order_number',
		'pay_order_number',
		'props_name',
		'pay_amount',
		'pay_time',
		'pay_status',
		'pay_game_status',
		'extend',
		'pay_way',
		'spend_ip',
		'is_check',
		'settle_check',
		'selle_status',
		'selle_ratio',
		'sub_status',
		'selle_time',
		'sdk_version',
		'cost',
		'discount_type',
		'receipt'
	];
}
