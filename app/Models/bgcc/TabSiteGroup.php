<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSiteGroup
 * 
 * @property int $id
 * @property int $site_game_id
 * @property int $status
 * @property string $group_name
 * @property string $group_code
 * @property int $app_id
 * @property string $pc_url
 * @property int $in_num
 * @property int $create_time
 * @property int $promote_id
 * @property string $game_name
 *
 * @package App\Models\bgcc
 */
class TabSiteGroup extends Model
{
	protected $table = 'tab_site_group';
	public $timestamps = false;

	protected $casts = [
		'site_game_id' => 'int',
		'status' => 'int',
		'app_id' => 'int',
		'in_num' => 'int',
		'create_time' => 'int',
		'promote_id' => 'int'
	];

	protected $fillable = [
		'site_game_id',
		'status',
		'group_name',
		'group_code',
		'app_id',
		'pc_url',
		'in_num',
		'create_time',
		'promote_id',
		'game_name'
	];
}
