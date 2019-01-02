<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabCircleMember
 * 
 * @property int $id
 * @property int $circle_id
 * @property int $user_id
 * @property string $user_account
 * @property int $create_time
 * @property int $last_visit
 * @property bool $master
 *
 * @package App\Models\bgcc
 */
class TabCircleMember extends Model
{
	protected $table = 'tab_circle_member';
	public $timestamps = false;

	protected $casts = [
		'circle_id' => 'int',
		'user_id' => 'int',
		'create_time' => 'int',
		'last_visit' => 'int',
		'master' => 'bool'
	];

	protected $fillable = [
		'circle_id',
		'user_id',
		'user_account',
		'create_time',
		'last_visit',
		'master'
	];
}
