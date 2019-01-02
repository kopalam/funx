<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysDocumentDownload
 * 
 * @property int $id
 * @property int $parse
 * @property string $content
 * @property string $template
 * @property int $file_id
 * @property int $download
 * @property int $size
 *
 * @package App\Models\bgcc
 */
class SysDocumentDownload extends Model
{
	protected $table = 'sys_document_download';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'parse' => 'int',
		'file_id' => 'int',
		'download' => 'int',
		'size' => 'int'
	];

	protected $fillable = [
		'parse',
		'content',
		'template',
		'file_id',
		'download',
		'size'
	];
}
