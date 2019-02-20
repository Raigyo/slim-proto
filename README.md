
# Becode  JEPSEN LG - PHP with Slim 3 Framework

![Becode logo](img/becode-logo.png)

Environment prototype that can be used for the group exercice

## This prototype covers

* Use of Slim Framework (routing, MVC...)
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

├── composer.json

├── composer.lock

└── README.md

### Prerequisites

Require: PHP 7.3

[Composer](https://getcomposer.org/) is not required if you don't plan to add dependencies or dump autoload with new namespaces

### Running the application

Clone, go in the root (of this application) and launch the php server with:

php -S localhost:8000 -t public/

Then run the application in your browser: http://localhost:8000/

### Sources and documentation

[Slim documentation](http://www.slimframework.com/docs/)

[zooboole's Github](https://github.com/zooboole)

[zooboole's tutorial](https://phpocean.com/tutorials/back-end/workouts-with-slim-3-create-a-simple-website/48)

[Dev.to](https://dev.to/charliedevelops/getting-started-with-slim-php-framework-by-building-a-very-simple-mvcoop-app-4j2b)
