<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Screens;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Screen as BaseScreen;
use Tabuna\Breadcrumbs\Breadcrumbs;

abstract class AbstractScreen extends BaseScreen
{
    /**
     * @throws \Throwable
     */
    public function name() : ?string
    {
        return Breadcrumbs::current()->last()->title();
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    protected function authorizeShow(Model $model) : void
    {
        $this->authorize('show', $model);
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    protected function authorizeEdit(Model $model) : void
    {
        $this->authorize($model->exists ? 'edit' : 'create', $model);
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    protected function authorizeList(string $model) : void
    {
        $this->authorize('list', $model);
    }
}
