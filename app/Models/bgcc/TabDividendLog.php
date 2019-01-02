<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabDividendLog
 * 
 * @property int $id
 * @property int $promote_id
 * @property int $ratention1
 * @property int $ratention7
 * @property int $ratention15
 * @property int $ratention30
 * @property string $divi_coin
 * @property string $dates
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class TabDividendLog extends Model
{
	protected $table = 'tab_dividend_logs';
	public $timestamps = false;

	protected $casts = [
		'promote_id' => 'int',
		'ratention1' => 'int',
		'ratention7' => 'int',
		'ratention15' => 'int',
		'ratention30' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'promote_id',
		'ratention1',
		'ratention7',
		'ratention15',
		'ratention30',
		'divi_coin',
		'dates',
		'status'
	];
}
