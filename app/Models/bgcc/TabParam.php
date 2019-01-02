<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabParam
 * 
 * @property int $id
 * @property int $game_id
 * @property string $openid
 * @property string $key
 * @property string $callback
 * @property string $wx_appid
 * @property string $appsecret
 * @property string $appkey
 * @property string $scope
 * @property string $clientid
 * @property int $status
 * @property int $type
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabParam extends Model
{
	protected $table = 'tab_param';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'status' => 'int',
		'type' => 'int',
		'create_time' => 'int'
	];

	protected $hidden = [
		'appsecret'
	];

	protected $fillable = [
		'game_id',
		'openid',
		'key',
		'callback',
		'wx_appid',
		'appsecret',
		'appkey',
		'scope',
		'clientid',
		'status',
		'type',
		'create_time'
	];
}
