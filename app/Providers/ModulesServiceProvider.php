<?php

namespace App\Providers;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
/**
 * 
 */
class ModulesServiceProvider extends ServiceProvider
{
	
	public function boot()
	{
		$modules = config("modules.modules");

		while (list(,$module) = each($modules)) {
			
			if (file_exists(__DIR__.'/'.$module.'/routes.php')) {
				include __DIR__.'/'.$module.'/routes.php';
			}

			if (is_dir(__DIR__.'/'.$module.'/Views')) {
				$this->loadViewsFrom(__DIR__.'/'.$module.'/Views', $modules);
			}

		}
	}

	public function register(){}
	
}