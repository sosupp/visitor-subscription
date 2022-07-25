<?php
namespace Pysosu\VisitorSubscription;

use Illuminate\Support\ServiceProvider;


class VisitorSubscriptionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'VisitorSubscription');
    }

    public function register()
    {

    }
}
