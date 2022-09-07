<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Orchid\Filters\Filter;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;

class IdFilter extends Filter
{
    /**
     * The displayable name of the filter.
     *
     * @return string
     */
    public function name() : string
    {
        return 'ID';
    }

    /**
     * The array of matched parameters.
     *
     * @return array|null
     */
    public function parameters() : ?array
    {
        return [
            'ids',
        ];
    }

    /**
     * Apply to a given Eloquent query builder.
     *
     * @param  Builder  $builder
     *
     * @return Builder
     */
    public function run(Builder $builder) : Builder
    {
        return $builder->whereIn('id', $this->getData());
    }

    /**
     * Get the display fields.
     *
     * @return Field[]
     */
    public function display() : iterable
    {
        return [
            Input::make('ids')
                ->help('Список ID через запятую')
                ->value($this->getData()->implode(',')),
        ];
    }

    public function getData() : Collection
    {
        $ids = $this->request->input('ids');

        if($ids === null) {
            return collect();
        }

        return collect(array_map('trim', explode(',', $ids)))
            ->unique()
            ->filter(static fn(mixed $id) => is_numeric($id))
            ->map(static fn(int $id) : int => $id);
    }
}
