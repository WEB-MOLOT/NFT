<?php

namespace App\Models;

use App\Traits\Model\Actions;
use App\Traits\Model\FormattedJsonDates;
use App\Traits\Model\ProjectDates;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use ReflectionClass;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Class Project
 * @package App\Models
 * @property int $id
 * @property int $status
 * @property bool $is_verified
 * @property bool $is_published
 * @property string $name
 * @property string $logo
 * @property int $currency
 * @property int $min_price
 * @property int $max_price
 * @property int $available_count
 * @property string $content
 * @property Carbon $started_at
 * @property int $started_at_timezone
 * @property Carbon $ended_at
 * @property int $ended_at_timezone
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property string $slug
 * @property ?User $user
 * @property Collection|Category[] $categories
 *
 * @method static $this isPublished()
 */
class Project extends Model implements HasMedia
{
    use ProjectDates, Actions, FormattedJsonDates, InteractsWithMedia, SoftDeletes;

    public const STATUS_UPCOMING = 1;
    public const STATUS_ACTIVE = 2;

    public const CURRENCY_USD = 1;
    public const CURRENCY_ETH = 2;
    public const CURRENCY_BNB = 3;

    public const RATING_FACTOR = 10;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'status', 'is_verified', 'is_published', 'name', 'logo', 'rating', 'currency', 'min_price', 'max_price',
        'available_count', 'content', 'started_at', 'started_at_timezone', 'ended_at', 'ended_at_timezone', 'user_id'
    ];

    protected $casts = [
        'is_verified' => 'boolean',
        'is_published' => 'boolean'
    ];

    protected $appends = [
        'currency_name'
    ];

    /**
     * @return array
     */
    public function getActionsAttribute(): array
    {
        return [
            'edit' => route('manage.resources.projects.edit', $this)
        ];
    }

    /**
     * @param int|null $value
     * @return float|null
     */
    public function getRatingAttribute(?int $value): ?float
    {
        return $value !== null ? floatval($value / 10) : null;
    }

    /**
     * @param float|null $value
     */
    public function setRatingAttribute(?float $value): void
    {
        $this->attributes['rating'] = $value !== null ? $value * self::RATING_FACTOR : null;
    }

    /**
     * @return string
     */
    public function getSlugAttribute(): string
    {
        return Str::slug($this->name);
    }

    /**
     * @return string|null
     */
    public function getCurrencyNameAttribute(): ?string
    {
        $reflection = new ReflectionClass($this);

        foreach($reflection->getConstants() as $name => $value) {
            if(Str::is('CURRENCY_*', $name) && $value == $this->currency) {
                return Str::after($name, 'CURRENCY_');
            }
        }

        return null;
    }

    public function socials(): HasMany
    {
        return $this->hasMany(ProjectSocial::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'project_categories');
    }

    /**
     * @param Builder $builder
     */
    public function scopeIsPublished(Builder $builder): void
    {
        $builder->where('is_published', 1);
    }

    /**
     * @return int[]
     */
    public static function currencies(): array
    {
        return [
            self::CURRENCY_USD, self::CURRENCY_ETH, self::CURRENCY_BNB
        ];
    }

    /**
     * @return int[]
     */
    public static function statuses(): array
    {
        return [
            self::STATUS_UPCOMING, self::STATUS_ACTIVE
        ];
    }
}
