<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabSeo
 * 
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $seo_title
 * @property string $seo_keyword
 * @property string $seo_description
 *
 * @package App\Models\bgcc
 */
class TabSeo extends Model
{
	protected $table = 'tab_seo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'name',
		'title',
		'seo_title',
		'seo_keyword',
		'seo_description'
	];
}
