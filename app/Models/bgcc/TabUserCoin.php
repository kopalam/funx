<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabUserCoin
 * 
 * @property int $id
 * @property int $user_id
 * @property string $user_account
 * @property int $num
 * @property int $op_id
 * @property int $banlan_type
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabUserCoin extends Model
{
	protected $table = 'tab_user_coin';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'num' => 'int',
		'op_id' => 'int',
		'banlan_type' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'user_id',
		'user_account',
		'num',
		'op_id',
		'banlan_type',
		'create_time'
	];
}
