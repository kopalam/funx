<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Carbon\Carbon;
use Reliese\Database\Eloquent\Model;

/**
 * Class SysSelfbuilt
 * 
 * @property int $id
 * @property int $gameid
 * @property string $gamename
 * @property string $webname
 * @property string $keyword
 * @property string $weburl
 * @property string $describe
 * @property int $logo
 * @property int $backgroundimg
 * @property string $backgroundcolor
 * @property int $templateid
 * @property string $templatename
 * @property Carbon $createtime
 * @property string $screenshots
 * @property string $shuffling
 * @property string $wei_url
 * @property string $self_id
 *
 * @package App\Models\bgcc
 */
class SysSelfbuilt extends Model
{
	protected $table = 'sys_selfbuilt';
	public $timestamps = false;

	protected $casts = [
		'gameid' => 'int',
		'logo' => 'int',
		'backgroundimg' => 'int',
		'templateid' => 'int'
	];

	protected $dates = [
		'createtime'
	];

	protected $fillable = [
		'gameid',
		'gamename',
		'webname',
		'keyword',
		'weburl',
		'describe',
		'logo',
		'backgroundimg',
		'backgroundcolor',
		'templateid',
		'templatename',
		'createtime',
		'screenshots',
		'shuffling',
		'wei_url',
		'self_id'
	];
}
