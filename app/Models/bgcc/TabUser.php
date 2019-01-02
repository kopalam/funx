<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabUser
 * 
 * @property int $id
 * @property int $number
 * @property string $account
 * @property string $password
 * @property string $pay_password
 * @property int $promote_id
 * @property string $promote_account
 * @property int $parent_id
 * @property string $parent_name
 * @property int $fgame_id
 * @property string $fgame_name
 * @property string $nickname
 * @property int $sex
 * @property string $email
 * @property string $qq
 * @property string $phone
 * @property string $real_name
 * @property string $idcard
 * @property string $idcard_fingerprint
 * @property string $idcard_display
 * @property string $birthday
 * @property int $prove_img_1
 * @property int $prove_img_2
 * @property int $prove_img_3
 * @property string $idcard_fingerprint_old
 * @property int $vip_level
 * @property float $cumulative
 * @property float $balance
 * @property int $anti_addiction
 * @property int $lock_status
 * @property int $age_status
 * @property int $register_way
 * @property int $register_type
 * @property int $register_time
 * @property int $login_time
 * @property string $register_ip
 * @property string $login_ip
 * @property int $is_check
 * @property int $settle_check
 * @property int $sub_status
 * @property string $token
 * @property string $mobpush_id
 * @property int $otp_time_lag
 * @property string $pkey
 * @property int $otp_status
 * @property string $openid
 * @property string $head_img
 * @property int $point
 * @property string $phonesn
 * @property int $phonetype
 * @property string $bind_invite_code
 *
 * @package App\Models\bgcc
 */
class TabUser extends Model
{
	protected $table = 'tab_user';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'promote_id' => 'int',
		'parent_id' => 'int',
		'fgame_id' => 'int',
		'sex' => 'int',
		'prove_img_1' => 'int',
		'prove_img_2' => 'int',
		'prove_img_3' => 'int',
		'vip_level' => 'int',
		'cumulative' => 'float',
		'balance' => 'float',
		'anti_addiction' => 'int',
		'lock_status' => 'int',
		'age_status' => 'int',
		'register_way' => 'int',
		'register_type' => 'int',
		'register_time' => 'int',
		'login_time' => 'int',
		'is_check' => 'int',
		'settle_check' => 'int',
		'sub_status' => 'int',
		'otp_time_lag' => 'int',
		'otp_status' => 'int',
		'point' => 'int',
		'phonetype' => 'int'
	];

	protected $hidden = [
		'password',
		'pay_password',
		'token'
	];

	protected $fillable = [
		'number',
		'account',
		'password',
		'pay_password',
		'promote_id',
		'promote_account',
		'parent_id',
		'parent_name',
		'fgame_id',
		'fgame_name',
		'nickname',
		'sex',
		'email',
		'qq',
		'phone',
		'real_name',
		'idcard',
		'idcard_fingerprint',
		'idcard_display',
		'birthday',
		'prove_img_1',
		'prove_img_2',
		'prove_img_3',
		'idcard_fingerprint_old',
		'vip_level',
		'cumulative',
		'balance',
		'anti_addiction',
		'lock_status',
		'age_status',
		'register_way',
		'register_type',
		'register_time',
		'login_time',
		'register_ip',
		'login_ip',
		'is_check',
		'settle_check',
		'sub_status',
		'token',
		'mobpush_id',
		'otp_time_lag',
		'pkey',
		'otp_status',
		'openid',
		'head_img',
		'point',
		'phonesn',
		'phonetype',
		'bind_invite_code'
	];
}
