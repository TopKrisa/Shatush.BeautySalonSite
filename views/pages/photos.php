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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль | Фотографии</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="/assets/css/admin.css" rel="stylesheet">
</head>
<style>
    .recent-orders {
        display: flex;

        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .card {
        margin: 10px;
        background-color: --color-info-light;
        border-radius: 5px;
        box-shadow: var(--box-shadow);
        overflow: hidden;
        width: 300px;
    }

    .card-header img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 35%;
        align-items: flex-start;
        padding: 20px;
        min-height: 50px;
    }

    .tag {
        background: #cccccc;
        border-radius: 50px;
        font-size: 12px;
        margin: 0;
        color: #fff;
        padding: 2px 10px;
        text-transform: uppercase;
        cursor: pointer;
    }

    .tag-teal {
        background-color: #47bcd4;
    }

    .tag-purple {
        background-color: #5e76bf;
    }

    .tag-pink {
        background-color: #cd5b9f;
    }

    .card-body p {
        font-size: 13px;
        margin: 0 0 40px;
    }

    .user {
        display: flex;
        margin-top: auto;
    }

    .user img {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    .user-info h5 {
        margin: 0;
    }

    .user-info small {
        color: #545d7a;
    }

    .card .card-body form a button {

        background: none;
        font-size: 16px;
        transition: all 0.2s ease;
    }


    .card .card-body form button {

        color: var(--color-primary);
        background: none;
        font-size: 16px;
        transition: all 0.2s ease;


    }

    .card .card-body form button:hover {
        text-decoration: underline;

    }

    .card .card-body form .editBtn {

        color: var(--color-primary-variant);
        background: none;
        font-size: 16px;
        transition: all 0.2s ease;


    }

    .card .card-body form a:hover {

        font-size: 17px;

    }

    .hu {
        display: flex;
        flex-direction: row;
        gap: 70%;
    }

    .hu a {
        font-size: 16px;

    }

    h3 {
        background: transparent;
    }

    .add-products {
        /* background: var(--color-primary); */
        color: var(--color-primary);

        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: 3px solid var(--color-primary);
        padding: 1.4 rem var(--card-padding);
        border-radius: var(--birder-radius-3);
        box-shadow: var(--box-shadow);
        transition: all 300ms ease;
        font-weight: 500;
        margin: 0;
        margin-right: 0.8rem;
        height: 50px;
        width: 100%;
        z-index: 20;
    }

    .add-products:hover {
        background: var(--color-primary);
        color: var(--color-white);
    }

    @media screen and (max-width: 768px) {
        .hu {
            flex-direction: column;
        }
    }
</style>

<body>

    <? require_once "assets/static/modal/AddNewCategory.php" ?>
    <? require_once "assets/static/modal/AddNewPhoto.php" ?>
    <? require_once "assets/static/modal/EditPhoto.php" ?>

    <div class="container">
        <aside style="z-index: 990;">
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
                <a href="/users">
                    <span class="material-icons-sharp">
                        person
                    </span>
                    <h3>Пользователи</h3>
                </a>

                </a>
                <a href="/messages">
                    <span class="material-icons-sharp">mail</span>
                    <h3>Сообщения</h3>

                </a>
                <a href="/orders">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Заявки</h3>
                </a>
                <a style="color: var(--color-primary);">
                    <span class="material-icons-sharp">add</span>
                    <h3>Фото</h3>
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
            <div class="hu">
                <h2>Фотографии</h2>

                <a class="add-products" id="OpenAddPhotoPopup">Добавить фото</a>



            </div>
            <div class="recent-orders">
                <?php
                $photos = \R::getAll("SELECT * FROM `photos`");
                foreach ($photos as $photo) {
                    echo '
                    <div class="card">
                    <div class="card-header">
                      <img src="' . $photo["path"] . '"  />
                    </div>
                    <div class="card-body">
                    <form class = "frm">
                    <button type="submit" id="OpenEditPopup" class="editBtn">Редактировать</button>
                    <input class="pathinp" name="path" style="display: none;" value="' . $photo["path"] . '">
                    <input class="idinp" name="id" style="display: none;" value="' . $photo["id"] . '">
                    </form>
                        <form method="post" action="/photos/delete">
                        <input name="path" style="display: none;" value="' . $photo["path"] . '">
                        <input name="id" style="display: none;" value="' . $photo["id"] . '">
                        <button type="submit" class="deleteBtn">Удалить</button>
                        </form>


                    </div>
                  </div>
                    ';
                }

                ?>





            </div>
        </main>
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <? require_once "assets/static/Right.php"; ?>
    </div>

</html>