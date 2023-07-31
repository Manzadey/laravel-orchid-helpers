<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Fields;

use Orchid\Screen\Fields\CheckBox;

class BooleanCheckbox
{
    public static function make(string $name) : CheckBox
    {
        return CheckBox::make("model.$name")
            ->title(attrName($name))
            ->sendTrueOrFalse();
    }
}
