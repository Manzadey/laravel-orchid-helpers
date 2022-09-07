<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\TD;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Repository;
use Orchid\Screen\TD;

class LinkTD
{
    public static function make(string $name, string $title = null) : TD
    {
        return TD::make($name, $title)
            ->render(static function(Repository $repository) use ($name) : ?Link {
                $href = $repository->get($name);

                if($href === null) {
                    return null;
                }

                return Link::make($repository->get($name))
                    ->target('_blank')
                    ->icon('link')
                    ->href($repository->get($name));
            });
    }
}
