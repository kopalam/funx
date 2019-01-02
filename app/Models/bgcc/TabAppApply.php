<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabAppApply
 * 
 * @property int $id
 * @property int $promote_id
 * @property int $app_id
 * @property string $app_name
 * @property int $app_version
 * @property int $apply_time
 * @property string $plist_url
 * @property int $status
 * @property int $enable_status
 * @property int $dispose_time
 * @property int $dispose_id
 * @property string $dow_url
 *
 * @package App\Models\bgcc
 */
class TabAppApply extends Model
{
	protected $table = 'tab_app_apply';
	public $timestamps = false;

	protected $casts = [
		'promote_id' => 'int',
		'app_id' => 'int',
		'app_version' => 'int',
		'apply_time' => 'int',
		'status' => 'int',
		'enable_status' => 'int',
		'dispose_time' => 'int',
		'dispose_id' => 'int'
	];

	protected $fillable = [
		'promote_id',
		'app_id',
		'app_name',
		'app_version',
		'apply_time',
		'plist_url',
		'status',
		'enable_status',
		'dispose_time',
		'dispose_id',
		'dow_url'
	];
}
