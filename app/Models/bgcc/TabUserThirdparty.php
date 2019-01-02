<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabUserThirdparty
 * 
 * @property int $id
 * @property string $phone
 * @property string $type
 * @property string $openid
 * @property string $headimg
 * @property string $nickname
 * @property int $register_time
 * @property int $login_time
 *
 * @package App\Models\bgcc
 */
class TabUserThirdparty extends Model
{
	protected $table = 'tab_user_thirdparty';
	public $timestamps = false;

	protected $casts = [
		'register_time' => 'int',
		'login_time' => 'int'
	];

	protected $fillable = [
		'phone',
		'type',
		'openid',
		'headimg',
		'nickname',
		'register_time',
		'login_time'
	];
}
