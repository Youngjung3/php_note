<?php
    function authenticate_user($email, $password){
        if($email==user_name && $password==password){
            return true;
        }
    }
    // header 함수는 redirect 기능구현
    function redirect($url){
        header("Location:$url");
        exit();
    }
    //회원인지확인
    function user_is_auth(){
        return isset($_SESSION['email']);
    }

    //비회원일경우 login페이지로 이동
    function confirm_user_is_auth(){
        if(!user_is_auth()){
            redirect('login.php');
            exit();
        }
    };
?>