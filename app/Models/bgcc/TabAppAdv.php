<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabAppAdv
 * 
 * @property int $id
 * @property int $position_id
 * @property string $source_id
 * @property int $start_time
 * @property int $stop_time
 * @property string $remark
 * @property int $status
 * @property string $create_by
 * @property int $create_time
 * @property int $last_update_time
 * @property string $last_update_by
 * @property string $category
 * @property string $source
 * @property string $op_history
 *
 * @package App\Models\bgcc
 */
class TabAppAdv extends Model
{
	protected $table = 'tab_app_adv';
	public $timestamps = false;

	protected $casts = [
		'position_id' => 'int',
		'start_time' => 'int',
		'stop_time' => 'int',
		'status' => 'int',
		'create_time' => 'int',
		'last_update_time' => 'int'
	];

	protected $fillable = [
		'position_id',
		'source_id',
		'start_time',
		'stop_time',
		'remark',
		'status',
		'create_by',
		'create_time',
		'last_update_time',
		'last_update_by',
		'category',
		'source',
		'op_history'
	];
}
