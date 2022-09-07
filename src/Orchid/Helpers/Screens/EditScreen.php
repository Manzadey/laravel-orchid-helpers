<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Screens;

use Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Buttons\SaveButton;

abstract class EditScreen extends ModelScreen
{
    public function commandBar() : iterable
    {
        return [
            SaveButton::make(),
        ];
    }

    protected function field(string $field) : string
    {
        return "model.$field";
    }
}
