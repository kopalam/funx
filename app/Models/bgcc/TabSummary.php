<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSummary
 * 
 * @property int $id
 * @property int $promote_id
 * @property string $promote_account
 * @property int $user_id
 * @property string $user_account
 * @property int $game_id
 * @property string $game_name
 * @property int $total_reg
 * @property int $person
 * @property int $total_recharge
 * @property int $create_time
 * @property string $pay_order_number
 *
 * @package App\Models\bgcc
 */
class TabSummary extends Model
{
	protected $table = 'tab_summary';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'promote_id' => 'int',
		'user_id' => 'int',
		'game_id' => 'int',
		'total_reg' => 'int',
		'person' => 'int',
		'total_recharge' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'id',
		'promote_id',
		'promote_account',
		'user_id',
		'user_account',
		'game_id',
		'game_name',
		'total_reg',
		'person',
		'total_recharge',
		'create_time',
		'pay_order_number'
	];
}
