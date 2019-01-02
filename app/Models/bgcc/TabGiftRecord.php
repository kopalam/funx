<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabGiftRecord
 * 
 * @property int $id
 * @property int $game_id
 * @property string $game_name
 * @property int $server_id
 * @property string $server_name
 * @property int $gift_id
 * @property string $gift_name
 * @property int $status
 * @property string $novice
 * @property int $user_id
 * @property string $user_account
 * @property string $user_nickname
 * @property int $create_time
 * @property int $start_time
 * @property int $end_time
 *
 * @package App\Models\bgcc
 */
class TabGiftRecord extends Model
{
	protected $table = 'tab_gift_record';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'server_id' => 'int',
		'gift_id' => 'int',
		'status' => 'int',
		'user_id' => 'int',
		'create_time' => 'int',
		'start_time' => 'int',
		'end_time' => 'int'
	];

	protected $fillable = [
		'game_id',
		'game_name',
		'server_id',
		'server_name',
		'gift_id',
		'gift_name',
		'status',
		'novice',
		'user_id',
		'user_account',
		'user_nickname',
		'create_time',
		'start_time',
		'end_time'
	];
}
