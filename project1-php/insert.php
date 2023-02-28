<?php
    // data를 db에 저장하려면 DB 컴퓨터에 접속을 해야됨
    // mysqli_connect("서버주소(localhost)","사용자아이디", "비번", "db명");
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
    $user_name=$_POST['name'];
    $user_msg=$_POST['message'];


    /* UPDATE `free_board` SET `message` = '한글로 보여줘 이거다' WHERE `free_board`.`number` = 8 */
    // db 추가
    $sql="INSERT INTO free_board (name, message) VALUES ('$user_name','$user_msg')";
    
    // 실행
    $result=mysqli_query($conn,$sql);
    echo $result."개의 글이 등록 되었습니다.";
    //write.php의 form 태그 하위 input 에서 전달받은 data를 각 변수에 저장

    mysqli_close($conn);
    print "<hr><a href='index2.php'>메인화면으로 이동</a>"
?>