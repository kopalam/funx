<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Carbon\Carbon;
use Reliese\Database\Eloquent\Model;

/**
 * Class SysMember
 * 
 * @property int $uid
 * @property string $nickname
 * @property int $sex
 * @property Carbon $birthday
 * @property string $qq
 * @property int $score
 * @property int $login
 * @property int $reg_ip
 * @property int $reg_time
 * @property int $last_login_ip
 * @property int $last_login_time
 * @property string $kuaijie_value
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class SysMember extends Model
{
	protected $table = 'sys_member';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'sex' => 'int',
		'score' => 'int',
		'login' => 'int',
		'reg_ip' => 'int',
		'reg_time' => 'int',
		'last_login_ip' => 'int',
		'last_login_time' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'birthday'
	];

	protected $fillable = [
		'nickname',
		'sex',
		'birthday',
		'qq',
		'score',
		'login',
		'reg_ip',
		'reg_time',
		'last_login_ip',
		'last_login_time',
		'kuaijie_value',
		'status'
	];
}
