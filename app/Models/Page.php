<?php

namespace App\Models;

use App\Contracts\PageTemplate;
use App\Models\Meta\PageMeta;
use App\Support\PageTemplates\Builder;
use App\Support\PageTemplates\Template;
use App\Traits\Model\Actions;
use App\Traits\Model\FormattedJsonDates;
use App\Traits\Model\HasMeta;
use App\Traits\Model\IsActive;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Page
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property bool $is_active
 * @property bool $is_index
 * @property string $template
 * @property array $data
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Page extends Model
{
    use HasMeta, Actions, FormattedJsonDates, IsActive;

    protected $fillable = [
        'name', 'slug', 'is_active', 'is_index', 'template', 'data'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_index' => 'boolean',
        'data' => 'array'
    ];

    protected $attributes = [
        'data' => '{}'
    ];

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->is_index ? '' : $this->slug;
    }

    /**
     * @return string
     */
    public function getRouteName(): string
    {
        return Str::snake($this->slug);
    }

    /**
     * @return string
     */
    public function getMetaModelName(): string
    {
        return PageMeta::class;
    }

    /**
     * @return array
     */
    public function getActionsAttribute(): array
    {
        return [
            'show' => route('manage.resources.pages.show', $this),
            'edit' => route('manage.resources.pages.edit', $this),
            'destroy' => route('manage.resources.pages.destroy', $this)
        ];
    }

    /**
     * @return Template
     */
    public function getTemplate(): Template
    {
        return (new Builder)->template($this->template)->setPage($this);
    }
}
