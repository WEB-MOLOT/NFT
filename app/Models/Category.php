<?php

namespace App\Models;

use App\Models\Meta\CategoryMeta;
use App\Traits\Model\Actions;
use App\Traits\Model\FormattedJsonDates;
use App\Traits\Model\HasMeta;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
    use Actions, HasMeta, FormattedJsonDates;

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
     * @return string
     */
    public function getMetaModelName(): string
    {
        return CategoryMeta::class;
    }

    /**
     * @return string
     */
    public function getImageLinkAttribute(): string
    {
        return url(Storage::url($this->image));
    }

    /**
     * @param string $code
     */
    public function setColorCodeAttribute(string $code): void
    {
        $this->attributes['color_code'] = Str::substr($code, 1, 6);
    }

    /**
     * @param string $value
     * @return string
     */
    public function getColorCodeAttribute(string $value): string
    {
        return "#{$value}";
    }

    /**
     * @return array
     */
    public function getActionsAttribute(): array
    {
        return [
            'edit' => route('manage.resources.categories.edit', $this),
            'destroy' => route('manage.resources.categories.destroy', $this)
        ];
    }
}
