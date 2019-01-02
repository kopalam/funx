<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSiteGiftRecord
 * 
 * @property int $id
 * @property int $site_gift_id
 * @property string $ip
 * @property int $create_time
 * @property string $novice
 *
 * @package App\Models\bgcc
 */
class TabSiteGiftRecord extends Model
{
	protected $table = 'tab_site_gift_record';
	public $timestamps = false;

	protected $casts = [
		'site_gift_id' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'site_gift_id',
		'ip',
		'create_time',
		'novice'
	];
}
