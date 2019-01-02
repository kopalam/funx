<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabPromoteWelfare
 * 
 * @property int $id
 * @property string $promote_id
 * @property int $game_id
 * @property string $game_name
 * @property float $game_discount
 * @property float $promote_discount
 * @property float $first_discount
 * @property float $continue_discount
 * @property int $create_time
 * @property int $op_id
 * @property int $promote_status
 * @property int $recharge_status
 * @property int $cont_status
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class TabPromoteWelfare extends Model
{
	protected $table = 'tab_promote_welfare';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'game_discount' => 'float',
		'promote_discount' => 'float',
		'first_discount' => 'float',
		'continue_discount' => 'float',
		'create_time' => 'int',
		'op_id' => 'int',
		'promote_status' => 'int',
		'recharge_status' => 'int',
		'cont_status' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'promote_id',
		'game_id',
		'game_name',
		'game_discount',
		'promote_discount',
		'first_discount',
		'continue_discount',
		'create_time',
		'op_id',
		'promote_status',
		'recharge_status',
		'cont_status',
		'status'
	];
}
