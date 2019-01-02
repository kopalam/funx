<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSonSettlement
 * 
 * @property int $id
 * @property string $settlement_number
 * @property int $settlement_start_time
 * @property int $settlement_end_time
 * @property int $game_id
 * @property string $game_name
 * @property int $promote_id
 * @property string $promote_account
 * @property int $pattern
 * @property int $bind_coin_status
 * @property float $sum_money
 * @property int $reg_number
 * @property float $ratio
 * @property float $money
 * @property float $jie_money
 * @property int $status
 * @property int $ti_status
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabSonSettlement extends Model
{
	protected $table = 'tab_son_settlement';
	public $timestamps = false;

	protected $casts = [
		'settlement_start_time' => 'int',
		'settlement_end_time' => 'int',
		'game_id' => 'int',
		'promote_id' => 'int',
		'pattern' => 'int',
		'bind_coin_status' => 'int',
		'sum_money' => 'float',
		'reg_number' => 'int',
		'ratio' => 'float',
		'money' => 'float',
		'jie_money' => 'float',
		'status' => 'int',
		'ti_status' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'settlement_number',
		'settlement_start_time',
		'settlement_end_time',
		'game_id',
		'game_name',
		'promote_id',
		'promote_account',
		'pattern',
		'bind_coin_status',
		'sum_money',
		'reg_number',
		'ratio',
		'money',
		'jie_money',
		'status',
		'ti_status',
		'create_time'
	];
}
