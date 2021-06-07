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
            $currentPageName = $this->getPageResourceName($request, $name);

            $this->navigation->createCrumb($name->plural(), 'resources.'.$name->plural()->snake().'.index');
            $currentPageName && $this->navigation->createCrumb($currentPageName);

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
     * @return string|null
     */
    protected function getPageResourceName(Request $request, Stringable $name): ?string
    {
        $name = $name->lower();

        return match(true) {
            $request->routeIs('*.create') => __('Create :name', compact('name')),
            $request->routeIs('*.edit') => __('Edit :name', compact('name')),
            $request->routeIs('*.show') => __('Show :name', compact('name')),
            default => null
        };
    }
}
