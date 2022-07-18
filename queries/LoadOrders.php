<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

<div class="recent-updates">
    <h2>Заявки</h2>
    <div class="updates">


        <?php
        $orders = \R::getAll('SELECT o.id, u.name, `creation_date`, o.time, c.name as "category", u.path FROM `orders` o, `users` u, `categories` c WHERE c.id = o.type AND u.id = o.user ORDER BY o.id DESC LIMIT 0,3');
        foreach ($orders as $order) {
            echo '
                        <div class="update">
                                               <div class="profile-photo">
                                                   <img  src="' . $order["path"] . '">
                                                   
                                               </div>
                                               <div class="message" style="padding-left: 10px">
                                               <a> 
                                               <p>
                                               <b >' . $order["name"] . '</b> Записался(ась) к вам на ' . $order["category"] . ' 
                                               </p>
                                               </a>
                                                   <small class="text-muted" style="bottom:0">Запись на: ' . $order["creation_date"] . ' ' . $order["time"] . '</small>
                                               </div>
                                           </div>
                                           
                                           ';
        };
        ?>

    </div>
</div>