<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabPromoteGift
 * 
 * @property int $id
 * @property int $game_id
 * @property string $game_name
 * @property int $server_id
 * @property string $server_name
 * @property string $giftbag_name
 * @property int $giftbag_type
 * @property int $status
 * @property int $call_api
 * @property int $tong_server
 * @property string $novice
 * @property string $digest
 * @property string $desribe
 * @property int $create_time
 * @property int $promote_id
 * @property float $condition
 * @property int $def_num
 * @property int $giftbag_version
 *
 * @package App\Models\bgcc
 */
class TabPromoteGift extends Model
{
	protected $table = 'tab_promote_gift';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'server_id' => 'int',
		'giftbag_type' => 'int',
		'status' => 'int',
		'call_api' => 'int',
		'tong_server' => 'int',
		'create_time' => 'int',
		'promote_id' => 'int',
		'condition' => 'float',
		'def_num' => 'int',
		'giftbag_version' => 'int'
	];

	protected $fillable = [
		'game_id',
		'game_name',
		'server_id',
		'server_name',
		'giftbag_name',
		'giftbag_type',
		'status',
		'call_api',
		'tong_server',
		'novice',
		'digest',
		'desribe',
		'create_time',
		'promote_id',
		'condition',
		'def_num',
		'giftbag_version'
	];
}
