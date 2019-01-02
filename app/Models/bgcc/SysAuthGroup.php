<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysAuthGroup
 * 
 * @property int $id
 * @property string $module
 * @property int $type
 * @property string $title
 * @property string $description
 * @property bool $status
 * @property string $rules
 *
 * @package App\Models\bgcc
 */
class SysAuthGroup extends Model
{
	protected $table = 'sys_auth_group';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'module',
		'type',
		'title',
		'description',
		'status',
		'rules'
	];
}
