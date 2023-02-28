<?php
// session_start();
$isAuth = user_is_auth();
?>
<nav id="main-nav">
    <div class="container">
        <a href="logout.php"><img src="img/logo.png" alt="NewsGrid" class="logo"></a>
        <div class="social">
            <a href="http://facebook.com" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="http://twitter.com" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="http://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="http://youtube.com" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
        </div>
        <ul>
            <li><a class="current" href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <?php
            if ($isAuth > 0) { ?>
                <li><a href="logout.php">Logout</a></li>
            <?php } else {
            ?>
                <li><a href="login.php">Login</a></li>
            <?php
            }
            ?>
        </ul>
    </div>
</nav>