<?php

namespace App\Traits\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FormattedJsonDates
 * @package App\Traits\Model
 * @mixin Model
 */
trait FormattedJsonDates
{
    /**
     * @return void
     */
    public function initializeFormattedJsonDates(): void
    {
        /*$this->appends[] = 'formatted_created_at';
        $this->appends[] = 'formatted_updated_at';*/
    }

    /**
     * @return string
     */
    public function getFormattedCreatedAtAttribute(): string
    {
        return $this->{$this->getCreatedAtColumn()}->diffForHumans();
    }

    /**
     * @return string
     */
    public function getFormattedUpdatedAtAttribute(): string
    {
        return $this->{$this->getUpdatedAtColumn()}->diffForHumans();
    }
}
