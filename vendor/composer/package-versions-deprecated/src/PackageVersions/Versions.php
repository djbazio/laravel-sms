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
    const ROOT_PACKAGE_NAME = 'codeglen/ultimatesms';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'alexandr-mironov/php-smpp' => '1.3.0.7@4899dcd5807973f3ab662bb269a981c8084c11a8',
  'arcanedev/no-captcha' => '12.2.0@b2df8b5eaf17510d4d18099302763049345c4f9d',
  'arcanedev/php-html' => '5.0.1@51e851c5029dffebcc012238056b172779428828',
  'arcanedev/support' => '8.1.0@b161c3c080b314e832410295011625721fbd3a2f',
  'arielmejiadev/larapex-charts' => '2.1.0@7de57e5aed5b0851cf6043376addc838ef5123dd',
  'asm89/stack-cors' => 'v2.0.3@9cb795bf30988e8c96dd3c40623c48a877bc6714',
  'authorizenet/authorizenet' => '2.0.2@a3e76f96f674d16e892f87c58bedb99dada4b067',
  'aws/aws-sdk-php' => '3.183.3@b790a4cea9592a7df51da3a4affde0945248c24d',
  'box/spout' => 'v2.7.3@3681a3421a868ab9a65da156c554f756541f452b',
  'braintree/braintree_php' => '5.5.0@8902a072ac04c9eea2996f2683cb56259cbe46fa',
  'brick/math' => '0.9.2@dff976c2f3487d42c1db75a3b180e2b9f0e72ce0',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/cache' => '1.11.2@9c53086695937c50c47936ed86d96150ffbcf60d',
  'doctrine/dbal' => '2.13.1@c800380457948e65bbd30ba92cc17cda108bf8c9',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dragonmantank/cron-expression' => 'v3.1.0@7a8c6e56ab3ffcc538d05e8155bb42269abf1a0c',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'fideloper/proxy' => '4.4.1@c073b2bd04d1c90e04dc1b787662b558dd65ade0',
  'firebase/php-jwt' => 'v5.2.1@f42c9110abe98dd6cfe9053c49bc86acc70b2d23',
  'fruitcake/laravel-cors' => 'v2.0.4@a8ccedc7ca95189ead0e407c43b530dc17791d6a',
  'giggsey/libphonenumber-for-php' => '8.12.23@a6ff019e6d6f25f39c0797e678b342547045fb20',
  'giggsey/locale' => '1.9@b07f1eace8072ccc61445ad8fbd493ff9d783043',
  'graham-campbell/result-type' => 'v1.0.1@7e279d2cd5d7fbb156ce46daada972355cea27bb',
  'guzzlehttp/guzzle' => '7.3.0@7008573787b430c1c1f650e3722d9bba59967628',
  'guzzlehttp/promises' => '1.4.1@8e7d04f1f6450fef59366c399cfad4b9383aa30d',
  'guzzlehttp/psr7' => '1.8.2@dc960a912984efb74d0a90222870c72c87f10c91',
  'intervention/image' => '2.5.1@abbf18d5ab8367f96b3205ca3c89fb2fa598c69e',
  'laminas/laminas-diactoros' => '2.6.0@7d2034110ae18afe05050b796a3ee4b3fe177876',
  'laminas/laminas-zendframework-bridge' => '1.2.0@6cccbddfcfc742eb02158d6137ca5687d92cee32',
  'laravel/framework' => 'v8.42.1@41ec4897a70eb8729cf0ff34a8354413c54e42a6',
  'laravel/helpers' => 'v1.4.1@febb10d8daaf86123825de2cb87f789a3371f0ac',
  'laravel/legacy-factories' => 'v1.1.0@5e3fe2fd5fda64e20ea5c74c831a7346294e902a',
  'laravel/sanctum' => 'v2.11.0@3ed8f60dafef026acc21733366a08746a7bd176e',
  'laravel/socialite' => 'v5.2.3@1960802068f81e44b2ae9793932181cf1cb91b5c',
  'laravel/tinker' => 'v2.6.1@04ad32c1a3328081097a181875733fa51f402083',
  'laravel/ui' => 'v3.2.1@e2478cd0342a92ec1c8c77422553bda8ee004fd0',
  'laravelcollective/html' => 'v6.2.1@ae15b9c4bf918ec3a78f092b8555551dd693fde3',
  'lcobucci/clock' => '2.0.0@353d83fe2e6ae95745b16b3d911813df6a05bfb3',
  'lcobucci/jwt' => '4.1.4@71cf170102c8371ccd933fa4df6252086d144de6',
  'league/commonmark' => '1.6.2@7d70d2f19c84bcc16275ea47edabee24747352eb',
  'league/csv' => '9.7.1@0ec57e8264ec92565974ead0d1724cf1026e10c1',
  'league/flysystem' => '1.1.3@9be3b16c877d477357c015cec057548cf9b2a14a',
  'league/iso3166' => '3.0.0@9976d382f270ad3f3df8a68719beb7a7179ffa1e',
  'league/mime-type-detection' => '1.7.0@3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
  'league/oauth1-client' => 'v1.9.0@1e7e6be2dc543bf466236fb171e5b20e1b06aee6',
  'madnest/madzipper' => 'v1.1.0@fd1d8199d04eac103eed9355c9bba680dcf8b89b',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'mtdowling/jmespath.php' => '2.6.0@42dae2cbd13154083ca6d70099692fef8ca84bfb',
  'nesbot/carbon' => '2.48.0@d3c447f21072766cddec3522f9468a5849a76147',
  'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f',
  'opis/closure' => '3.6.2@06e2ebd25f2869e54a306dda991f7db58066f7f6',
  'paynow/php-sdk' => '1.0.5@b72ac71c899154fce8bbbe011c3367d8bd2f740e',
  'paypal/paypal-checkout-sdk' => '1.0.1@ed6a55075448308b87a8b59dcb7fedf04a048cb1',
  'paypal/paypalhttp' => '1.0.0@1ad9b846a046f09d6135cbf2cbaa7701bbc630a3',
  'phpoption/phpoption' => '1.7.5@994ecccd8f3283ecf5ac33254543eb0ac946d525',
  'plivo/plivo-php' => 'v4.18.3@7e098b2180f03537bde5266aebf884f11e607398',
  'propaganistas/laravel-phone' => '4.3.0@6953b54542f530c75ab8eb953b38cca4bfdc5d88',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.8@e4573f47750dd6c92dca5aee543fa77513cbd8d3',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.1.3@28a5c4ab2f5111db6a60b2b4ec84057e0f43b9c1',
  'ramsey/uuid' => '4.1.1@cd4032040a750077205918c86049aa0f43d22947',
  'rap2hpoutre/fast-excel' => 'v2.5.0@c8032e9146765e01a025f7f98d38b13f32f63e32',
  'razorpay/razorpay' => '2.7.0@e28454acdc110b544fc80bec9518b9b86b275a2c',
  'rmccue/requests' => 'v1.8.0@afbe4790e4def03581c4a0963a1e8aa01f6030f1',
  'slydepay/slydepay-soap' => 'v1.1.1@e58929b1b265534e6439275043c4cafccdd034ff',
  'spatie/laravel-translatable' => '4.6.0@5900d6002a5795712058a04c7ca7c2c44b3e0850',
  'stripe/stripe-php' => 'v7.79.0@e17e85bc13dfa531bdfb3d3719d3810431d104f9',
  'swiftmailer/swiftmailer' => 'v6.2.7@15f7faf8508e04471f666633addacf54c0ab5933',
  'symfony/console' => 'v5.2.8@864568fdc0208b3eba3638b6000b69d2386e6768',
  'symfony/css-selector' => 'v5.2.9@5d5f97809015102116208b976eb2edb44b689560',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/error-handler' => 'v5.2.8@1416bc16317a8188aabde251afef7618bf4687ac',
  'symfony/event-dispatcher' => 'v5.2.4@d08d6ec121a425897951900ab692b612a61d6240',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/finder' => 'v5.2.9@ccccb9d48ca42757dd12f2ca4bf857a4e217d90d',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.2.8@e8fbbab7c4a71592985019477532629cb2e142dc',
  'symfony/http-kernel' => 'v5.2.9@eb540ef6870dbf33c92e372cfb869ebf9649e6cb',
  'symfony/mime' => 'v5.2.9@64258e870f8cc75c3dae986201ea2df58c210b52',
  'symfony/polyfill-ctype' => 'v1.22.1@c6c942b1ac76c82448322025e084cadc56048b4e',
  'symfony/polyfill-iconv' => 'v1.22.1@06fb361659649bcfd6a208a0f1fcaf4e827ad342',
  'symfony/polyfill-intl-grapheme' => 'v1.22.1@5601e09b69f26c1828b13b6bb87cb07cddba3170',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1',
  'symfony/polyfill-php72' => 'v1.22.1@cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/process' => 'v5.2.7@98cb8eeb72e55d4196dd1e36f1f16e7b3a9a088e',
  'symfony/routing' => 'v5.2.9@4a7b2bf5e1221be1902b6853743a9bb317f6925e',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/string' => 'v5.2.8@01b35eb64cac8467c3f94cd0ce2d0d376bb7d1db',
  'symfony/translation' => 'v5.2.9@61af68dba333e2d376a325a29c2a3f2a605b4876',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/var-dumper' => 'v5.2.8@d693200a73fae179d27f8f1b16b4faf3e8569eba',
  'tijsverkoyen/css-to-inline-styles' => '2.2.3@b43b05cf43c1b6d849478965062b6ef73e223bb5',
  'twilio/sdk' => '6.24.0@110651d67940617e08557a7bac57edbd27b77d3e',
  'vlucas/phpdotenv' => 'v5.3.0@b3eac5c7ac896e52deab4a99068e3f4ab12d9e56',
  'voku/portable-ascii' => '1.5.6@80953678b19901e5165c56752d087fc11526017c',
  'vonage/client' => '2.4.0@29f23e317d658ec1c3e55cf778992353492741d7',
  'vonage/client-core' => '2.9.2@2b734ff7d86d4b6f169df49aed3aefcdac7a40d0',
  'vonage/nexmo-bridge' => '0.1.0@62653b1165f4401580ca8d2b859f59c968de3711',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'codeglen/ultimatesms' => 'dev-master@34f1af92b19dc7a5101165a1b3cda784a6a6c46a',
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
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
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
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
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
}
