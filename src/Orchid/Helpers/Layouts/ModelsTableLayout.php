<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Support\Facades\Layout;

class ModelsTableLayout
{
    public static function make(array $columns) : Table
    {
        return Layout::table('models', $columns);
    }
}
