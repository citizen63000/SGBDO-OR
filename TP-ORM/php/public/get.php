<?php

include_once '../init.php';

use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

$twig = getTwig();
$manager = getPGManager();

// @todo implementez la récupération des données d'une entité et la passer au template
// petite aide : https://github.com/VSG24/mongodb-php-examples
$entity = ['name' => 'test'];

// render template
try {
    echo $twig->render('get.html.twig', ['entity' => $entity]);
} catch (LoaderError|RuntimeError|SyntaxError $e) {
    echo $e->getMessage();
}