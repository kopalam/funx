<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabPromoteGiftRecord
 * 
 * @property int $id
 * @property int $game_id
 * @property string $game_name
 * @property int $server_id
 * @property string $server_name
 * @property int $gift_id
 * @property string $gift_name
 * @property int $status
 * @property string $novice
 * @property int $promote_id
 * @property int $create_time
 * @property int $month
 * @property int $type
 *
 * @package App\Models\bgcc
 */
class TabPromoteGiftRecord extends Model
{
	protected $table = 'tab_promote_gift_record';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'server_id' => 'int',
		'gift_id' => 'int',
		'status' => 'int',
		'promote_id' => 'int',
		'create_time' => 'int',
		'month' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'game_id',
		'game_name',
		'server_id',
		'server_name',
		'gift_id',
		'gift_name',
		'status',
		'novice',
		'promote_id',
		'create_time',
		'month',
		'type'
	];
}
