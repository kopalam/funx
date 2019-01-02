<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabDownRecord
 * 
 * @property int $id
 * @property int $user_id
 * @property string $user_account
 * @property int $game_id
 * @property string $game_name
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabDownRecord extends Model
{
	protected $table = 'tab_down_record';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'game_id' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'user_id',
		'user_account',
		'game_id',
		'game_name',
		'create_time'
	];
}
