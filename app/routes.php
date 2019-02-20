<?php

// Creating routes
//PSR 7 REQUEST OBJECT
// we will have to specify that we are using the PSR-7 interfaces
use \Psr\Http\Message\ServerRequestInterface;
use \Psr\Http\Message\ResponseInterface;

//ROUTING
// We add our request routes
// instance->http verb GET, POST, DELETE, PUT... ('URI', callBackFunction aka closure(PSR 7 request objec $HTTP request, PSR 7 request objec $HTTP response, $array passed to the URI))
// route for HP
$app->get('/',function(ServerRequestInterface $request,ResponseInterface $response,$args) {
  return $this->view->render($response, 'home.twig');
})->setName('home');
// route for about
$app->get('/about',function(ServerRequestInterface $request,ResponseInterface $response,$args) {
  return $this->view->render($response, 'about.twig');
})->setName('about');
// route for contact
$app->get('/contact',function(ServerRequestInterface $request,ResponseInterface $response,$args) {
  return $this->view->render($response, 'contact.twig');
})->setName('contact');
