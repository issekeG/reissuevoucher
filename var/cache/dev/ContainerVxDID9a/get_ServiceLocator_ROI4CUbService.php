<?php

namespace ContainerVxDID9a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ROI4CUbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ROI4CUb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ROI4CUb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoryRepository' => ['privates', 'App\\Repository\\trainingvideos\\CategoryRepository', 'getCategoryRepositoryService', true],
        ], [
            'categoryRepository' => 'App\\Repository\\trainingvideos\\CategoryRepository',
        ]);
    }
}