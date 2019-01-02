<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabCircleHotlist
 * 
 * @property int $id
 * @property int $circle_id
 * @property int $hot_level
 *
 * @package App\Models\bgcc
 */
class TabCircleHotlist extends Model
{
	protected $table = 'tab_circle_hotlist';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'circle_id' => 'int',
		'hot_level' => 'int'
	];

	protected $fillable = [
		'circle_id',
		'hot_level'
	];
}
