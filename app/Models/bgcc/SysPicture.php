<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysPicture
 * 
 * @property int $id
 * @property string $path
 * @property string $url
 * @property string $oss_url
 * @property string $md5
 * @property string $sha1
 * @property int $status
 * @property int $create_time
 * @property string $water
 *
 * @package App\Models\bgcc
 */
class SysPicture extends Model
{
	protected $table = 'sys_picture';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'path',
		'url',
		'oss_url',
		'md5',
		'sha1',
		'status',
		'create_time',
		'water'
	];
}
