<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Carbon\Carbon;
use Reliese\Database\Eloquent\Model;

/**
 * Class SysDateList
 * 
 * @property Carbon $time
 *
 * @package App\Models\bgcc
 */
class SysDateList extends Model
{
	protected $table = 'sys_date_list';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'time'
	];

	protected $fillable = [
		'time'
	];
}
