<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabTotalSettlement
 * 
 * @property int $id
 * @property int $promote_id
 * @property string $promote_account
 * @property int $developers
 * @property string $settlement_number
 * @property float $total_money
 * @property int $total_number
 * @property float $sum_money
 * @property int $status
 * @property int $bind_coin_status
 * @property int $ti_status
 * @property int $starttime
 * @property int $endtime
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabTotalSettlement extends Model
{
	protected $table = 'tab_total_settlement';
	public $timestamps = false;

	protected $casts = [
		'promote_id' => 'int',
		'developers' => 'int',
		'total_money' => 'float',
		'total_number' => 'int',
		'sum_money' => 'float',
		'status' => 'int',
		'bind_coin_status' => 'int',
		'ti_status' => 'int',
		'starttime' => 'int',
		'endtime' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'promote_id',
		'promote_account',
		'developers',
		'settlement_number',
		'total_money',
		'total_number',
		'sum_money',
		'status',
		'bind_coin_status',
		'ti_status',
		'starttime',
		'endtime',
		'create_time'
	];
}
