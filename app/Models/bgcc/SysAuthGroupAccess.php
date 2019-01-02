<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysAuthGroupAccess
 * 
 * @property int $uid
 * @property int $group_id
 * @property int $houtai
 *
 * @package App\Models\bgcc
 */
class SysAuthGroupAccess extends Model
{
	protected $table = 'sys_auth_group_access';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'uid' => 'int',
		'group_id' => 'int',
		'houtai' => 'int'
	];

	protected $fillable = [
		'houtai'
	];
}
