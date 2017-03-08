<?php

namespace KrishnaKodoth\LogEditor;
use Illuminate\Support\ServiceProvider;

class LogEditorServiceProvider extends ServiceProvider
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
		$this->app->make('KrishnaKodoth\LogEditor\LogEditorController');
		$this->loadViewsFrom(__DIR__.'/views', 'log-view');
    }
}
