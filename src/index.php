<?php

session_start();

require_once __DIR__.'/vendor/autoload.php';

$router = new App\Framwork\Router();
$router->getController();

echo 'Salut '.$_GET['p'];
