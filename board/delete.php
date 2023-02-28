<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>망고네 자유게시판</title>
</head>
<body>
    <h1>자유게시판</h1>
    <h2>글목록</h2>
    <ul>
        <?php
            // $conn=mysqli_connect("localhost","youngjung","w","youngjung");//서버
            $conn=mysqli_connect("localhost","root","","mango_board");
            if(!$conn){
                echo "db연결실패";
            }else{
                echo "db연결성공<br>";
            }
            // 삭제할 데이터를 변수에 저장
            $num=$_POST['delnum'];

            
            // 데이터조작어 del * 안됨
            $sqlDEL="DELETE FROM `free_board` WHERE number=$num";
            mysqli_query($conn,$sqlDEL);
            echo $num . '번째 글이 삭제되었습니다.';
            mysqli_close($conn);
        ?>
    </ul>
    <!-- <a href='view.php'>{$row['message']}</a> -->
    <hr>
    <p><a href="index.php">메인화면으로 돌아가기</a></p>
    <hr>
</body>
</html>