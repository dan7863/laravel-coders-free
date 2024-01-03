<?php

namespace App\Providers;

use App\View\Composers\PostComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
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
        View::share('prueba', 'Este es un mensaje de prueba');
        View::composer('posts.*', PostComposer::class);
    }
}
