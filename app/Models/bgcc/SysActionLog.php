<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysActionLog
 * 
 * @property int $id
 * @property int $action_id
 * @property int $user_id
 * @property int $action_ip
 * @property string $model
 * @property int $record_id
 * @property string $remark
 * @property int $status
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class SysActionLog extends Model
{
	protected $table = 'sys_action_log';
	public $timestamps = false;

	protected $casts = [
		'action_id' => 'int',
		'user_id' => 'int',
		'action_ip' => 'int',
		'record_id' => 'int',
		'status' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'action_id',
		'user_id',
		'action_ip',
		'model',
		'record_id',
		'remark',
		'status',
		'create_time'
	];
}
