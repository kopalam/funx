<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabFaqList
 * 
 * @property int $id
 * @property int $cate_id
 * @property string $question
 * @property int $type
 * @property string $answer
 * @property int $sort
 * @property int $is_open
 * @property int $is_del
 * @property int $add_time
 * @property int $upd_time
 *
 * @package App\Models\bgcc
 */
class TabFaqList extends Model
{
	protected $table = 'tab_faq_list';
	public $timestamps = false;

	protected $casts = [
		'cate_id' => 'int',
		'type' => 'int',
		'sort' => 'int',
		'is_open' => 'int',
		'is_del' => 'int',
		'add_time' => 'int',
		'upd_time' => 'int'
	];

	protected $fillable = [
		'cate_id',
		'question',
		'type',
		'answer',
		'sort',
		'is_open',
		'is_del',
		'add_time',
		'upd_time'
	];
}
