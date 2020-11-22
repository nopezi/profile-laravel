<?php

namespace App\Providers;
// namespace $NAMESPACE$;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
// class $CLASS$ extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    // protected $namespace = 'Modules\Tes\Http\Controllers';
    // protected $moduleNamespace = '$MODULE_NAMESPACE$\$MODULE$\$CONTROLLER_NAMESPACE$';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
             // ->namespace($this->moduleNamespace)
             ->group(base_path('routes/web.php'));
             // ->group(module_path('$MODULE$', '$WEB_ROUTES_PATH$'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             // ->namespace($this->moduleNamespace)
             ->group(base_path('routes/api.php'));
             // ->group(module_path('$MODULE$', '$API_ROUTES_PATH$'));
    }
}
