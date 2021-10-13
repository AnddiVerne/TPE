<?php
/* Controlador de tareas */
require_once('app/models/FoodModel.php');
require_once('app/views/FoodView.php');

class FoodController
{
    private $FoodModel;
    private $FoodView;

    public function __construct()
    {
        $this->FoodModel = new FoodModel();
        $this->FoodView = new FoodView();
    }

    
    public function showHome()
    {
        /*  $this->checkSession(); */
        
        $this->FoodView->showHome();
    }

    
    public function showMenu()
    {
        /*  $this->checkSession(); */
        $foods = $this->FoodModel->getAllFoods();
        $this->FoodView->showMenu($foods);
    }

    public function showCompra()
    {
        /*  $this->checkSession(); */
        $this->FoodView->showCompra();
    }

    
    public function showNosotros()
    {
        /*  $this->checkSession(); */
        $this->FoodView->showNosotros();
    }
    /* private function checkSession()
    {
        session_start();
        if (empty($_SESSION['id'])) {
            header('Location:' . BASE_URL);
        }
    } 
    
    public function agregarTarea()
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
}
