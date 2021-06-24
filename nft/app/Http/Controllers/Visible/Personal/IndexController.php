<?php

namespace App\Http\Controllers\Visible\Personal;

use App\Http\Controllers\Controller;
use App\Support\Navigation\Navigation;
use Illuminate\Contracts\View\View;

/**
 * Class IndexController
 * @package App\Http\Controllers\Visible\Personal
 */
class IndexController extends Controller
{
    /**
     * @param Navigation $navigation
     * @return View
     */
    public function __invoke(Navigation $navigation): View
    {
        $navigation->createCrumb('Personal area');

        return view('visible.personal');
    }
}
