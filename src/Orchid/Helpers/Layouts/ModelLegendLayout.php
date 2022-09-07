<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Layouts;

use Orchid\Screen\Layouts\Legend;
use Orchid\Support\Facades\Layout;

class ModelLegendLayout
{
    public static function make(array $columns) : Legend
    {
        return Layout::legend('model', $columns);
    }
}
