<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Filters;

class UpdatedTimestampFilter extends TimestampFilter
{
    public function __construct()
    {
        parent::__construct('updated_at');
    }
}
