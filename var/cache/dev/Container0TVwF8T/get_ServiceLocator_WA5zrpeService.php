<?php

namespace Container0TVwF8T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WA5zrpeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WA5zrpe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WA5zrpe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.WA5zrpe.App\\Entity\\trainingvideos\\Category', NULL, 'Cannot autowire service ".service_locator.WA5zrpe": it references class "App\\Entity\\trainingvideos\\Category" but no such service exists.'],
        ], [
            'category' => 'App\\Entity\\trainingvideos\\Category',
        ]);
    }
}