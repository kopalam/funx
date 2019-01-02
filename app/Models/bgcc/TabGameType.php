<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabGameType
 * 
 * @property int $id
 * @property string $type_name
 * @property int $icon
 * @property int $cover
 * @property int $status
 * @property int $status_show
 * @property int $op_id
 * @property string $op_nickname
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabGameType extends Model
{
	protected $table = 'tab_game_type';
	public $timestamps = false;

	protected $casts = [
		'icon' => 'int',
		'cover' => 'int',
		'status' => 'int',
		'status_show' => 'int',
		'op_id' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'type_name',
		'icon',
		'cover',
		'status',
		'status_show',
		'op_id',
		'op_nickname',
		'create_time'
	];
}
