<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabPushNotice
 * 
 * @property int $id
 * @property int $push_id
 * @property string $push_name
 * @property string $content
 * @property int $push_object
 * @property int $push_time_type
 * @property int $push_time
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabPushNotice extends Model
{
	protected $table = 'tab_push_notice';
	public $timestamps = false;

	protected $casts = [
		'push_id' => 'int',
		'push_object' => 'int',
		'push_time_type' => 'int',
		'push_time' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'push_id',
		'push_name',
		'content',
		'push_object',
		'push_time_type',
		'push_time',
		'create_time'
	];
}
