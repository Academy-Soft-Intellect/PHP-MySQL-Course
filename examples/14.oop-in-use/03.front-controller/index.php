<?php
require_once "RouterControllerInterface.php";
require_once "RouterController.php";

// Ugly load of controllers
require_once "controllers/IndexController.php";
require_once "controllers/ContactController.php";

$router = new RouterController();
$router->run();