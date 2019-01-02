<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysAuthExtend
 * 
 * @property int $group_id
 * @property int $extend_id
 * @property bool $type
 *
 * @package App\Models\bgcc
 */
class SysAuthExtend extends Model
{
	protected $table = 'sys_auth_extend';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'group_id' => 'int',
		'extend_id' => 'int',
		'type' => 'bool'
	];
}
