<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabTagAssoc
 * 
 * @property int $id
 * @property int $tag_id
 * @property int $target_id
 * @property string $category
 *
 * @package App\Models\bgcc
 */
class TabTagAssoc extends Model
{
	protected $table = 'tab_tag_assoc';
	public $timestamps = false;

	protected $casts = [
		'tag_id' => 'int',
		'target_id' => 'int'
	];

	protected $fillable = [
		'tag_id',
		'target_id',
		'category'
	];
}
