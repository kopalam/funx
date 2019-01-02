<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabPointShop
 * 
 * @property int $id
 * @property string $good_name
 * @property float $price
 * @property int $number
 * @property string $good_info
 * @property string $status
 * @property int $create_time
 * @property int $cover
 * @property int $good_type
 * @property string $good_key
 * @property string $good_usage
 *
 * @package App\Models\bgcc
 */
class TabPointShop extends Model
{
	protected $table = 'tab_point_shop';
	public $timestamps = false;

	protected $casts = [
		'price' => 'float',
		'number' => 'int',
		'create_time' => 'int',
		'cover' => 'int',
		'good_type' => 'int'
	];

	protected $fillable = [
		'good_name',
		'price',
		'number',
		'good_info',
		'status',
		'create_time',
		'cover',
		'good_type',
		'good_key',
		'good_usage'
	];
}
