
# Becode  JEPSEN LG - PHP with Slim 3 Framework

![Becode logo](img/becode-logo.png)

Environment prototype that can be used for the group exercice

## This prototype covers

* Use of Slim Framework (routing / CRUD, MVC...)
* Use of Composer / vendors / namespaces
* PSR7 request objects
* Use of Twig and container dependencies injection (DI))

### Architecture

├── app

│   ├── dependencies.php

│   ├── routes.php

│   └── settings.php   

├── bootstrap

│   └── app.php

├── cache

├── css

│   └── style.css

├── img

├── public

│   └── index.php

├── templates

│   ├── partials

│   │   ├── footer.twig

│   │   └── nav.php

│   ├── about.twig

│   ├── contact.twig

│   ├── home.twig

│   └── layout.twig

├── vendor

│   ├── Several folders used by composer

│   └── autoload.php

├── composer.json

├── composer.lock

└── README.md


**--app/dependencies--**

Container service for Twig-Views with dependency injection

**--app/routes--**

PSR 7 request object + routing

**--app/settings--**

Object setting to indicate to the application where to find our twig templates

**--bootstrap/app--**

Slim Application setting and bootstrapping

**--public/index--**

Landing page, launch bootsrap and the application

**--templates/partial--**

Common parts of the twig templates

**--templates--**

Templates for each page + general layout

### Prerequisites 

Require: PHP 7.3

[Composer](https://getcomposer.org/) is not required if you don't plan to add dependencies or dump autoload with new namespaces

If you add namespaces in vendor/autoload.php use: *composer dump-autoload*

### Running the application

Clone, go in the root (of this application) and launch the php server with:

*php -S localhost:8000 -t public/*

Then run the application in your browser: http://localhost:8000/

### Sources and documentation

[Slim documentation](http://www.slimframework.com/docs/)

[zooboole's Github](https://github.com/zooboole)

[zooboole's tutorial](https://phpocean.com/tutorials/back-end/workouts-with-slim-3-create-a-simple-website/48)

[Dev.to](https://dev.to/charliedevelops/getting-started-with-slim-php-framework-by-building-a-very-simple-mvcoop-app-4j2b)
