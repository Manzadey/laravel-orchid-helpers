<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Fields;

use Orchid\Screen\Fields\Input;

class SlugInput
{
    public static function make() : Input
    {
        return Input::make('model.slug')
            ->title(attrName('slug'));
    }
}
