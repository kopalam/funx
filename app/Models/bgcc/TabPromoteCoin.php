<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabPromoteCoin
 * 
 * @property int $id
 * @property int $promote_id
 * @property int $promote_type
 * @property int $num
 * @property int $create_time
 * @property int $op_id
 * @property int $type
 * @property int $banlan_type
 * @property int $source_id
 *
 * @package App\Models\bgcc
 */
class TabPromoteCoin extends Model
{
	protected $table = 'tab_promote_coin';
	public $timestamps = false;

	protected $casts = [
		'promote_id' => 'int',
		'promote_type' => 'int',
		'num' => 'int',
		'create_time' => 'int',
		'op_id' => 'int',
		'type' => 'int',
		'banlan_type' => 'int',
		'source_id' => 'int'
	];

	protected $fillable = [
		'promote_id',
		'promote_type',
		'num',
		'create_time',
		'op_id',
		'type',
		'banlan_type',
		'source_id'
	];
}
