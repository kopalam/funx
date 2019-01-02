<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSiteGift
 * 
 * @property int $id
 * @property int $site_game_id
 * @property string $gift_name
 * @property int $start_time
 * @property int $end_time
 * @property string $novice
 * @property string $get_way
 * @property string $gift_content
 * @property int $create_time
 * @property string $status
 * @property string $game_name
 * @property int $promote_id
 * @property int $novice_num
 * @property int $recommend_status
 * @property string $server_name
 * @property int $giftbag_version
 * @property int $server_id
 *
 * @package App\Models\bgcc
 */
class TabSiteGift extends Model
{
	protected $table = 'tab_site_gift';
	public $timestamps = false;

	protected $casts = [
		'site_game_id' => 'int',
		'start_time' => 'int',
		'end_time' => 'int',
		'create_time' => 'int',
		'promote_id' => 'int',
		'novice_num' => 'int',
		'recommend_status' => 'int',
		'giftbag_version' => 'int',
		'server_id' => 'int'
	];

	protected $fillable = [
		'site_game_id',
		'gift_name',
		'start_time',
		'end_time',
		'novice',
		'get_way',
		'gift_content',
		'create_time',
		'status',
		'game_name',
		'promote_id',
		'novice_num',
		'recommend_status',
		'server_name',
		'giftbag_version',
		'server_id'
	];
}
