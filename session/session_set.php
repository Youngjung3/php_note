<!-- 세션을 삭제하려면 시작을 해야함 -->
<?php
    session_start();
    $_SESSION["city"]="seoul";
    $_SESSION["gu"]="gangnam";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <?php
        if(!isset($_SESSION["city"])){
            echo "세션이 등록되지 않았습니다.";
        }else{
            echo "나의 도시는 {$_SESSION['city']}입니다<br>";
            echo "{$_SESSION['gu']}구에 있습니다.<br>";
            print_r($_SESSION);
        }
    ?>
</body>
</html>