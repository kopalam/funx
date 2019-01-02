<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabRefundRecord
 * 
 * @property int $id
 * @property int $user_id
 * @property string $user_account
 * @property string $user_nickname
 * @property int $game_id
 * @property string $game_name
 * @property int $promote_id
 * @property string $promote_account
 * @property string $batch_no
 * @property string $order_number
 * @property string $pay_order_number
 * @property float $pay_amount
 * @property float $tui_amount
 * @property int $tui_status
 * @property int $pay_way
 * @property int $sdk_version
 * @property int $pay_time
 * @property int $create_time
 * @property int $tui_time
 *
 * @package App\Models\bgcc
 */
class TabRefundRecord extends Model
{
	protected $table = 'tab_refund_record';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'game_id' => 'int',
		'promote_id' => 'int',
		'pay_amount' => 'float',
		'tui_amount' => 'float',
		'tui_status' => 'int',
		'pay_way' => 'int',
		'sdk_version' => 'int',
		'pay_time' => 'int',
		'create_time' => 'int',
		'tui_time' => 'int'
	];

	protected $fillable = [
		'user_id',
		'user_account',
		'user_nickname',
		'game_id',
		'game_name',
		'promote_id',
		'promote_account',
		'batch_no',
		'order_number',
		'pay_order_number',
		'pay_amount',
		'tui_amount',
		'tui_status',
		'pay_way',
		'sdk_version',
		'pay_time',
		'create_time',
		'tui_time'
	];
}
