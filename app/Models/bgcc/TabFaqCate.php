<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabFaqCate
 * 
 * @property int $id
 * @property int $pid
 * @property string $title
 * @property string $content
 * @property string $remark
 * @property int $is_open
 * @property int $is_del
 * @property int $add_time
 * @property int $upd_time
 *
 * @package App\Models\bgcc
 */
class TabFaqCate extends Model
{
	protected $table = 'tab_faq_cate';
	public $timestamps = false;

	protected $casts = [
		'pid' => 'int',
		'is_open' => 'int',
		'is_del' => 'int',
		'add_time' => 'int',
		'upd_time' => 'int'
	];

	protected $fillable = [
		'pid',
		'title',
		'content',
		'remark',
		'is_open',
		'is_del',
		'add_time',
		'upd_time'
	];
}
