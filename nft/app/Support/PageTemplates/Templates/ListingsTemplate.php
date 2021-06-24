<?php

namespace App\Support\PageTemplates\Templates;

use App\Support\PageTemplates\Template;

/**
 * Class ListingsTemplate
 * @package App\Support\PageTemplates\Templates
 */
class ListingsTemplate extends Template
{
    /**
     * @return array
     */
    public function getValidationRules(): array
    {
        return [
            'title' => ['required', 'string'],
            'sub_title' => ['required', 'string']
        ];
    }
}
