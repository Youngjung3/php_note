<?php
    $conn=mysqli_connect("localhost","root","","mango_board");
    // $conn=mysqli_connect("localhost","youngjung","w","youngjung");//서버
    if(!$conn){
        echo "db연결실패";
    }else{
        echo "db연결성공<br>";
    }

    $view_num=$_GET['number'];
    $sql="SELECT * FROM `free_board` WHERE number=$view_num";
    $result=mysqli_query($conn,$sql); 
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View | 자유게시판</title>
</head>
<body>
    <h1>자유게시판</h1>
    <h2>글내용</h2>
    <?php
        // 글이 있으면
        if($row=mysqli_fetch_array($result)){
    ?>
    <h3>글번호: <?php echo $row['number']; ?> / 글쓴이 : <?php echo $row['name']; ?></h3>
    <div><?php echo "글내용 : ".$row['message']; ?></div>
    <?php        
        }
        print "<hr><a href='update.php?number={$row['number']}'>수정하기</a>";
        print "<hr><a href='index.php'>메인화면으로 이동</a>";
    ?>

</body>
</html>