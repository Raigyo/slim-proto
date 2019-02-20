<?php

/*
sudo atom /etc/php/7.3/cli/php.ini
Uncomment:
extension=pgsql
extension=pdo_pgsql
Use https://github.com/becodeorg/LIE-Jepsen-1.9/tree/master/02-the-hill/docker-compose-postgres
docker-compose up
*/


$conn = new PDO('pgsql:host=localhost:9000;port=5432;dbname=becode', 'becode', 'becode');
