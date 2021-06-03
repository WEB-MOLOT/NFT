<?php

namespace App\Traits\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Trait IsActive
 * @package App\Traits\Model
 * @mixin Model
 *
 * @method Builder|$this whereIsActive(bool $active = true)
 */
trait IsActive
{
    /**
     * @param Builder $builder
     * @param bool $active
     */
    public function scopeWhereIsActive(Builder $builder, bool $active = true): void
    {
        $builder->where('is_active', $active);
    }
}
