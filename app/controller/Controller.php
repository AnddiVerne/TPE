<?php

require_once('app/models/FoodModel.php');
require_once('app/views/FoodView.php');

class Controller
{
   
    public function checkSession()
    {
        if(!empty($session['id'])){
            header('Location: '.LOGIN);
        }
    } 
}