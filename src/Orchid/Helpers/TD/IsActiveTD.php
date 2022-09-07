<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\TD;

use Orchid\Screen\TD;

class IsActiveTD
{
    public static function make() : TD
    {
        return BoolTD::make('is_active');
    }
}
