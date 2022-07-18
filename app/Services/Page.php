<?php
namespace App\Services;

class Page{

    public static function part($part_name){
        require_once "assets/static/$part_name.php";
    }
}