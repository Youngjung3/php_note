<?php
    $conn=mysqli_connect("localhost","youngjung","willy153!","youngjung");//서버
    // $conn=mysqli_connect("localhost","root","","mango_board");//로컬
    //DB서버의 접속정보

    if(!$conn){
        echo "db연결실패";
    }else{
        echo "db연결성공<br>";
    }
    //연결 상태

    //(data)값을 다룰때 값을 변수에 저장
    //음식 그릇에 담아먹는것과 유사 (값이 변질되는것을 막는다 )
    $number=$_POST['number'];
    $user_name=$_POST['name'];
    $user_msg=$_POST['message'];

    // UPDATE 테이블명 SET필드명 = '값' WHRER primarykey 필드명='값'
    $sql="UPDATE free_board SET name='$user_name', message='$user_msg' WHERE number='$number'";
    
    $result=mysqli_query($conn,$sql);
    if($result==false){
        echo "수정에 실패했습니다";
        error_log(mysqli_error($conn));
    }else{
        echo "수정을 완료하였습니다.";
    }
    mysqli_close($conn);
    print "<hr><a href='index2.php'>메인화면으로 이동</a>"
?>