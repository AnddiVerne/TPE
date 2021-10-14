<?php

require_once('app/models/FoodModel.php');
require_once('app/views/FoodView.php');

class Controller
{
   
    public function checkSession()
    {
        return !empty($session['id']);
    } 
}