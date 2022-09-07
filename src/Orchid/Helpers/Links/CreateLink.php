<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Links;

use Orchid\Screen\Actions\Link;

class CreateLink
{
    public static function make(string $route = null) : Link
    {
        return Link::make(__('Добавить'))
            ->icon('plus')
            ->when($route !== null, static fn(Link $link) : Link => $link->route($route));
    }

    public static function makeFromModel(string $model, string $route) : Link
    {
        return self::make()
            ->route($route);
    }
}
