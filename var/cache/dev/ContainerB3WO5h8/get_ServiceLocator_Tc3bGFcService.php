<?php

namespace ContainerB3WO5h8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Tc3bGFcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Tc3bGFc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Tc3bGFc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'voucher' => ['privates', '.errored..service_locator.Tc3bGFc.App\\Entity\\Voucher', NULL, 'Cannot autowire service ".service_locator.Tc3bGFc": it references class "App\\Entity\\Voucher" but no such service exists.'],
        ], [
            'voucher' => 'App\\Entity\\Voucher',
        ]);
    }
}