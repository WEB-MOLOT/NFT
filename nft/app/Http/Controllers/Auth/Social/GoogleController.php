<?php

namespace App\Http\Controllers\Auth\Social;

/**
 * Class GoogleController
 * @package App\Http\Controllers\Auth\Social
 */
class GoogleController extends SocialController
{
    /**
     * @return string
     */
    protected function getProviderName(): string
    {
        return 'google';
    }
}
