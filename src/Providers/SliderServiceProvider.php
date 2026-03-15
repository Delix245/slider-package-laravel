<?php
namespace Delix245\Slider\Providers;

use Delix245\Slider\Console\Commands\InstallCommand;
use Illuminate\Support\ServiceProvider;

class SliderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // подгружаем роуты из пакета
        // $this->loadRoutesFrom(__DIR__ . '/../routes/posts.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'slider');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/slider'),
        ]);

        $this->publishes([
            __DIR__ . '/../config/slider.php' => config_path('slider.php'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }
}
