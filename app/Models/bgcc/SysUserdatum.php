<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysUserdatum
 * 
 * @property int $uid
 * @property int $type
 * @property int $target_id
 *
 * @package App\Models\bgcc
 */
class SysUserdatum extends Model
{
	protected $table = 'sys_userdata';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'uid' => 'int',
		'type' => 'int',
		'target_id' => 'int'
	];
}
