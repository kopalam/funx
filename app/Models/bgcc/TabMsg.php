<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabMsg
 * 
 * @property int $id
 * @property int $user_id
 * @property string $content
 * @property int $type
 * @property int $status
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabMsg extends Model
{
	protected $table = 'tab_msg';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'type' => 'int',
		'status' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'user_id',
		'content',
		'type',
		'status',
		'create_time'
	];
}
