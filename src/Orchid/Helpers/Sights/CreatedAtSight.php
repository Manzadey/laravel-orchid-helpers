<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Sights;

use Orchid\Screen\Sight;

class CreatedAtSight
{
    public static function make() : Sight
    {
        return TimestampSight::make('created_at');
    }
}
