<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabTaskRecord
 * 
 * @property int $id
 * @property int $task_type
 * @property int $user_id
 * @property int $related_user_id
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabTaskRecord extends Model
{
	protected $table = 'tab_task_record';
	public $timestamps = false;

	protected $casts = [
		'task_type' => 'int',
		'user_id' => 'int',
		'related_user_id' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'task_type',
		'user_id',
		'related_user_id',
		'create_time'
	];
}
