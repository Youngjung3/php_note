<!-- DB에 저장된 글목록출력 
    1. 데이터베이스에 접속
    2. 데이터 조회
        SELECT * FROM `free_board`
    3. 데이터 출력
    //li객수를 데이터베이스 갯수만큼
    4. 데이터베에스에 접속종료
-->
<!-- 
    1. 빈문자열 저장한 변수생성
    ex: let new'';
    2. 추가할 태그를 문자열로 저장한 변수생성
    ex: let add='<p>새요소</p>';
    3. 1번 변수에 2번 변수를 더하기
    ex: new+=add;
    ex: new+=add;
    ex: new+=add;
    //output
    <p>새요소</p>
    <p>새요소</p>
    <p>새요소</p>
    4. 3번을 많이 넣을경우 반복문과 함께
 -->
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
            $sql="SELECT * FROM `free_board`";
            $result=mysqli_query($conn,$sql);
            $list='';
            //반복문
            while($row=mysqli_fetch_array($result)){
                $list=$list."<li>{$row['number']} - <a href='view.php?number={$row['number']}'>{$row['name']}</a></li>";
            }
            echo $list;
        ?>
    </ul>
    <!-- <a href='view.php'>{$row['message']}</a> -->
    <hr>
    <p><a href="write.php">글쓰기</a></p>
    <hr>
    <h2>글검색</h2>
    <form action="search_result.php" method="post">
        <h3>검색할 키워드를 입력하세요</h3>
        <p>
            <label for="search">키워드: </label>
            <input type="search" id="search" name="bdkey">
        </p>
        <input type="submit" value="검색">
    </form>
    <hr>
    <h2>글삭제</h2>
    <form action="delete.php" method="post">
        <h3>삭제할 글번호를 입력하세요</h3>
        <p>
            <label for="msgdel">번호: </label>
            <input type="text" id="msgdel" name="delnum">
        </p>
        <input type="submit" value="삭제">
    </form>
</body>
</html>