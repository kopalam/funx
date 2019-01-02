<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabAppInvitePoster
 * 
 * @property int $id
 * @property string $name
 * @property int $enabled
 * @property int $create_time
 * @property string $url
 *
 * @package App\Models\bgcc
 */
class TabAppInvitePoster extends Model
{
	protected $table = 'tab_app_invite_posters';
	public $timestamps = false;

	protected $casts = [
		'enabled' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'name',
		'enabled',
		'create_time',
		'url'
	];
}
