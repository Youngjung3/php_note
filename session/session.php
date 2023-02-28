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
    <?=
        "세션변수가 등록되었습니다."
    ?>
</body>
</html>