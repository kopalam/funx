<?php

namespace App\Models\funx;

use biliboobrian\lumenAngularCodeGenerator\Model\MicroServiceExtendModel;
use LushDigital\MicroServiceCrud\Models\CrudModelInterface;

/**
 * @property int $id
 * @property int $uid
 * @property int $group_id
 */
class TabAuthGroupAccess extends MicroServiceExtendModel implements CrudModelInterface
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tab_auth_group_access';
    /**
     * @var array
     */
    protected $fillable = ['id', 'uid', 'group_id'];
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
