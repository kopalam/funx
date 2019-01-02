<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabGameSet
 * 
 * @property int $id
 * @property int $game_id
 * @property string $login_notify_url
 * @property string $pay_notify_url
 * @property string $game_role_url
 * @property string $game_gift_url
 * @property string $game_server_url
 * @property string $game_key
 * @property string $access_key
 * @property string $agent_id
 * @property string $wxlogin_appid
 * @property string $wxlogin_appsecret
 * @property string $partner
 * @property string $key
 * @property string $game_pay_appid
 * @property string $apk_pck_name
 * @property string $apk_pck_sign
 *
 * @package App\Models\bgcc
 */
class TabGameSet extends Model
{
	protected $table = 'tab_game_set';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'game_id' => 'int'
	];

	protected $hidden = [
		'wxlogin_appsecret'
	];

	protected $fillable = [
		'game_id',
		'login_notify_url',
		'pay_notify_url',
		'game_role_url',
		'game_gift_url',
		'game_server_url',
		'game_key',
		'access_key',
		'agent_id',
		'wxlogin_appid',
		'wxlogin_appsecret',
		'partner',
		'key',
		'game_pay_appid',
		'apk_pck_name',
		'apk_pck_sign'
	];
}
