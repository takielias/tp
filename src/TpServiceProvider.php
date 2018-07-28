<?php

namespace takielias\tp;

use Illuminate\Support\ServiceProvider;

class TpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/routes/routes.php';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('takielias-tp', function  ($consumerKey, $consumerSecret, $accessToken = null, $accessTokenSecret = null) {
            return new Tp($consumerKey, $consumerSecret, $accessToken = null, $accessTokenSecret = null);
        });


    }
}
