<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysHook
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property bool $type
 * @property int $update_time
 * @property string $addons
 * @property bool $status
 *
 * @package App\Models\bgcc
 */
class SysHook extends Model
{
	protected $table = 'sys_hooks';
	public $timestamps = false;

	protected $casts = [
		'type' => 'bool',
		'update_time' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'name',
		'description',
		'type',
		'update_time',
		'addons',
		'status'
	];
}
