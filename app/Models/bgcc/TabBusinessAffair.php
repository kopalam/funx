<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabBusinessAffair
 * 
 * @property int $id
 * @property string $account
 * @property string $password
 * @property string $sw_name
 * @property string $phone
 * @property string $qq
 * @property int $inferiors
 * @property int $status
 * @property string $promote_id
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabBusinessAffair extends Model
{
	protected $table = 'tab_business_affairs';
	public $timestamps = false;

	protected $casts = [
		'inferiors' => 'int',
		'status' => 'int',
		'create_time' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'account',
		'password',
		'sw_name',
		'phone',
		'qq',
		'inferiors',
		'status',
		'promote_id',
		'create_time'
	];
}
