<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabStatistic
 * 
 * @property int $id
 * @property string $year
 * @property string $month
 * @property string $day
 * @property int $game_id
 * @property int $promote_id
 * @property int $register_num
 * @property int $act_user
 * @property string $keep_num
 * @property float $spend
 * @property int $spend_people
 * @property int $new_pop
 * @property string $spend_rate
 * @property string $ARPU
 * @property string $ARPPU
 * @property int $pop_num
 *
 * @package App\Models\bgcc
 */
class TabStatistic extends Model
{
	protected $table = 'tab_statistics';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'promote_id' => 'int',
		'register_num' => 'int',
		'act_user' => 'int',
		'spend' => 'float',
		'spend_people' => 'int',
		'new_pop' => 'int',
		'pop_num' => 'int'
	];

	protected $fillable = [
		'year',
		'month',
		'day',
		'game_id',
		'promote_id',
		'register_num',
		'act_user',
		'keep_num',
		'spend',
		'spend_people',
		'new_pop',
		'spend_rate',
		'ARPU',
		'ARPPU',
		'pop_num'
	];
}
