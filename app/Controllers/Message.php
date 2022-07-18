<?php

namespace App\Controllers;

use App\Services\Router;
use DateTime;

class Message
{
    public static function send($data)
    {
        $name = $data["name"];
        $phone = $data["phone"];
        $theme = $data["theme"];
        $message = $data["message"];
        $Message = \R::dispense("messages");
        $Message->phone = $phone;
        $Message->name = $name;
        $Message->theme = $theme;
        $Message->status = 0;
        $Message->message = $message;
        $Message->date = date('Y-m-d');
        \R::store($Message);
        $response = [
            "status" => 1
        ];
        echo json_encode($response);
        die();
        // Router::Redirect("/");

    }
    public static function update($data)
    {
        $message = \R::load('messages', $data["id"]);
        $message->status = 1;
        \R::store($message);
        Router::Redirect("/admin");
    }
}
