<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysDocumentArticle
 * 
 * @property int $id
 * @property int $parse
 * @property string $content
 * @property string $template
 * @property int $bookmark
 * @property int $detail_cover
 *
 * @package App\Models\bgcc
 */
class SysDocumentArticle extends Model
{
	protected $table = 'sys_document_article';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'parse' => 'int',
		'bookmark' => 'int',
		'detail_cover' => 'int'
	];

	protected $fillable = [
		'parse',
		'content',
		'template',
		'bookmark',
		'detail_cover'
	];
}
