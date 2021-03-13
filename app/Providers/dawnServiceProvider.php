<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use Auth;

class dawnServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //View::composer( ビュー名, 関数またはクラス);
        View::composer( '/login', function($view){
            $view->with([
                $count_followings = Auth::user()->followings()->get()->count(),
                $count_followers = Auth::user()->followers()->get()->count()])
    });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
