<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabPush
 * 
 * @property int $id
 * @property string $push_name
 * @property string $app_key
 * @property string $master_secret
 * @property int $status
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabPush extends Model
{
	protected $table = 'tab_push';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'create_time' => 'int'
	];

	protected $hidden = [
		'master_secret'
	];

	protected $fillable = [
		'push_name',
		'app_key',
		'master_secret',
		'status',
		'create_time'
	];
}
