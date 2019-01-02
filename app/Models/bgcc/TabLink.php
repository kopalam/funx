<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabLink
 * 
 * @property int $id
 * @property string $title
 * @property string $link_url
 * @property int $status
 * @property int $type
 * @property int $mark
 * @property string $remark
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabLink extends Model
{
	protected $table = 'tab_links';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'type' => 'int',
		'mark' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'title',
		'link_url',
		'status',
		'type',
		'mark',
		'remark',
		'create_time'
	];
}
