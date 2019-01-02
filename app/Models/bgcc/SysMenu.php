<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysMenu
 * 
 * @property int $id
 * @property string $title
 * @property int $pid
 * @property int $sort
 * @property string $url
 * @property bool $hide
 * @property string $tip
 * @property string $group
 * @property bool $is_dev
 * @property bool $status
 *
 * @package App\Models\bgcc
 */
class SysMenu extends Model
{
	protected $table = 'sys_menu';
	public $timestamps = false;

	protected $casts = [
		'pid' => 'int',
		'sort' => 'int',
		'hide' => 'bool',
		'is_dev' => 'bool',
		'status' => 'bool'
	];

	protected $fillable = [
		'title',
		'pid',
		'sort',
		'url',
		'hide',
		'tip',
		'group',
		'is_dev',
		'status'
	];
}
