<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabUserInviteCode
 * 
 * @property int $id
 * @property int $user_id
 * @property string $code
 * @property int $can_use
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabUserInviteCode extends Model
{
	protected $table = 'tab_user_invite_code';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'can_use' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'user_id',
		'code',
		'can_use',
		'create_time'
	];
}
