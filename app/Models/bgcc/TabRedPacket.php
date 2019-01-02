<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabRedPacket
 * 
 * @property int $id
 * @property string $red_packet_no
 * @property string $transactions_id
 * @property int $sender_user_id
 * @property string $sender_id
 * @property int $recipient_user_id
 * @property string $recipient_id
 * @property int $amount
 * @property float $fee
 * @property string $message
 * @property int $send_time
 * @property int $open_time
 * @property int $status
 * @property bool $pool_status
 * @property int $phonetype
 *
 * @package App\Models\bgcc
 */
class TabRedPacket extends Model
{
	protected $table = 'tab_red_packet';
	public $timestamps = false;

	protected $casts = [
		'sender_user_id' => 'int',
		'recipient_user_id' => 'int',
		'amount' => 'int',
		'fee' => 'float',
		'send_time' => 'int',
		'open_time' => 'int',
		'status' => 'int',
		'pool_status' => 'bool',
		'phonetype' => 'int'
	];

	protected $fillable = [
		'red_packet_no',
		'transactions_id',
		'sender_user_id',
		'sender_id',
		'recipient_user_id',
		'recipient_id',
		'amount',
		'fee',
		'message',
		'send_time',
		'open_time',
		'status',
		'pool_status',
		'phonetype'
	];
}
