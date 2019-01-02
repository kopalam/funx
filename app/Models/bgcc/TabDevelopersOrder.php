<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabDevelopersOrder
 * 
 * @property int $id
 * @property int $uid
 * @property string $account
 * @property string $name
 * @property float $amount
 * @property int $onsale
 * @property int $sort
 * @property string $address
 * @property int $create_time
 * @property int $update_time
 * @property int $sale_time
 *
 * @package App\Models\bgcc
 */
class TabDevelopersOrder extends Model
{
	protected $table = 'tab_developers_order';
	public $timestamps = false;

	protected $casts = [
		'uid' => 'int',
		'amount' => 'float',
		'onsale' => 'int',
		'sort' => 'int',
		'create_time' => 'int',
		'update_time' => 'int',
		'sale_time' => 'int'
	];

	protected $fillable = [
		'uid',
		'account',
		'name',
		'amount',
		'onsale',
		'sort',
		'address',
		'create_time',
		'update_time',
		'sale_time'
	];
}
