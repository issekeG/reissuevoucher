<?php

namespace ContainerNxvXtYp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FZFM5AService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fZ_fM5A' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fZ_fM5A'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'voucherRepository' => ['privates', 'App\\Repository\\reissuevoucher\\VoucherRepository', 'getVoucherRepositoryService', true],
        ], [
            'entityManager' => '?',
            'voucherRepository' => 'App\\Repository\\reissuevoucher\\VoucherRepository',
        ]);
    }
}
