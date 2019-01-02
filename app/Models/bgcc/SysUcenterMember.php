<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysUcenterMember
 * 
 * @property int $id
 * @property string $username
 * @property string $second_pwd
 * @property string $password
 * @property string $email
 * @property string $mobile
 * @property int $reg_time
 * @property int $reg_ip
 * @property int $last_login_time
 * @property string $last_login_ip
 * @property int $update_time
 * @property int $status
 * @property string $admin_openid
 * @property int $openid_sign
 *
 * @package App\Models\bgcc
 */
class SysUcenterMember extends Model
{
	protected $table = 'sys_ucenter_member';
	public $timestamps = false;

	protected $casts = [
		'reg_time' => 'int',
		'reg_ip' => 'int',
		'last_login_time' => 'int',
		'update_time' => 'int',
		'status' => 'int',
		'openid_sign' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'second_pwd',
		'password',
		'email',
		'mobile',
		'reg_time',
		'reg_ip',
		'last_login_time',
		'last_login_ip',
		'update_time',
		'status',
		'admin_openid',
		'openid_sign'
	];
}
