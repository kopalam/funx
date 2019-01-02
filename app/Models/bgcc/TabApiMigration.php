<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabApiMigration
 * 
 * @property int $id
 * @property string $migration
 * @property int $batch
 *
 * @package App\Models\bgcc
 */
class TabApiMigration extends Model
{
	protected $table = 'tab_api_migrations';
	public $timestamps = false;

	protected $casts = [
		'batch' => 'int'
	];

	protected $fillable = [
		'migration',
		'batch'
	];
}
