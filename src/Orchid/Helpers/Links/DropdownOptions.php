<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Links;

use Orchid\Screen\Actions\DropDown;

class DropdownOptions
{
    public static function make() : DropDown
    {
        return DropDown::make()->icon('bs.three-dots-vertical');
    }
}
