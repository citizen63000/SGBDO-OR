<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__.'/vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$paths = [__DIR__."/src/Entity"];
$isDevMode = true;

// env configuration
(Dotenv\Dotenv::createImmutable(__DIR__))->load();

$dbParams = [
'driver'   => 'pdo_pgsql',
'host'     => 'localhost',
'port'     => '5432',
'user'     => 'postgres',
'password' => 'password',
'dbname'   => 'bibliotheque'
];

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);