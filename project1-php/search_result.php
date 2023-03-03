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
    <h2>검색결과</h2>
    <ul>
        <?php
            // $conn=mysqli_connect("localhost","youngjung","willy153!","youngjung");//서버
            $conn=mysqli_connect("localhost","root","","mango_board");
            if(!$conn){
                echo "db연결실패";
            }else{
                echo "db연결성공<br>";
            }

            // 원하는 키워드가 있는 글번호를 조회
            // sql SELECT * FROM [테이블명] , 테이블명의 모든 내용 조회
            // sql SELECT * FROM [테이블명] WHERE 조건 , 테이블명의 WHRER 조건 조회
            // 검색할 데이터
            $user_bdkey=$_POST['bdkey'];
            // LIKE 는 일부 일치하는 컬럼
            // php에서 % = * 
            $sql="SELECT * FROM `free_board` WHERE message LIKE '%$user_bdkey%'";
            $result=mysqli_query($conn,$sql);
            $list='';
            //반복문
            while($row=mysqli_fetch_array($result)){
                $list=$list."<li>{$row['number']} - <a href='view.php?number={$row['number']}'>{$row['name']}</a></li>";
            }
            echo $list;
            mysqli_close($conn);
        ?>
    </ul>
    <hr>
    <p><a href="index2.php">메인화면으로 돌아가기</a></p>
</body>
</html>