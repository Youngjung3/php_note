<?php
    session_start();
    $title='회원전용페이지';
    include_once('header.php');
    include_once('config.php');
    require_once('functions.php');  
    confirm_user_is_auth(); 
?>

<p>회원님안녕하세요.</p>
<p><a href="logout.php">로그아웃</a></p>

<?php
    include_once('footer.php');
?>