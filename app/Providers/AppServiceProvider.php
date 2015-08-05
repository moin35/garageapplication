<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Header;
use App\Footer;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $hd=Header::where('eid','=',1)->first();
        view()->share(['p'=>$hd]);
        $ft=Footer::all()->first();
        view()->share(['foot'=>$ft]);
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
