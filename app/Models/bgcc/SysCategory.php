<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysCategory
 * 
 * @property int $id
 * @property string $name
 * @property string $title
 * @property int $pid
 * @property int $sort
 * @property int $list_row
 * @property string $meta_title
 * @property string $keywords
 * @property string $description
 * @property string $template_index
 * @property string $template_lists
 * @property string $template_detail
 * @property string $template_edit
 * @property string $model
 * @property string $model_sub
 * @property string $type
 * @property int $link_id
 * @property int $allow_publish
 * @property int $display
 * @property int $reply
 * @property int $check
 * @property string $reply_model
 * @property string $extend
 * @property int $create_time
 * @property int $update_time
 * @property int $status
 * @property int $icon
 * @property string $groups
 *
 * @package App\Models\bgcc
 */
class SysCategory extends Model
{
	protected $table = 'sys_category';
	public $timestamps = false;

	protected $casts = [
		'pid' => 'int',
		'sort' => 'int',
		'list_row' => 'int',
		'link_id' => 'int',
		'allow_publish' => 'int',
		'display' => 'int',
		'reply' => 'int',
		'check' => 'int',
		'create_time' => 'int',
		'update_time' => 'int',
		'status' => 'int',
		'icon' => 'int'
	];

	protected $fillable = [
		'name',
		'title',
		'pid',
		'sort',
		'list_row',
		'meta_title',
		'keywords',
		'description',
		'template_index',
		'template_lists',
		'template_detail',
		'template_edit',
		'model',
		'model_sub',
		'type',
		'link_id',
		'allow_publish',
		'display',
		'reply',
		'check',
		'reply_model',
		'extend',
		'create_time',
		'update_time',
		'status',
		'icon',
		'groups'
	];
}
