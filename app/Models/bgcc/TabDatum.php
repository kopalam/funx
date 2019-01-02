<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabDatum
 * 
 * @property int $id
 * @property int $player_regist_yes
 * @property int $player_regist_tod
 * @property int $player_regist_week
 * @property int $player_reigst_mon
 * @property int $player_regist_all
 * @property int $player_age_adult
 * @property int $player_age_youth
 * @property int $act_yes
 * @property int $act_tod
 * @property int $act_week
 * @property int $act_mon
 * @property int $payer_yes
 * @property int $payer_tod
 * @property int $payer_all
 * @property float $pay_add_yes
 * @property float $pay_add_tod
 * @property float $pay_add_all
 * @property float $pay_tod
 * @property float $pay_week
 * @property float $pay_mon
 * @property float $pay_all
 * @property int $pay_game_rmb
 * @property float $pay_game_bgcc
 * @property int $game_add_yes
 * @property int $game_add_tod
 * @property int $game_add_all
 * @property int $game_and_all
 * @property int $game_ios_all
 * @property int $pro_add_yes
 * @property int $pro_add_tod
 * @property int $pro_add_all
 * @property int $pro_complete
 * @property float $deposit_pay_all
 * @property float $pro_pay_all
 * @property int $pro_player_all
 * @property int $pro_pay_all_bgcc
 * @property int $pro_pay_game_rmb
 * @property int $pro_pay_game_bgcc
 * @property int $create_time
 * @property int $phone_blackshark
 *
 * @package App\Models\bgcc
 */
class TabDatum extends Model
{
	protected $table = 'tab_data';
	public $timestamps = false;

	protected $casts = [
		'player_regist_yes' => 'int',
		'player_regist_tod' => 'int',
		'player_regist_week' => 'int',
		'player_reigst_mon' => 'int',
		'player_regist_all' => 'int',
		'player_age_adult' => 'int',
		'player_age_youth' => 'int',
		'act_yes' => 'int',
		'act_tod' => 'int',
		'act_week' => 'int',
		'act_mon' => 'int',
		'payer_yes' => 'int',
		'payer_tod' => 'int',
		'payer_all' => 'int',
		'pay_add_yes' => 'float',
		'pay_add_tod' => 'float',
		'pay_add_all' => 'float',
		'pay_tod' => 'float',
		'pay_week' => 'float',
		'pay_mon' => 'float',
		'pay_all' => 'float',
		'pay_game_rmb' => 'int',
		'pay_game_bgcc' => 'float',
		'game_add_yes' => 'int',
		'game_add_tod' => 'int',
		'game_add_all' => 'int',
		'game_and_all' => 'int',
		'game_ios_all' => 'int',
		'pro_add_yes' => 'int',
		'pro_add_tod' => 'int',
		'pro_add_all' => 'int',
		'pro_complete' => 'int',
		'deposit_pay_all' => 'float',
		'pro_pay_all' => 'float',
		'pro_player_all' => 'int',
		'pro_pay_all_bgcc' => 'int',
		'pro_pay_game_rmb' => 'int',
		'pro_pay_game_bgcc' => 'int',
		'create_time' => 'int',
		'phone_blackshark' => 'int'
	];

	protected $fillable = [
		'player_regist_yes',
		'player_regist_tod',
		'player_regist_week',
		'player_reigst_mon',
		'player_regist_all',
		'player_age_adult',
		'player_age_youth',
		'act_yes',
		'act_tod',
		'act_week',
		'act_mon',
		'payer_yes',
		'payer_tod',
		'payer_all',
		'pay_add_yes',
		'pay_add_tod',
		'pay_add_all',
		'pay_tod',
		'pay_week',
		'pay_mon',
		'pay_all',
		'pay_game_rmb',
		'pay_game_bgcc',
		'game_add_yes',
		'game_add_tod',
		'game_add_all',
		'game_and_all',
		'game_ios_all',
		'pro_add_yes',
		'pro_add_tod',
		'pro_add_all',
		'pro_complete',
		'deposit_pay_all',
		'pro_pay_all',
		'pro_player_all',
		'pro_pay_all_bgcc',
		'pro_pay_game_rmb',
		'pro_pay_game_bgcc',
		'create_time',
		'phone_blackshark'
	];
}
