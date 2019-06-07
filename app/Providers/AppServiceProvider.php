<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    public function register()
    {
        \App::singleton('App\Billing\Stripe',function(){
            return  new App\Billing\Stripe(config('services.stripe.secret'));
        });   //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

}
