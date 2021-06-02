<?php

namespace App\Models;

use App\Models\Meta\PageMeta;
use App\Traits\Model\HasMeta;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Page
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property bool $is_active
 * @property string $template
 * @property array $data
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Page extends Model
{
    use HasMeta;

    protected $fillable = [
        'name', 'slug', 'is_active', 'template', 'data'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'data' => 'array'
    ];

    /**
     * @return string
     */
    public function getMetaModelName(): string
    {
        return PageMeta::class;
    }

    public function getTemplate()
    {
        // TODO
    }
}
