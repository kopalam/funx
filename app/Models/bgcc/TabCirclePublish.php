<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabCirclePublish
 * 
 * @property int $id
 * @property int $circle_id
 * @property int $user_id
 * @property string $post_content
 * @property string $post_img
 * @property int $post_type
 * @property int $post_tags
 * @property int $visible_type
 * @property int $is_display
 * @property float $lng
 * @property float $lat
 * @property int $is_official
 * @property int $is_top
 * @property int $is_delete
 * @property int $page_view
 * @property int $like_num
 * @property int $comment_num
 * @property int $create_time
 *
 * @package App\Models\bgcc
 */
class TabCirclePublish extends Model
{
	protected $table = 'tab_circle_publish';
	public $timestamps = false;

	protected $casts = [
		'circle_id' => 'int',
		'user_id' => 'int',
		'post_type' => 'int',
		'post_tags' => 'int',
		'visible_type' => 'int',
		'is_display' => 'int',
		'lng' => 'float',
		'lat' => 'float',
		'is_official' => 'int',
		'is_top' => 'int',
		'is_delete' => 'int',
		'page_view' => 'int',
		'like_num' => 'int',
		'comment_num' => 'int',
		'create_time' => 'int'
	];

	protected $fillable = [
		'circle_id',
		'user_id',
		'post_content',
		'post_img',
		'post_type',
		'post_tags',
		'visible_type',
		'is_display',
		'lng',
		'lat',
		'is_official',
		'is_top',
		'is_delete',
		'page_view',
		'like_num',
		'comment_num',
		'create_time'
	];
}
