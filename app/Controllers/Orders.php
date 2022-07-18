<?php

namespace App\Controllers;

use App\Services\Router;

class Orders
{
    public static function send($data)
    {
        $type = $data["type"];
        $creation_date = $data["creation_date"];
        $user_id = $data["id"];
        $time = $data["time"];
        $order = \R::dispense('orders');
        $order->user = $user_id;
        $order->creation_date = $creation_date;
        $order->time = $time;
        $order->type = $type;
        $order->status = 0;
        \R::store($order);
        Router::Redirect("/userorder");
    }
    public static function update($data)
    {
        $id = $data["id"];
        $status = $data["status"];
        if ($status == 1 || $status == 2) {
            $order = \R::load('orders', $id);
            $order->status = $status;
            $order->completion_date = date("Y-m-d");
            \R::store($order);
        }
        Router::Redirect("/orders");
    }
    public static function fullupdate($data)
    {
        $type =  $data["type"];
        $id =  $data["id"];
        $creation_date = $data["creation_date"];
        $time = $data["time"];
        $order = \R::load('orders', $id);
        $order->creation_date = $creation_date;
        $order->time = $time;
        $order->type = $type;
        \R::store($order);
        Router::Redirect("/userorder");
    }
}
