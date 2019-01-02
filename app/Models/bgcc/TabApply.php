<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabApply
 * 
 * @property int $id
 * @property int $game_id
 * @property string $game_name
 * @property int $promote_id
 * @property string $promote_account
 * @property float $ratio
 * @property int $apply_time
 * @property int $status
 * @property int $enable_status
 * @property string $pack_url
 * @property string $plist_url
 * @property string $dow_url
 * @property int $dow_status
 * @property int $dispose_id
 * @property int $dispose_time
 * @property int $money
 * @property int $sdk_version
 * @property float $promote_ratio
 * @property float $promote_money
 *
 * @package App\Models\bgcc
 */
class TabApply extends Model
{
	protected $table = 'tab_apply';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'promote_id' => 'int',
		'ratio' => 'float',
		'apply_time' => 'int',
		'status' => 'int',
		'enable_status' => 'int',
		'dow_status' => 'int',
		'dispose_id' => 'int',
		'dispose_time' => 'int',
		'money' => 'int',
		'sdk_version' => 'int',
		'promote_ratio' => 'float',
		'promote_money' => 'float'
	];

	protected $fillable = [
		'game_id',
		'game_name',
		'promote_id',
		'promote_account',
		'ratio',
		'apply_time',
		'status',
		'enable_status',
		'pack_url',
		'plist_url',
		'dow_url',
		'dow_status',
		'dispose_id',
		'dispose_time',
		'money',
		'sdk_version',
		'promote_ratio',
		'promote_money'
	];
}
