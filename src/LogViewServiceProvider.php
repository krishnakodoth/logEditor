<?php

namespace KrishnaKodoth\LogView;

use Illuminate\Support\ServiceProvider;

class LogViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
		include __DIR__.'/routes/web.php';		
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(){
        //
		$this->app->make('KrishnaKodoth\LogView\LogViewController');
		$this->loadViewsFrom(__DIR__.'/views', 'log-view');
    }
}
