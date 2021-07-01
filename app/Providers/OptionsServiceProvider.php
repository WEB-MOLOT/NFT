<?php

namespace App\Providers;

use App\Models\Option;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

/**
 * Class OptionsServiceProvider
 * @package App\Providers
 */
class OptionsServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $options = $this->getOptions();
        $this->setDefaultConfig($options);

        if(!$this->isProduction()) {
            $this->setConnectionConfig($options);
        }
    }

    /**
     * @param array $options
     */
    protected function setDefaultConfig(array $options): void
    {
        Config::set('nft', $options);
        Config::set('app.name', $options['site_name'] ?? 'nft');
    }

    /**
     * @param array $options
     */
    protected function setConnectionConfig(array $options): void
    {
        foreach($options['connections'] ?? [] as $name => $credentials) {
            foreach($credentials as $key => $value) {
                Config::set("services.$name.$key", $value);
            }
        }
    }

    /**
     * @return bool
     */
    protected function isProduction(): bool
    {
        return $this->app->environment('production');
    }

    /**
     * @return array
     */
    protected function getOptions(): array
    {
        return Cache::remember('options', Carbon::now()->addMonth(), static function() {
            $options = [];

            try {
                Option::get()->each(static function(Option $option) use (&$options) {
                    Arr::set($options, $option->key, $option->value);
                });
            }
            catch(\Exception) {
                // nothing
            }

            return $options;
        });
    }
}
