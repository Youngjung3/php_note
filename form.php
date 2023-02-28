<?php
    $title="로그인페이지";
    include_once('inc/header.php');
?>
<form action="request.php" method="post">
    <p>
        <label for="userName">이름: </label>
        <input type="text" id="userName" name="userName">
    </p>
    <p>
        <label for="userEmail">이메일: </label>
        <input type="email" id="userEmail" name="userEmail">
    </p>
    <p>
        <input type="submit" value="로그인">
    </p>
</form>












<?php
    include_once('inc/footer.php');
?>