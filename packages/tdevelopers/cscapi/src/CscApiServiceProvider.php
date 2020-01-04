<?php
namespace Tdev\CSCAPI;
use Illuminate\Support\ServiceProvider;

class CscApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }

    public function register()
    {

    }
}
