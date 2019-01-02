<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabAdvPo
 * 
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $module
 * @property int $type
 * @property int $status
 * @property string $data
 * @property string $width
 * @property string $height
 * @property string $margin
 * @property string $padding
 * @property string $theme
 *
 * @package App\Models\bgcc
 */
class TabAdvPo extends Model
{
	protected $table = 'tab_adv_pos';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'title',
		'module',
		'type',
		'status',
		'data',
		'width',
		'height',
		'margin',
		'padding',
		'theme'
	];
}
