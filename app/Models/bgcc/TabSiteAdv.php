<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSiteAdv
 * 
 * @property int $id
 * @property string $title
 * @property int $pos_id
 * @property string $data
 * @property int $click_count
 * @property string $url
 * @property int $sort
 * @property int $status
 * @property int $create_time
 * @property int $start_time
 * @property int $end_time
 * @property string $target
 * @property int $promote_id
 * @property string $promote_account
 *
 * @package App\Models\bgcc
 */
class TabSiteAdv extends Model
{
	protected $table = 'tab_site_adv';
	public $timestamps = false;

	protected $casts = [
		'pos_id' => 'int',
		'click_count' => 'int',
		'sort' => 'int',
		'status' => 'int',
		'create_time' => 'int',
		'start_time' => 'int',
		'end_time' => 'int',
		'promote_id' => 'int'
	];

	protected $fillable = [
		'title',
		'pos_id',
		'data',
		'click_count',
		'url',
		'sort',
		'status',
		'create_time',
		'start_time',
		'end_time',
		'target',
		'promote_id',
		'promote_account'
	];
}
