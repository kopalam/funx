<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class StaffGroup
 * 
 * @property int $id
 * @property string $name
 * @property string $desc
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class StaffGroup extends Model
{
	protected $table = 'staff_group';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
	];

	protected $fillable = [
		'name',
		'desc',
		'status'
	];
}
