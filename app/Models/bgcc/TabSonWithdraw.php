<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSonWithdraw
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
 * @property int $bind_coin_status
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class TabSonWithdraw extends Model
{
	protected $table = 'tab_son_withdraw';
	public $timestamps = false;

	protected $casts = [
		'sum_money' => 'float',
		'developers' => 'int',
		'promote_id' => 'int',
		'create_time' => 'int',
		'start_time' => 'int',
		'end_time' => 'int',
		'audit_time' => 'int',
		'bind_coin_status' => 'int',
		'status' => 'int'
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
		'bind_coin_status',
		'status'
	];
}
