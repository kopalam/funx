<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabBalance
 * 
 * @property int $id
 * @property string $order_number
 * @property string $pay_order_number
 * @property int $promote_id
 * @property string $promote_account
 * @property int $recharge_id
 * @property string $recharge_account
 * @property float $balance
 * @property float $money
 * @property int $pay_status
 * @property int $recharge_type
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabBalance extends Model
{
	protected $table = 'tab_balance';
	public $timestamps = false;

	protected $casts = [
		'promote_id' => 'int',
		'recharge_id' => 'int',
		'balance' => 'float',
		'money' => 'float',
		'pay_status' => 'int',
		'recharge_type' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'order_number',
		'pay_order_number',
		'promote_id',
		'promote_account',
		'recharge_id',
		'recharge_account',
		'balance',
		'money',
		'pay_status',
		'recharge_type',
		'create_time'
	];
}
