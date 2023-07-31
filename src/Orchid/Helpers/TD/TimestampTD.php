<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\TD;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Repository;
use Orchid\Screen\TD;

class TimestampTD
{
    public static function make(string $name, string $title = null) : TD
    {
        return TD::make($name, $title ?? attrName($name))
            ->sort()
            ->render(
                static fn(Repository|Model $target) => ($item = data_get($target, $name)) instanceof Carbon ?
                    $item->isoFormat('LLLL') :
                    $item
            );
    }
}
