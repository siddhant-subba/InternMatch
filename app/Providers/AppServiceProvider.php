<?php

namespace App\Providers;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function boot(): void
{
    // Make sure it reads the is_admin column correctly
    Gate::define('manage-internships', function (User $user) {
        return (bool) $user->is_admin; 
    });
}
}