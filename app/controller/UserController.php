<?php

require_once('app/controller/Controller.php');
require_once('app/models/UserModel.php');
require_once('app/views/FoodView.php'); 

class UserController extends Controller
{
    private $UserModel;
    private $FoodView;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this-> FoodView = new FoodView();
    }

    public function sessionStart()
    {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . BASE_URL);
    }

    public function showLogin()
    {
        $session = $this->checkSession(); 
        $this->FoodView->showLogin($session);
    }

    private function verificaUsuarioPass($userMail, $userPass)
    {
        $user = $this->userModel->getUsuario($userMail);

        if (!empty($user) && password_verify($userPass, $user->clave)) {
            $_SESSION['id'] = $user->id;
            $_SESSION['email'] = $user->email;
            return true;
        } else {
            return false;
        }
    }

    public function verificar()
    {
        $userMail = $_POST['email'];
        $userPass = $_POST['pass'];
        if ($this->verificaUsuarioPass($userMail, $userPass)) {
            header('Location:' . BASE_URL);
        } else {
            $this->showLogin('Usuario o contraseña incorrecto');
        }
    }  
}
