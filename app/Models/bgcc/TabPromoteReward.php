<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabPromoteReward
 * 
 * @property int $id
 * @property int $promote_id
 * @property int $create_time
 * @property int $amount
 * @property string $remark
 * @property string $realname_user
 *
 * @package App\Models\bgcc
 */
class TabPromoteReward extends Model
{
	protected $table = 'tab_promote_reward';
	public $timestamps = false;

	protected $casts = [
		'promote_id' => 'int',
		'create_time' => 'int',
		'amount' => 'int'
	];

	protected $fillable = [
		'promote_id',
		'create_time',
		'amount',
		'remark',
		'realname_user'
	];
}
