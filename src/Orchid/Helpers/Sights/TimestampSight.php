<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Sights;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Repository;
use Orchid\Screen\Sight;

class TimestampSight
{
    public static function make(string $name, string $title = null) : Sight
    {
        return Sight::make($name, $title ?? attrName($name))
            ->render(static fn(Model|Repository $target) : ?string => ($timestamp = data_get($target, $name)) instanceof Carbon ? $timestamp->isoFormat('LLLL') : $timestamp);
    }
}
