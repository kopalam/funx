<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabCoinRecord
 * 
 * @property int $id
 * @property int $user_id
 * @property string $user_account
 * @property int $num
 * @property int $create_time
 * @property int $type
 * @property string $remark
 * @property string $sn
 * @property string $order_number
 * @property int $game_id
 * @property int $promote_id
 * @property string $promote_account
 *
 * @package App\Models\bgcc
 */
class TabCoinRecord extends Model
{
	protected $table = 'tab_coin_record';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'num' => 'int',
		'create_time' => 'int',
		'type' => 'int',
		'game_id' => 'int',
		'promote_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'user_account',
		'num',
		'create_time',
		'type',
		'remark',
		'sn',
		'order_number',
		'game_id',
		'promote_id',
		'promote_account'
	];
}
