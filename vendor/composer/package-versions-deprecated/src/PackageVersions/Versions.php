<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'doctrine/annotations' => '1.14.3@fb0d71a7393298a7b232cbf4c8b1f73f3ec3d5af',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/collections' => '1.8.0@2b44dd4cbca8b5744327de78bafef5945c7e7b5e',
  'doctrine/common' => '3.4.3@8b5e5650391f851ed58910b3e3d48a71062eeced',
  'doctrine/dbal' => '3.3.8@f873a820227bc352d023791775a01f078a30dfe1',
  'doctrine/deprecations' => '1.1.3@dfbaa3c2d2e9a9df1118213f3b8b0c597bb99fab',
  'doctrine/doctrine-bundle' => '2.7.2@22d53b2c5ad03929628fb4a928b01135585b7179',
  'doctrine/doctrine-migrations-bundle' => '3.3.0@1dd42906a5fb9c5960723e2ebb45c68006493835',
  'doctrine/event-manager' => '1.2.0@95aa4cb529f1e96576f3fda9f5705ada4056a520',
  'doctrine/inflector' => '2.0.9@2930cd5ef353871c821d5c43ed030d39ac8cfe65',
  'doctrine/instantiator' => '1.5.0@0a0fa9780f5d4e507415a065172d26a98d02047b',
  'doctrine/lexer' => '2.1.1@861c870e8b75f7c8f69c146c7f89cc1c0f1b49b6',
  'doctrine/migrations' => '3.4.3@362f07ff732a2b4498be919561536800cec29500',
  'doctrine/orm' => '2.18.0@f2176a9ce56cafdfd1624d54bfdb076819083d5b',
  'doctrine/persistence' => '3.2.0@63fee8c33bef740db6730eb2a750cd3da6495603',
  'doctrine/sql-formatter' => '1.1.3@25a06c7bf4c6b8218f47928654252863ffc890a5',
  'egulias/email-validator' => '3.2.6@e5997fa97e8790cdae03a9cbd5e78e45e3c7bda7',
  'friendsofphp/proxy-manager-lts' => 'v1.0.16@ecadbdc9052e4ad08c60c8a02268712e50427f7c',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.4.0@a93fd278c97b2d41ebbce5ba048a24e3e6f580ba',
  'laminas/laminas-zendframework-bridge' => '1.4.1@88bf037259869891afce6504cacc4f8a07b24d0f',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v6.2.10@2f886f4b31f23c76496901acaedfedb6936ba61f',
  'symfony/asset' => 'v5.4.35@0e98032106d18e57f57176d616e3fae80db7a845',
  'symfony/cache' => 'v5.4.35@db1adb004e2da984085d0178964eb6f319d3cba1',
  'symfony/cache-contracts' => 'v2.5.2@64be4a7acb83b6f2bf6de9a02cee6dad41277ebc',
  'symfony/config' => 'v5.4.35@6b763438a22a4f20885e994ad6702f6a3f25430e',
  'symfony/console' => 'v5.4.35@dbdf6adcb88d5f83790e1efb57ef4074309d3931',
  'symfony/dependency-injection' => 'v5.4.35@45474d527212ca67cdb93f6c5e6da68f4bc67118',
  'symfony/deprecation-contracts' => 'v2.5.2@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/doctrine-bridge' => 'v5.4.35@f1c8d1f75ede8ba6810498666159c50ca05beec0',
  'symfony/dotenv' => 'v5.4.35@4de488440104b99d2e7c0717ee432e760b061e32',
  'symfony/error-handler' => 'v5.4.35@39225b1e47fdd91a6924b1e7d7a4523da2e1894b',
  'symfony/event-dispatcher' => 'v5.4.35@7a69a85c7ea5bdd1e875806a99c51a87d3a74b38',
  'symfony/event-dispatcher-contracts' => 'v2.5.2@f98b54df6ad059855739db6fcbc2d36995283fe1',
  'symfony/filesystem' => 'v5.4.35@5a553607d4ffbfa9c0ab62facadea296c9db7086',
  'symfony/finder' => 'v5.4.35@abe6d6f77d9465fed3cd2d029b29d03b56b56435',
  'symfony/flex' => 'v1.21.5@6b46a001639f810d01f4f1b39be1291192a711d4',
  'symfony/form' => 'v5.4.35@c827d421caccf467ef1a969e7412a8755fa88093',
  'symfony/framework-bundle' => 'v5.4.35@89805687f360133f18bdedfb32138ce0ddd5383c',
  'symfony/google-mailer' => 'v5.4.35@6d7191a30fd2ae0ab740a93cfbf7fba64834aed6',
  'symfony/http-foundation' => 'v5.4.35@f2ab692a22aef1cd54beb893aa0068bdfb093928',
  'symfony/http-kernel' => 'v5.4.35@949bc7721c83fa9f81fc6c9697db0aa340c64f4d',
  'symfony/mailer' => 'v5.4.35@664724b0fb4646dee30859d0ed9131a2d7633320',
  'symfony/mime' => 'v5.4.35@ee94d9b538f93abbbc1ee4ccff374593117b04a9',
  'symfony/options-resolver' => 'v5.4.21@4fe5cf6ede71096839f0e4b4444d65dd3a7c1eb9',
  'symfony/password-hasher' => 'v5.4.35@23b9782de5d06a7e61101558d3e887100fbf8f93',
  'symfony/polyfill-intl-grapheme' => 'v1.29.0@32a9da87d7b3245e09ac426c83d334ae9f06f80f',
  'symfony/polyfill-intl-icu' => 'v1.29.0@07094a28851a49107f3ab4f9120ca2975a64b6e1',
  'symfony/polyfill-intl-idn' => 'v1.29.0@a287ed7475f85bf6f61890146edbc932c0fff919',
  'symfony/polyfill-intl-normalizer' => 'v1.29.0@bc45c394692b948b4d383a08d7753968bed9a83d',
  'symfony/polyfill-mbstring' => 'v1.29.0@9773676c8a1bb1f8d4340a62efe641cf76eda7ec',
  'symfony/polyfill-php73' => 'v1.29.0@21bd091060673a1177ae842c0ef8fe30893114d2',
  'symfony/polyfill-php80' => 'v1.29.0@87b68208d5c1188808dd7839ee1e6c8ec3b02f1b',
  'symfony/polyfill-php81' => 'v1.29.0@c565ad1e63f30e7477fc40738343c62b40bc672d',
  'symfony/property-access' => 'v5.4.35@f1341758d8046cfff0ac748a0cad238f917191d4',
  'symfony/property-info' => 'v5.4.35@d30d48f366ad2bfbf521256be85eb1c182c29198',
  'symfony/proxy-manager-bridge' => 'v5.4.21@a4cf96f3acfa252503a216bea877478f9621c7c0',
  'symfony/routing' => 'v5.4.35@86c5a06a61ddaf17efa1403542e3d7146af96203',
  'symfony/runtime' => 'v5.4.35@a32a623d71fc0f699a2a196377b3b85c840bd39a',
  'symfony/security-bundle' => 'v5.4.35@ed194715515a87d0f9c80b8696baf37ae18beb81',
  'symfony/security-core' => 'v5.4.35@3cbacefb2a350ed39950f93c8a054c2eb625fb69',
  'symfony/security-csrf' => 'v5.4.35@6728ed79d7f9aae3b86fca7ea554f1c46bae1e0b',
  'symfony/security-guard' => 'v5.4.35@b6fb8c88f7cd544db761de2d1c3618cbc5c1b9e7',
  'symfony/security-http' => 'v5.4.35@274a6aef49a0e1707bcb57217251885be749b6d8',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/stopwatch' => 'v5.4.35@887762aa99ff16f65dc8b48aafead415f942d407',
  'symfony/string' => 'v5.4.35@c209c4d0559acce1c9a2067612cfb5d35756edc2',
  'symfony/translation-contracts' => 'v2.5.2@136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
  'symfony/twig-bridge' => 'v5.4.35@e6ae362b7c4f1d6e99f61f59b0c93b9f027b4c73',
  'symfony/twig-bundle' => 'v5.4.35@f59b91e23c7c790e71a187c3fa4aefdc5391d682',
  'symfony/validator' => 'v5.4.35@4993e9b5b17e23e7ad9dc2e3b31412f5c4679385',
  'symfony/var-dumper' => 'v5.4.35@ce4685b30e47d94dfc990c5566285ff99ddf012b',
  'symfony/var-exporter' => 'v5.4.35@abb0a151b62d6b07e816487e20040464af96cae7',
  'symfony/yaml' => 'v5.4.35@e78db7f5c70a21f0417a31f414c4a95fe76c07e4',
  'twig/twig' => 'v3.8.0@9d15f0ac07f44dc4217883ec6ae02fd555c6f71d',
  'nikic/php-parser' => 'v4.18.0@1bcbb2179f97633e98bbbc87044ee2611c7d7999',
  'symfony/maker-bundle' => 'v1.43.0@e3f9a1d9e0f4968f68454403e820dffc7db38a59',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  '__root__' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
