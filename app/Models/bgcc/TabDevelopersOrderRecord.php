<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabDevelopersOrderRecord
 * 
 * @property int $id
 * @property int $uid
 * @property string $src_address
 * @property string $dst_address
 * @property float $amount
 * @property string $orderno
 * @property string $tradeno
 * @property int $create_time
 * @property int $type
 *
 * @package App\Models\bgcc
 */
class TabDevelopersOrderRecord extends Model
{
	protected $table = 'tab_developers_order_record';
	public $timestamps = false;

	protected $casts = [
		'uid' => 'int',
		'amount' => 'float',
		'create_time' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'uid',
		'src_address',
		'dst_address',
		'amount',
		'orderno',
		'tradeno',
		'create_time',
		'type'
	];
}
