<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Providers;

use Illuminate\Support\ServiceProvider;

class FoundationServiceProvider extends ServiceProvider
{
    public function boot() : void
    {
        $this->registerHelpers();
        $this->registerViews();
    }

    private function registerHelpers() : void
    {
        foreach (glob(app_path('/Helpers/*.php')) as $filename) {
            require_once($filename);
        }
    }

    private function registerViews() : void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'orchid-helpers');
    }
}
