<?php

namespace App\Controllers;

use App\Services\Router;

class Auth
{
    public static function login($data)
    {
        $error_fields = [];

        if (!empty($data["email"]) && !empty($data["password"])) {
            $login = $data["email"];
            $password = $data["password"];
            if ($login === '') {
                $error_fields[] =  'login';
            }
            if ($password === '') {
                $error_fields[] =  'password';
            }

            $user = \R::findOne('users', "email = ?", [$login]);
            if (!$user) {
                $response = [
                    "status" => false,
                    "message" => 'E-mail не найден'
                ];
                echo json_encode($response);
                die();
            }
            if (password_verify($password, $user->password)) {
                session_start();

                $_SESSION["User"] = [
                    "id" => $user->id,
                    "name" => $user->name,
                    "group" => $user->group,
                    "Date" => $user->birth,
                    "path" => $user->path
                ];
                $response = [
                    "status" => true,

                ];
                echo json_encode($response);
            } else {
                $response = [
                    "status" => false,
                    "message" => 'Не правильный пароль'
                ];
                echo json_encode($response);
            }
            // Router::Redirect("/profile");
        }
    }
    public static function logout()
    {
        unset($_SESSION["User"]);
        Router::Redirect('/');
    }
    public static function register($data, $files)
    {

        $name = $data["name"];
        $lastname = $data["lastname"];
        $email = $data["email"];
        $birth = $data["birth"];
        $phone = $data["phone"];
        $password = $data["password"];
        $confirm = $data["confirm"];
        $photo = $files["file"];

        $fileName = time() . '_' . $photo["name"];
        $path = "uploads/images/" . $fileName;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response = [
                "status" => "0",
                "message" => "Не корректный почтовый адрес"
            ];
            echo json_encode($response);
            die();
        }
        //todo
        $regexp = '!^\+7 \(\d{3}\) \d{3}(-\d{2}){2}$!';
        if (preg_match($regexp, $phone)) {
            $response = [
                "status" => "0",
                "message" => "Не корректный номер телефона",
                "phone" => $phone
            ];
            echo json_encode($response);
            die();
        }
        $ValidData = \R::getAll("SELECT email,phone FROM `users`");
        foreach ($ValidData as $validdata) {

            if ($email == $validdata["email"]) {
                $response = [
                    "status" => "0",
                    "message" => "Этот почтовый адрес занят"
                ];
                echo json_encode($response);
                die();
            }
            if ($phone == $validdata["phone"]) {
                $response = [
                    "status" => "0",
                    "message" => "Этот номер телефона занят"
                ];
                echo json_encode($response);
                die();
            }
        }
        if ($password !== $confirm) {
            $response = [
                "status" => "0",
                "message" => "Пароли не совпадают",
            ];
            echo json_encode($response);
            die();
        }
        if (move_uploaded_file($photo["tmp_name"], $path)) {
            $user =  \R::dispense('users');
            $user->email = $email;
            $user->name = $name;
            $user->group = 1;
            $user->birth = $birth;
            $user->path = $path;
            $user->lastname = $lastname;
            $user->phone = $phone;
            $user->password = password_hash($password, PASSWORD_DEFAULT);
            \R::store($user);
            $response = [
                "status" => "1"
            ];
            echo json_encode($response);
            die();
            //Router::Redirect("/login");
        } else {
            Router::error(500);
        }
    }
}
