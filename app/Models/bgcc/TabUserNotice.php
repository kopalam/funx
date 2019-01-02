<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabUserNotice
 * 
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $account
 * @property int $create_time
 * @property int $update_time
 * @property int $type
 * @property bool $status
 *
 * @package App\Models\bgcc
 */
class TabUserNotice extends Model
{
	protected $table = 'tab_user_notice';
	public $timestamps = false;

	protected $casts = [
		'create_time' => 'int',
		'update_time' => 'int',
		'type' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'title',
		'content',
		'account',
		'create_time',
		'update_time',
		'type',
		'status'
	];
}
