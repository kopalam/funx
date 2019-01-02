<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabWithdraw
 * 
 * @property int $id
 * @property string $settlement_number
 * @property float $sum_money
 * @property int $developers
 * @property int $promote_id
 * @property string $promote_account
 * @property int $create_time
 * @property int $start_time
 * @property int $end_time
 * @property int $audit_time
 * @property int $status
 * @property int $withdraw_type
 * @property int $withdraw_way
 * @property int $tx_account
 * @property string $widthdraw_number
 * @property string $respond
 *
 * @package App\Models\bgcc
 */
class TabWithdraw extends Model
{
	protected $table = 'tab_withdraw';
	public $timestamps = false;

	protected $casts = [
		'sum_money' => 'float',
		'developers' => 'int',
		'promote_id' => 'int',
		'create_time' => 'int',
		'start_time' => 'int',
		'end_time' => 'int',
		'audit_time' => 'int',
		'status' => 'int',
		'withdraw_type' => 'int',
		'withdraw_way' => 'int',
		'tx_account' => 'int'
	];

	protected $fillable = [
		'settlement_number',
		'sum_money',
		'developers',
		'promote_id',
		'promote_account',
		'create_time',
		'start_time',
		'end_time',
		'audit_time',
		'status',
		'withdraw_type',
		'withdraw_way',
		'tx_account',
		'widthdraw_number',
		'respond'
	];
}
