<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Sights;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Repository;
use Symfony\Component\VarDumper\VarDumper;

class DumpSight
{
    public static function make(string $name, string $title = null) : \Orchid\Screen\Sight
    {
        return Sight::make($name, $title)
            ->render(static fn(Model|Repository $target) : string => view('orchid-helpers::platform.print', [
                'value' => VarDumper::dump(data_get($target, $name)),
            ])->render());
    }
}