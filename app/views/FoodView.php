<?php
require_once('libs/Smarty.class.php');
class FoodView
{
    private $smarty;
    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showHome($session)
    {
        $this ->smarty->assign("checkSession", $session);
        $this ->smarty->display('templates/home.tpl');
    }
    function showMenu($session, $foods)
    {
        $this ->smarty->assign("checkSession", $session);
        $this ->smarty->assign('foods',$foods);
        $this ->smarty->display('templates/menu.tpl');
    }
    function showCompra($session)
    {
        $this ->smarty->assign("checkSession", $session);
        $this ->smarty->display('templates/compra.tpl');
    }
    function showNosotros($session)
    {
        $this ->smarty->assign("checkSession", $session);
        $this ->smarty->display('templates/nosotros.tpl');
    }
    
    function showLogin($session){
        $this ->smarty->assign("checkSession", $session);
        $this ->smarty->display('templates/login.tpl');
    }
}
?>