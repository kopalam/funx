<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysAttribute
 * 
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $field
 * @property string $type
 * @property string $value
 * @property string $remark
 * @property bool $is_show
 * @property string $extra
 * @property int $model_id
 * @property bool $is_must
 * @property int $status
 * @property int $update_time
 * @property int $create_time
 * @property string $validate_rule
 * @property bool $validate_time
 * @property string $error_info
 * @property string $validate_type
 * @property string $auto_rule
 * @property bool $auto_time
 * @property string $auto_type
 *
 * @package App\Models\bgcc
 */
class SysAttribute extends Model
{
	protected $table = 'sys_attribute';
	public $timestamps = false;

	protected $casts = [
		'is_show' => 'bool',
		'model_id' => 'int',
		'is_must' => 'bool',
		'status' => 'int',
		'update_time' => 'int',
		'create_time' => 'int',
		'validate_time' => 'bool',
		'auto_time' => 'bool'
	];

	protected $fillable = [
		'name',
		'title',
		'field',
		'type',
		'value',
		'remark',
		'is_show',
		'extra',
		'model_id',
		'is_must',
		'status',
		'update_time',
		'create_time',
		'validate_rule',
		'validate_time',
		'error_info',
		'validate_type',
		'auto_rule',
		'auto_time',
		'auto_type'
	];
}
