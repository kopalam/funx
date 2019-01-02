<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabUserHeadline
 * 
 * @property int $uid
 * @property int $hid
 * @property int $sorts
 *
 * @package App\Models\bgcc
 */
class TabUserHeadline extends Model
{
	protected $table = 'tab_user_headline';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'uid' => 'int',
		'hid' => 'int',
		'sorts' => 'int'
	];

	protected $fillable = [
		'uid',
		'hid',
		'sorts'
	];
}
