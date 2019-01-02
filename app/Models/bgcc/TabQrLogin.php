<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabQrLogin
 * 
 * @property int $id
 * @property string $uid
 * @property string $token
 * @property int $status
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabQrLogin extends Model
{
	protected $table = 'tab_qr_login';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'create_time' => 'int'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'uid',
		'token',
		'status',
		'create_time'
	];
}
