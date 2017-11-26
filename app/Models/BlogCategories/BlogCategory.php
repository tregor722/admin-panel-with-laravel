<?php

namespace App\Models\BlogCategories;

use App\Models\BaseModel;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\BlogCategories\Traits\Attribute\BlogCategoryAttribute;
use App\Models\BlogCategories\Traits\Relationship\BlogCategoryRelationship;

class BlogCategory extends BaseModel
{
    use ModelTrait,
        SoftDeletes,
        BlogCategoryAttribute,
        BlogCategoryRelationship {
            // BlogCategoryAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    protected $fillable = ['name', 'status', 'created_by', 'updated_by'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('access.blog_categories_table');
    }
}
