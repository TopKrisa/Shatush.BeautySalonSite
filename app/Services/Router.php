<?php

namespace App\Services;

class Router
{
    private static $List = [];

    public static function Page($uri, $PageName)
    {
        self::$List[] = [
            "uri" => $uri,
            "page" => $PageName
        ];
    }
    public static function Post($uri, $class, $method, $fotmdata, $files = false)
    {
        self::$List[] = [
            "uri" => $uri,
            "class" => $class,
            "method" => $method,
            "post" => true,
            "formdata" => $fotmdata,
            "files" => $files
        ];
    }
    public static function enable()
    {

        $querry = $_GET['q'];
        foreach (self::$List as $route) {
            if ($route['uri'] === '/' . $querry) {
                if ($route["post"] === true && $_SERVER["REQUEST_METHOD"] == "POST") {

                    $action = new $route["class"];
                    $method = $route["method"];
                    if ($route["formdata"] && $route["files"]) {

                        $action->$method($_POST, $_FILES);
                    } elseif ($route["formdata"] && !$route["files"]) {

                        $action->$method($_POST);
                    } else {
                        $action->$method();
                    }
                    die();
                } else {
                    require_once "views/pages/" . $route['page'] . '.php';
                    die();
                }
            }
        }
        self::error(404);
    }
    public static function error($code)
    {
        require_once "views/pages/errors/$code.php";
    }
    public static function Redirect($uri)
    {
        header('Location: ' . $uri);
    }
}
