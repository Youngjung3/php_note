<?php
    $title="로그인완료";
    include_once('inc/header.php');


    #$name=$_GET["userName"];
    #$email=$_GET["userEmail"];

    $name=$_POST["userName"];
    $email=$_POST["userEmail"];

    echo $name.'님이 입력한 이메일은'.$email.'입니다<hr>';

    include_once('inc/footer.php');
?>