<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysUcenterSetting
 * 
 * @property int $id
 * @property int $type
 * @property string $value
 *
 * @package App\Models\bgcc
 */
class SysUcenterSetting extends Model
{
	protected $table = 'sys_ucenter_setting';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int'
	];

	protected $fillable = [
		'type',
		'value'
	];
}
