<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabTagCategory
 * 
 * @property int $id
 * @property string $category_name
 *
 * @package App\Models\bgcc
 */
class TabTagCategory extends Model
{
	protected $table = 'tab_tag_category';
	public $timestamps = false;

	protected $fillable = [
		'category_name'
	];
}
