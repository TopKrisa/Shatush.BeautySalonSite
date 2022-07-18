<?php

namespace App\Controllers;

use App\Services\Router;
use DateTime;

class Categories 
{
    public static function add($data)
    {
       $name= $data["name"];
       $worker = $data["worker"];
       $Message = \R::dispense("categories");
       $Message->worker = $worker;
       $Message->name = $name;
       \R::store($Message); 
       Router::Redirect("/admin");        
    }

}