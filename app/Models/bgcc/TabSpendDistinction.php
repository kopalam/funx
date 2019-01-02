<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSpendDistinction
 * 
 * @property int $id
 * @property int $spend_id
 * @property string $pay_order_number
 * @property int $user_id
 * @property string $user_account
 * @property int $game_id
 * @property string $game_name
 * @property string $extend
 * @property float $last_amount
 * @property string $receipt
 * @property string $currency
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabSpendDistinction extends Model
{
	protected $table = 'tab_spend_distinction';
	public $timestamps = false;

	protected $casts = [
		'spend_id' => 'int',
		'user_id' => 'int',
		'game_id' => 'int',
		'last_amount' => 'float',
		'create_time' => 'int'
	];

	protected $fillable = [
		'spend_id',
		'pay_order_number',
		'user_id',
		'user_account',
		'game_id',
		'game_name',
		'extend',
		'last_amount',
		'receipt',
		'currency',
		'create_time'
	];
}
