<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (App::environment(['staging', 'production'])) {
            URL::forceScheme('https');
        }

        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
    }
}
