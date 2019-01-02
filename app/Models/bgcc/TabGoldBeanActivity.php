<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabGoldBeanActivity
 * 
 * @property int $id
 * @property string $title
 * @property string $desc
 * @property string $content
 * @property string $url
 * @property string $img
 * @property string $remark
 * @property int $start_time
 * @property int $end_time
 * @property int $is_open
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabGoldBeanActivity extends Model
{
	protected $table = 'tab_gold_bean_activity';
	public $timestamps = false;

	protected $casts = [
		'start_time' => 'int',
		'end_time' => 'int',
		'is_open' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'title',
		'desc',
		'content',
		'url',
		'img',
		'remark',
		'start_time',
		'end_time',
		'is_open',
		'create_time'
	];
}
