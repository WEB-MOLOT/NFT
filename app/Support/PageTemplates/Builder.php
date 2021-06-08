<?php

namespace App\Support\PageTemplates;

use App\Contracts\PageTemplate;
use App\Support\PageTemplates\Templates\EmptyTemplate;
use App\Support\PageTemplates\Templates\IndexTemplate;
use App\Support\PageTemplates\Templates\ListingsTemplate;
use App\Support\PageTemplates\Templates\SubmitTemplate;
use Illuminate\Support\Collection;

/**
 * Class Builder
 * @package App\Support\PageTemplates
 */
class Builder
{
    protected array $templates = [
        EmptyTemplate::class,
        IndexTemplate::class,
        SubmitTemplate::class,
        ListingsTemplate::class
    ];

    /**
     * @return Collection
     */
    public function templates(): Collection
    {
        return Collection::make($this->templates)->map(static fn(string $template): PageTemplate => new $template);
    }

    /**
     * @return Collection
     */
    public function ids(): Collection
    {
        return $this->templates()->map(static fn(PageTemplate $template): string => $template->getId());
    }

    /**
     * @param string $id
     * @return Template|null
     */
    public function template(string $id): ?Template
    {
        foreach($this->templates() as $template) {
            if($template->getId() == $id) {
                return $template;
            }
        }

        return null;
    }
}
