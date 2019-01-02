<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabBalanceEdit
 * 
 * @property int $id
 * @property int $user_id
 * @property string $user_account
 * @property int $game_id
 * @property string $game_name
 * @property float $prev_amount
 * @property float $amount
 * @property int $type
 * @property int $op_id
 * @property string $op_account
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabBalanceEdit extends Model
{
	protected $table = 'tab_balance_edit';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'game_id' => 'int',
		'prev_amount' => 'float',
		'amount' => 'float',
		'type' => 'int',
		'op_id' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'user_id',
		'user_account',
		'game_id',
		'game_name',
		'prev_amount',
		'amount',
		'type',
		'op_id',
		'op_account',
		'create_time'
	];
}
