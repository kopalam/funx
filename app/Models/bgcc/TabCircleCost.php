<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabCircleCost
 * 
 * @property int $id
 * @property int $circle_id
 * @property string $no
 * @property int $amount
 * @property int $create_time
 * @property int $update_time
 * @property string $transactions_id
 * @property string $create_info
 * @property string $backup
 *
 * @package App\Models\bgcc
 */
class TabCircleCost extends Model
{
	protected $table = 'tab_circle_cost';
	public $timestamps = false;

	protected $casts = [
		'circle_id' => 'int',
		'amount' => 'int',
		'create_time' => 'int',
		'update_time' => 'int'
	];

	protected $fillable = [
		'circle_id',
		'no',
		'amount',
		'create_time',
		'update_time',
		'transactions_id',
		'create_info',
		'backup'
	];
}
