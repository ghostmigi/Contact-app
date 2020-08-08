<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

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
     * @deprecated please use {@see \Composer\InstalledVersions::getRootPackage()} instead. The
     *             equivalent expression for this constant's contents is
     *             `\Composer\InstalledVersions::getRootPackage()['name']`.
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
  'cocur/slugify' => 'v4.0.0@3f1ffc300f164f23abe8b64ffb3f92d35cec8307',
  'composer/package-versions-deprecated' => '1.10.99@dd51b4443d58b34b6d9344cf4c288e621c9a826f',
  'doctrine/annotations' => '1.10.3@5db60a4969eba0e0c197a19c077780aadbc43c5d',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.6@5f0470363ff042d0057006ae7acabc5d7b5252d5',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '2.1.0@0fb513842c78b43770597ef3c487cdf79d944db3',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.1.0@5458bdcf176f6a53292e3f0cc73f292d6302fb0f',
  'egulias/email-validator' => '2.1.18@cfa3d44471c7f5bfb684ac2b0da7114283d78441',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.0.4@fcd87520e4943d968557803919523772475e8ea3',
  'monolog/monolog' => '1.25.4@3022efff205e2448b560c833c6fbbf91c3139168',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.3.0@e878a14a65245fbe78f8080eba03b47c3b705651',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.5.6@b49f079d8a87a6e6dd434062085ff5a132af466b',
  'symfony/asset' => 'v4.4.10@d8a755baa015b8949a105b8288eeb0714d9b1b5f',
  'symfony/cache' => 'v4.4.10@e12aad53e6b9fa80a3ca1d043b6dde9449b4f924',
  'symfony/cache-contracts' => 'v2.1.3@9771a09d2e6b84ecb8c9f0a7dbc72ee92aeba009',
  'symfony/config' => 'v4.4.10@395f6e09e1dc6ac9c1a5eea3b7f44f7a820a5504',
  'symfony/console' => 'v4.4.10@326b064d804043005526f5a0494cfb49edb59bb0',
  'symfony/debug' => 'v4.4.10@28f92d08bb6d1fddf8158e02c194ad43870007e6',
  'symfony/dependency-injection' => 'v4.4.10@a37cc0a90fec178768aa5048fea9251efde591c5',
  'symfony/doctrine-bridge' => 'v4.4.10@01463555497ed8844a3b1511c5ff39dd226ccd0a',
  'symfony/dotenv' => 'v4.4.10@24d734ab97c7fb8b4fa10c64ee0c344f2badfcf0',
  'symfony/error-handler' => 'v4.4.10@0df9a23c0f9eddbb6682479fee6fd58b88add75b',
  'symfony/event-dispatcher' => 'v4.4.10@a5370aaa7807c7a439b21386661ffccf3dff2866',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/expression-language' => 'v4.4.10@89f0e2c82d8c12975180f993383decbb810ad73e',
  'symfony/filesystem' => 'v4.4.10@b27f491309db5757816db672b256ea2e03677d30',
  'symfony/finder' => 'v4.4.10@5729f943f9854c5781984ed4907bbb817735776b',
  'symfony/flex' => 'v1.9.1@0e752e47d8382361ca2d7ef016f549828185ddb6',
  'symfony/form' => 'v4.4.10@d3d8ebb8525418161b862738c4cefe518e431ff3',
  'symfony/framework-bundle' => 'v4.4.10@7da157f220ed61f43506ce5dc0527437da08095e',
  'symfony/http-client' => 'v4.4.10@b141d8dd0c2dca86287e33c3dcab079a778ed479',
  'symfony/http-client-contracts' => 'v2.1.3@cd88921e9add61f2064c9c6b30de4f589db42962',
  'symfony/http-foundation' => 'v4.4.10@3adfbd7098c850b02d107330b7b9deacf2581578',
  'symfony/http-kernel' => 'v4.4.10@81d42148474e1852a333ed7a732f2a014af75430',
  'symfony/inflector' => 'v4.4.10@3330be44724db42f0aa493002ae63f5d29f8d5f7',
  'symfony/intl' => 'v4.4.10@42a07a917c4db30c671b545175e402053ff23ad0',
  'symfony/mailer' => 'v4.4.10@fd16ff23c18146be32b1ea51f6cc43dc505ce361',
  'symfony/mime' => 'v4.4.10@af8e69e7527f752ab0ef6e1b717bac3f7336b8c6',
  'symfony/monolog-bridge' => 'v4.4.10@beb70975af56acdd67f3add01970165954d577c5',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.4.10@73e1d0fe11ffceb7b7d4ca55b7381cd7ce0bac05',
  'symfony/polyfill-intl-icu' => 'v1.18.0@4e45a6e39041a9cc78835b11abc47874ae302a55',
  'symfony/polyfill-intl-idn' => 'v1.18.0@bc6549d068d0160e0f10f7a5a23c7d1406b95ebe',
  'symfony/polyfill-intl-normalizer' => 'v1.18.0@37078a8dd4a2a1e9ab0231af7c6cb671b2ed5a7e',
  'symfony/polyfill-mbstring' => 'v1.18.0@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php72' => 'v1.18.0@639447d008615574653fb3bc60d1986d7172eaae',
  'symfony/polyfill-php73' => 'v1.18.0@fffa1a52a023e782cdcc221d781fe1ec8f87fcca',
  'symfony/polyfill-php80' => 'v1.18.0@d87d5766cbf48d72388a9f6b85f280c8ad51f981',
  'symfony/process' => 'v4.4.10@c714958428a85c86ab97e3a0c96db4c4f381b7f5',
  'symfony/property-access' => 'v4.4.10@e6d51a8845b862835f5fcaf3c1030a50dc7cc70f',
  'symfony/property-info' => 'v4.4.10@9904ddd5a24777b744123148bfaedbd83ce66d24',
  'symfony/routing' => 'v4.4.10@0f557911dde75c2a9652b8097bd7c9f54507f646',
  'symfony/security-bundle' => 'v4.4.10@6c1e30e2755928313e5eb55af20f615ed9fec2a2',
  'symfony/security-core' => 'v4.4.10@16ab88e5692e3fc32ae4ad550a55fbced516203b',
  'symfony/security-csrf' => 'v4.4.10@8788f6d4c8555b34d6f32f42b996b937b473f6b3',
  'symfony/security-guard' => 'v4.4.10@699162c3a9fcceb5ec8bce35a3dc2fcb79c6751e',
  'symfony/security-http' => 'v4.4.10@4aab90c5797a4f2ee9d5cd91f5e884d1e21f431a',
  'symfony/serializer' => 'v4.4.10@a91ceee34fc690a824770085192ffdeaa4476a8c',
  'symfony/service-contracts' => 'v2.1.3@58c7475e5457c5492c26cc740cc0ad7464be9442',
  'symfony/stopwatch' => 'v4.4.10@f51fb90df1154a7f75987198a9689e28f91e6a50',
  'symfony/translation' => 'v4.4.10@79d3ef9096a6a6047dbc69218b68c7b7f63193af',
  'symfony/translation-contracts' => 'v2.1.3@616a9773c853097607cf9dd6577d5b143ffdcd63',
  'symfony/twig-bridge' => 'v4.4.10@13a9659ebceea38814ef8fde6399e36760ea08ad',
  'symfony/twig-bundle' => 'v4.4.10@c83e606bdc54504a1b2bcd8807b5dd139187b4a4',
  'symfony/validator' => 'v4.4.10@2fae3378102cff29976ce9e35f6964c78fce02b6',
  'symfony/var-dumper' => 'v4.4.10@56b3aa5eab0ac6720dcd559fd1d590ce301594ac',
  'symfony/var-exporter' => 'v4.4.10@f311af6e44fefedbd4f1e23e97607ef0f917bfcc',
  'symfony/web-link' => 'v4.4.10@b862a104ef3a233b6f12fdbf6b57113308af79ff',
  'symfony/yaml' => 'v4.4.10@c2d2cc66e892322cfcc03f8f12f8340dbd7a3f8a',
  'twig/extra-bundle' => 'v3.0.4@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/twig' => 'v3.0.4@582bdbdc173027ebfba3c93dc750a40b8f9ebc02',
  'webimpress/safe-writer' => '2.0.1@d6e879960febb307c112538997316371f1e95b12',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'doctrine/data-fixtures' => '1.4.3@7ebac50901eb4516816ac39100dba1759d843943',
  'doctrine/doctrine-fixtures-bundle' => '3.3.1@39defca57ee0949e1475c46177b30b6d1b732e8f',
  'nikic/php-parser' => 'v4.6.0@c346bbfafe2ff60680258b631afb730d186ed864',
  'symfony/browser-kit' => 'v4.4.10@f53310646af9901292488b2ff36e26ea10f545f5',
  'symfony/css-selector' => 'v4.4.10@afc26133a6fbdd4f8842e38893e0ee4685c7c94b',
  'symfony/debug-bundle' => 'v4.4.10@12a020d14b4f6f3a5cfb46cd83836b78be036210',
  'symfony/dom-crawler' => 'v4.4.10@c18354d5a0bb84c945f6257c51b971d52f10c614',
  'symfony/maker-bundle' => 'v1.20.0@b048c7b2be5bce9024ae3b0db97d44a107029c27',
  'symfony/phpunit-bridge' => 'v5.1.2@de5f0fec631a0cbfe98630b053be1fad7b75aece',
  'symfony/web-profiler-bundle' => 'v4.4.10@e86d3e8d9230fddfee27017f3b8c5c868733079e',
  'paragonie/random_compat' => '2.*@aeccdc16f7b368b01b62e63ea589aeeedf9bd695',
  'symfony/polyfill-ctype' => '*@aeccdc16f7b368b01b62e63ea589aeeedf9bd695',
  'symfony/polyfill-iconv' => '*@aeccdc16f7b368b01b62e63ea589aeeedf9bd695',
  'symfony/polyfill-php71' => '*@aeccdc16f7b368b01b62e63ea589aeeedf9bd695',
  'symfony/polyfill-php70' => '*@aeccdc16f7b368b01b62e63ea589aeeedf9bd695',
  'symfony/polyfill-php56' => '*@aeccdc16f7b368b01b62e63ea589aeeedf9bd695',
  '__root__' => 'dev-master@aeccdc16f7b368b01b62e63ea589aeeedf9bd695',
);

    private function __construct()
    {
        class_exists(InstalledVersions::class);
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
        if (class_exists(InstalledVersions::class, false)) {
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
