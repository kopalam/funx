<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabServer
 * 
 * @property int $id
 * @property int $game_id
 * @property string $game_name
 * @property string $server_name
 * @property int $server_num
 * @property int $recommend_status
 * @property int $show_status
 * @property int $stop_status
 * @property int $server_status
 * @property int $icon
 * @property int $start_time
 * @property string $desride
 * @property string $prompt
 * @property int $parent_id
 * @property int $create_time
 * @property int $server_version
 * @property int $developers
 *
 * @package App\Models\bgcc
 */
class TabServer extends Model
{
	protected $table = 'tab_server';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'server_num' => 'int',
		'recommend_status' => 'int',
		'show_status' => 'int',
		'stop_status' => 'int',
		'server_status' => 'int',
		'icon' => 'int',
		'start_time' => 'int',
		'parent_id' => 'int',
		'create_time' => 'int',
		'server_version' => 'int',
		'developers' => 'int'
	];

	protected $fillable = [
		'game_id',
		'game_name',
		'server_name',
		'server_num',
		'recommend_status',
		'show_status',
		'stop_status',
		'server_status',
		'icon',
		'start_time',
		'desride',
		'prompt',
		'parent_id',
		'create_time',
		'server_version',
		'developers'
	];
}
