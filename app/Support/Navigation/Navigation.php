<?php

namespace App\Support\Navigation;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;
use stdClass;

/**
 * Class Navigation
 * @package App\Support\Navigation
 */
class Navigation
{
    public const MANAGE_PREFIX = 'manage.';

    protected Collection $breadcrumbs;

    /**
     * Navigation constructor.
     * @param Request $request
     */
    public function __construct(protected Request $request)
    {
        $this->breadcrumbs = new Collection;

        $this->createDefaultCrumb();
    }

    /**
     * @param string $name
     * @param string|null $route
     * @param mixed|array $parameters
     * @return $this
     */
    public function createCrumb(string $name, ?string $route = null, mixed $parameters = []): self
    {
        $crumb = new stdClass;
        $crumb->name = $name;
        $crumb->route = $route ? route($this->getFullRouteName($route), $parameters) : $this->request->url();

        $this->breadcrumbs->add($crumb);

        return $this;
    }

    /**
     * @return Collection
     */
    public function getBreadcrumbs(): Collection
    {
        return $this->breadcrumbs;
    }

    /**
     * @return ManageMenu
     */
    public function getManageMenu(): ManageMenu
    {
        return new ManageMenu($this, $this->request);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->getBreadcrumbs()->last()->name;
    }

    /**
     * @param string $name
     * @return string
     */
    public function getFullRouteName(string $name): string
    {
        return self::MANAGE_PREFIX.$name;
    }

    /**
     * @return void
     */
    protected function createDefaultCrumb(): void
    {
        $this->createCrumb(Config::get('app.name'), 'pages.index');
    }
}
