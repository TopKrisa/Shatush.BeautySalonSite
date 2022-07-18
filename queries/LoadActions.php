<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">


<div class="recent-updates">
    <h2>Акции</h2>
    <div class="updates">


        <?php
        $actions = \R::getAll('SELECT * FROM `actions` ORDER BY `id` DESC
        LIMIT 0,9 ');
        foreach ($actions as $action) {
            echo '
                        <div class="update">
                                               <div class="profile-photo">
                                                   <img  src="' . $action["path"] . '">
                                                   
                                               </div>
                                               <div class="message" style="padding-left: 10px">
                                               <a> 
                                               <p>
                                               <b > Акция </b> ' . $action["name"] . ' 
                                               </p>
                                               </a>
                                                   <small class="text-muted" style="bottom:0">Заканчивается : ' . $action["endition_date"] . '</small>
                                               </div>
                                           </div>
                                           
                                           ';
        };
        ?>

    </div>
</div>