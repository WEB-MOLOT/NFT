<?php

namespace App\Models\Meta;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryMeta
 * @package App\Models\Meta
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string $description
 */
class CategoryMeta extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'category_id', 'title', 'description'
    ];
}
