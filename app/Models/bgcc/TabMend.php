<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabMend
 * 
 * @property int $id
 * @property int $user_id
 * @property string $user_account
 * @property string $user_nickname
 * @property int $promote_id
 * @property string $promote_account
 * @property int $promote_id_to
 * @property string $promote_account_to
 * @property string $remark
 * @property int $create_time
 * @property int $op_id
 * @property string $op_account
 *
 * @package App\Models\bgcc
 */
class TabMend extends Model
{
	protected $table = 'tab_mend';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'promote_id' => 'int',
		'promote_id_to' => 'int',
		'create_time' => 'int',
		'op_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'user_account',
		'user_nickname',
		'promote_id',
		'promote_account',
		'promote_id_to',
		'promote_account_to',
		'remark',
		'create_time',
		'op_id',
		'op_account'
	];
}
