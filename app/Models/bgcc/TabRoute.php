<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabRoute
 * 
 * @property int $id
 * @property string $full_url
 * @property string $url
 * @property bool $status
 *
 * @package App\Models\bgcc
 */
class TabRoute extends Model
{
	protected $table = 'tab_route';
	public $timestamps = false;

	protected $casts = [
		'status' => 'bool'
	];

	protected $fillable = [
		'full_url',
		'url',
		'status'
	];
}
