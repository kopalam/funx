<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabRedPacketRecord
 * 
 * @property int $id
 * @property int $red_packet_id
 * @property string $red_packet_no
 * @property string $transactions_id
 * @property int $sender_user_id
 * @property int $circle_id
 * @property int $recipient_user_id
 * @property int $create_time
 * @property int $update_time
 * @property float $amount
 * @property bool $type
 * @property string $remark
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class TabRedPacketRecord extends Model
{
	protected $table = 'tab_red_packet_record';
	public $timestamps = false;

	protected $casts = [
		'red_packet_id' => 'int',
		'sender_user_id' => 'int',
		'circle_id' => 'int',
		'recipient_user_id' => 'int',
		'create_time' => 'int',
		'update_time' => 'int',
		'amount' => 'float',
		'type' => 'bool',
		'status' => 'int'
	];

	protected $fillable = [
		'red_packet_id',
		'red_packet_no',
		'transactions_id',
		'sender_user_id',
		'circle_id',
		'recipient_user_id',
		'create_time',
		'update_time',
		'amount',
		'type',
		'remark',
		'status'
	];
}
