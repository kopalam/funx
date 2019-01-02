<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabMessage
 * 
 * @property int $id
 * @property int $game_id
 * @property int $user_id
 * @property string $title
 * @property string $content
 * @property int $status
 * @property int $type
 * @property int $op_id
 * @property string $op_account
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabMessage extends Model
{
	protected $table = 'tab_message';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'user_id' => 'int',
		'status' => 'int',
		'type' => 'int',
		'op_id' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'game_id',
		'user_id',
		'title',
		'content',
		'status',
		'type',
		'op_id',
		'op_account',
		'create_time'
	];
}
