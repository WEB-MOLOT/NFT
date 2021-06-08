<?php

namespace App\Support\Formatters;

/**
 * Class AmountFormatter
 * @package App\Support\Formatters
 */
class AmountFormatter
{
    /**
     * AmountFormatter constructor.
     * @param int|null $value
     * @param string $default
     * @param string $currency
     */
    public function __construct(protected ?int $value,
                                protected string $default = '-',
                                protected string $currency = 'USD') {}

    /**
     * @return string
     */
    public function format(): string
    {
        return sprintf('%s %s', number_format($this->value, thousands_separator: ' '), $this->currency);
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return $this->value !== null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->isValid() ? $this->format() : $this->default;
    }
}
