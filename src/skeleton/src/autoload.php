<?php
define('SYMFONY_PATH', '{{ symfony-path }}');
define('SYMFONY_VENDOR_PATH', '{{ symfony-vendor-path }}');

require_once SYMFONY_PATH.'/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony'                    => SYMFONY_PATH,
    'Application'                => __DIR__,
    'Bundle'                     => __DIR__,
    'Doctrine\\Common'           => SYMFONY_VENDOR_PATH.'/doctrine-common/lib',
    'Doctrine\\DBAL\\Migrations' => SYMFONY_VENDOR_PATH.'/doctrine-migrations/lib',
    'Doctrine\\ODM\\MongoDB'     => SYMFONY_VENDOR_PATH.'/doctrine-mongodb/lib',
    'Doctrine\\DBAL'             => SYMFONY_VENDOR_PATH.'/doctrine-dbal/lib',
    'Doctrine'                   => SYMFONY_VENDOR_PATH.'/doctrine/lib',
    'Zend'                       => SYMFONY_VENDOR_PATH.'/zend/library',
));
$loader->registerPrefixes(array(
    'Swift_' => SYMFONY_VENDOR_PATH.'/swiftmailer/lib/classes',
    'Twig_'  => SYMFONY_VENDOR_PATH.'/twig/lib',
));
$loader->register();
