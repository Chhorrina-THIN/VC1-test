<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/DashboardController.php";
require_once "Controllers/ComponentsController.php";


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);

// Dashboar
$route->get("/dashboard", [DashboardController::class, 'index']);

// Components
$route->get("/components/buttons", [ComponentsController::class, 'button']);
$route->get("/components/cards", [ComponentsController::class, 'card']);



$route->route();