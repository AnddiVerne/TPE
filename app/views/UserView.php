<?php
require_once('libs/Smarty.class.php');
class UserView
{
    private $smarty;
    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showLogin($mensaje = ' '){
        $this ->smarty->assign('BASE URL', BASE_URL);
        $this ->smarty->assign('mensaje', $mensaje);
        $this ->smarty->display('teplates/login.tpl');
    }
}
?>