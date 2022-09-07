<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\TD;

use Orchid\Screen\TD;

class IdTD
{
    public static function make() : TD
    {
        return TD::make('id', 'ID')
            ->width('88px')
            ->alignLeft()
            ->sort()
            ->defaultHidden()
            ->filter(TD::FILTER_NUMERIC);
    }
}
