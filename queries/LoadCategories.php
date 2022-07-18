<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

<div class="sales-analytics">
    <h2>Записи по категориям</h2>

    <?php
    $categories =  \R::getAll("SELECT categories.id, `categories`.`name` as 'type', `users`.`name` FROM categories, users WHERE users.id = categories.worker;");

    foreach ($categories as $category) {
        $count = \R::count('orders', 'type = ?', [$category["id"]]);
        echo '
        <div class="item online">
    <div class="icon">
        <span class="material-icons-sharp">
            shopping_cart
            </span>
    </div>
    <div class="right">
        <div class="info">
            <h3>' . $category["type"] . '</h3>
            <small class="text-muted">' . $category["name"] . '</small>
        </div>
        <!-- <h5 class="success">+1%</h5> -->
        <h3>' . $count . '</h3>
    </div>
</div>
        ';
    }
    ?>

    <div class="item add-product" id="PopupToggle">
        <div>
            <span class="material-icons-sharp">
                add
            </span>
            <h3>Добавить категорию</h3>
        </div>
    </div>
</div>