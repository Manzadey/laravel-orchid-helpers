<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Providers;

use Illuminate\Support\ServiceProvider;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Field;

class MacrosServiceProvider extends ServiceProvider
{
    public function boot() : void
    {
        if(!Link::hasMacro('can')) {
            Link::macro('can', function($ability, $arguments = []) : Action {
                $this->canSee(auth()->user()?->can($ability, $arguments) ?? false);

                return $this;
            });
        }

        if(!Field::hasMacro('can')) {
            Field::macro('can', function($ability, $arguments = []) : Field {
                $this->canSee(auth()->user()?->can($ability, $arguments) ?? false);

                return $this;
            });
        }
    }
}
