<?php

namespace App\Http\Controllers\Auth\Social;

/**
 * Class TelegramController
 * @package App\Http\Controllers\Auth\Social
 */
class TelegramController extends SocialController
{
    /**
     * @return string
     */
    protected function getProviderName(): string
    {
        return 'telegram';
    }
}
