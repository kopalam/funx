<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabRedPacketUmonth
 * 
 * @property int $id
 * @property int $user_id
 * @property string $year_month
 * @property int $total_amount
 *
 * @package App\Models\bgcc
 */
class TabRedPacketUmonth extends Model
{
	protected $table = 'tab_red_packet_umonth';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'total_amount' => 'int'
	];

	protected $fillable = [
		'user_id',
		'year_month',
		'total_amount'
	];
}
