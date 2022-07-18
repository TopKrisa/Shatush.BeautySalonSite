<?php

use App\Services\Router;

session_start();
if (!isset($_SESSION["User"])) {
    Router::Redirect("/login");
}
$user = $_SESSION["User"];
if ($user["group"] != 1) {
    Router::Redirect("/admin");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль | Главная</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="/assets/css/profile.css" rel="stylesheet">
</head>

<style>

</style>

<body>
    <? require_once "assets/static/modal/AddNewCategory.php" ?>
    <div class="container">


        <aside style="z-index: 999999;">
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
                <a href="/userorder">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Заявки</h3>
                </a>

                <form action="/auth/logout" method="post">
                    <a href="" type="submit">
                        <button style="border:none; background:none; display: flex;
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
            <? require_once  "queries/LoadUserAnalytics.php"; ?>
            <!-- End Insights -->
            <div class="recent-orders">
                <h2>Мои заявки</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Cпециалист</th>
                            <th>Телефон</th>
                            <th>Дата</th>
                            <th>Время</th>
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

                            button {
                                background: transparent;
                                color: var(--warning);
                                font-size: 16px;
                                cursor: pointer;
                            }

                            #sas :hover {
                                background: red;
                            }

                            @media screen and (max-width: 768px) {
                                .hu {
                                    display: flex;
                                    flex-direction: column;
                                    gap: 0%;
                                }

                                .hu a {
                                    font-size: 16px;
                                }

                                h3 {
                                    background: transparent;
                                }

                            }
                        </style>
                        <?php

                        $orders =  \R::getAll("SELECT o.id, u.name, `creation_date`, o.status,o.time, u.phone, c.name as 'type' FROM `orders` o, `users` u, `categories` c WHERE c.id = o.type and u.id = c.worker ORDER by o.id desc");

                        foreach ($orders as $order) {
                            $group = "";
                            $color = "";
                            switch ($order['status']) {
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
                            if ($order['status'] == 0) {
                                echo '
                                <tr>
                                <td>' . $order['name'] . '</td>
                                <td>' . $order['phone'] . '</td>
                                <td>' . $order['creation_date'] . '</td>
                                <td>' . $order['time'] . '</td>
                                <td>' . $order['type'] . '</td>
                                <td ' . $color . '>' . $group . '</td>
                                <td class="primarys"><form method="POST" action="/orders/update"><button  type="submit">Отменить</button>
                                <input type="text" name="id" style="display: none;" value="' . $order['id'] . '" >
                                <input type="text" name="status" style="display: none;" value="3" >
                                </form></td>
                                </tr>';
                            } else {
                                echo '
                                <tr>
                                <td>' . $order['name'] . '</td>
                                <td>' . $order['phone'] . '</td>
                                <td>' . $order['creation_date'] . '</td>
                                <td>' . $order['time'] . '</td>
                                <td>' . $order['type'] . '</td>
                                <td ' . $color . '>' . $group . '</td>
                              
                                </tr>';
                            }
                        }

                        ?>

                    </tbody>

                </table>

                <a href="/userorder">Смотреть все</a>

            </div>
        </main>
        <? require_once "assets/static/Right.php"; ?>
    </div>

    <? require_once "config/scripts.php" ?>
</body>

</html>