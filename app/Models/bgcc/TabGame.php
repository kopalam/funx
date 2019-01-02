<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabGame
 * 
 * @property int $id
 * @property string $game_name
 * @property int $sort
 * @property string $short
 * @property int $game_type_id
 * @property string $game_type_name
 * @property float $game_score
 * @property string $features
 * @property float $recommend_level
 * @property int $apply_status
 * @property bool $modify_status
 * @property int $icon
 * @property int $game_detail_cover
 * @property int $cover
 * @property int $detail_cover
 * @property int $full_cover
 * @property string $screenshot
 * @property string $introduction
 * @property string $and_dow_address
 * @property string $ios_dow_address
 * @property string $add_game_address
 * @property string $ios_game_address
 * @property int $dow_num
 * @property int $recommend_status
 * @property int $pay_status
 * @property int $dow_status
 * @property int $developers
 * @property string $dev_name
 * @property int $create_time
 * @property float $discount
 * @property string $marking
 * @property string $language
 * @property float $dratio
 * @property float $ratio
 * @property int $money
 * @property string $game_appid
 * @property string $game_coin_name
 * @property string $game_coin_ration
 * @property int $category
 * @property int $sdk_version
 * @property int $game_status
 * @property int $relation_game_id
 * @property string $relation_game_name
 * @property string $game_size
 * @property string $material_url
 * @property int $appstatus
 * @property float $bind_recharge_discount
 * @property int $accredit_img
 * @property int $publish_img
 * @property string $back_describe
 * @property int $online_status
 * @property int $online_time
 * @property int $dow_icon
 * @property int $back_map
 * @property string $game_address_size
 * @property bool $down_port
 * @property string $third_level_name
 * @property int $third_level
 * @property int $second_level
 * @property string $second_level_name
 * @property string $first_level_name
 * @property int $first_level
 * @property string $ccustom_service_qq
 * @property bool $white_status
 * @property string $game_tags
 * @property int $is_bgcc_game
 * @property int $is_forbit_bgcc_pay
 *
 * @package App\Models\bgcc
 */
class TabGame extends Model
{
	protected $table = 'tab_game';
	public $timestamps = false;

	protected $casts = [
		'sort' => 'int',
		'game_type_id' => 'int',
		'game_score' => 'float',
		'recommend_level' => 'float',
		'apply_status' => 'int',
		'modify_status' => 'bool',
		'icon' => 'int',
		'game_detail_cover' => 'int',
		'cover' => 'int',
		'detail_cover' => 'int',
		'full_cover' => 'int',
		'dow_num' => 'int',
		'recommend_status' => 'int',
		'pay_status' => 'int',
		'dow_status' => 'int',
		'developers' => 'int',
		'create_time' => 'int',
		'discount' => 'float',
		'dratio' => 'float',
		'ratio' => 'float',
		'money' => 'int',
		'category' => 'int',
		'sdk_version' => 'int',
		'game_status' => 'int',
		'relation_game_id' => 'int',
		'appstatus' => 'int',
		'bind_recharge_discount' => 'float',
		'accredit_img' => 'int',
		'publish_img' => 'int',
		'online_status' => 'int',
		'online_time' => 'int',
		'dow_icon' => 'int',
		'back_map' => 'int',
		'down_port' => 'bool',
		'third_level' => 'int',
		'second_level' => 'int',
		'first_level' => 'int',
		'white_status' => 'bool',
		'is_bgcc_game' => 'int',
		'is_forbit_bgcc_pay' => 'int'
	];

	protected $fillable = [
		'game_name',
		'sort',
		'short',
		'game_type_id',
		'game_type_name',
		'game_score',
		'features',
		'recommend_level',
		'apply_status',
		'modify_status',
		'icon',
		'game_detail_cover',
		'cover',
		'detail_cover',
		'full_cover',
		'screenshot',
		'introduction',
		'and_dow_address',
		'ios_dow_address',
		'add_game_address',
		'ios_game_address',
		'dow_num',
		'recommend_status',
		'pay_status',
		'dow_status',
		'developers',
		'dev_name',
		'create_time',
		'discount',
		'marking',
		'language',
		'dratio',
		'ratio',
		'money',
		'game_appid',
		'game_coin_name',
		'game_coin_ration',
		'category',
		'sdk_version',
		'game_status',
		'relation_game_id',
		'relation_game_name',
		'game_size',
		'material_url',
		'appstatus',
		'bind_recharge_discount',
		'accredit_img',
		'publish_img',
		'back_describe',
		'online_status',
		'online_time',
		'dow_icon',
		'back_map',
		'game_address_size',
		'down_port',
		'third_level_name',
		'third_level',
		'second_level',
		'second_level_name',
		'first_level_name',
		'first_level',
		'ccustom_service_qq',
		'white_status',
		'game_tags',
		'is_bgcc_game',
		'is_forbit_bgcc_pay'
	];
}
