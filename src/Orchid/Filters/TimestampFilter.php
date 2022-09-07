<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Filters;

use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filter;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\DateRange;

class TimestampFilter extends Filter
{
    public function __construct(readonly protected string $field)
    {
        parent::__construct();
    }

    /**
     * The displayable name of the filter.
     *
     * @return string
     */
    public function name() : string
    {
        return attrName($this->field);
    }

    /**
     * The array of matched parameters.
     *
     * @return array|null
     */
    public function parameters() : ?array
    {
        return [
            $this->field,
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
        $field = $this->field;
        $start = $this->request->input("$field.start");
        $end   = $this->request->input("$field.end");

        return $builder
            ->when($start === $end,
                static fn(Builder $builder) : Builder => $builder->whereDate($field, $start),
                static fn(Builder $builder) : Builder => $builder->whereBetween($field, [$start, $end])
            );
    }

    /**
     * Get the display fields.
     *
     * @return Field[]
     */
    public function display() : iterable
    {
        return [
            DateRange::make($this->field)->title($this->name()),
        ];
    }
}
