<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Sights;

class IsActiveSight
{
    public static function make() : \Orchid\Screen\Sight
    {
        return BoolSight::make('is_active');
    }
}
