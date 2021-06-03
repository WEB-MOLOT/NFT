<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Support\Navigation\Navigation;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

/**
 * Class ResourceController
 * @package App\Http\Controllers\Manage
 */
class ResourceController extends Controller
{
    /**
     * ResourceController constructor.
     * @param Navigation $navigation
     */
    public function __construct(protected Navigation $navigation)
    {
        $this->middleware(function(Request $request, Closure $next) {
            $name = $this->getResourceName();

            $this->navigation->createCrumb($name->plural(), $name->plural()->snake().'.index');
            $this->createPageResourceBreadcrumb($request, $name);

            return $next($request);
        });
    }

    /**
     * @return Stringable
     */
    protected function getResourceName(): Stringable
    {
        return Str::of(class_basename($this))->before('Controller');
    }

    /**
     * @param Request $request
     * @param Stringable $name
     */
    protected function createPageResourceBreadcrumb(Request $request, Stringable $name): void
    {
        $name = $name->lower();

        switch(true) {
            case $request->routeIs('*.create'):
                $this->navigation->createCrumb(__('Create :name', compact('name')));
                break;
            case $request->routeIs('*.edit'):
                $this->navigation->createCrumb(__('Edit :name', compact('name')));
                break;
            case $request->routeIs('*.show'):
                $this->navigation->createCrumb(__('Show :name', compact('name')));
                break;
        }
    }
}
