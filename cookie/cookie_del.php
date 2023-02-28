<?php
/* 쿠키의 삭제는 만기일을 이전으로 지정해서 구현 */
$cookieName='city';
$cookieValue = 'seoul';
setcookie($cookieName, $cookieValue,time()-600,"/");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쿠키테스트</title>
</head>
<body>
    <?php
        echo $cookieName. '의 쿠키가 삭제되었습니다.'
    ?>
</body>
</html>