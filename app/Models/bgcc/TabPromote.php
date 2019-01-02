<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabPromote
 * 
 * @property int $id
 * @property string $account
 * @property string $password
 * @property string $second_pwd
 * @property string $nickname
 * @property string $mobile_phone
 * @property string $email
 * @property string $real_name
 * @property string $bank_name
 * @property string $bank_card
 * @property float $money
 * @property float $total_money
 * @property float $balance_coin
 * @property int $promote_type
 * @property int $status
 * @property int $parent_id
 * @property string $parent_name
 * @property int $pay_limit
 * @property int $pay_limit_game
 * @property int $referee_id
 * @property int $set_pay_time
 * @property int $last_login_time
 * @property int $create_time
 * @property int $admin_id
 * @property int $ba_id
 * @property string $mark1
 * @property string $bank_area
 * @property string $account_openin
 * @property string $bank_account
 * @property string $mark2
 * @property string $invite_code
 * @property string $alipay_account
 * @property string $weixin_account
 * @property string $weixin_openid
 * @property int $weixin_openid_sign
 * @property int $box_user_id
 * @property int $withdraw_promote
 *
 * @package App\Models\bgcc
 */
class TabPromote extends Model
{
	protected $table = 'tab_promote';
	public $timestamps = false;

	protected $casts = [
		'money' => 'float',
		'total_money' => 'float',
		'balance_coin' => 'float',
		'promote_type' => 'int',
		'status' => 'int',
		'parent_id' => 'int',
		'pay_limit' => 'int',
		'pay_limit_game' => 'int',
		'referee_id' => 'int',
		'set_pay_time' => 'int',
		'last_login_time' => 'int',
		'create_time' => 'int',
		'admin_id' => 'int',
		'ba_id' => 'int',
		'weixin_openid_sign' => 'int',
		'box_user_id' => 'int',
		'withdraw_promote' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'account',
		'password',
		'second_pwd',
		'nickname',
		'mobile_phone',
		'email',
		'real_name',
		'bank_name',
		'bank_card',
		'money',
		'total_money',
		'balance_coin',
		'promote_type',
		'status',
		'parent_id',
		'parent_name',
		'pay_limit',
		'pay_limit_game',
		'referee_id',
		'set_pay_time',
		'last_login_time',
		'create_time',
		'admin_id',
		'ba_id',
		'mark1',
		'bank_area',
		'account_openin',
		'bank_account',
		'mark2',
		'invite_code',
		'alipay_account',
		'weixin_account',
		'weixin_openid',
		'weixin_openid_sign',
		'box_user_id',
		'withdraw_promote'
	];
}
