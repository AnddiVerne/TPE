<?php

require_once("app/controller/FoodController.php");         /* al controlador */
require_once("app/controller/UserController.php");

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);
$foodController = new FoodController();      /* crear los controladores */
$controllerUser = new UserController();

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
    /*case 'addCategories':
        $controllerDelivery->addCategories();
        break;
    case 'addFood':
        $controllerDelivery->addFood();
        break;
    case 'updateCategorie':
        $controllerDelivery->updateCategorie();
        break;
    case 'updateFood':
        $controllerDelivery->updateFood();
        break;
    case 'deleteCategorie':
        $controllerDelivery->deleteCategorie($params[1]);
        break;
    case 'deleteFood':
        $controllerDelivery->deleteFood($params[1]);
        break;
    case 'crearUser':
        $controllerUser->createUser();
        break;
    case 'login':
        $controllerUser->login();
        break;
    case 'logout':
        $controllerUser->logout();
        break; */
    default:
        echo "Error 404 - Page not fund";
        break;
}
