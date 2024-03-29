<?php

namespace App\Providers;

use App\Observers\ReservationObserver;
use App\Reservation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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
        Reservation::observe(ReservationObserver::class);

    }
}
