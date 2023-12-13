<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Rchitector\MockJson\App\Http\Middleware\MockJsonAdminMiddleware;
use Rchitector\MockJson\App\Http\Middleware\MockJsonMiddleware;

class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Регистрация зависимостей и сервисов
    }

    public function boot()
    {
        $SRC_PATH = __DIR__.'/../../';

        Blade::anonymousComponentPath($SRC_PATH.'components', 'mock-json');

        // Views
        $this->loadViewsFrom($SRC_PATH.'resources/views', 'mock-json');

        //Routes
        $this->loadRoutesFrom($SRC_PATH.'routes/mock-json.php');

        // Middlwares
        $this->app['router']->aliasMiddleware('mock-json', MockJsonMiddleware::class);
        $this->app['router']->aliasMiddleware('mock-json-admin', MockJsonAdminMiddleware::class);

        $this->publishes([
            $SRC_PATH.'config/mock-json.php' => config_path('mock-json.php'),
        ], 'laravel-assets');
    }
}
