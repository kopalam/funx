<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabDeveloper
 * 
 * @property int $id
 * @property string $account
 * @property string $password
 * @property int $nature
 * @property string $mobile_phone
 * @property string $email
 * @property string $real_name
 * @property string $qq
 * @property string $identity
 * @property string $link_man
 * @property string $corporate_name
 * @property string $address
 * @property int $status
 * @property int $create_time
 * @property string $mark1
 * @property string $mark2
 * @property string $nickname
 * @property int $prove_img
 * @property int $operate_time
 * @property int $last_login_time
 * @property string $refuse_reason
 *
 * @package App\Models\bgcc
 */
class TabDeveloper extends Model
{
	protected $table = 'tab_developers';
	public $timestamps = false;

	protected $casts = [
		'nature' => 'int',
		'status' => 'int',
		'create_time' => 'int',
		'prove_img' => 'int',
		'operate_time' => 'int',
		'last_login_time' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'account',
		'password',
		'nature',
		'mobile_phone',
		'email',
		'real_name',
		'qq',
		'identity',
		'link_man',
		'corporate_name',
		'address',
		'status',
		'create_time',
		'mark1',
		'mark2',
		'nickname',
		'prove_img',
		'operate_time',
		'last_login_time',
		'refuse_reason'
	];
}
