<?php
    $title="자유게시판";
    include('inc/header.php');
?>
    <link rel="stylesheet" href="css/faq.css">
</head>
<body>
    <?php
      include('inc/hlink.php');
    ?>
    <nav id="nav">
        <div class="logo">
          <span>
            <a href="index.php"><img src="images/logo.png" alt="로고"></a>
          </span>
        </div>
        <?php 
          include_once('inc/gnb.php');
        ?>
        <ul class="side_menu">
          <li><a href="#">울진군청&nbsp;&nbsp;&nbsp;|</a></li>
          <li><a href="login.php">로그인&nbsp;&nbsp;&nbsp;|</a></li>
          <li><a href="#">사이트맵</a></li>
        </ul>
        <div class="qu">
          <a href="#"> <img src="images/qus.png" alt="검색"></a>
        </div>
      </nav>
    </header>
    <div class="faq_bg"></div>
    <div class="faq">
        <div class="inner10">
            <h1>자유게시판</h1>
            <h2>글목록</h2>
            <ul>
                <?php
                    // $conn=mysqli_connect("localhost","root","","mango_board");
                    $conn=mysqli_connect("localhost","youngjung","willy153!","youngjung");//서버
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
        </div>
    </div>
    <?php
    require('inc/footer.php');
    require('inc/function.php');
  ?>
</body>
</html>