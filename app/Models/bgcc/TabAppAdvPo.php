<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabAppAdvPo
 * 
 * @property int $id
 * @property string $category
 * @property int $status
 * @property int $position
 * @property string $create_by
 * @property int $create_time
 * @property string $last_update_by
 * @property int $last_update_time
 * @property string $source
 *
 * @package App\Models\bgcc
 */
class TabAppAdvPo extends Model
{
	protected $table = 'tab_app_adv_pos';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'position' => 'int',
		'create_time' => 'int',
		'last_update_time' => 'int'
	];

	protected $fillable = [
		'category',
		'status',
		'position',
		'create_by',
		'create_time',
		'last_update_by',
		'last_update_time',
		'source'
	];
}
