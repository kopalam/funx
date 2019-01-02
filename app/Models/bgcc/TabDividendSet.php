<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabDividendSet
 * 
 * @property int $first_divi
 * @property int $second_divi
 * @property int $third_divi
 * @property int $fourth_divi
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class TabDividendSet extends Model
{
	protected $table = 'tab_dividend_set';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'first_divi' => 'int',
		'second_divi' => 'int',
		'third_divi' => 'int',
		'fourth_divi' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'first_divi',
		'second_divi',
		'third_divi',
		'fourth_divi',
		'status'
	];
}
