<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysUserNumber
 * 
 * @property int $id
 * @property int $pretty
 * @property int $status
 * @property int $user_id
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class SysUserNumber extends Model
{
	protected $table = 'sys_user_number';
	public $timestamps = false;

	protected $casts = [
		'pretty' => 'int',
		'status' => 'int',
		'user_id' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'pretty',
		'status',
		'user_id',
		'create_time'
	];
}
