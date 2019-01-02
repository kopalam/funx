<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabPhoneType
 * 
 * @property int $id
 * @property int $type
 * @property string $name
 * @property string $phonekey
 * @property int $ability
 * @property int $factor
 * @property int $period
 * @property int $unit
 * @property int $days
 * @property int $months
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class TabPhoneType extends Model
{
	protected $table = 'tab_phone_type';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'ability' => 'int',
		'factor' => 'int',
		'period' => 'int',
		'unit' => 'int',
		'days' => 'int',
		'months' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'type',
		'name',
		'phonekey',
		'ability',
		'factor',
		'period',
		'unit',
		'days',
		'months',
		'status'
	];
}
