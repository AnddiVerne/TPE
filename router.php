<?php 
require_once ("app\controller\controller.php");  /* al controlador */
require_once (".php");



if (!empty($_GET['action'])){
    $action = $_GET['action'];
}
else {
    $action = 'home';
}

$params = explode ('/',$action);
    /* $controllerPag = new ControllerPag();      crear los controladores
    $controllerUser = new ControllerUser(); */
switch($params[0]){
    case 'home':
        $controllerPag->showHome();
    ;break;
    case 'menu':
        $controllerPag->showMenu ();
    ;break;
    case 'compra':
        $controllerPag->showCompra();
    ;break;
    case 'nosotros':
        $controllerPag->showNosotros();
    ;break;

    case 'addCategories':
        $controllerDelivery->addCategories();
    ;break;
    case 'addFood':
        $controllerDelivery->addFood();
    ;break;
    case 'updateCategorie':
        $controllerDelivery->updateCategorie();
    ;break;
    case 'updateFood':
        $controllerDelivery->updateFood();
    ;break;
    case 'deleteCategorie':
        $controllerDelivery->deleteCategorie($params[1]);
    ;break;
    case 'deleteFood':
        $controllerDelivery->deleteFood($params[1]);
    ;break;

    case 'crearUser':
        $controllerUser->createUser();
    ;break;
    case 'login':
        $controllerUser->login();
    ;break;
    case 'logout':
        $controllerUser->logout();
    ;break;

    default:
        echo "Error 404 - Page not fund"
    ;break;
}