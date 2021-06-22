<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

/**
 * Class FilterService
 * @package App\Services
 */
class FilterService
{
    public const ORDER_TIME = 1;
    public const ORDER_PRICE = 2;
    public const ORDER_RATING = 3;

    public const DEFAULT_ORDER = self::ORDER_TIME;
    public const DEFAULT_ORDER_DIRECTION = 'asc';

    /**
     * @return int[]
     */
    public static function order(): array
    {
        return [
            self::ORDER_TIME, self::ORDER_PRICE, self::ORDER_RATING
        ];
    }
}
