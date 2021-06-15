<?php

namespace App\Http\ViewComposers\Visible;

use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class UserComposer
 * @package App\Http\ViewComposers\Visible
 */
class UserComposer
{
    /**
     * UserComposer constructor.
     * @param Request $request
     */
    public function __construct(protected Request $request) {}

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('user', $this->request->user());
    }
}
