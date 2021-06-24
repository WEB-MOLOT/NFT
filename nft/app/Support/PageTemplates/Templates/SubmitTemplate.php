<?php

namespace App\Support\PageTemplates\Templates;

use App\Support\PageTemplates\Template;

/**
 * Class SubmitTemplate
 * @package App\Support\PageTemplates\Templates
 */
class SubmitTemplate extends Template
{
    /**
     * @return string[][]
     */
    public function getValidationRules(): array
    {
        return [
            'text' => ['required', 'string']
        ];
    }
}
