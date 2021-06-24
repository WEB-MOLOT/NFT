<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * Class ColorCode
 * @package App\Rules
 */
class ColorCode implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return is_string($value) && preg_match('/^#[A-Za-z0-9]{6}$/ui', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return __(':attribute not valid color code.');
    }
}
