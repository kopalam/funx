<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabHeadlineType
 * 
 * @property int $id
 * @property string $name
 * @property int $sorts
 * @property int $status
 * @property int $diff
 *
 * @package App\Models\bgcc
 */
class TabHeadlineType extends Model
{
	protected $table = 'tab_headline_types';
	public $timestamps = false;

	protected $casts = [
		'sorts' => 'int',
		'status' => 'int',
		'diff' => 'int'
	];

	protected $fillable = [
		'name',
		'sorts',
		'status',
		'diff'
	];
}
