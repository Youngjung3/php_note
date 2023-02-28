<!-- 세션을 삭제하려면 시작을 해야함 -->
<?php
    session_start();
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
        session_unset();//등록해지
        session_destroy();//완전삭제(아이디까지 파괴)
        print_r($_SESSION);//print raw(raw:원본)
    ?>
</body>
</html>