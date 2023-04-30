<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        /**
         * Two gates are defined to ensure certain action is protected
         * Admin Gate : will allow them in /admin and its sup urls
         * superviosr Gate : will allow them in /superviosr and its sup urls 
         */
        Gate::define('admin', function (User $user) {
            return $user->role === "admin";
        });
        
        Gate::define('supervisor', function (User $user) {
            return $user->role === 'supervisor';
        });
    }
}
