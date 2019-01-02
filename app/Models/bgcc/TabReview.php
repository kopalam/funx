<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabReview
 * 
 * @property int $id
 * @property int $category_id
 * @property int $content_id
 * @property int $user_id
 * @property int $create_time
 * @property int $rated_sum
 * @property string $review
 * @property int $status
 * @property int $accuse_count
 * @property string $accuse_history
 * @property int $pid
 * @property int $rated_count
 * @property int $rating
 * @property string $rated_by
 * @property int $accused_status
 * @property int $accused_at
 *
 * @package App\Models\bgcc
 */
class TabReview extends Model
{
	protected $table = 'tab_review';
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'content_id' => 'int',
		'user_id' => 'int',
		'create_time' => 'int',
		'rated_sum' => 'int',
		'status' => 'int',
		'accuse_count' => 'int',
		'pid' => 'int',
		'rated_count' => 'int',
		'rating' => 'int',
		'accused_status' => 'int',
		'accused_at' => 'int'
	];

	protected $fillable = [
		'category_id',
		'content_id',
		'user_id',
		'create_time',
		'rated_sum',
		'review',
		'status',
		'accuse_count',
		'accuse_history',
		'pid',
		'rated_count',
		'rating',
		'rated_by',
		'accused_status',
		'accused_at'
	];
}
