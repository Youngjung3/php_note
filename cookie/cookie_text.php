<?php
$cookieName='city';
$cookieValue = 'seoul';
/* time() 현재시간 */
/* setcookie(쿠키이름,쿠키값,만료일,경로) */
setcookie($cookieName, $cookieValue,time()+600,"/");
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
    <p>새로고침하면 생성된 쿠키를 확인할 수 있습니다.</p>
    <?php
    /* 쿠키존재여부를 확인
        변수나 함수의 세팅여부 isset(변수/함수명) true/false
        $_COOKIE["name"]
    */
        if(isset($_COOKIE[$cookieName])){
            echo "{$cookieName}쿠키가 있습니다. 값은 {$cookieValue}입니다.";
        }
    ?>
</body>
</html>