<?php

$config = new myConfig();
$config->setPath('C:/xampp/htdocs/CamaraTermica/');
$config->setDrive('pgsql');
$config->setHost('localhost');
$config->setPort(5432);
$config->setUser('postgres');
$config->setPassword('123');
$config->setDbname('Sicoter');
$config->setHash('md5');
$config->setUrl('http://localhost/CamaraTermica/www/');