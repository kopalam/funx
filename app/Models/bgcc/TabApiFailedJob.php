<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Carbon\Carbon;
use Reliese\Database\Eloquent\Model;

/**
 * Class TabApiFailedJob
 * 
 * @property int $id
 * @property string $connection
 * @property string $queue
 * @property string $payload
 * @property string $exception
 * @property Carbon $failed_at
 *
 * @package App\Models\bgcc
 */
class TabApiFailedJob extends Model
{
	protected $table = 'tab_api_failed_jobs';
	public $timestamps = false;

	protected $dates = [
		'failed_at'
	];

	protected $fillable = [
		'connection',
		'queue',
		'payload',
		'exception',
		'failed_at'
	];
}
