<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabGiftbag
 * 
 * @property int $id
 * @property int $game_id
 * @property string $game_name
 * @property int $server_id
 * @property string $server_name
 * @property string $giftbag_name
 * @property int $giftbag_type
 * @property int $level
 * @property int $sort
 * @property int $status
 * @property int $call_api
 * @property int $tong_server
 * @property string $novice
 * @property string $digest
 * @property string $desribe
 * @property int $start_time
 * @property int $end_time
 * @property int $create_time
 * @property int $giftbag_version
 * @property string $giftbag_filename
 * @property int $giftbag_fileid
 * @property int $novice_num
 * @property int $developers
 * @property int $apply_status
 *
 * @package App\Models\bgcc
 */
class TabGiftbag extends Model
{
	protected $table = 'tab_giftbag';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'server_id' => 'int',
		'giftbag_type' => 'int',
		'level' => 'int',
		'sort' => 'int',
		'status' => 'int',
		'call_api' => 'int',
		'tong_server' => 'int',
		'start_time' => 'int',
		'end_time' => 'int',
		'create_time' => 'int',
		'giftbag_version' => 'int',
		'giftbag_fileid' => 'int',
		'novice_num' => 'int',
		'developers' => 'int',
		'apply_status' => 'int'
	];

	protected $fillable = [
		'game_id',
		'game_name',
		'server_id',
		'server_name',
		'giftbag_name',
		'giftbag_type',
		'level',
		'sort',
		'status',
		'call_api',
		'tong_server',
		'novice',
		'digest',
		'desribe',
		'start_time',
		'end_time',
		'create_time',
		'giftbag_version',
		'giftbag_filename',
		'giftbag_fileid',
		'novice_num',
		'developers',
		'apply_status'
	];
}
