<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\TD;

use Closure;
use Orchid\Screen\TD;

class ActionsTD
{
    public static function make(Closure $closure) : TD
    {
        return TD::make()
            ->alignRight()
            ->width('100px')
            ->render($closure)
            ->cantHide();
    }
}
