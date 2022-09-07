<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Layouts;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Orchid\Support\Facades\Layout;

class ModelMetricLayout
{
    private const CHUNK = 6;

    public static function make(array $metrics) : array
    {
        $handleRelations = static fn(Collection $relations) : array => $relations
            ->map(static fn(string $relation) : string => Str::snake($relation))
            ->mapWithKeys(static fn(string $relation, int|string $key) : array => [
                is_int($key) ? __("model.$relation") : $key => "model.{$relation}_count",
            ])
            ->toArray();

        return collect($metrics)
            ->chunk(self::CHUNK)
            ->map(static fn(Collection $collection) => Layout::metrics($handleRelations($collection)))
            ->toArray();
    }
}
