<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabTask
 * 
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $status
 * @property int $type
 * @property int $create_time
 * @property int $update_time
 * @property string $url
 * @property int $icon
 * @property int $sort
 *
 * @package App\Models\bgcc
 */
class TabTask extends Model
{
	protected $table = 'tab_task';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'type' => 'int',
		'create_time' => 'int',
		'update_time' => 'int',
		'icon' => 'int',
		'sort' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'status',
		'type',
		'create_time',
		'update_time',
		'url',
		'icon',
		'sort'
	];
}
