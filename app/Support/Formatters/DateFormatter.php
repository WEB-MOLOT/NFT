<?php

namespace App\Support\Formatters;

use Carbon\Carbon;

/**
 * Class DateFormatter
 * @package App\Support\Formatters
 */
class DateFormatter
{
    public const REGEXP = '/^([0-9]{2}.[0-9]{2}.[0-9]{4}, [0-9]{2}:[0-9]{2}), (UTC|PDT|PST|EDT|EST)$/';
    public const DATE_FORMAT = 'd.m.Y, H:i';

    /**
     * DateFormatter constructor.
     * @param string|null $value
     */
    protected $value;
    public function __construct($value = null) {
        $this->value = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function parse(): ?Carbon
    {
        if($this->value !== null && $this->isValidDateString()) {
            $values = $this->stringToArray();

            return Carbon::createFromFormat(self::DATE_FORMAT, $values[1])->setTimezone($values[2]);
        }

        return null;
    }

    /**
     * @param string|null $date
     * @param string $timezone
     * @return Carbon|null
     */
    public function parseFromDatabase(?string $date, string $timezone): ?Carbon
    {
        return $date ? Carbon::parse($date)->setTimezone($timezone) : null;
    }

    /**
     * @return bool
     */
    public function isValidDateString(): bool
    {
        return preg_match(self::REGEXP, $this->value, $m) && Carbon::createFromFormat(self::DATE_FORMAT, $m[1])->isValid();
    }

    /**
     * @return array
     */
    protected function stringToArray(): array
    {
        preg_match(self::REGEXP, $this->value, $m);

        return $m;
    }
}
