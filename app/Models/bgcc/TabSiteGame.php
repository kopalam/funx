<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSiteGame
 * 
 * @property int $id
 * @property string $game_name
 * @property int $promote_id
 * @property int $status
 * @property int $create_time
 * @property int $sort
 * @property string $game_type
 * @property float $game_size
 * @property string $version
 * @property float $game_rebate
 * @property int $game_icon
 * @property int $game_img
 * @property string $open_type
 * @property int $game_id
 * @property int $game_source
 * @property int $top_time
 * @property string $game_dow_url
 * @property bool $is_top
 * @property int $update_time
 * @property string $summary
 * @property string $description
 * @property string $screenshot
 * @property int $game_bg_img
 * @property string $recommend_status
 * @property int $download_number
 * @property int $game_type_id
 * @property int $sdk_version
 *
 * @package App\Models\bgcc
 */
class TabSiteGame extends Model
{
	protected $table = 'tab_site_game';
	public $timestamps = false;

	protected $casts = [
		'promote_id' => 'int',
		'status' => 'int',
		'create_time' => 'int',
		'sort' => 'int',
		'game_size' => 'float',
		'game_rebate' => 'float',
		'game_icon' => 'int',
		'game_img' => 'int',
		'game_id' => 'int',
		'game_source' => 'int',
		'top_time' => 'int',
		'is_top' => 'bool',
		'update_time' => 'int',
		'game_bg_img' => 'int',
		'download_number' => 'int',
		'game_type_id' => 'int',
		'sdk_version' => 'int'
	];

	protected $fillable = [
		'game_name',
		'promote_id',
		'status',
		'create_time',
		'sort',
		'game_type',
		'game_size',
		'version',
		'game_rebate',
		'game_icon',
		'game_img',
		'open_type',
		'game_id',
		'game_source',
		'top_time',
		'game_dow_url',
		'is_top',
		'update_time',
		'summary',
		'description',
		'screenshot',
		'game_bg_img',
		'recommend_status',
		'download_number',
		'game_type_id',
		'sdk_version'
	];
}
