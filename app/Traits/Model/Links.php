<?php

namespace App\Traits\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Trait Links
 * @package App\Traits\Model
 * @mixin Model
 */
trait Links
{
    /**
     * @return void
     */
    public function initializeLinks(): void
    {
        $this->appends[] = 'links';
    }

    /**
     * @return array
     */
    abstract public function getLinksAttribute(): array;
}
