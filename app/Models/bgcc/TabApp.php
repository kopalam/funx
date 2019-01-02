<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabApp
 * 
 * @property int $id
 * @property string $name
 * @property int $file_id
 * @property string $file_name
 * @property string $file_url
 * @property string $file_size
 * @property int $type
 * @property int $op_id
 * @property string $plist_url
 * @property string $op_account
 * @property string $remark
 * @property int $create_time
 * @property int $version
 *
 * @package App\Models\bgcc
 */
class TabApp extends Model
{
	protected $table = 'tab_app';
	public $timestamps = false;

	protected $casts = [
		'file_id' => 'int',
		'type' => 'int',
		'op_id' => 'int',
		'create_time' => 'int',
		'version' => 'int'
	];

	protected $fillable = [
		'name',
		'file_id',
		'file_name',
		'file_url',
		'file_size',
		'type',
		'op_id',
		'plist_url',
		'op_account',
		'remark',
		'create_time',
		'version'
	];
}
