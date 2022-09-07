<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Layouts;

use Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Sights\CreatedAtSight;
use Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Sights\UpdatedAtSight;
use Orchid\Screen\Layouts\Legend;
use Orchid\Support\Facades\Layout;

class ModelTimestampsLayout
{
    public static function make() : Legend
    {
        return Layout::legend('model', [
            UpdatedAtSight::make(),
            CreatedAtSight::make(),
        ])->title(__('Даты'));
    }
}
