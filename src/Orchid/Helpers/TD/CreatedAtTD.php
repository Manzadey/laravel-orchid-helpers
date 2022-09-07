<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\TD;

use Orchid\Screen\TD;

class CreatedAtTD
{
    public static function make() : TD
    {
        return TimestampTD::make('created_at', attrName('created_at'))
            ->defaultHidden()
            ->alignRight();
    }
}
