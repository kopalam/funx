<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabUserLoginRecord
 * 
 * @property int $id
 * @property int $game_id
 * @property string $game_name
 * @property int $server_id
 * @property string $game_player_name
 * @property string $server_name
 * @property int $user_id
 * @property string $user_account
 * @property int $promote_id
 * @property string $user_nickname
 * @property int $login_time
 * @property int $down_time
 * @property string $login_ip
 * @property int $type
 * @property int $sdk_version
 * @property int $status
 * @property string $phonesn
 * @property int $phonetype
 *
 * @package App\Models\bgcc
 */
class TabUserLoginRecord extends Model
{
	protected $table = 'tab_user_login_record';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'server_id' => 'int',
		'user_id' => 'int',
		'promote_id' => 'int',
		'login_time' => 'int',
		'down_time' => 'int',
		'type' => 'int',
		'sdk_version' => 'int',
		'status' => 'int',
		'phonetype' => 'int'
	];

	protected $fillable = [
		'game_id',
		'game_name',
		'server_id',
		'game_player_name',
		'server_name',
		'user_id',
		'user_account',
		'promote_id',
		'user_nickname',
		'login_time',
		'down_time',
		'login_ip',
		'type',
		'sdk_version',
		'status',
		'phonesn',
		'phonetype'
	];
}
