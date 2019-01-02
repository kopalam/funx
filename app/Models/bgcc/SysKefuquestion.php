<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysKefuquestion
 * 
 * @property int $id
 * @property string $title
 * @property string $zititle
 * @property int $status
 * @property string $contend
 * @property string $zititleurl
 * @property string $titleurl
 * @property int $istitle
 *
 * @package App\Models\bgcc
 */
class SysKefuquestion extends Model
{
	protected $table = 'sys_kefuquestion';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'istitle' => 'int'
	];

	protected $fillable = [
		'title',
		'zititle',
		'status',
		'contend',
		'zititleurl',
		'titleurl',
		'istitle'
	];
}
