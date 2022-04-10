<div class="header">
        <div class="tel">
            <p>+7(987)-004-1567</p>
        </div>
            <div class="menu">
                <p><a href="menu.php" style='font-size:24px;'>Меню</a></p>
                <div class="img">
                    <a style='font-size:40px;' href="index.php">SK</a>
                </div>
                <p><a href="about.php" style='font-size:24px;'>О нас</a></p>
            </div>
        <div class="korz">
           
            <?php
                if ($_SESSION['user']) {
                echo '<div class=flex11111><h2 style="font-size: 16px;">' . $_SESSION['user']['name'].'</h2>';
                echo ' <div class="imgg" style="min-width: 40px;" ><a href="korz.php"><img src="img/korz.png"></a></div>
                <a href="profile.php">Профиль</a>';
                echo '<a href="vendor/logout.php" >Выход</a></div>';

                } else {
                echo '<div class=flex11111><p><a href="signin.php">Войти</a></p>
                <p><a href="signup.php">Регистрация</a></p></div>';

                }
            ?>
        </div>
</div>