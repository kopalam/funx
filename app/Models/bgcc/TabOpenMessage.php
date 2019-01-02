<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabOpenMessage
 * 
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $create_time
 * @property int $develop_id
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class TabOpenMessage extends Model
{
	protected $table = 'tab_open_message';
	public $timestamps = false;

	protected $casts = [
		'create_time' => 'int',
		'develop_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'title',
		'content',
		'create_time',
		'develop_id',
		'status'
	];
}
