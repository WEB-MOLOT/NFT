<?php

namespace App\Http\Controllers\Visible;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Contracts\View\View;

/**
 * Class PageController
 * @package App\Http\Controllers\Visible
 */
class PageController extends Controller
{
    public function __invoke(Page $page): View
    {
        if(!$page->is_active) {
            abort(404);
        }

        return $page->getTemplate()->visibleView();
    }
}
