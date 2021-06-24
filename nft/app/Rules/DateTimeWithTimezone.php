<?php

namespace App\Rules;

use App\Support\Formatters\DateFormatter;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

/**
 * Class DateTimeWithTimezone
 * @package App\Rules
 */
class DateTimeWithTimezone implements Rule
{
    protected DateFormatter $formatter;

    /**
     * DateTimeWithTimezone constructor.
     */
    public function __construct()
    {
        $this->formatter = new DateFormatter;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return is_string($value) && $this->formatter->setValue($value)->isValidDateString();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return ':attribute not valid date.';
    }
}
