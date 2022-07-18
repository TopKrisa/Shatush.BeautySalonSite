<?php

use App\Services\Router;

session_start();
if (!isset($_SESSION["User"])) {
    Router::Redirect("/login");
}
$user = $_SESSION["User"];
if ($user["group"] == 1) {
    Router::Redirect("/profile");
}


?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль | Главная</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <link href="/assets/css/admin.css" rel="stylesheet">
</head>
<style>
    .primarys {
        color: var(--color-primary);
    }

    .primarys :hover {
        text-decoration: underline;
    }

    button {
        background: transparent;
        color: var(--warning);
        font-size: 16px;
        cursor: pointer;
    }

    @media screen and (max-width: 1200px) {
        .right {
            visibility: visible;
        }
    }
</style>


<body>
    <? require_once "assets/static/modal/AddNewCategory.php" ?>
    <? require_once "assets/static/modal/AddNewActions.php" ?>
    <div class="container" id="osn">

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
                <a style="color: var(--color-primary);">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Главная</h3>
                </a>
                <a href="/users">
                    <span class="material-icons-sharp">
                        person
                    </span>
                    <h3>Пользователи</h3>
                </a>
                <!-- <a href="#">
                    <span class="material-icons-sharp">
                        receipt_long
                        </span>
                    <h3>Orders</h3>
                </a> -->
                <!-- <a href="#">
                    <span class="material-icons-sharp">
                        insights
                        </span>
                    <h3>Analytics</h3>
                </a> -->
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
            <h1>Аналитика</h1>
            <!-- <div class="date">
                <input type="date">
            </div> -->
            <? require_once  "queries/LoadAnalytics.php"; ?>
            <!-- End Insights -->
            <div class="recent-orders">
                <h2>Сообщения</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Имя</th>
                            <th>Телефон</th>
                            <th>Услуга</th>
                            <th>Статус</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <style>
                            .primarys {
                                color: var(--color-primary);
                            }

                            .primarys :hover {
                                text-decoration: underline;
                            }
                        </style>
                        <?php
                        $messages =  \R::getAll("SELECT m.id, m.phone,m.status,c.name FROM `messages` m, `categories` c WHERE c.id = m.theme  ORDER BY id DESC LIMIT 0,10;");

                        foreach ($messages as $message) {
                            switch ($message['status']) {
                                case 0:
                                    $group = "Ожидается";
                                    $color = 'class="warning"';
                                    break;
                                case 1:
                                    $group = "Выполнен";
                                    $color = 'class="success"';
                                    break;
                                case 2:
                                    $group = "Отменен";
                                    $color = 'class="danger"';
                                    break;
                            }
                            if ($message['status'] == 0) {

                                echo '
                                <tr>
                                <td>' . $message['name'] . '</td>
                                <td> <a href="tel:' . $message['phone'] . '">' . $message['phone'] . ' </a></td>
                                <td>' . $message['name'] . ' </td>
                                <td ' . $color . '>' . $group  . '</td>
                                <td class="primarys"><form method="POST" action="/messages/update"><button  type="submit">Завершить</button>
                                <input type="text" name="id" style="display: none;" value="' . $message['id'] . '" >
                                <input type="text" name="status" style="display: none;" value="1" >
                                </form></td>
                                </tr>';
                            } else {
                                echo '
                                <tr>
                                <td>' . $message['name'] . '</td>
                                <td> <a href="tel:' . $message['phone'] . '">' . $message['phone'] . ' </a></td>
                                <td>' . $message['name'] . ' </td>
                                <td ' . $color . '>' . $group  . '</td>
                                <td class="primarys"></td>
                                </tr>';
                            }
                        }
                        ?>

                    </tbody>

                </table>

                <a href="/messages">Смотреть все</a>

            </div>
        </main>
        <? require_once "assets/static/Right.php"; ?>
    </div>

    <script>
        const right = document.getElementById("rght");
        right.style.display = "block";
    </script>
</body>

</html>