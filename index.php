<?php
require 'config/constant.php';
require 'config/connection.php';
require 'controller/HomeController.php';
require 'Controller/VehiclesController.php';
require 'Router.php';

$router = new Router();
$element = $router->getController($_SERVER['REQUEST_URI']);

$controller = $element['controller'];

$cont = new $controller($pdo);

$action = $element['action'];

$cont->$action();
?>