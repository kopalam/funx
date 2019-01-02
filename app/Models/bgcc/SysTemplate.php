<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class SysTemplate
 * 
 * @property int $id
 * @property string $temname
 * @property string $mark
 * @property int $picture
 * @property string $path
 *
 * @package App\Models\bgcc
 */
class SysTemplate extends Model
{
	protected $table = 'sys_template';
	public $timestamps = false;

	protected $casts = [
		'picture' => 'int'
	];

	protected $fillable = [
		'temname',
		'mark',
		'picture',
		'path'
	];
}
