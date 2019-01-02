<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSiteBase
 * 
 * @property int $id
 * @property string $site_name
 * @property int $site_background
 * @property int $site_logo
 * @property string $site_notice
 * @property int $create_time
 * @property int $status
 * @property int $promote_id
 * @property int $site_icon
 * @property string $site_qq
 * @property string $site_app_name
 * @property string $site_app_version
 * @property int $sites_app_logo
 * @property int $sites_pc_logo
 * @property int $sites_pc_icon
 * @property int $sites_wap_logo
 * @property int $sites_qrcode
 * @property int $sites_ball_logo
 * @property int $ball_status
 * @property string $site_qq_qun
 * @property string $site_qq_qunurl
 * @property string $site_tel
 * @property string $app_weixin
 *
 * @package App\Models\bgcc
 */
class TabSiteBase extends Model
{
	protected $table = 'tab_site_base';
	public $timestamps = false;

	protected $casts = [
		'site_background' => 'int',
		'site_logo' => 'int',
		'create_time' => 'int',
		'status' => 'int',
		'promote_id' => 'int',
		'site_icon' => 'int',
		'sites_app_logo' => 'int',
		'sites_pc_logo' => 'int',
		'sites_pc_icon' => 'int',
		'sites_wap_logo' => 'int',
		'sites_qrcode' => 'int',
		'sites_ball_logo' => 'int',
		'ball_status' => 'int'
	];

	protected $fillable = [
		'site_name',
		'site_background',
		'site_logo',
		'site_notice',
		'create_time',
		'status',
		'promote_id',
		'site_icon',
		'site_qq',
		'site_app_name',
		'site_app_version',
		'sites_app_logo',
		'sites_pc_logo',
		'sites_pc_icon',
		'sites_wap_logo',
		'sites_qrcode',
		'sites_ball_logo',
		'ball_status',
		'site_qq_qun',
		'site_qq_qunurl',
		'site_tel',
		'app_weixin'
	];
}
