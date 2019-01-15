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
 * @property string $tool_set
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class TabTools extends Model
{
	protected $table = 'tab_tools';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
	];

	protected $fillable = [
		'name',
		'tool_set',
		'status'
	];
}
