<?php
require_once('libs/Smarty.class.php');
class FoodView
{
    private $smarty;
    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showHome()
    {
        
        $this ->smarty->display('templates/home.tpl');
    }
    function showMenu($foods)
    {
        $this ->smarty->assign('foods',$foods);
        $this ->smarty->display('templates/menu.tpl');
    }
    function showCompra()
    {
        $this ->smarty->display('templates/compra.tpl');
    }
    function showNosotros()
    {
        $this ->smarty->display('templates/nosotros.tpl');
    }
}
?>