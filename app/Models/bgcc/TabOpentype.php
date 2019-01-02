<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabOpentype
 * 
 * @property int $id
 * @property int $create_time
 * @property int $status
 * @property string $open_name
 * @property int $op_id
 * @property string $op_nickname
 *
 * @package App\Models\bgcc
 */
class TabOpentype extends Model
{
	protected $table = 'tab_opentype';
	public $timestamps = false;

	protected $casts = [
		'create_time' => 'int',
		'status' => 'int',
		'op_id' => 'int'
	];

	protected $fillable = [
		'create_time',
		'status',
		'open_name',
		'op_id',
		'op_nickname'
	];
}
