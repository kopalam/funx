<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabTag
 * 
 * @property int $id
 * @property string $tag_name
 * @property int $op_id
 * @property string $op_name
 * @property int $create_time
 * @property int $status
 * @property string $tag_category
 * @property int $readonly
 *
 * @package App\Models\bgcc
 */
class TabTag extends Model
{
	protected $table = 'tab_tag';
	public $timestamps = false;

	protected $casts = [
		'op_id' => 'int',
		'create_time' => 'int',
		'status' => 'int',
		'readonly' => 'int'
	];

	protected $fillable = [
		'tag_name',
		'op_id',
		'op_name',
		'create_time',
		'status',
		'tag_category',
		'readonly'
	];
}
