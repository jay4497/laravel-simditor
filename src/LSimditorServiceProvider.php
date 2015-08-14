<?php
namespace LSimditor;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
class LSimditorServiceProvider extends ServiceProvider {

    public function boot(){
        $this->loadViewsFrom(__DIR__.'/views', 'simditor');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/editor'),
        ]);
        $this->publishes([
            __DIR__.'/simditor' => public_path('plugins/editor'),
        ]);
        $this->publishes([
            __DIR__.'/config/simditor.php' => config_path('simditor.php'),
        ]);
    }

    public function register()
    {
        
    }
}