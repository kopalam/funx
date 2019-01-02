<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysAttachment
 * 
 * @property int $id
 * @property int $uid
 * @property string $title
 * @property int $type
 * @property int $source
 * @property int $record_id
 * @property int $download
 * @property int $size
 * @property int $dir
 * @property int $sort
 * @property int $create_time
 * @property int $update_time
 * @property bool $status
 *
 * @package App\Models\bgcc
 */
class SysAttachment extends Model
{
	protected $table = 'sys_attachment';
	public $timestamps = false;

	protected $casts = [
		'uid' => 'int',
		'type' => 'int',
		'source' => 'int',
		'record_id' => 'int',
		'download' => 'int',
		'size' => 'int',
		'dir' => 'int',
		'sort' => 'int',
		'create_time' => 'int',
		'update_time' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'uid',
		'title',
		'type',
		'source',
		'record_id',
		'download',
		'size',
		'dir',
		'sort',
		'create_time',
		'update_time',
		'status'
	];
}
