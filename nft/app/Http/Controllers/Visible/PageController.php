<?php

namespace App\Http\Controllers\Visible;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Support\Navigation\Navigation;
use Illuminate\Contracts\View\View;

/**
 * Class PageController
 * @package App\Http\Controllers\Visible
 */
class PageController extends Controller
{
    /**
     * PageController constructor.
     * @param Navigation $navigation
     */
    public function __construct(protected Navigation $navigation) {}

    public function __invoke(Page $page): View
    {
        if(!$page->is_active) {
            abort(404);
        }

        !$page->is_index && $this->navigation->createCrumb($page->name);

        return $page->getTemplate()->visibleView();
    }
}
