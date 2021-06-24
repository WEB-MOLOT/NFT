<?php

namespace App\Support\PageTemplates;

use App\Contracts\PageTemplate;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

/**
 * Class Template
 * @package App\Support\PageTemplates
 */
abstract class Template implements PageTemplate
{
    protected ?Page $page = null;

    /**
     * @return Stringable
     */
    public function getName(): Stringable
    {
        return Str::of(class_basename($this))->before('Template');
    }

    /**
     * @return Stringable
     */
    public function getId(): Stringable
    {
        return $this->getName()->snake();
    }

    /**
     * @return View
     */
    public function visibleView(): View
    {
        return view('visible.pages.'.$this->getId(), [
            'page' => $this->page
        ]);
    }

    /**
     * @return View|null
     */
    public function manageView(): ?View
    {
        return view()->exists($this->getManageViewName()) ? view($this->getManageViewName(), ['page' => $this->page]) : null;
    }

    /**
     * @return bool
     */
    public function hasManageView(): bool
    {
        return view()->exists($this->getManageViewName());
    }

    /**
     * @return array
     */
    public function getValidationRules(): array
    {
        return [];
    }

    /**
     * @param Page $page
     * @return $this
     */
    public function setPage(Page $page): self
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return string
     */
    protected function getManageViewName(): string
    {
        return 'manage.resources.page.templates.'.$this->getId();
    }
}
