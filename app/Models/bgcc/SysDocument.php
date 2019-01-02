<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysDocument
 * 
 * @property int $id
 * @property int $uid
 * @property string $name
 * @property string $title
 * @property int $category_id
 * @property int $group_id
 * @property string $description
 * @property int $root
 * @property int $pid
 * @property int $model_id
 * @property int $type
 * @property int $position
 * @property int $link_id
 * @property int $cover_id
 * @property int $display
 * @property int $deadline
 * @property int $attach
 * @property int $view
 * @property int $comment
 * @property int $extend
 * @property int $level
 * @property int $create_time
 * @property int $update_time
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class SysDocument extends Model
{
	protected $table = 'sys_document';
	public $timestamps = false;

	protected $casts = [
		'uid' => 'int',
		'category_id' => 'int',
		'group_id' => 'int',
		'root' => 'int',
		'pid' => 'int',
		'model_id' => 'int',
		'type' => 'int',
		'position' => 'int',
		'link_id' => 'int',
		'cover_id' => 'int',
		'display' => 'int',
		'deadline' => 'int',
		'attach' => 'int',
		'view' => 'int',
		'comment' => 'int',
		'extend' => 'int',
		'level' => 'int',
		'create_time' => 'int',
		'update_time' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'uid',
		'name',
		'title',
		'category_id',
		'group_id',
		'description',
		'root',
		'pid',
		'model_id',
		'type',
		'position',
		'link_id',
		'cover_id',
		'display',
		'deadline',
		'attach',
		'view',
		'comment',
		'extend',
		'level',
		'create_time',
		'update_time',
		'status'
	];
}
