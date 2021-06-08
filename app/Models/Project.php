<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

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
 * @property Carbon $ended_at
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property string $slug
 * @property ?User $user
 */
class Project extends Model
{
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
        'available_count', 'content', 'started_at', 'ended_at', 'user_id'
    ];

    protected $casts = [
        'is_verified' => 'boolean',
        'started_at' => 'datetime',
        'ended_at' => 'datetime'
    ];

    /**
     * @param int $value
     * @return float
     */
    public function getRatingAttribute(int $value): float
    {
        return floatval($value / 10);
    }

    /**
     * @param float $value
     */
    public function setRatingAttribute(float $value): void
    {
        $this->attributes['rating'] = $value * self::RATING_FACTOR;
    }

    /**
     * @return string
     */
    public function getSlugAttribute(): string
    {
        return Str::slug($this->name);
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
