<?php

namespace App\Support\PageTemplates\Templates;

use App\Support\PageTemplates\Template;

/**
 * Class ContactsTemplate
 * @package App\Support\PageTemplates\Templates
 */
class ContactsTemplate extends Template
{
    /**
     * @return string[][]
     */
    public function getValidationRules(): array
    {
        return [
            'text' => ['required', 'string'],
            'telegram' => ['required', 'string'],
            'email' => ['required', 'email']
        ];
    }
}
