<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysAddon
 * 
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property bool $status
 * @property string $config
 * @property string $author
 * @property string $version
 * @property int $create_time
 * @property bool $has_adminlist
 *
 * @package App\Models\bgcc
 */
class SysAddon extends Model
{
	protected $table = 'sys_addons';
	public $timestamps = false;

	protected $casts = [
		'status' => 'bool',
		'create_time' => 'int',
		'has_adminlist' => 'bool'
	];

	protected $fillable = [
		'name',
		'title',
		'description',
		'status',
		'config',
		'author',
		'version',
		'create_time',
		'has_adminlist'
	];
}
