<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\bgcc;

use Reliese\Database\Eloquent\Model;

/**
 * Class TabBlockChain
 * 
 * @property int $id
 * @property int $uid
 * @property string $account
 * @property string $type
 * @property string $secret
 * @property string $publicKey
 * @property string $privateKey
 * @property string $address
 * @property int $create_time
 * @property int $status
 *
 * @package App\Models\bgcc
 */
class TabBlockChain extends Model
{
	protected $table = 'tab_block_chain';
	public $timestamps = false;

	protected $casts = [
		'uid' => 'int',
		'create_time' => 'int',
		'status' => 'int'
	];

	protected $hidden = [
		'secret'
	];

	protected $fillable = [
		'uid',
		'account',
		'type',
		'secret',
		'publicKey',
		'privateKey',
		'address',
		'create_time',
		'status'
	];
}
