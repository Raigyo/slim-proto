<?php

//CONTAINER DI:Create  new container service for Twig-Views with dependency injection
// Get the container
$container = $app->getContainer();
// Twig view dependency
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('../templates');
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));
    return $view;
};
