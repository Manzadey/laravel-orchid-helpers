<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Sights;

use Orchid\Screen\Sight;

class SlugSight
{
    public static function make() : Sight
    {
        return Sight::make('slug', attrName('slug'));
    }
}
