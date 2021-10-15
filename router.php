<?php

require_once("app/controller/FoodController.php");
require_once("app/controller/UserController.php");

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);
$foodController = new FoodController();
$userController = new UserController();

switch ($params[0]) {
    case 'home':
        $foodController->showHome();
        break;
    case 'menu':
        $foodController->showMenu();
        break;
    case 'compra':
        $foodController->showCompra();
        break;
    case 'nosotros':
        $foodController->showNosotros();
        break;

        
    case 'login':
        $foodController->showLogin();
        break;
    case 'logout':
        $foodController->logout();
        break;

    case 'addCategorie':
        $foodController->addCategorie();
        break;
    case 'addFood':
        $foodController->addFood();
        break;
    case 'updateCategorie':
        $foodController->updateCategorie();
        break;
    case 'updateFood':
        $foodController->updateFood();
        break;
    case 'deleteCategorie':
        $foodController->deleteCategorie($params[1]);
        break;
    case 'deleteFood':
        $foodController->deleteFood($params[1]);
        break;
    default:
        echo "Error 404 - Page not fund";
        break;
}
