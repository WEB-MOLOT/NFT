<?php

namespace App\Traits\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Trait IpTwoConvert
 * @package App\Traits\Model
 * @mixin Model
 */
trait IpTwoConvert
{
    /**
     * @param string $ip
     */
    public function setIpAttribute(string $ip): void
    {
        $this->attributes['ip'] = ip2long($ip);
    }

    /**
     * @param int $value
     * @return string
     */
    public function getIpAttribute(int $value): string
    {
        return long2ip($value);
    }
}
