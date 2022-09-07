<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\TD;

use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\TD;

class EntityTD
{
    public static function make(string $name, string $title = null) : TD
    {
        return TD::make($name, $title)
            ->render(static fn($model) : Persona => new Persona($model->presenter()));
    }
}
