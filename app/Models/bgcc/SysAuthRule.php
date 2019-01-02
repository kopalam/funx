<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysAuthRule
 * 
 * @property int $id
 * @property string $module
 * @property int $type
 * @property string $name
 * @property string $title
 * @property bool $status
 * @property string $condition
 *
 * @package App\Models\bgcc
 */
class SysAuthRule extends Model
{
	protected $table = 'sys_auth_rule';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'module',
		'type',
		'name',
		'title',
		'status',
		'condition'
	];
}
