<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSiteApply
 * 
 * @property int $id
 * @property int $promote_id
 * @property string $site_url
 * @property string $url_type
 * @property int $status
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabSiteApply extends Model
{
	protected $table = 'tab_site_apply';
	public $timestamps = false;

	protected $casts = [
		'promote_id' => 'int',
		'status' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'promote_id',
		'site_url',
		'url_type',
		'status',
		'create_time'
	];
}
