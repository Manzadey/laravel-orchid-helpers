<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Links;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Actions\Link;

class EditLink
{
    public static function make() : Link
    {
        return Link::make(__('Редактировать'))
            ->icon('wrench');
    }

    public static function makeFromModel(Model $model, string $route) : Link
    {
        return self::make()
            ->route($route, $model);
    }
}
