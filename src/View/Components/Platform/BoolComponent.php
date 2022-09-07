<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\View\Components\Platform;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;
use Orchid\Screen\Repository;

class BoolComponent extends Component
{
    private readonly bool $bool;

    public function __construct(
        readonly public Repository|Model $target,
        readonly public string           $name,
    )
    {
        $this->bool = data_get($this->target, $this->name);
    }

    public function color() : string
    {
        return $this->bool ? 'success' : 'secondary';
    }

    public function icon() : string
    {
        return $this->bool ? 'like' : 'dislike';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() : View
    {
        return view('orchid-helpers::components.platform.bool-component');
    }
}
