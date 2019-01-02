<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabProvideUser
 * 
 * @property int $id
 * @property string $order_number
 * @property string $pay_order_number
 * @property string $transactionId
 * @property int $user_id
 * @property string $user_account
 * @property float $amount
 * @property int $status
 * @property int $op_id
 * @property string $op_account
 * @property int $create_time
 * @property int $pay_uid
 * @property string $pay_address
 * @property string $user_address
 * @property string $pay_publickey
 * @property string $pay_secret
 * @property string $remark
 *
 * @package App\Models\bgcc
 */
class TabProvideUser extends Model
{
	protected $table = 'tab_provide_user';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'amount' => 'float',
		'status' => 'int',
		'op_id' => 'int',
		'create_time' => 'int',
		'pay_uid' => 'int'
	];

	protected $hidden = [
		'pay_secret'
	];

	protected $fillable = [
		'order_number',
		'pay_order_number',
		'transactionId',
		'user_id',
		'user_account',
		'amount',
		'status',
		'op_id',
		'op_account',
		'create_time',
		'pay_uid',
		'pay_address',
		'user_address',
		'pay_publickey',
		'pay_secret',
		'remark'
	];
}
