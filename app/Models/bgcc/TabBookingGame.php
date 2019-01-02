<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabBookingGame
 * 
 * @property int $id
 * @property int $game_id
 * @property string $account
 * @property int $status
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabBookingGame extends Model
{
	protected $table = 'tab_booking_game';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'status' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'game_id',
		'account',
		'status',
		'create_time'
	];
}
