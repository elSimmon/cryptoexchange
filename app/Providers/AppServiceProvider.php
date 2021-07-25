<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Schema;

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
        View::share('key', 'value');

        return Schema::defaultStringLength(191);
//        $my_profile = User::find(1)->profile;
//        $my_profile = DB::table('profiles')->where('user_id', '==', Auth::id())->get();


        //compose all the views....
//        view()->composer('*', function ($view)
//        {
//            $id = Auth::user()->id;
//            $my_profile = DB::table('profiles')->where('user_id', $id)->first();
//            View::share('my_profile', $my_profile);
//
//            //...with this variable
//            $view->with('my_profile', $my_profile );
//        });




    }
}
