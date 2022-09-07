<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Alerts;

use Orchid\Alert\Alert;

class DestroyAlert
{
    public static function make(string $message = 'Данные удалены!') : void
    {
        Alert::success(__($message));
    }
}
