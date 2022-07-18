<div class="right" id="rght">
    <div class="top">
        <button id="menu-btn">
            <span class="material-icons-sharp">
                menu
            </span>
        </button>
        <div class="theme-toggler">
            <span class="material-icons-sharp">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>


        </div>
        <div class="profile">
            <div class="info">

                <p>Привет, <b><?php echo $_SESSION["User"]["name"]  ?></b></p>
                <small class="text-muted"><?php
                                            session_start();
                                            $group = "";
                                            switch ($_SESSION["User"]["group"]) {
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
                                            echo $group;
                                            ?></small>

            </div>
            <!-- <div class="profile-photo">
                        <?php
                        $user = $_SESSION["User"];
                        //echo $user["path"];
                        echo '
                                                        <img style="
                                                        object-fit: cover
                                                        width:100%;
                                                        height: 100%;
                                                        overflow: hidden;
                                                        border-radius: 50%;"  src="' . $user["path"] . '">
                                                  
                                              </article>';
                        ?> 
                        
                        
                    </div> -->
        </div>
        <!-- End of top -->

    </div>
    <?php
    if ($_SESSION["User"]["group"] != 1) {
        require_once "queries/LoadOrders.php";
        require_once "queries/LoadCategories.php";
    } else {
        require_once "queries/LoadActions.php";
    }
    ?>

</div>

<script>
    const slideMenu = document.querySelector("aside");
    const menuBtn = document.querySelector("#menu-btn");
    const closeBtn = document.querySelector("#close-btn");
    const themeToggler = document.querySelector(".theme-toggler")
    if (JSON.parse(localStorage.getItem('darkTheme'))) {
        document.body.classList.add('dark-theme-variables')

        themeToggler.querySelector('span:nth-child(2)').classList.add('active')
    } else if (!JSON.parse(localStorage.getItem('darkTheme'))) {
        themeToggler.querySelector('span:nth-child(1)').classList.add('active')

    }
    menuBtn.addEventListener('click', () => {
        slideMenu.style.display = 'block';
    });
    closeBtn.addEventListener('click', () => {
        slideMenu.style.display = 'none';
    });
    themeToggler.addEventListener('click', () => {
        document.body.classList.toggle('dark-theme-variables')

        if (themeToggler.querySelector('span:nth-child(1)').classList.toggle('active')) {
            localStorage.setItem('darkTheme', JSON.stringify(false))
        }

        if (themeToggler.querySelector('span:nth-child(2)').classList.toggle('active')) {
            localStorage.setItem('darkTheme', JSON.stringify(true))
        }


    });
</script>
<? require_once "config/scripts.php" ?>