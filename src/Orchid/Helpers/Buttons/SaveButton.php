<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Buttons;

use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;

class SaveButton
{
    public static function make(string $icon = 'save', string $method = 'save') : Button
    {
        return Button::make(__('Сохранить'))
            ->icon($icon)
            ->type(Color::DEFAULT)
            ->method($method);
    }
}
