<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\funx;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabHeadlineArticle
 *
 * @property int $status
 * @property string $name
 * @property string $set_tools
 *
 * @package App\Models\bgcc
 */
class TabTools extends Model
{
	protected $table = 'tab_tools';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
	];

	protected $fillable = [
		'name',
        'set_tools'
	];
}
