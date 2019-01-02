<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabCheck
 * 
 * @property int $id
 * @property string $info
 * @property int $type
 * @property int $create_time
 * @property int $status
 * @property string $url
 * @property int $position
 *
 * @package App\Models\bgcc
 */
class TabCheck extends Model
{
	protected $table = 'tab_check';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'create_time' => 'int',
		'status' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'info',
		'type',
		'create_time',
		'status',
		'url',
		'position'
	];
}
