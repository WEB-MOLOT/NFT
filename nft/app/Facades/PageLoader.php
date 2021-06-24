<?php

namespace App\Facades;

use App\Support\PageTemplates\PageLoader as BaseClass;
use Illuminate\Support\Facades\Facade;

/**
 * Class PageLoader
 * @package App\Facades
 */
class PageLoader extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return BaseClass::class;
    }
}
