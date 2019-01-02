<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabDownStat
 * 
 * @property int $id
 * @property int $promote_id
 * @property int $game_id
 * @property int $number
 * @property int $create_time
 * @property int $type
 *
 * @package App\Models\bgcc
 */
class TabDownStat extends Model
{
	protected $table = 'tab_down_stat';
	public $timestamps = false;

	protected $casts = [
		'promote_id' => 'int',
		'game_id' => 'int',
		'number' => 'int',
		'create_time' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'promote_id',
		'game_id',
		'number',
		'create_time',
		'type'
	];
}
