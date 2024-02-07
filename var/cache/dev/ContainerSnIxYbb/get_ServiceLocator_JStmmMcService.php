<?php

namespace ContainerSnIxYbb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JStmmMcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jStmmMc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jStmmMc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'voucher' => ['privates', '.errored..service_locator.jStmmMc.App\\Entity\\Voucher', NULL, 'Cannot autowire service ".service_locator.jStmmMc": it references class "App\\Entity\\Voucher" but no such service exists.'],
            'voucherRepository' => ['privates', 'App\\Repository\\VoucherRepository', 'getVoucherRepositoryService', true],
        ], [
            'voucher' => 'App\\Entity\\Voucher',
            'voucherRepository' => 'App\\Repository\\VoucherRepository',
        ]);
    }
}
