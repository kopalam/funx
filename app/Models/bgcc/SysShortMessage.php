<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysShortMessage
 * 
 * @property int $id
 * @property string $phone
 * @property string $send_status
 * @property string $send_time
 * @property string $smsId
 * @property int $create_time
 * @property string $pid
 * @property int $status
 * @property int $ratio
 * @property string $create_ip
 *
 * @package App\Models\bgcc
 */
class SysShortMessage extends Model
{
	protected $table = 'sys_short_message';
	public $timestamps = false;

	protected $casts = [
		'create_time' => 'int',
		'status' => 'int',
		'ratio' => 'int'
	];

	protected $fillable = [
		'phone',
		'send_status',
		'send_time',
		'smsId',
		'create_time',
		'pid',
		'status',
		'ratio',
		'create_ip'
	];
}
