<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabAdvCategory
 * 
 * @property int $id
 * @property string $name
 * @property string $remark
 * @property string $source
 * @property int $multi_source
 *
 * @package App\Models\bgcc
 */
class TabAdvCategory extends Model
{
	protected $table = 'tab_adv_category';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'multi_source' => 'int'
	];

	protected $fillable = [
		'name',
		'remark',
		'source',
		'multi_source'
	];
}
