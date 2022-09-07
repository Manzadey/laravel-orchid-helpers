<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Sights;

use Orchid\Screen\Sight;

class OrderSight
{
    public static function make() : Sight
    {
        return Sight::make('order', attrName('order'));
    }
}
