<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Service ;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('appLayout.header', function ($view) {
            $services=Service::where('category','none')->get();
            $services_informatique =Service::where('category','informatique')->get();
            $view->with(['services'=>$services,'services_informatique'=>$services_informatique]) ;



            $first = app('rinvex.categories.category')::where('slug','artisanat')->first();
            $cats_artisanat = app('rinvex.categories.category')->descendantsOf($first)->toTree();
            $view->with(['cats_artisanat'=>$cats_artisanat]) ;


        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
