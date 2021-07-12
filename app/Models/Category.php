<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * Class Category
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $image
 * @property string $color_code
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Category extends Model
{
    use HasSlug;

    protected $fillable = [
        'name', 'slug', 'image', 'color_code'
    ];

    protected $hidden = [
        'image', 'created_at', 'updated_at'
    ];

    protected $appends = [
        'image_link'
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function projects() {
        return $this->belongsToMany(Project::class, 'project_categories')->where('is_published', 1);
    }

    public function getImageLinkAttribute() {

    }
    /**
     * @return string
     */
//    public function getMetaModelName(): string
//    {
//        return CategoryMeta::class;
//    }
}
