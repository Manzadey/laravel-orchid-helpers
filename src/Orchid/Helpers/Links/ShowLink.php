<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Links;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Actions\Link;

class ShowLink
{
    public static function make() : Link
    {
        return Link::make(__('Подробнее'))
            ->icon('eye');
    }

    public static function route(string $name, $parameters = []) : Link
    {
        return self::make()
            ->route($name, $parameters)
            ->can('show', $parameters);
    }
}
