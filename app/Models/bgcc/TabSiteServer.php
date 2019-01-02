<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSiteServer
 * 
 * @property int $id
 * @property string $server_name
 * @property int $status
 * @property int $game_id
 * @property int $start_time
 * @property int $create_time
 * @property int $promote_id
 * @property int $server_id
 * @property int $server_version
 *
 * @package App\Models\bgcc
 */
class TabSiteServer extends Model
{
	protected $table = 'tab_site_server';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'game_id' => 'int',
		'start_time' => 'int',
		'create_time' => 'int',
		'promote_id' => 'int',
		'server_id' => 'int',
		'server_version' => 'int'
	];

	protected $fillable = [
		'server_name',
		'status',
		'game_id',
		'start_time',
		'create_time',
		'promote_id',
		'server_id',
		'server_version'
	];
}
