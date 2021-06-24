<?php

namespace App\Http\ViewComposers\Visible;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

/**
 * Class CategoriesComposer
 * @package App\Http\ViewComposers\Visible
 */
class CategoriesComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->categories());
    }

    /**
     * @return Collection
     */
    protected function categories(): Collection
    {
        return Cache::remember(
            'categories', Carbon::now()->addMonth(),
            static fn(): Collection => Category::orderBy('name')->get()
        );
    }
}
