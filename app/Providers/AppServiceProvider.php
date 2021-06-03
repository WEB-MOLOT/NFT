<?php

namespace App\Providers;

use App\Http\ViewComposers\NavigationComposer;
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
        NavigationComposer::class => 'layouts.*'
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
        Blade::directive('dataTable', static fn(string $expression) => "<?php echo (new App\Support\DataTable\Render())->render($expression); ?>");
    }
}
