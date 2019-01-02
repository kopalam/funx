<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabShareRecord
 * 
 * @property int $id
 * @property int $invite_id
 * @property string $invite_account
 * @property int $user_id
 * @property string $user_account
 * @property int $create_time
 * @property int $award_coin
 * @property string $order_number
 *
 * @package App\Models\bgcc
 */
class TabShareRecord extends Model
{
	protected $table = 'tab_share_record';
	public $timestamps = false;

	protected $casts = [
		'invite_id' => 'int',
		'user_id' => 'int',
		'create_time' => 'int',
		'award_coin' => 'int'
	];

	protected $fillable = [
		'invite_id',
		'invite_account',
		'user_id',
		'user_account',
		'create_time',
		'award_coin',
		'order_number'
	];
}
