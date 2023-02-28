<?php
    $title="로그인페이지";
    include('inc/header.php');
    require('inc/function.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        output($_POST);
    }
    // 로그인시 이메일을 입력받아 사용자검증을함
    // 이메일을 비교해서 로그인 상태인지 아닌지를 판단
    if(isset($_POST['login'])){
        output($_POST);
    }
?>
    <link rel="stylesheet" href="css/login.css">
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
          <li><a href="#">로그인&nbsp;&nbsp;&nbsp;|</a></li>
          <li><a href="#">사이트맵</a></li>
        </ul>
        <div class="qu">
          <a href="#"> <img src="images/qus.png" alt="검색"></a>
        </div>
      </nav>
    </header>
    <div class="login_bg"></div>
    <div class="login" id="login">
      <div class="inner9">
        <form action="" method="post">
            <p>
                <label for="email">이메일</label>
                <input type="email" name="email" id="email" autocomplete="off">
            </p>
            <p>
                <label for="password">비밀번호</label>
                <input type="password" name="password" id="password" autocomplete="off">
            </p>
            <p><input type="submit" name="login" value="로그인"></p>
        </form>
      </div>
    </div>
  <?php
    require('inc/footer.php');
    require('inc/function.php');
  ?>
  </body>
</html>
