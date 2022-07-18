<?php

use App\Services\Router;

session_start();
if (!isset($_SESSION["User"])) {
    Router::Redirect("/login");
}
$user = $_SESSION["User"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль | Пользователи</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="/assets/css/admin.css" rel="stylesheet">
</head>
<? require_once "assets/static/modal/AddNewCategory.php" ?>
<? require_once "assets/static/modal/AddNewActions.php" ?>
<? require_once "assets/static/modal/EditUserGroup.php" ?>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <a class="navbar-brand site-logo" href="/">
                        <h2><span style="color: var(--color-primary);">SHA</span>TUSH</h2>

                    </a>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>
            <div class="slidebar">
                <a href="/admin">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Главная</h3>
                </a>
                <a style="color: var(--color-primary);">
                    <span class="material-icons-sharp">
                        person
                    </span>
                    <h3>Пользователи</h3>
                </a>
                <a href="/messages">
                    <span class="material-icons-sharp">mail</span>
                    <h3>Сообщения</h3>
                    <!-- <span class="message-count">26</span> -->
                </a>
                <a href="/orders">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Заявки</h3>
                </a>

                <!-- <a href="#">
                    <span class="material-icons-sharp">
                        report
                        </span>
                    <h3>Errors</h3>
                </a> -->
                <!-- <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                </a> -->
                <a href="/photos">
                    <span class="material-icons-sharp">add</span>
                    <h3>Фото</h3>
                </a>
                <a id="OpenActions">
                    <span class="material-icons-sharp">note_add</span>
                    <h3>Акции</h3>
                </a>
                <form action="/auth/logout" method="post">
                    <a>
                        <button type="submit" style="border:none; background:none; display: flex;
    color: var(--color-info-dark);
    margin-left: 2rem;
    gap: 1rem;
    align-items: center;
    position: relative;
    height: 3.7rem;
    transition: all 300ms ease;">
                            <span class="material-icons-sharp">logout</span>
                            <h3>Выйти</h3>
                        </button>
                    </a>
                </form>
            </div>
        </aside>
        <main>

            <!-- End Insights -->
            <div class="recent-orders">
                <h2>Список пользователей</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Имя</th>
                            <th>E-mail</th>
                            <th>Дата</th>
                            <th>Статус</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $messages =  \R::getAll("SELECT * FROM `users` ORDER BY id");

                        foreach ($messages as $message) {
                            $group = "";
                            switch ($message['group']) {
                                case 0:
                                    $group = "Администратор";
                                    break;
                                case 1:
                                    $group = "Клиент";
                                    break;
                                case 2:
                                    $group = "Специалист";
                                    break;
                                case 3:
                                    $group = "Владелец";
                                    break;
                            }
                            if ($user["id"] == $message["id"]) {
                                echo '
                                <tr>
                                <td>' . $message['name'] . '</td>
                                <td><a href="mailto:' . $message['email'] . '">' . $message['email'] . '</a></td>
                                <td>' . $message['birth'] . '</td>
                                <td class="warning">' . $group . '</td>
                                <td class="primarys"><a class="SpecialistPopupBtn">Вы</a><div class="idUser" style="display:none;"></div></td>
                                </tr>';
                            }
                            if (($message['group'] == 0 && $user["id"] != $message["id"]) || ($message['group'] == 3 && $user["id"] != $message["id"])) {
                                echo '
                                <tr>
                                <td>' . $message['name'] . '</td>
                                <td><a href="mailto:' . $message['email'] . '">' . $message['email'] . '</a></td>
                                <td>' . $message['birth'] . '</td>
                                <td class="warning">' . $group . '</td>
                                <td class="primarys"><a class="SpecialistPopupBtn"></a><div class="idUser" style="display:none;">' . $message["id"] . '</div></td>
                                </tr>';
                            } else if ($message['id']  != $user["id"]) {
                                echo '
                                <tr>
                                <td>' . $message['name'] . '</td>
                                <td><a href="mailto:' . $message['email'] . '">' . $message['email'] . '</a></td>
                                <td>' . $message['birth'] . '</td>
                                <td class="warning">' . $group . '</td>
                                <td class="primarys"><a class="SpecialistPopupBtn">Изменить группу пользователей</a><div class="idUser" style="display:none;">' . $message["id"] . '</div></td>
                                </tr>';
                            }
                        }

                        ?>

                    </tbody>

                </table>



            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

        <? require_once "assets/static/Right.php"; ?>
        <? require_once "config/scripts.php"; ?>
    </div>

</body>

</html>