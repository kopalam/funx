<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysIospacket
 * 
 * @property int $id
 * @property int $certid
 * @property string $channelid
 * @property int $game_id
 * @property string $game_name
 * @property string $channelname
 * @property string $originalpath
 * @property string $channelpath
 * @property string $descriptionpath
 * @property string $status
 * @property int $createtime
 * @property int $updatetime
 * @property string $message
 * @property string $downloadsign
 *
 * @package App\Models\bgcc
 */
class SysIospacket extends Model
{
	protected $table = 'sys_iospacket';
	public $timestamps = false;

	protected $casts = [
		'certid' => 'int',
		'game_id' => 'int',
		'createtime' => 'int',
		'updatetime' => 'int'
	];

	protected $fillable = [
		'certid',
		'channelid',
		'game_id',
		'game_name',
		'channelname',
		'originalpath',
		'channelpath',
		'descriptionpath',
		'status',
		'createtime',
		'updatetime',
		'message',
		'downloadsign'
	];
}
