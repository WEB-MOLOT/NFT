<?php

namespace App\Models;

use App\Traits\Model\Actions;
use App\Traits\Model\FormattedJsonDates;
use App\Traits\Model\ProjectDates;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;
use ReflectionClass;

/**
 * Class Project
 * @package App\Models
 * @property int $id
 * @property int $status
 * @property bool $is_verified
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
 */
class Project extends Model
{
    use ProjectDates, Actions, FormattedJsonDates;

    public const STATUS_CREATED = 1;
    public const STATUS_UPCOMING = 2;
    public const STATUS_ACTIVE = 3;
    public const STATUS_CLOSED = 4;

    public const CURRENCY_USD = 1;
    public const CURRENCY_ETH = 2;
    public const CURRENCY_BNB = 3;

    public const RATING_FACTOR = 10;

    protected $fillable = [
        'status', 'is_verified', 'name', 'logo', 'rating', 'currency', 'min_price', 'max_price',
        'available_count', 'content', 'started_at', 'started_at_timezone', 'ended_at', 'ended_at_timezone', 'user_id'
    ];

    protected $casts = [
        'is_verified' => 'boolean'
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

    /**
     * @return HasOne
     */
    public function details(): HasOne
    {
        return $this->hasOne(ProjectDetail::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @param Builder $builder
     */
    public function scopeIsActive(Builder $builder): void
    {
        $builder->whereIn('status', [self::STATUS_ACTIVE, self::STATUS_UPCOMING]);
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
            self::STATUS_CREATED, self::STATUS_UPCOMING, self::STATUS_ACTIVE, self::STATUS_CLOSED
        ];
    }
}