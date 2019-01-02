<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabGameModify
 * 
 * @property int $id
 * @property int $game_id
 * @property int $developers
 * @property string $old_data
 * @property string $new_data
 * @property int $create_time
 * @property int $verify_time
 * @property bool $status
 * @property string $reject_remark
 *
 * @package App\Models\bgcc
 */
class TabGameModify extends Model
{
	protected $table = 'tab_game_modify';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'developers' => 'int',
		'create_time' => 'int',
		'verify_time' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'game_id',
		'developers',
		'old_data',
		'new_data',
		'create_time',
		'verify_time',
		'status',
		'reject_remark'
	];
}
