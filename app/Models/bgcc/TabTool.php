<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabTool
 * 
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $config
 * @property string $template
 * @property int $type
 * @property int $status
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabTool extends Model
{
	protected $table = 'tab_tool';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'status' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'name',
		'title',
		'config',
		'template',
		'type',
		'status',
		'create_time'
	];
}
