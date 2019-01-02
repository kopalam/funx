<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysUcenterApp
 * 
 * @property int $id
 * @property string $title
 * @property string $url
 * @property string $ip
 * @property string $auth_key
 * @property bool $sys_login
 * @property string $allow_ip
 * @property int $create_time
 * @property int $update_time
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class SysUcenterApp extends Model
{
	protected $table = 'sys_ucenter_app';
	public $timestamps = false;

	protected $casts = [
		'sys_login' => 'bool',
		'create_time' => 'int',
		'update_time' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'title',
		'url',
		'ip',
		'auth_key',
		'sys_login',
		'allow_ip',
		'create_time',
		'update_time',
		'status'
	];
}
