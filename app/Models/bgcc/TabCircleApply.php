<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabCircleApply
 * 
 * @property int $id
 * @property int $user_id
 * @property string $user_account
 * @property int $circle_id
 * @property int $create_time
 * @property int $update_time
 * @property string $remark
 * @property bool $status
 *
 * @package App\Models\bgcc
 */
class TabCircleApply extends Model
{
	protected $table = 'tab_circle_apply';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'circle_id' => 'int',
		'create_time' => 'int',
		'update_time' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'user_account',
		'circle_id',
		'create_time',
		'update_time',
		'remark',
		'status'
	];
}
