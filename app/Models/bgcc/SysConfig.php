<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysConfig
 * 
 * @property int $id
 * @property string $name
 * @property int $type
 * @property string $title
 * @property int $group
 * @property string $extra
 * @property string $remark
 * @property int $create_time
 * @property int $update_time
 * @property int $status
 * @property string $value
 * @property int $sort
 * @property int $category
 *
 * @package App\Models\bgcc
 */
class SysConfig extends Model
{
	protected $table = 'sys_config';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'group' => 'int',
		'create_time' => 'int',
		'update_time' => 'int',
		'status' => 'int',
		'sort' => 'int',
		'category' => 'int'
	];

	protected $fillable = [
		'name',
		'type',
		'title',
		'group',
		'extra',
		'remark',
		'create_time',
		'update_time',
		'status',
		'value',
		'sort',
		'category'
	];
}
