<?php
    // sql 서버접속
    // $conn=mysqli_connect("localhost","root","","mango_board");
    $conn=mysqli_connect("localhost","youngjung","willy153!","youngjung");//서버
    if(!$conn){
        echo "db연결실패";
    }else{
        echo "db연결성공<br>";
    }
    // 
    $view_num=$_GET['number'];
    $sql="SELECT * FROM `free_board` WHERE number=$view_num";
    $result=mysqli_query($conn,$sql); 
    $row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글수정</title>
</head>
<body>
    <h1>글수정하기</h1>
    <?php
        if($result=mysqli_query($conn,$sql)){

    ?>
    <form action="modify.php" method="post">
        <input type="hidden" name="number" value="<?php echo $view_num ?>">
        <p>
            <label for="name">작성자 :</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>">
        </p>
        <p>
            <label for="message">글내용 :</label>
            <textarea id="message" name="message" col="30" rows="10"><?php echo $row['message']; ?></textarea>
        </p>
        <input type="submit" value="전송">
    </form>
    <?php    
        }    
        print "<hr><a href='index2.php'>메인화면으로 이동</a>";
    ?>
</body>
</html>