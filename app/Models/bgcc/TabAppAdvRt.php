<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabAppAdvRt
 * 
 * @property string $game_id_service
 * @property string $article_id_service
 * @property int $id
 *
 * @package App\Models\bgcc
 */
class TabAppAdvRt extends Model
{
	protected $table = 'tab_app_adv_rt';
	public $timestamps = false;

	protected $fillable = [
		'game_id_service',
		'article_id_service'
	];
}
