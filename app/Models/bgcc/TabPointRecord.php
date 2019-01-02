<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabPointRecord
 * 
 * @property int $id
 * @property int $type_id
 * @property int $user_id
 * @property int $point
 * @property int $create_time
 * @property int $type
 * @property int $day
 *
 * @package App\Models\bgcc
 */
class TabPointRecord extends Model
{
	protected $table = 'tab_point_record';
	public $timestamps = false;

	protected $casts = [
		'type_id' => 'int',
		'user_id' => 'int',
		'point' => 'int',
		'create_time' => 'int',
		'type' => 'int',
		'day' => 'int'
	];

	protected $fillable = [
		'type_id',
		'user_id',
		'point',
		'create_time',
		'type',
		'day'
	];
}
