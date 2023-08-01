<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\TD;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\TD;

class EntityRelationTD
{
    public static function make(string $relation, string $title) : TD
    {
        return TD::make($relation, $title)
            ->width('300px')
            ->render(
                static function($model) use ($relation) : Persona|string {
                    /* @var \Illuminate\Database\Eloquent\Model|null $model */
                    $relationModel = data_get($model, $relation);

                    if($relationModel instanceof Model === false) {
                        return $model->getAttribute('subject_type');
                    }

                    if(method_exists($relationModel, 'presenter')) {
                        return new Persona($relationModel->presenter());
                    }

                    return $relationModel->getMorphClass();
                }
            );
    }
}
