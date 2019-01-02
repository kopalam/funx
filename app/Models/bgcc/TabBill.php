<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabBill
 * 
 * @property int $id
 * @property string $bill_number
 * @property string $bill_time
 * @property int $promote_id
 * @property string $promote_account
 * @property int $game_id
 * @property string $game_name
 * @property float $total_money
 * @property int $total_number
 * @property int $status
 * @property int $bill_start_time
 * @property int $bill_end_time
 * @property int $create_time
 * @property int $settlement_status
 *
 * @package App\Models\bgcc
 */
class TabBill extends Model
{
	protected $table = 'tab_bill';
	public $timestamps = false;

	protected $casts = [
		'promote_id' => 'int',
		'game_id' => 'int',
		'total_money' => 'float',
		'total_number' => 'int',
		'status' => 'int',
		'bill_start_time' => 'int',
		'bill_end_time' => 'int',
		'create_time' => 'int',
		'settlement_status' => 'int'
	];

	protected $fillable = [
		'bill_number',
		'bill_time',
		'promote_id',
		'promote_account',
		'game_id',
		'game_name',
		'total_money',
		'total_number',
		'status',
		'bill_start_time',
		'bill_end_time',
		'create_time',
		'settlement_status'
	];
}
