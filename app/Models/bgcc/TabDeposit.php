<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabDeposit
 * 
 * @property int $id
 * @property string $order_number
 * @property string $pay_order_number
 * @property int $user_id
 * @property string $user_account
 * @property string $user_nickname
 * @property int $promote_id
 * @property string $promote_account
 * @property float $pay_amount
 * @property int $pay_status
 * @property int $pay_way
 * @property int $pay_source
 * @property string $pay_ip
 * @property int $create_time
 * @property int $sdk_version
 * @property string $transactionId
 * @property int $pay_uid
 * @property string $pay_address
 * @property string $user_address
 *
 * @package App\Models\bgcc
 */
class TabDeposit extends Model
{
	protected $table = 'tab_deposit';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'promote_id' => 'int',
		'pay_amount' => 'float',
		'pay_status' => 'int',
		'pay_way' => 'int',
		'pay_source' => 'int',
		'create_time' => 'int',
		'sdk_version' => 'int',
		'pay_uid' => 'int'
	];

	protected $fillable = [
		'order_number',
		'pay_order_number',
		'user_id',
		'user_account',
		'user_nickname',
		'promote_id',
		'promote_account',
		'pay_amount',
		'pay_status',
		'pay_way',
		'pay_source',
		'pay_ip',
		'create_time',
		'sdk_version',
		'transactionId',
		'pay_uid',
		'pay_address',
		'user_address'
	];
}
