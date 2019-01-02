<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabRebate
 * 
 * @property int $id
 * @property int $game_id
 * @property string $game_name
 * @property int $money
 * @property float $ratio
 * @property int $status
 * @property int $bind_status
 * @property int $create_time
 * @property int $starttime
 * @property int $endtime
 * @property int $promote_id
 *
 * @package App\Models\bgcc
 */
class TabRebate extends Model
{
	protected $table = 'tab_rebate';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'money' => 'int',
		'ratio' => 'float',
		'status' => 'int',
		'bind_status' => 'int',
		'create_time' => 'int',
		'starttime' => 'int',
		'endtime' => 'int',
		'promote_id' => 'int'
	];

	protected $fillable = [
		'game_id',
		'game_name',
		'money',
		'ratio',
		'status',
		'bind_status',
		'create_time',
		'starttime',
		'endtime',
		'promote_id'
	];
}
