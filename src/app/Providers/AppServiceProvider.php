<?php

namespace HuangChun\MetaSystem\App\Providers;

use Illuminate\Support\ServiceProvider;
use Opcodes\LogViewer\Facades\LogViewer;
use HuangChun\MetaSystem\App\LogViewer\MeilisearchLog;
use Opcodes\LogViewer\Logs\HorizonLog;
use HuangChun\MetaSystem\App\Constants\ApiResponse;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('api.response', function () {
            return new ApiResponse();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        LogViewer::auth(function ($request) {
            return TRUE;
        });

        LogViewer::extend('meilisearch', MeilisearchLog::class);
        LogViewer::extend('Horizon', HorizonLog::class);
    }
}
