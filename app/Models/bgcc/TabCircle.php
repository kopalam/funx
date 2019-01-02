<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabCircle
 * 
 * @property int $id
 * @property int $number
 * @property int $icon
 * @property string $name
 * @property int $user_id
 * @property string $user_account
 * @property string $intro
 * @property string $notice
 * @property string $desc
 * @property int $level
 * @property int $limit_number
 * @property int $people_number
 * @property int $create_time
 * @property int $update_time
 * @property bool $visible
 * @property bool $official
 * @property string $circle_tags
 * @property bool $status
 *
 * @package App\Models\bgcc
 */
class TabCircle extends Model
{
	protected $table = 'tab_circle';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'icon' => 'int',
		'user_id' => 'int',
		'level' => 'int',
		'limit_number' => 'int',
		'people_number' => 'int',
		'create_time' => 'int',
		'update_time' => 'int',
		'visible' => 'bool',
		'official' => 'bool',
		'status' => 'bool'
	];

	protected $fillable = [
		'number',
		'icon',
		'name',
		'user_id',
		'user_account',
		'intro',
		'notice',
		'desc',
		'level',
		'limit_number',
		'people_number',
		'create_time',
		'update_time',
		'visible',
		'official',
		'circle_tags',
		'status'
	];
}
