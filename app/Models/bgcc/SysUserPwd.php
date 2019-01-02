<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysUserPwd
 * 
 * @property int $id
 * @property int $uid
 * @property string $account
 * @property string $password
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class SysUserPwd extends Model
{
	protected $table = 'sys_user_pwd';
	public $timestamps = false;

	protected $casts = [
		'uid' => 'int',
		'create_time' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'uid',
		'account',
		'password',
		'create_time'
	];
}
