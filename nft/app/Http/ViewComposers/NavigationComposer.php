<?php

namespace App\Http\ViewComposers;

use App\Support\Navigation\Navigation;
use Illuminate\View\View;

/**
 * Class NavigationComposer
 * @package App\Http\ViewComposers
 */
class NavigationComposer
{
    /**
     * NavigationComposer constructor.
     * @param Navigation $navigation
     */
    public function __construct(protected Navigation $navigation)
    {
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('navigation', $this->navigation);
    }
}
