<?php

namespace App\Controllers;

use App\Services\Router;

class Users
{
    public static function update($data)
    {
        $userId = $data["id"];
        $group = $data["group"];
        $user = \R::load('users', $userId);
        $user->group = $group;
        \R::store($user);
        Router::Redirect("/users");
    }
}
