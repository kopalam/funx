<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabCirclePublishMsg
 * 
 * @property int $id
 * @property int $publish_id
 * @property int $msg_type
 * @property int $user_id
 * @property int $cmt_user_id
 * @property int $read_status
 * @property int $msg_status
 * @property string $remark
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabCirclePublishMsg extends Model
{
	protected $table = 'tab_circle_publish_msg';
	public $timestamps = false;

	protected $casts = [
		'publish_id' => 'int',
		'msg_type' => 'int',
		'user_id' => 'int',
		'cmt_user_id' => 'int',
		'read_status' => 'int',
		'msg_status' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'publish_id',
		'msg_type',
		'user_id',
		'cmt_user_id',
		'read_status',
		'msg_status',
		'remark',
		'create_time'
	];
}
