<?php

namespace App\Models\funx;

use biliboobrian\lumenAngularCodeGenerator\Model\MicroServiceExtendModel;
use LushDigital\MicroServiceCrud\Models\CrudModelInterface;

/**
 * @property int $id
 * @property string $name
 * @property string $title
 * @property boolean $type
 * @property boolean $status
 * @property string $condition
 */
class TabAuthRule extends MicroServiceExtendModel implements CrudModelInterface
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tab_auth_rule';
    /**
     * @var array
     */
    protected $fillable = ['id', 'name', 'title', 'type', 'status', 'condition'];
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
