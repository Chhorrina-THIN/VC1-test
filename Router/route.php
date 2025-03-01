<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/DashboardController.php";
require_once "Controllers/ComponentsController.php";
require_once "Controllers/UtilitiesController.php";
require_once "Controllers/PagesController.php";
require_once "Controllers/ChartsController.php";


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


// Pages
$route->get("/pages/login", [PagesController::class, 'login']);
$route->get("/pages/register", [PagesController::class, 'register']);
$route->get("/pages/forgot_password", [PagesController::class, 'forgotpsw']);
$route->get("/pages/404page", [PagesController::class, '_404page']);
$route->get("/pages/blankpage", [PagesController::class, 'blankpage']);


// Charts
$route->get("/charts/chart", [ChartsController::class, 'chart']);






$route->route();