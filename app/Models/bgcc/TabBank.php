<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabBank
 * 
 * @property int $id
 * @property string $bank
 * @property string $bank_name
 * @property string $account_name
 * @property string $bank_account
 * @property string $bank_link_man
 * @property string $bank_link_phone
 * @property int $dep_id
 * @property int $create_time
 * @property int $update_time
 *
 * @package App\Models\bgcc
 */
class TabBank extends Model
{
	protected $table = 'tab_bank';
	public $timestamps = false;

	protected $casts = [
		'dep_id' => 'int',
		'create_time' => 'int',
		'update_time' => 'int'
	];

	protected $fillable = [
		'bank',
		'bank_name',
		'account_name',
		'bank_account',
		'bank_link_man',
		'bank_link_phone',
		'dep_id',
		'create_time',
		'update_time'
	];
}
