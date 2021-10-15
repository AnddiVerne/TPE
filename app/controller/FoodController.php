<?php

require_once('app/controller/Controller.php');
require_once('app/models/FoodModel.php');
require_once('app/views/FoodView.php');

class FoodController extends Controller
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
        $session = $this->checkSession();
        
        $this->FoodView->showHome($session);
    }

    
    public function showMenu()
    {
        $session = $this->checkSession();
        $foods = $this->FoodModel->getAllFoods();
        $this->FoodView->showMenu($session, $foods);
    }

    public function showCompra()
    {
        $session = $this->checkSession();
        $this->FoodView->showCompra($session);
    }

    
    public function showNosotros()
    {
        $session = $this->checkSession();
        $this->FoodView->showNosotros($session);
    }

    public function showLogin()
    {
        $session = $this->checkSession(); 
        $this->FoodView->showLogin($session);
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . BASE_URL);
    }

}
