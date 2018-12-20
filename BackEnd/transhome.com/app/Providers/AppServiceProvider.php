<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Tasktodo;

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
        $notification = Tasktodo::where('status',0)->count();
        $tasks = Tasktodo::where('status',0)->get();
        $data = array(
            'noti' => $notification , 
            'tasks' => $tasks
        );
        view()->share('data', $data);
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
