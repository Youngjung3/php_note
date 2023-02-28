<?php
    // isset
    if(!isset($title)){
        $title="🎁🎈👒";
    }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        body{
            background-color: darkgray;
        }
        footer{
            background-color: skyblue;
        }
    </style>
</head>
<body>
    <h1><?= $title ?></h1>
    <nav>
        <a href="../home.php">menu1</a><br>
        <a href="./home.php">menu2</a><br>
        <a href="#">menu3</a><br>
        <a href="#">menu4</a><br>
    </nav>