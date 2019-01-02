<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabGamePck
 * 
 * @property int $id
 * @property string $pckname
 * @property string $gamename
 * @property string $product
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class TabGamePck extends Model
{
	protected $table = 'tab_game_pck';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'pckname',
		'gamename',
		'product',
		'status'
	];
}
