<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabHeadlineArticle
 * 
 * @property int $id
 * @property string $article_title
 * @property string $article_author
 * @property string $article_come
 * @property string $article_cate_id
 * @property string $article_cover_image
 * @property string $article_content
 * @property int $status
 * @property int $article_create_time
 * @property int $article_type
 * @property string $article_tags
 * @property string article_upload_video
 *
 * @package App\Models\bgcc
 */
class TabHeadlineArticle extends Model
{
	protected $table = 'tab_headline_article';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'article_create_time' => 'int',
		'article_type' => 'int'
	];

	protected $fillable = [
		'article_title',
		'article_author',
		'article_come',
		'article_cate_id',
		'article_cover_image',
		'article_content',
		'status',
		'article_create_time',
		'article_type',
        'article_upload_video',
		'article_tags'
	];
}
