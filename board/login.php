<?php
    session_start();
    $title='Login';
    include_once('header.php');
    include_once('config.php');
    require_once('functions.php');    
    if(user_is_auth()){
        redirect('user.php');
    }
    // 사용자가 입력한 정보의 유효성 검증
    // 입력값 유효성 검증 filter_input(method, 'name', option)
    if(isset($_POST['login'])){
    $email=filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password=$_POST['password'];

    if($email==false){
        $status='이메일 형식에 맞게 입력해주세요';
    }
    if(authenticate_user($email, $password)){
        $_SESSION['email']=$email;
        redirect('user.php');
    }else{
        $status='비밀번호를 확인해주세요';
    }
}
?>
<form action="" method="post">
    <p>
        <label for="email">이메일</label>
        <input type="email" id="email" name="email">
    </p>
    <p>
        <label for="password">비밀번호</label>
        <input type="password" id="password" name="password">
    </p>
    <p><input type="submit" name="login" value="로그인"></p>
</form>
<p>test 계정정보는 이메일: user@user.com 비밀번호: 1234 입니다.</p>

<div class="error">
    <p>
        <?php
            if(isset($status)){
                echo $status;
            }
        ?>
    </p>
</div>

<?php
    include_once('footer.php')
?>