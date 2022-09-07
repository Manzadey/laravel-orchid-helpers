<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Filters;

use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filter;
use Orchid\Platform\Models\User;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Relation;

class UserFilter extends Filter
{
    public function __construct(private readonly string $field = 'user_id')
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
        return attrName('user');
    }

    /**
     * The array of matched parameters.
     *
     * @return array|null
     */
    public function parameters() : ?array
    {
        return [
            'user',
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
        return $builder->where($this->field, $this->request->input('user'));
    }

    /**
     * Get the display fields.
     *
     * @return Field[]
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function display() : iterable
    {
        return [
            Relation::make('user')
                ->fromModel(User::class, 'email')
                ->searchColumns('name', 'email')
                ->title(attrName('email'))
                ->value($this->request->input('user')),
        ];
    }
}
