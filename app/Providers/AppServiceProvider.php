<?php

namespace App\Providers;

use App\Http\ViewComposers\NavigationComposer;
use App\Http\ViewComposers\Visible\CategoriesComposer;
use App\Http\ViewComposers\Visible\ListingsComposer;
use App\Http\ViewComposers\Visible\MessageSubjectsComposer;
use App\Http\ViewComposers\Visible\UserComposer;
use App\Support\Navigation\Navigation;
use App\Support\PageTemplates\PageLoader;
use App\Support\ResourceRegistrar;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\ResourceRegistrar as IlluminateResourceRegistrar;

/**
 * Class AppServiceProvider
 * @package App\Providers
 */
class AppServiceProvider extends ServiceProvider
{
    protected array $viewComposers = [
        NavigationComposer::class => ['layouts.*', 'visible.particles.breadcrumbs'],
        CategoriesComposer::class => ['visible.pages.submit', 'visible.pages.index'],
        ListingsComposer::class => 'visible.pages.listings',
        UserComposer::class => ['visible.particles.layout.user', 'visible.personal'],
        MessageSubjectsComposer::class => 'visible.pages.contacts'
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(IlluminateResourceRegistrar::class, ResourceRegistrar::class);
        $this->app->singleton(Navigation::class);
        $this->app->singleton(PageLoader::class);

        $this->blade();

        View::composers($this->viewComposers);
    }

    /**
     * @return void
     */
    protected function blade(): void
    {
        Blade::directive('dataTable', static fn(string $expression): string => "<?php echo (new App\Support\DataTable\Render())->render($expression); ?>");
        Blade::directive('formatAmount', static fn(string $expression): string => "<?php echo new App\Support\Formatters\AmountFormatter($expression); ?>");
    }
}
