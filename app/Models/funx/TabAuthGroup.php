<?php

namespace App\Models\funx;

use biliboobrian\lumenAngularCodeGenerator\Model\MicroServiceExtendModel;
use LushDigital\MicroServiceCrud\Models\CrudModelInterface;

/**
 * @property int $id
 * @property string $title
 * @property boolean $status
 * @property string $rules
 */
class TabAuthGroup extends MicroServiceExtendModel implements CrudModelInterface
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tab_auth_group';
    /**
     * @var array
     */
    protected $fillable = ['id', 'title', 'status', 'rules'];
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
