<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysModel
 * 
 * @property int $id
 * @property string $name
 * @property string $title
 * @property int $extend
 * @property string $relation
 * @property bool $need_pk
 * @property string $field_sort
 * @property string $field_group
 * @property string $attribute_list
 * @property string $attribute_alias
 * @property string $template_list
 * @property string $template_add
 * @property string $template_edit
 * @property string $list_grid
 * @property int $list_row
 * @property string $search_key
 * @property string $search_list
 * @property int $create_time
 * @property int $update_time
 * @property int $status
 * @property string $engine_type
 *
 * @package App\Models\bgcc
 */
class SysModel extends Model
{
	protected $table = 'sys_model';
	public $timestamps = false;

	protected $casts = [
		'extend' => 'int',
		'need_pk' => 'bool',
		'list_row' => 'int',
		'create_time' => 'int',
		'update_time' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'title',
		'extend',
		'relation',
		'need_pk',
		'field_sort',
		'field_group',
		'attribute_list',
		'attribute_alias',
		'template_list',
		'template_add',
		'template_edit',
		'list_grid',
		'list_row',
		'search_key',
		'search_list',
		'create_time',
		'update_time',
		'status',
		'engine_type'
	];
}
