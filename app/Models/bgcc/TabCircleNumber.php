<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabCircleNumber
 * 
 * @property int $id
 * @property int $pretty
 * @property int $status
 * @property int $circle_id
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabCircleNumber extends Model
{
	protected $table = 'tab_circle_number';
	public $timestamps = false;

	protected $casts = [
		'pretty' => 'int',
		'status' => 'int',
		'circle_id' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'pretty',
		'status',
		'circle_id',
		'create_time'
	];
}
