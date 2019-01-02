<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSettlement
 * 
 * @property int $id
 * @property int $starttime
 * @property int $endtime
 * @property int $promote_id
 * @property string $promote_account
 * @property int $game_id
 * @property string $game_name
 * @property int $pattern
 * @property float $ratio
 * @property float $money
 * @property float $total_money
 * @property int $total_number
 * @property float $sum_money
 * @property string $settlement_number
 * @property int $status
 * @property int $bind_coin_status
 * @property int $ti_status
 * @property int $create_time
 * @property int $developers
 *
 * @package App\Models\bgcc
 */
class TabSettlement extends Model
{
	protected $table = 'tab_settlement';
	public $timestamps = false;

	protected $casts = [
		'starttime' => 'int',
		'endtime' => 'int',
		'promote_id' => 'int',
		'game_id' => 'int',
		'pattern' => 'int',
		'ratio' => 'float',
		'money' => 'float',
		'total_money' => 'float',
		'total_number' => 'int',
		'sum_money' => 'float',
		'status' => 'int',
		'bind_coin_status' => 'int',
		'ti_status' => 'int',
		'create_time' => 'int',
		'developers' => 'int'
	];

	protected $fillable = [
		'starttime',
		'endtime',
		'promote_id',
		'promote_account',
		'game_id',
		'game_name',
		'pattern',
		'ratio',
		'money',
		'total_money',
		'total_number',
		'sum_money',
		'settlement_number',
		'status',
		'bind_coin_status',
		'ti_status',
		'create_time',
		'developers'
	];
}
