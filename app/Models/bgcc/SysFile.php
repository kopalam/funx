<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysFile
 * 
 * @property int $id
 * @property string $name
 * @property string $savename
 * @property string $savepath
 * @property string $ext
 * @property string $mime
 * @property int $size
 * @property string $md5
 * @property string $sha1
 * @property int $location
 * @property string $url
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class SysFile extends Model
{
	protected $table = 'sys_file';
	public $timestamps = false;

	protected $casts = [
		'size' => 'int',
		'location' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'name',
		'savename',
		'savepath',
		'ext',
		'mime',
		'size',
		'md5',
		'sha1',
		'location',
		'url',
		'create_time'
	];
}
