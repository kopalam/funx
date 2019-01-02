<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysChannel
 * 
 * @property int $id
 * @property int $pid
 * @property string $title
 * @property string $url
 * @property int $sort
 * @property int $create_time
 * @property int $update_time
 * @property int $status
 * @property int $target
 *
 * @package App\Models\bgcc
 */
class SysChannel extends Model
{
	protected $table = 'sys_channel';
	public $timestamps = false;

	protected $casts = [
		'pid' => 'int',
		'sort' => 'int',
		'create_time' => 'int',
		'update_time' => 'int',
		'status' => 'int',
		'target' => 'int'
	];

	protected $fillable = [
		'pid',
		'title',
		'url',
		'sort',
		'create_time',
		'update_time',
		'status',
		'target'
	];
}
