<?php

namespace App\Models\funx;

use biliboobrian\lumenAngularCodeGenerator\Model\MicroServiceExtendModel;
use LushDigital\MicroServiceCrud\Models\CrudModelInterface;

/**
 * @property int $id
 * @property string $appid
 * @property string $appsecret
 * @property string $access_token
 * @property int $dates
 * @property int $uid
 * @property string $cauth_iden
 * @property boolean $status
 * @property boolean $types 1微信公众号 2 小程序
 */
class TabCauths extends MicroServiceExtendModel implements CrudModelInterface
{
    /**
     * @var array
     */
    protected $fillable = ['id', 'appid', 'appsecret', 'access_token', 'dates', 'uid', 'cauth_iden', 'status', 'types'];
    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * {@inheritdoc}
     */
    public function getValidationRules($mode = 'create', $primaryKeyValue = null)
    {
        return array();
    }
}
