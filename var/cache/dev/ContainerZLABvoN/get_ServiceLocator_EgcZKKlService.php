<?php

namespace ContainerZLABvoN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EgcZKKlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.egcZKKl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.egcZKKl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'video' => ['privates', '.errored..service_locator.egcZKKl.App\\Entity\\trainingvideos\\Video', NULL, 'Cannot autowire service ".service_locator.egcZKKl": it references class "App\\Entity\\trainingvideos\\Video" but no such service exists.'],
        ], [
            'video' => 'App\\Entity\\trainingvideos\\Video',
        ]);
    }
}
