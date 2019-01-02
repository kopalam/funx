<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabUserPlayInfo
 * 
 * @property int $id
 * @property int $user_id
 * @property string $user_account
 * @property string $user_nickname
 * @property int $game_id
 * @property string $game_name
 * @property int $server_id
 * @property string $server_name
 * @property int $role_id
 * @property string $role_name
 * @property int $role_level
 * @property int $promote_id
 * @property string $promote_account
 * @property int $sdk_version
 * @property int $play_time
 * @property int $down_time
 * @property string $play_ip
 *
 * @package App\Models\bgcc
 */
class TabUserPlayInfo extends Model
{
	protected $table = 'tab_user_play_info';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'game_id' => 'int',
		'server_id' => 'int',
		'role_id' => 'int',
		'role_level' => 'int',
		'promote_id' => 'int',
		'sdk_version' => 'int',
		'play_time' => 'int',
		'down_time' => 'int'
	];

	protected $fillable = [
		'user_id',
		'user_account',
		'user_nickname',
		'game_id',
		'game_name',
		'server_id',
		'server_name',
		'role_id',
		'role_name',
		'role_level',
		'promote_id',
		'promote_account',
		'sdk_version',
		'play_time',
		'down_time',
		'play_ip'
	];
}
