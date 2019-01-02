<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysUcenterAdmin
 * 
 * @property int $id
 * @property int $member_id
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class SysUcenterAdmin extends Model
{
	protected $table = 'sys_ucenter_admin';
	public $timestamps = false;

	protected $casts = [
		'member_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'member_id',
		'status'
	];
}
