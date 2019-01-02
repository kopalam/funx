<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabPointType
 * 
 * @property int $id
 * @property string $name
 * @property int $point
 * @property int $status
 * @property int $create_time
 * @property int $time_of_day
 * @property string $key
 * @property string $remark
 *
 * @package App\Models\bgcc
 */
class TabPointType extends Model
{
	protected $table = 'tab_point_type';
	public $timestamps = false;

	protected $casts = [
		'point' => 'int',
		'status' => 'int',
		'create_time' => 'int',
		'time_of_day' => 'int'
	];

	protected $fillable = [
		'name',
		'point',
		'status',
		'create_time',
		'time_of_day',
		'key',
		'remark'
	];
}
