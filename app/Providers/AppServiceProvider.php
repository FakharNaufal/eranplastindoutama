<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Database\Seeders\RolePermissionSeeder;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;


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
        //
        Gate::before(function($user, $ability) {
            if ($user->hasRole('superadmin')) {
                return true;
            }
            if (app()->environment('production')){
                URL::forceScheme('https');
            }
            {
                Vite::useCspNonce(fn () => request()->attributes->get('csp_nonce'));
            }
        });
    }
}
