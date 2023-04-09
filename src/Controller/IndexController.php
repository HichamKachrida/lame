<?php

namespace App\Controller;



class IndexController
{
    public function index($id, $name)
    {
        $twigLoader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../../templates');

        $twig = new \Twig\Environment($twigLoader, [
            'cache' => __DIR__.'/../../var/cache',
        ]);

        $template = $twig->load('index/index.twig.html');

        echo $template->render([
            'id' => $id,
            'name' => $name
        ]);
    }
}