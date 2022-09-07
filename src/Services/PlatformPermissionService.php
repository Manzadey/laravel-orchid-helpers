<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Services;

use Orchid\Platform\ItemPermission;
use RuntimeException;

class PlatformPermissionService
{
    public static function make() : static
    {
        return new static;
    }

    public static function getPermission(string $model, string $policy) : string
    {
        $prefix = class_basename($model);
        $prefix = strtolower($prefix);

        return sprintf('platform.%s.%s', $prefix, $policy);
    }

    public function getClassBasename(string $model) : string
    {
        return class_basename($model);
    }

    public function getClassName($model) : string
    {
        return strtolower($this->getClassBasename($model));
    }

    public function getPlatformProviderPermissions(string $model) : ItemPermission
    {
        $classBaseName = $this->getClassBasename($model);
        $permissions   = ItemPermission::group($classBaseName);
        $policy        = 'App\Policies\\' . $classBaseName . 'Policy';

        if(!class_exists($policy)) {
            return $permissions;
        }

        $methods = collect(get_class_methods($policy))
            ->reject(static fn(string $method) => in_array($method, [
                '__construct',
                'before',
                'denyWithStatus',
                'denyAsNotFound',
            ]));

        foreach ($methods as $method) {
            $permissions->addPermission(self::getPermission($model, $method), str($method)->snake(' ')->title()->toString());
        }

        return $permissions;
    }
}
