<?php

namespace App\Models\Auth\Role;

use App\Models\Auth\Role\Traits\Attribute\RoleAttribute;
use App\Models\Auth\Role\Traits\Relationship\RoleRelationship;
use App\Models\Auth\Role\Traits\RoleAccess;
use App\Models\Auth\Role\Traits\Scope\RoleScope;
use App\Models\BaseModel;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Role.
 */
class Role extends BaseModel
{
    use RoleScope,
        ModelTrait,
        RoleAccess,
        RoleAttribute,
        RoleRelationship,
        SoftDeletes {
            RoleAttribute::getEditButtonAttribute insteadof ModelTrait;
            RoleAttribute::getDeleteButtonAttribute insteadof ModelTrait;
        }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'all', 'sort'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('access.roles_table');
    }
}
