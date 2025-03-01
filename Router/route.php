<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/DashboardController.php";
require_once "Controllers/ComponentsController.php";
require_once "Controllers/UtilitiesController.php";


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);

// Dashboar
$route->get("/dashboard", [DashboardController::class, 'index']);

// Components
$route->get("/components/buttons", [ComponentsController::class, 'button']);
$route->get("/components/cards", [ComponentsController::class, 'card']);


// Utilities
$route->get("/utilities/colors", [UtilitiesController::class, 'color']);
$route->get("/utilities/borders", [UtilitiesController::class, 'border']);
$route->get("/utilities/animations", [UtilitiesController::class, 'animation']);
$route->get("/utilities/other", [UtilitiesController::class, 'other']);




$route->route();