<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabPhone
 * 
 * @property int $id
 * @property string $imei1
 * @property string $imei2
 * @property string $sn
 * @property int $phonetype
 * @property int $create_time
 * @property int $update_time
 * @property int $status
 * @property string $account
 * @property int $first_time
 * @property string $first_account
 * @property bool $verify
 * @property int $verify_uptime
 *
 * @package App\Models\bgcc
 */
class TabPhone extends Model
{
	protected $table = 'tab_phone';
	public $timestamps = false;

	protected $casts = [
		'phonetype' => 'int',
		'create_time' => 'int',
		'update_time' => 'int',
		'status' => 'int',
		'first_time' => 'int',
		'verify' => 'bool',
		'verify_uptime' => 'int'
	];

	protected $fillable = [
		'imei1',
		'imei2',
		'sn',
		'phonetype',
		'create_time',
		'update_time',
		'status',
		'account',
		'first_time',
		'first_account',
		'verify',
		'verify_uptime'
	];
}
