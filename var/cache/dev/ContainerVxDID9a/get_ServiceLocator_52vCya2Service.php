<?php

namespace ContainerVxDID9a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_52vCya2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.52vCya2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.52vCya2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'voucher' => ['privates', '.errored..service_locator.52vCya2.App\\Entity\\reissuevoucher\\Voucher_reissue', NULL, 'Cannot autowire service ".service_locator.52vCya2": it references class "App\\Entity\\reissuevoucher\\Voucher_reissue" but no such service exists.'],
            'voucherRepository' => ['privates', 'App\\Repository\\reissuevoucher\\VoucherRepository', 'getVoucherRepositoryService', true],
        ], [
            'voucher' => 'App\\Entity\\reissuevoucher\\Voucher_reissue',
            'voucherRepository' => 'App\\Repository\\reissuevoucher\\VoucherRepository',
        ]);
    }
}