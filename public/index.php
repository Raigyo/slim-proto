<?php
/**launch from root with: php -S localhost:8000 -t public/
http://localhost:8000/
More info about php build-in server: http://php.net/manual/fr/features.commandline.webserver.php**/
/** source repo: https://github.com/zooboole/Slim3-First-Application**/
/** routing: https://phpocean.com/tutorials/back-end/laravel-for-tortoises-part-4-routing/27**/

// Let's ask PHP to display all errors whenever they
// occur in our slim code,
// otherwise Slim will kind of swalow them, it will
// only show in the command like.
// Make sure you set this before other codes
// The value mast become `false` before deployment
ini_set('display_errors', true);

// Call composer to autoload(make them available)
// all classes from the the `vendor` folder

//USE VENDOR
// This file is in charge of doing that, and it's
// located at vendor/autoload.php
// Your folders structure might be different from mine,
// make sure your adjust this relatively
require __DIR__ . '/../vendor/autoload.php';

// Let's announce to our application that we will be using
// the Slim application class(`vendor/slim/slim/slim/App.php`) by calling its namespace.
// We don't need to require it with its full path `vendor/slim/slim/slim/App.php`.
//Composer autoload has already done that for us up there.
use Slim\App;

//PSR 7 REQUEST OBJECT
// we will have to specify that we are using the PSR-7 interfaces
//https://www.php-fig.org/psr/psr-7/
//http://www.slimframework.com/docs/v3/objects/request.html
use \Psr\Http\Message\ServerRequestInterface;
use \Psr\Http\Message\ResponseInterface;

//INSTANCIATION
// We now get a new instance/Object of slim app itself
// and we save it in a variable we can name `$app`
// You can name this variable anything
$app = new App();

//ROUTING
// We add our request routes
// instance->http verb GET, POST, DELETE, PUT... ('URI', callBackFunction aka closure(PSR 7 request objec $HTTP request, PSR 7 request objec $HTTP response, $array passed to the URI))

$app->get('/', function(ServerRequestInterface $request, ResponseInterface $response, $args){
//$app->get('/', function($request, $response, $args){
	// Do anything here, like:
	echo "Homepage <br>";
	echo "Welcome to Homepage!";
	// Then return an HTTP response
	return $response;
});
/*
// We add a route for the about page
		$app->get('/about', function(Request $request, Response $response, $args){
		// Do anything here, like:
		echo "About Us <br>";
		echo" This is our about page ";
		// Then return an HTTP response
		return $response;
});*/

// Once we have the instance of Slim\App we can ask it to start running
// the application by calling Slim's run() function
$app->run();
