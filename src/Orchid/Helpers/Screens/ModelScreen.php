<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Screens;

use Illuminate\Database\Eloquent\Model;

abstract class ModelScreen extends AbstractScreen
{
    protected Model $model;

    protected function model(Model $model) : iterable
    {
        $this->model = $model;

        return compact('model');
    }
}
