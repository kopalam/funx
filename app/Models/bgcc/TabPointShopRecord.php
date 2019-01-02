<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabPointShopRecord
 * 
 * @property int $id
 * @property int $good_id
 * @property string $good_name
 * @property int $good_type
 * @property string $good_key
 * @property int $pay_amount
 * @property int $number
 * @property string $user_name
 * @property string $address
 * @property string $phone
 * @property int $create_time
 * @property int $status
 * @property int $user_id
 *
 * @package App\Models\bgcc
 */
class TabPointShopRecord extends Model
{
	protected $table = 'tab_point_shop_record';
	public $timestamps = false;

	protected $casts = [
		'good_id' => 'int',
		'good_type' => 'int',
		'pay_amount' => 'int',
		'number' => 'int',
		'create_time' => 'int',
		'status' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'good_id',
		'good_name',
		'good_type',
		'good_key',
		'pay_amount',
		'number',
		'user_name',
		'address',
		'phone',
		'create_time',
		'status',
		'user_id'
	];
}
