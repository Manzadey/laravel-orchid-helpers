<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Sights;

use Manzadey\LaravelOrchidHelpers\View\Components\Platform\BoolComponent;
use Orchid\Screen\Sight;

class BoolSight
{
    public static function make(string $name, string $title = null) : Sight
    {
        return Sight::make($name, $title ?? attrName($name))
            ->component(BoolComponent::class, compact('name'));
    }
}
