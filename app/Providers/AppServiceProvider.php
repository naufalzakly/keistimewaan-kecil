<?php

namespace App\Providers;
use Illuminate\Http\Request;
use App\Models\Gejala;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
    public function boot(Request $request)
    {
        View::composer('admin.dashboard', function ($view) {
            $gejala =  Gejala::all();// logika untuk mendapatkan data $gejala
            $view->with('gejala', $gejala);
        });
    }
}
