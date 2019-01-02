<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabQuestion
 * 
 * @property int $id
 * @property int $user_id
 * @property string $question
 * @property string $answer
 * @property int $status
 * @property int $create_time
 * @property string $account
 * @property int $update_time
 * @property int $game_id
 *
 * @package App\Models\bgcc
 */
class TabQuestion extends Model
{
	protected $table = 'tab_question';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'status' => 'int',
		'create_time' => 'int',
		'update_time' => 'int',
		'game_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'question',
		'answer',
		'status',
		'create_time',
		'account',
		'update_time',
		'game_id'
	];
}
