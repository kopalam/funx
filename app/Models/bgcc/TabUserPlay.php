<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabUserPlay
 * 
 * @property int $id
 * @property int $user_id
 * @property string $user_account
 * @property string $user_nickname
 * @property int $game_id
 * @property string $game_name
 * @property string $game_appid
 * @property int $server_id
 * @property string $server_name
 * @property int $role_id
 * @property float $bind_balance
 * @property string $role_name
 * @property int $role_level
 * @property int $promote_id
 * @property string $promote_account
 * @property int $sdk_version
 * @property int $play_time
 * @property string $play_ip
 *
 * @package App\Models\bgcc
 */
class TabUserPlay extends Model
{
	protected $table = 'tab_user_play';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'game_id' => 'int',
		'server_id' => 'int',
		'role_id' => 'int',
		'bind_balance' => 'float',
		'role_level' => 'int',
		'promote_id' => 'int',
		'sdk_version' => 'int',
		'play_time' => 'int'
	];

	protected $fillable = [
		'user_id',
		'user_account',
		'user_nickname',
		'game_id',
		'game_name',
		'game_appid',
		'server_id',
		'server_name',
		'role_id',
		'bind_balance',
		'role_name',
		'role_level',
		'promote_id',
		'promote_account',
		'sdk_version',
		'play_time',
		'play_ip'
	];
}
