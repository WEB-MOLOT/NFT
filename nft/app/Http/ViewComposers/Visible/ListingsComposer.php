<?php

namespace App\Http\ViewComposers\Visible;

use App\Models\Listing;
use Illuminate\Support\Collection;
use Illuminate\View\View;

/**
 * Class ListingsComposer
 * @package App\Http\ViewComposers\Visible
 */
class ListingsComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('listings', $this->listings());
    }

    /**
     * @return Collection
     */
    protected function listings(): Collection
    {
        return Listing::orderBy('sort')->get();
    }
}
