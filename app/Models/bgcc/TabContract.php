<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabContract
 * 
 * @property int $id
 * @property int $game_id
 * @property int $contract_number
 * @property int $create_time
 * @property string $status
 * @property int $develop_id
 * @property int $start_time
 * @property int $end_time
 *
 * @package App\Models\bgcc
 */
class TabContract extends Model
{
	protected $table = 'tab_contract';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'contract_number' => 'int',
		'create_time' => 'int',
		'develop_id' => 'int',
		'start_time' => 'int',
		'end_time' => 'int'
	];

	protected $fillable = [
		'game_id',
		'contract_number',
		'create_time',
		'status',
		'develop_id',
		'start_time',
		'end_time'
	];
}
