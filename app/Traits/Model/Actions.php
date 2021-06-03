<?php

namespace App\Traits\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Trait Actions
 * @package App\Traits\Model
 * @mixin Model
 */
trait Actions
{
    /**
     * @return void
     */
    public function initializeActions(): void
    {
        $this->appends[] = 'actions';
    }

    /**
     * @return array
     */
    abstract function getActionsAttribute(): array;
}
