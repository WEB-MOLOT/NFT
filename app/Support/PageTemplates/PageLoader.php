<?php

namespace App\Support\PageTemplates;

use App\Http\Controllers\Visible\PageController;
use App\Models\Page;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

/**
 * Class PageLoader
 * @package App\Support\PageTemplates
 */
class PageLoader
{
    public const CACHE_KEY = 'pages';

    protected Collection $pages;

    /**
     * PageLoader constructor.
     */
    public function __construct()
    {
        $this->pages = new Collection;

        $this->bootPages();
    }

    /**
     * @return void
     */
    public function routes(): void
    {
        $this->pages->each(static function(Page $page) {
            Route::get($page->getSlug(), static function() use ($page) {
                return App::make(PageController::class)->callAction('__invoke', compact('page'));
            })->name('pages.'.$page->getRouteName());
        });
    }

    /**
     * @return void
     */
    protected function bootPages(): void
    {
        $this->pages = Cache::remember(self::CACHE_KEY, Carbon::now()->addMonth(), static function() {
            try {
                return Page::whereIsActive()->get();
            }
            catch(Exception) {
                return new Collection;
            }
        });
    }
}
