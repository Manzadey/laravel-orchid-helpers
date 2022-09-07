<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\TD;

use Orchid\Screen\TD;

class CountTD
{
    public static function make(string $relation, string $title) : TD
    {
        return TD::make("{$relation}_count", $title)->alignCenter();
    }
}
