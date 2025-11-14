<?php

namespace BrowserDetect;

use Illuminate\Support\ServiceProvider;

class BrowserDetectServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('browser-detect', fn () => new BrowserDetect());
        $this->app->singleton('environment-emoji', fn () => new EnvironmentEmoji());
    }

    public function boot()
    {
        // Optional: publish configs or routes
    }
}
