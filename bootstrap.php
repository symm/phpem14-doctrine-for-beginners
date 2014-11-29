<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once 'vendor/autoload.php';

$config = Setup::createYAMLMetadataConfiguration(
    [__DIR__ . "/config"],
    true
);
/*
$config = Setup::createAnnotationMetadataConfiguration(
    [__DIR__ . "/config"],
    true
);
*/

// MySQL
$databaseSettings = [
    'driver' => 'pdo_mysql',
    'dbname' => 'doctrine_demo',
    'user'   => 'root'
];

// SQLite
/*
$databaseSettings = [
    'driver' => 'pdo_sqlite',
    'path'   => __DIR__ . '/demo.sqlite'

];
*/

$entityManager = EntityManager::create($databaseSettings, $config);