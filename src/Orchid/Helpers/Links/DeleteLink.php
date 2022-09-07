<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Links;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;

class DeleteLink
{
    public static function make(array $attributes, string $method = 'destroy') : Button
    {
        return Button::make('Удалить')
            ->type(Color::DANGER())
            ->confirm('Вы действительно хотите удалить текущую запись?')
            ->method($method, $attributes)
            ->icon('trash');
    }

    public static function makeFromModel(Model $model, array $attributes = []) : Button
    {
        return self::make([
            'morph' => $model->getMorphClass(),
            'id'    => $model->getAttribute('id'),
            ...$attributes,
        ]);
    }
}
