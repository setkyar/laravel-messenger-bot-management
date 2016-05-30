<?php

namespace App\Messenger\Providers;

use App\Messenger\Helpers\Messenger;
use Illuminate\Support\ServiceProvider;

class MessengerServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('messenger', function()
        {
            return new Messenger();
        });
    }
}
