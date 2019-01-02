<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysKuaijieicon
 * 
 * @property int $id
 * @property string $title
 * @property int $value
 * @property int $status
 * @property string $url
 *
 * @package App\Models\bgcc
 */
class SysKuaijieicon extends Model
{
	protected $table = 'sys_kuaijieicon';
	public $timestamps = false;

	protected $casts = [
		'value' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'title',
		'value',
		'status',
		'url'
	];
}
