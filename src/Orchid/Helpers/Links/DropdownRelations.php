<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Links;

use Orchid\Screen\Actions\DropDown;

class DropdownRelations
{
    public static function make() : DropDown
    {
        return DropDown::make(__('Связи'))
            ->icon('bs.share');
    }
}
