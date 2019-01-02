<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabActivity
 * 
 * @property int $id
 * @property string $name
 * @property int $type
 * @property string $type_name
 * @property int $amount
 * @property int $status
 * @property int $start_time
 * @property int $end_time
 * @property int $create_time
 * @property string $describe
 *
 * @package App\Models\bgcc
 */
class TabActivity extends Model
{
	protected $table = 'tab_activity';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'amount' => 'int',
		'status' => 'int',
		'start_time' => 'int',
		'end_time' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'name',
		'type',
		'type_name',
		'amount',
		'status',
		'start_time',
		'end_time',
		'create_time',
		'describe'
	];
}
