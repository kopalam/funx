<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabUserAddress
 * 
 * @property int $id
 * @property int $user_id
 * @property string $address
 * @property string $phone
 * @property int $is_default
 * @property int $create_time
 * @property string $name
 * @property string $city
 *
 * @package App\Models\bgcc
 */
class TabUserAddress extends Model
{
	protected $table = 'tab_user_address';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'is_default' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'user_id',
		'address',
		'phone',
		'is_default',
		'create_time',
		'name',
		'city'
	];
}
