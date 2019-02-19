<?php
/**launch from root with: php -S localhost:8000 -t public/
http://localhost:8000/
More info about php build-in server: http://php.net/manual/fr/features.commandline.webserver.php
source repo: https://github.com/zooboole/Slim3-First-Application
routing: https://phpocean.com/tutorials/back-end/laravel-for-tortoises-part-4-routing/27
PSR 7: https://www.php-fig.org/psr/psr-7/
PSR 7: http://www.slimframework.com/docs/v3/objects/request.html**/


// Let's ask PHP to display all errors whenever they
// occur in our slim code
ini_set('display_errors', true);


//USE VENDOR
// Call composer to autoload(make them available)
// all classes from the the `vendor` folder
// located at vendor/autoload.php
require __DIR__ . '/../vendor/autoload.php';

// call of the Slim application using its namespace.
use Slim\App;

//PSR 7 REQUEST OBJECT
// we will have to specify that we are using the PSR-7 interfaces
use \Psr\Http\Message\ServerRequestInterface;
use \Psr\Http\Message\ResponseInterface;

//INSTANCIATION
$app = new \Slim\App();

//CONTAINER DI
// Create  new container service for Twig-Views with dependency injection
$container = $app->getContainer();
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('../templates');
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));
    return $view;
};

//ROUTING
// We add our request routes
// instance->http verb GET, POST, DELETE, PUT... ('URI', callBackFunction aka closure(PSR 7 request objec $HTTP request, PSR 7 request objec $HTTP response, $array passed to the URI))
// route for HP
$app->get('/',function(ServerRequestInterface $request,ResponseInterface $response,$args) {
  return $this->view->render($response, 'home.twig');
});
$app->get('/about',function(ServerRequestInterface $request,ResponseInterface $response,$args) {
  return $this->view->render($response, 'about.twig');
});
$app->get('/contact',function(ServerRequestInterface $request,ResponseInterface $response,$args) {
  return $this->view->render($response, 'contact.twig');
});


$app->run();
