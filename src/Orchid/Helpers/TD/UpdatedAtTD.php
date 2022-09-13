<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\TD;

use Orchid\Screen\TD;

class UpdatedAtTD
{
    public static function make() : TD
    {
        return TimestampTD::make('updated_at', attrName('updated_at'))
            ->defaultHidden()
            ->alignRight();
    }
}
