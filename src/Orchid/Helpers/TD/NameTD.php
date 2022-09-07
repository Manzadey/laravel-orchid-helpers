<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\TD;

use Orchid\Screen\TD;

class NameTD
{
    public static function make(string $name = 'Название') : TD
    {
        return TD::make('name', $name)
            ->sort()
            ->filter(TD::FILTER_TEXT);
    }
}
