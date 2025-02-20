<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot()
    {
        $this->routes(function () {
            // Define API routes here
            Route::prefix('api')  // Add API prefix
                ->middleware('api')  // Apply 'api' middleware
                ->group(function () {
                    Route::get('/test', function () {
                        return response()->json(['message' => 'API is working']);
                    });

                    // Add other API routes here
                });

            // Define web routes
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}
