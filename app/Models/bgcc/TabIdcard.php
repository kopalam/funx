<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabIdcard
 * 
 * @property int $id
 * @property int $user_id
 * @property string $id_card_number
 * @property string $face_image
 * @property string $post_image
 * @property string $post_paper
 * @property string $id_card_image
 * @property string $oss_post_image
 * @property string $oss_face_image
 * @property string $oss_post_paper
 * @property string $oss_idcard_image
 * @property string $name
 * @property int $dates
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class TabIdcard extends Model
{
	protected $table = 'tab_idcard';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'dates' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'user_id',
		'id_card_number',
		'face_image',
		'post_image',
		'post_paper',
		'id_card_image',
		'oss_post_image',
		'oss_face_image',
		'oss_post_paper',
		'oss_idcard_image',
		'name',
		'dates',
		'status'
	];
}
