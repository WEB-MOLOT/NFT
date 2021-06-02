<?php

namespace App\Traits\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Trait HasMeta
 * @package App\Traits\Model
 * @mixin Model
 */
trait HasMeta
{
    abstract function getMetaModelName(): string;

    /**
     * @return HasOne
     */
    public function meta(): HasOne
    {
        return $this->hasOne($this->getMetaModelName());
    }
}
