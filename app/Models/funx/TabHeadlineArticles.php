<?php

namespace App\Models\funx;

use biliboobrian\lumenAngularCodeGenerator\Model\MicroServiceExtendModel;
use LushDigital\MicroServiceCrud\Models\CrudModelInterface;

/**
 * @property int $id
 * @property string $article_title
 * @property string $article_author
 * @property string $article_come
 * @property string $article_cate_id
 * @property string $article_cover_image
 * @property string $article_content
 * @property boolean $status
 * @property int $article_create_time
 * @property string $article_type
 * @property string $article_tags
 * @property string $article_upload_video
 * @property string $md5
 */
class TabHeadlineArticles extends MicroServiceExtendModel implements CrudModelInterface
{
    /**
     * @var array
     */
    protected $fillable = ['id', 'article_title', 'article_author', 'article_come', 'article_cate_id', 'article_cover_image', 'article_content', 'status', 'article_create_time', 'article_type', 'article_tags', 'article_upload_video', 'md5'];
    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * {@inheritdoc}
     */
    public function getValidationRules($mode = 'create', $primaryKeyValue = null)
    {
        return array();
    }
}
