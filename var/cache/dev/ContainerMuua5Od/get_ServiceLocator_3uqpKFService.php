<?php

namespace ContainerMuua5Od;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3uqpKFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3uqpK_F' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3uqpK_F'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.3uqpK_F.App\\Entity\\trainingvideos\\Category', NULL, 'Cannot autowire service ".service_locator.3uqpK_F": it references class "App\\Entity\\trainingvideos\\Category" but no such service exists.'],
            'categoryRepository' => ['privates', 'App\\Repository\\trainingvideos\\CategoryRepository', 'getCategoryRepositoryService', true],
        ], [
            'category' => 'App\\Entity\\trainingvideos\\Category',
            'categoryRepository' => 'App\\Repository\\trainingvideos\\CategoryRepository',
        ]);
    }
}