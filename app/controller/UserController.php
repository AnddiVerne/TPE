<?php

require_once('app/models/UserModel.php');
/* require_once('app/views/user.view.php'); */

class UserController
{
    private $userModel;
    private $userView;

    public function __construct()
    {
        $this->userModel = new UserModel();
        /* $this-> userView = new UserView(); */
    }
/* 
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

    public function showLogin($mensaje = '')
    {

        $this->userView->mostrarLogin($mensaje);
    }

    private function verificaUsuarioPass($userMail, $userPass)
    {
        // Traer de la base el usuario , del $userMail [mail, encriptado del password]
        // encriptar el $userPass y "compararlo" con el del usuario
        $user = $this->userModel->getUsuario($userMail);

        if (!empty($user) && password_verify($userPass, $user->pass)) {
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
            $this->showLogin('Erorr de login');
        }
    } */
}
