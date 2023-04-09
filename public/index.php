<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config.php';
require_once __DIR__ . '/../src/Class/DatabaseAbstract.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../templates');

$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__.'/../var/cache',
]);

// Connection à la base de donnée
$database = DatabaseAbstract::getInstance();
$connection = $database->getConnection();

// Ecriture de la requête
$sqlQuery = 'INSERT INTO test(title, recipe) VALUES (?,?)';

$ins = $connection->prepare($sqlQuery);

$ins->execute([
    'title112',
    'recipe'
]);

$template = $twig->load('index/index.twig.html');

echo $template->render([
    'title' => 'Lame app',
    'h1' => 'Welcome to the Lame App'
]);

?>