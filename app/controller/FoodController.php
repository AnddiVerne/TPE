<?php

require_once('app/controller/Controller.php');
require_once('app/models/FoodModel.php');
require_once('app/views/FoodView.php');

class FoodController extends Controller
{
    private $foodModel;
    private $foodView;

    public function __construct()
    {
        $this->foodModel = new FoodModel();
        $this->foodView = new FoodView();
    }


    public function showHome()
    {
        $session = $this->checkSession();

        $this->foodView->showHome($session);
    }


    public function showMenu()
    {
        $session = $this->checkSession();
        $foods = $this->foodModel->getAllFoods();
        $categorias = $this->foodModel->getAllCategories();
        $this->foodView->showMenu($session, $foods, $categorias);
    }

    public function showCompra()
    {
        $session = $this->checkSession();
        $this->foodView->showCompra($session);
    }


    public function showNosotros()
    {
        $session = $this->checkSession();
        $this->foodView->showNosotros($session);
    }

    public function showLogin()
    {
        $session = $this->checkSession();
        $this->foodView->showLogin($session);
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . BASE_URL);
    }

    /* public function agregarTarea()
    {
        $this->checkSession();
        $descripcion = $_POST['descripcion'];
        $prioridad = $_POST['prioridad'];
        $this->tareasModel->insertarTarea($descripcion, $prioridad);
        header('Location: ' . BASE_URL);
    }

    public function terminarTarea()
    {
        $this->checkSession();
        $tarea_id = $_POST['tarea'];
        $this->tareasModel->actualizaTarea($tarea_id);
        header('Location: ' . BASE_URL);
    }

    public function borrarTarea()
    {
        $this->checkSession();
        $tarea_id = $_POST['tarea'];
        $this->tareasModel->eliminarTarea($tarea_id);
        header('Location: ' . BASE_URL);
    } */

    public function addFood()
    {
        /* $session = $this->checkSession(); */
        
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $id_categoria = $_POST['id_categoria'];
            $descripcion = $_POST['descripcion'];
            $this->foodModel->addFood($nombre, $precio, $id_categoria, $descripcion);
        
        $this->showHome();
    }

    public function updateFood()
    {
        $session = $this->checkSession();
        if ($session) {
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $id_categoria = $_POST['id_categoria'];
            $descripcion = $_POST['descripcion'];
            $this->foodModel->updateFood($nombre, $precio, $id_categoria, $descripcion);
        }
        $this->showHome();
    }

    public function deleteFood()
    {
        $session = $this->checkSession();
        if ($session) {
            $id = $_POST['nombre'];
            $this->foodModel->deleteFood($id);
        }
        $this->showHome();
    }

    public function addCategorie()
    {
        $session = $this->checkSession();
        if ($session) {
            $nombre = $_POST['nombre'];
            $sucursal = $_POST['sucursal'];

            $this->foodModel->addCategorie($nombre, $sucursal);
        }
        $this->showHome();
    }

    public function updateCategorie()
    {
        $session = $this->checkSession();
        if ($session) {
            $nombre = $_POST['nombre'];
            $sucursal = $_POST['sucursal'];
            $this->foodModel->updateCategorie($nombre, $sucursal);
        }
        $this->showHome();
    }

    public function deleteCategorie()
    {
        $session = $this->checkSession();
        if ($session) {
            $id = $_POST['nombre'];
            $this->foodModel->deleteCategorie($id);
        }
        $this->showHome();
    }
}
