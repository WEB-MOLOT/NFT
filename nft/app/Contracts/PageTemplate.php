<?php

namespace App\Contracts;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Stringable;

/**
 * Interface PageTemplate
 * @package App\Contracts
 */
interface PageTemplate
{
    /**
     * @return Stringable
     */
    public function getName(): Stringable;

    /**
     * @return Stringable
     */
    public function getId(): Stringable;

    /**
     * @return array
     */
    public function getValidationRules(): array;

    /**
     * @return View
     */
    public function visibleView(): View;

    /**
     * @return View|null
     */
    public function manageView(): ?View;

    /**
     * @return bool
     */
    public function hasManageView(): bool;
}
