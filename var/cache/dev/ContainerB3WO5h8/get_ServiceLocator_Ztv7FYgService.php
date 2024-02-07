<?php

namespace ContainerB3WO5h8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ztv7FYgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ztv7FYg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ztv7FYg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'voucherRepository' => ['privates', 'App\\Repository\\VoucherRepository', 'getVoucherRepositoryService', true],
        ], [
            'voucherRepository' => 'App\\Repository\\VoucherRepository',
        ]);
    }
}