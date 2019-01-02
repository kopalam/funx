<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysActivity
 * 
 * @property int $id
 * @property string $name
 * @property int $create_time
 * @property int $start_time
 * @property int $end_time
 * @property int $status
 * @property int $reg
 * @property int $realname
 * @property int $invate
 * @property string $describe
 *
 * @package App\Models\bgcc
 */
class SysActivity extends Model
{
	protected $table = 'sys_activity';
	public $timestamps = false;

	protected $casts = [
		'create_time' => 'int',
		'start_time' => 'int',
		'end_time' => 'int',
		'status' => 'int',
		'reg' => 'int',
		'realname' => 'int',
		'invate' => 'int'
	];

	protected $fillable = [
		'name',
		'create_time',
		'start_time',
		'end_time',
		'status',
		'reg',
		'realname',
		'invate',
		'describe'
	];
}
