<?php


namespace App\Controllers;


use App\Services\Router;


class Actions
{
    public static function send($data, $files)
    {
        $photo = $files["file"];
        $fileName = time() . '_' . $photo["name"];
        $path = "uploads/images/" . $fileName;
        $name = strtolower($data["name"]);
        $edition_date = $data["edition_date"];
        if (move_uploaded_file($photo["tmp_name"], str_replace('\\', '/', $path))) {

            $action = \R::dispense('actions');
            $action->endition_date = $edition_date;
            $action->name = $name;
            $action->path = $path;
            \R::store($action);

            Router::Redirect("/admin");
        } else {
            Router::error(500);
        }
    }
}
