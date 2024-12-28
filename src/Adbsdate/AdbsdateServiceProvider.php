<?php
namespace Bhagabat\Adbsdate;

use Illuminate\Support\ServiceProvider;

class AdbsdateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Bhagabat\Adbsdate\AdbsdateController');
        $this->app->bind('adbsdate', function () {
            return new \Bhagabat\Adbsdate\AdbsdateController();
        });
    }
}
