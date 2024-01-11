<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\ImpLink;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();
        View()->composer('*',function ($view){
            $view->with('con',Contact::first())->with('links',ImpLink::all());
        });
    }
}
