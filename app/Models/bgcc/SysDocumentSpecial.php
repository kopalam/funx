<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysDocumentSpecial
 * 
 * @property int $id
 * @property string $self_id
 * @property string $content
 * @property string $source
 * @property string $author
 * @property int $cover
 * @property int $full_cover
 *
 * @package App\Models\bgcc
 */
class SysDocumentSpecial extends Model
{
	protected $table = 'sys_document_special';
	public $timestamps = false;

	protected $casts = [
		'cover' => 'int',
		'full_cover' => 'int'
	];

	protected $fillable = [
		'self_id',
		'content',
		'source',
		'author',
		'cover',
		'full_cover'
	];
}
