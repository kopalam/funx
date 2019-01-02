<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysUrl
 * 
 * @property int $id
 * @property string $url
 * @property string $short
 * @property int $status
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class SysUrl extends Model
{
	protected $table = 'sys_url';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'url',
		'short',
		'status',
		'create_time'
	];
}
