<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysApplecert
 * 
 * @property int $id
 * @property string $name
 * @property int $updatetime
 *
 * @package App\Models\bgcc
 */
class SysApplecert extends Model
{
	protected $table = 'sys_applecert';
	public $timestamps = false;

	protected $casts = [
		'updatetime' => 'int'
	];

	protected $fillable = [
		'name',
		'updatetime'
	];
}
