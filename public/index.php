<?php

require_once __DIR__.'/../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../templates');

$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__.'/../var/cache',
]);

$template = $twig->load('index/index.twig.html');

echo $template->render([
    'title' => 'Page tihhhhtle',
    'h1' => 'Page h2'
]);

?>