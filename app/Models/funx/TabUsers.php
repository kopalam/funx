<?php

namespace App\Models\funx;

use biliboobrian\lumenAngularCodeGenerator\Model\MicroServiceExtendModel;
use LushDigital\MicroServiceCrud\Models\CrudModelInterface;

/**
 * @property int $id
 * @property string $openId
 * @property string $nickName
 * @property int $gender
 * @property string $language
 * @property string $city
 * @property string $province
 * @property string $country
 * @property string $avatarUrl
 * @property int $reg_time
 * @property string $unionId
 * @property int $status
 */
class TabUsers extends MicroServiceExtendModel implements CrudModelInterface
{
    /**
     * @var array
     */
    protected $fillable = ['id', 'openId', 'nickName', 'gender', 'language', 'city', 'province', 'country', 'avatarUrl', 'reg_time', 'unionId', 'status'];
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
