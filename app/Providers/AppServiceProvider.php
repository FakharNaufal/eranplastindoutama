<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Facades\Log;


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
    // Force HTTPS in production (safe)
    try {
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }
    } catch (\Throwable $e) {
        Log::warning('Unable to force https: '.$e->getMessage());
    }

    // Gate global — aman jika $user null
    Gate::before(function ($user, $ability) {
        try {
            if ($user && method_exists($user, 'hasRole') && $user->hasRole('superadmin')) {
                return true;
            }
        } catch (\Throwable $e) {
            Log::warning('Gate::before callback error: '.$e->getMessage());
        }

        return null;
    });
    }
}
