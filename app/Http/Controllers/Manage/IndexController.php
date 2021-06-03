<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

/**
 * Class IndexController
 * @package App\Http\Controllers\Manage
 */
class IndexController extends Controller
{
    /**
     * @return View
     */
    public function __invoke(): View
    {
        return view('layouts.manage');
    }
}
