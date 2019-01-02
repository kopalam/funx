<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabProvideTag
 * 
 * @property int $id
 * @property string $name
 * @property int $create_time
 * @property int $status
 * @property string $description
 *
 * @package App\Models\bgcc
 */
class TabProvideTag extends Model
{
	protected $table = 'tab_provide_tag';
	public $timestamps = false;

	protected $casts = [
		'create_time' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'create_time',
		'status',
		'description'
	];
}
