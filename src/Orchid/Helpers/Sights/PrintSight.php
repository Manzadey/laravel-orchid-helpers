<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Sights;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Repository;

class PrintSight
{
    public static function make(string $name, string $title = null) : \Orchid\Screen\Sight
    {
        return Sight::make($name, $title)
            ->render(static fn(Model|Repository $target) : string => view('orchid-helpers::platform.sight.print', [
                'value' => print_r(data_get($target, $name), true),
            ])->render());
    }
}
