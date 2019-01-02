<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabComment
 * 
 * @property int $id
 * @property string $account
 * @property int $game_id
 * @property int $create_time
 * @property string $comment
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class TabComment extends Model
{
	protected $table = 'tab_comment';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'create_time' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'account',
		'game_id',
		'create_time',
		'comment',
		'status'
	];
}
