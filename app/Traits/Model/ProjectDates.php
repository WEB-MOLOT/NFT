<?php

namespace App\Traits\Model;

use App\Models\Project;
use App\Support\Formatters\DateFormatter;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;

/**
 * Trait ProjectDates
 * @package App\Traits\Model
 * @mixin Project
 */
trait ProjectDates
{
    protected array $timezones = [
        1 => 'UTC', 2 => 'PDT', 3 => 'PST', 4 => 'EDT', 5 => 'EST'
    ];

    /**
     * @param string|null $value
     * @return Carbon|null
     */
    public function getStartedAtAttribute(?string $value): ?Carbon
    {
        return $this->getAnyProjectDate('started_at', $value);
    }

    /**
     * @param string|null $value
     */
    public function setStartedAtAttribute(?string $value): void
    {
        $this->setAnyProjectDate('started_at', $value);
    }

    /**
     * @param string|null $value
     * @return Carbon|null
     */
    public function getEndedAtAttribute(?string $value): ?Carbon
    {
        return $this->getAnyProjectDate('ended_at', $value);
    }

    /**
     * @param string|null $value
     */
    public function setEndedAtAttribute(?string $value): void
    {
        $this->setAnyProjectDate('ended_at', $value);
    }

    /**
     * @param string $key
     * @param string|null $value
     * @return Carbon|null
     */
    protected function getAnyProjectDate(string $key, ?string $value): ?Carbon
    {
        return $value ? (new DateFormatter)->parseFromDatabase($value, $this->timezones[$this->{"{$key}_timezone"}]) : null;
    }

    /**
     * @param string $key
     * @param string|null $value
     */
    protected function setAnyProjectDate(string $key, ?string $value): void
    {
        $formatter = new DateFormatter($value);

        if($formatter->isValidDateString()) {
            $date = $formatter->parse();

            $this->attributes[$key] = (clone $date)->setTimezone(Config::get('app.timezone'))->toAtomString();
            $this->attributes["{$key}_timezone"] = array_search($date->getTimezone()->getName(), $this->timezones);
        }
    }
}
