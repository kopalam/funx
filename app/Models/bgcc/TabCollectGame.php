<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabCollectGame
 * 
 * @property int $id
 * @property int $game_id
 * @property string $account
 * @property int $create_time
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class TabCollectGame extends Model
{
	protected $table = 'tab_collect_game';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'create_time' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'game_id',
		'account',
		'create_time',
		'status'
	];
}
