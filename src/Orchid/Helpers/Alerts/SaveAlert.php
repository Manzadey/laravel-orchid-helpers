<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Alerts;

use Orchid\Support\Facades\Alert;

class SaveAlert
{
    public static function make(string $message = 'Данные сохранены!') : void
    {
        Alert::success(__($message));
    }
}
