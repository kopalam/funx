<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabGameSource
 * 
 * @property int $id
 * @property int $game_id
 * @property string $game_name
 * @property int $file_id
 * @property string $file_name
 * @property string $file_url
 * @property string $file_size
 * @property int $file_type
 * @property string $plist_url
 * @property string $description_url
 * @property int $op_id
 * @property string $op_account
 * @property string $remark
 * @property string $bao_name
 * @property int $create_time
 * @property string $version
 * @property string $pack_name
 * @property int $apply_status
 * @property int $develop_id
 * @property string $sdk_version
 * @property string $source_oss_url
 *
 * @package App\Models\bgcc
 */
class TabGameSource extends Model
{
	protected $table = 'tab_game_source';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'file_id' => 'int',
		'file_type' => 'int',
		'op_id' => 'int',
		'create_time' => 'int',
		'apply_status' => 'int',
		'develop_id' => 'int'
	];

	protected $fillable = [
		'game_id',
		'game_name',
		'file_id',
		'file_name',
		'file_url',
		'file_size',
		'file_type',
		'plist_url',
		'description_url',
		'op_id',
		'op_account',
		'remark',
		'bao_name',
		'create_time',
		'version',
		'pack_name',
		'apply_status',
		'develop_id',
		'sdk_version',
		'source_oss_url'
	];
}
