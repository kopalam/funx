<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabDeductBindRecord
 * 
 * @property int $id
 * @property int $user_id
 * @property string $user_account
 * @property int $game_id
 * @property string $game_name
 * @property float $quantity
 * @property int $execute_id
 * @property string $execute_account
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabDeductBindRecord extends Model
{
	protected $table = 'tab_deduct_bind_record';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'game_id' => 'int',
		'quantity' => 'float',
		'execute_id' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'user_id',
		'user_account',
		'game_id',
		'game_name',
		'quantity',
		'execute_id',
		'execute_account',
		'create_time'
	];
}
