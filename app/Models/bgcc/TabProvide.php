<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabProvide
 * 
 * @property int $id
 * @property string $order_number
 * @property string $pay_order_number
 * @property int $user_id
 * @property string $user_account
 * @property int $cost
 * @property string $user_nickname
 * @property int $game_id
 * @property string $game_name
 * @property int $promote_id
 * @property string $promote_account
 * @property int $server_id
 * @property string $server_name
 * @property float $amount
 * @property string $remark
 * @property int $status
 * @property int $op_id
 * @property string $op_account
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabProvide extends Model
{
	protected $table = 'tab_provide';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'cost' => 'int',
		'game_id' => 'int',
		'promote_id' => 'int',
		'server_id' => 'int',
		'amount' => 'float',
		'status' => 'int',
		'op_id' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'order_number',
		'pay_order_number',
		'user_id',
		'user_account',
		'cost',
		'user_nickname',
		'game_id',
		'game_name',
		'promote_id',
		'promote_account',
		'server_id',
		'server_name',
		'amount',
		'remark',
		'status',
		'op_id',
		'op_account',
		'create_time'
	];
}
