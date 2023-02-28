<?php
  session_start();
  $title='메인페이지';
  include('inc/config.php');
  include_once('inc/header.php');
  require_once('inc/functions.php');
?>
</head>
<body>
  <script>
    function showMsg(){
      alert("로그아웃되었습니다.");
    }
  </script>
  <?php
    include('inc/gnb.php');
    echo '<script>','showMsg()','</script>';
  ?>
  <!-- Showcase -->
  <header id="showcase">
    <div class="container">
      <div class="showcase-container">
        <div class="showcase-content">
          <div class="category category-sports">Sports</div>
          <h1>Some Sports Article</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus rerum officia quibusdam mollitia deserunt animi soluta laudantium. Quam sapiente a dolorum magnam necessitatibus quis tempore facere totam. Dolor, sequi distinctio!</p>
          <a href="article.php" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Home Articles -->
  <section id="home-articles" class="py-2">
    <div class="container">
        <h2>Editor Picks</h2>
        <div class="articles-container">
          <article class="card">
            <img src="img/articles/ent1.jpg" alt="">
            <div>
              <div class="category category-ent">Entertainment</div>
              <h3>
                <a href="article.html">Lorem ipsum dolor sit amet</a>
              </h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quam eius ducimus optio veniam sit nihil beatae ea autem. Doloribus.</p>
            </div>
          </article>
          <article class="card bg-dark">
            <div class="category category-sports">Sports</div>
            <h3>
              <a href="article.html">Lorem ipsum dolor sit amet</a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quam eius ducimus optio veniam sit nihil beatae ea autem. Doloribus.</p>
          </article>
          <article class="card">
            <img src="img/articles/tech1.jpg" alt="">
            <div class="category category-tech">Technology</div>
            <h3>
              <a href="article.html">Lorem ipsum dolor sit amet</a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quam eius ducimus optio veniam sit nihil beatae ea autem. Doloribus.</p>
          </article>
          <article class="card">
            <div class="category category-sports">Sports</div>
            <h3>
              <a href="article.html">Lorem ipsum dolor sit amet</a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quam eius ducimus optio veniam sit nihil beatae ea autem. Doloribus.</p>
            <img src="img/articles/sports1.jpg" alt="">
          </article>
          <article class="card">
            <img src="img/articles/tech2.jpg" alt="">
            <div class="category category-tech">Technology</div>
            <h3>
              <a href="article.html">Lorem ipsum dolor sit amet</a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quam eius ducimus optio veniam sit nihil beatae ea autem. Doloribus.</p>
          </article>
          <article class="card bg-primary">
            <div class="category category-sports">Sports</div>
            <h3>
              <a href="article.html">Lorem ipsum dolor sit amet</a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quam eius ducimus optio veniam sit nihil beatae ea autem. Doloribus.</p>
          </article>
          <article class="card">
            <div>
              <div class="category category-ent">Entertainment</div>
              <h3>
                <a href="article.html">Lorem ipsum dolor sit amet</a>
              </h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quam eius ducimus optio veniam sit nihil beatae ea autem. Doloribus.</p>
            </div>
            <img src="img/articles/ent2.jpg" alt="">
          </article>
        </div>
    </div>
  </section>

  <?php
    include_once('inc/footer.php')
  ?>
