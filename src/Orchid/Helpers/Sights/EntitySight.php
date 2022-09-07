<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Sights;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Sight;

class EntitySight
{
    public static function make(string $name, string $title) : Sight
    {
        return Sight::make($name, $title)
            ->render(static fn(Model $model) : ?Persona => data_get($model, $name) ? new Persona(data_get($model, $name)->presenter()) : null);
    }
}
