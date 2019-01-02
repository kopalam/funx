<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabRebateList
 * 
 * @property int $id
 * @property string $pay_order_number
 * @property int $game_id
 * @property string $game_name
 * @property int $user_id
 * @property string $user_name
 * @property float $pay_amount
 * @property float $ratio
 * @property float $ratio_amount
 * @property int $promote_id
 * @property string $promote_name
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabRebateList extends Model
{
	protected $table = 'tab_rebate_list';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'user_id' => 'int',
		'pay_amount' => 'float',
		'ratio' => 'float',
		'ratio_amount' => 'float',
		'promote_id' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'pay_order_number',
		'game_id',
		'game_name',
		'user_id',
		'user_name',
		'pay_amount',
		'ratio',
		'ratio_amount',
		'promote_id',
		'promote_name',
		'create_time'
	];
}
