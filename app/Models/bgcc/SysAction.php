<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysAction
 * 
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $remark
 * @property string $rule
 * @property string $log
 * @property int $type
 * @property int $status
 * @property int $update_time
 * @property int $sort
 *
 * @package App\Models\bgcc
 */
class SysAction extends Model
{
	protected $table = 'sys_action';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'status' => 'int',
		'update_time' => 'int',
		'sort' => 'int'
	];

	protected $fillable = [
		'name',
		'title',
		'remark',
		'rule',
		'log',
		'type',
		'status',
		'update_time',
		'sort'
	];
}
