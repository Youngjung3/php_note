<?php
    $title="울진군문화관광";
    include('inc/header.php');
?>
  </head>
  <body>
<!--     <div id="layer">
      <p>이 사이트는 학습용으로 제작하였으며 울진군문화관광과 무관합니다.
        구직용 포트폴리오로 상업적 목적이 없음을 알립니다.
      </p>
        <button>닫기</button>
    </div> -->
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
    <main>
      <div id="main_slide">
        <div class="slide_cover">
          <ul class="main_slide_cover">
            <li class="main_0"><img src="./images/main01.jpg" alt="메인화면1">
              <section>
                <h2>화합으로 새로운 희망</h2>
              </section>
              <div class="main_text">
                <p>하늘에서 즐기는 넘실대는 푸른 동해바다의 전경</p>
                <h5>왕피천케이블카<input type="button" value="스토리텔링"></h5>
              </div>
            </li>
            <li class="main_1"><img src="./images/main02.jpg" alt="메인화면2">
              <section>
                <h2>화합으로 새로운 희망</h2>
              </section>
              <div class="main_text">
                <p>바다를 가로지르는 스릴 넘치는 하늘 바닷길</p>
                <h5>등기산공원&#47;스카이워크 <input type="button" value="스토리텔링"> <input type="button" value="사이버투어"></h5>
              </div>
            </li>
            <li class="main_2"><img src="./images/main03.jpg" alt="메인화면3">
              <section>
                <h2>화합으로 새로운 희망</h2>
              </section>
              <div class="main_text">
                <p>서정적인 풍경이 한폭의 그림과 같은 폭풍속으로</p>
                <h5>죽변드라마세트장 <input type="button" value="스토리텔링"> <input type="button" value="사이버투어"></h5>
              </div>
            </li>
            <li class="main_3"><img src="./images/main04.jpg" alt="메인화면4">
              <section>
                <h2>화합으로 새로운 희망</h2>
              </section>
              <div class="main_text">
                <p>500백년 금강송으로 뒤덮인 힐링과 치유의 자연궁전 </p>
                <h5>금강소나무숲길 <input type="button" value="스토리텔링"> <input type="button" value="사이버투어"></h5>
              </div>
            </li>
            <li class="main_4"><img src="./images/main05.jpg" alt="메인화면5">
              <section>
                <h2>화합으로 새로운 희망</h2>
              </section>
              <div class="main_text">
                <p>신라 진덕여왕이 감탄한 명승 제6호 적송의 군란지</p>
                <h5>불영사계곡</h5>
              </div>
            </li>
          </ul>
          <ul id="buttonList">
            <li class="on"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
          <ul class="controls">
            <li class="prev"><a href="#">&lt;</a></li>
            <li class="next"><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
      <div class="main_bottom">
            <div class="custom">
              <strong>맞춤,관광지</strong>
              <p>맞춤형 울진관광 추천 서비스</p>
            </div>
      </div>
      <div id="container">
        <p class="nowrap">
          <a href="https://www.data.go.kr/data/15084084/openapi.do" target="_blank"><span>출처: 기상청<img src="./images/weather_button.png" alt="조석정보"></span></a>
        </p>
      </div>
    </main>
    <ul class="sideNav">
      <li><a href="#header">01</a></li>
      <li><a href="#section1">02</a></li>
      <li><a href="#travel">03</a></li>
      <li><a href="#place3">04</a></li>
      <li><a href="#story">05</a></li>
      <li><a href="#footmenu">06</a></li>
  </ul>
    <!-- youtube -->
    <div class="section1" id="section1">
      <div class="inner2">
        <h6>여행소식을 전하는 생생정보플랫폼</h6>
        <div class="youtube_content sliderWrap">
          <div class="videoSlider">            
            <div>
              <a href="#" class="youtube_prev">
                <i></i>
                <em>울진 사용설명서<br>울진바다편</em>
                <span class="y1-1"></span>
              </a>
              <div class="youtube">
                <p><video src="./video/video3.mp4" muted controls autoplay></video></p>
                <h5>울진 왕피천케이블카, 국립해양과학관</h5>
                <p>#케이블카 #해양과학관 #새로운</p>
              </div>
              <a href="#" class="youtube_next">
                <i></i>
                <em>울진 사용설명서<br>왕피천케이블카편</em>
                <span class="y1-2"></span>
              </a>
            </div>
              <div>
              <a href="#" class="youtube_prev">
                <i></i>
                <em>울진 사용설명서<br> 왕피천케이블카편</em>
                <span class="y2-1"></span>
              </a>
              <div class="youtube">
                <p><video src="./video/video2.mp4" muted controls autoplay></video></p>
                <h5>울진 사용설명서 울진바다편</h5>
                <p>#울진 #힐링여행 #울진바다</p>
              </div>
              <a href="#" class="youtube_next">
                <i></i>
                <em>울진 왕피천케이블카<br> 국립해양과학관</em>
                <span class="y2-2"></span>
              </a>
            </div>
            <div>
              <a href="#" class="youtube_prev">
                <i></i>
                <em>울진 왕피천케이블카<br> 국립해양과학관</em>
                <span class="y3-1"></span>
              </a>
              <div class="youtube">
                <p><video src="./video/video1.mp4" muted controls autoplay></video></p>
                <h5>울진 사용설명서 왕피천케이블카</h5>
                <p>#울진 #힐링여행 #왕피천케이블카</p>
              </div>
              <a href="#" class="youtube_next">
                <i></i>
                <em>울진 사용설명서<br> 울진바다편</em>
                <span class="y3-2"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- travel -->
    <div class="travel" id="travel">
      <div class="travel-inner">
        <div class="map">
            <img src="./images/map1.png" class="onmap1 on2" alt="북부권">
            <img src="./images/map2.png" class="onmap2" alt="서부권"> 
            <img src="./images/map3.png" class="onmap3" alt="남부권">
            <img src="./images/map4.png" class="onmap4" alt="드라이브">
        </div>
        <div class="place">
          <p>다양한 울진관광명소를 한눈에!</p>
          <img src="./images/place.png" alt="핫플레이스">
        </div>
        <div class="place-menu">
          <div class="item">
            <span class="circle">
              <em>10</em>
            </span>
          </div>
          <div class="item">
            <span class="circle2">
              <em>11</em>
            </span>
          </div>
          <div class="item">
            <span class="circle3">
              <em>07</em>
            </span>
          </div>
          <div class="item">
            <span class="circle4">
              <em>05</em>
            </span>
          </div>
          <div class="item">
            <span class="circle5">
              <em>15</em>
            </span>
          </div>
          <div class="item">
            <span class="circle6">
              <em>10</em>
            </span>
          </div>
          <div class="item">
            <span class="circle7">
              <em>08</em>
            </span>
          </div>
        </div>
        <div class="travel_box">
          <div class="course_text">
            <img src="./images/course.png" alt="추천코스여행">
              <p>
                <strong class="first_co">북부권</strong><br><span>삼척·강릉 출발</span><img src="./images/check.png" class="on3" alt="선택">
              </p>
              <p>
                <strong>서부권</strong><br><span class="on3">영주·봉화 출발</span><img src="./images/check.png" alt="선택">
              </p>
              <p>
                <strong>남부권</strong><br><span class="on3">영덕·포항 출발</span><img src="./images/check.png" alt="선택">
              </p>
              <p>
                <strong>드라이브</strong><br><span class="on3">드라이브코스</span><img src="./images/check.png" alt="선택">
            </p>
          </div>
          <div class="course">
            <div class="course1 on4">
              <strong>
                북부권
                <em>삼척·강릉 출발</em>
              </strong>
              <div class="course_list">
                <a href="#">덕구보양온천</a> → 
                <a href="#">죽변항(폭풍속으로 드라마 세트장)</a> → 
                <a href="#">봉평신라비(봉평해수욕장)</a> → 
                <a href="#">연호정</a> → 
                <a href="#">민물고기생태체험관</a> → 
                <a href="#">왕피천공원</a> → 
                <a href="#">성류굴</a> → 
                <a href="#">망양정(망양해수욕장)</a> → 
                <a href="#">해안도로(촛대바위)</a> → 
                <a href="#">해월헌</a> → 
                <a href="#">월송정</a> → 
                <a href="#">후포항</a>
              </div>
              <a href="#"><span>자세히보기</span></a>
              <div class="course_image1"></div>
            </div>
            <div class="course1">
              <strong>
                서부권
                <em>영주·봉화 출발</em>
              </strong>
              <div class="course_list">
                <a href="#">통고산자연휴양림</a> → 
                <a href="#">울진금강소나무숲</a> → 
                <a href="#">불영사(계곡)</a> → 
                <a href="#">민물고기생태체험관</a> → 
                <a href="#">왕피천공원</a> → 
                <a href="#">성류굴</a> → 
                <a href="#">망양정(망양해수욕장)</a> → 
                <a href="#">구수곡자연휴양림</a> → 
                <a href="#">덕구보양온천</a> → 
                <a href="#">봉평신라비죽변항(폭풍속으로드라마세트장)</a>
              </div>
              <a href="#"><span>자세히보기</span></a>
              <div class="course_image2"></div>
            </div>
            <div class="course1">
              <strong>
                남부권
                <em>영덕·포항 출발</em>
              </strong>
              <div class="course_list">
                <a href="#">후포항</a> → 
                <a href="#">향암미술관</a> → 
                <a href="#">백암온천(백안삼)</a> → 
                <a href="#">월송정</a> → 
                <a href="#">해월헌</a> → 
                <a href="#">해안도로(촛대바위)</a> → 
                <a href="#">망양정</a> → 
                <a href="#">성류굴</a> → 
                <a href="#">왕피천공원</a> → 
                <a href="#">민물고기생태체험관</a> →
                <a href="#">불영사(계곡)</a> →  
                <a href="#">울진금강소나무숲</a> → 
                <a href="#">통고산자연휴양림</a>
              </div>
              <a href="#"><span>자세히보기</span></a>
              <div class="course_image3"></div>
            </div>
            <div class="course1">
              <strong>
                드라이브 코스
              </strong>
              <div class="course_list">
                <a href="#">코스 🅰 근남면 망양정 ↔ 덕신리 코스 (약 20km)</a><br> 
                <a href="#">코스 🅱 후포면 후포항 ↔ 직산리 코스 (약 20km)</a>
              </div>
              <a href="#"><span>자세히보기</span></a>
              <div class="course_image4"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- place3 -->
    <div class="place3" id="place3">
     <div class="placebg">
     </div>
     <div class="place33">
      <div class="col1">
        <p>계절보양여행</p>
        <strong>온천관광휴양지</strong>
        <em>국내 유일 자연용출온천으로 유명한 울진의<br> 온천관광특구를 소개합니다.</em>
      </div>
      <div class="col2">
        <p>울진트래킹</p>
        <strong class="pcolor">금강소나무 숲길</strong>
        <em class="emcolor">호젓하고 낭만적인 울진여행기 웰니스 가득<br>한 여행코스를 추천해드립니다.</em>
      </div>
      <div class="col3">
        <p class="pwhite">일출 맛집</p>
        <strong class="str3">울진 바다</strong>
        <em>동해바다의 아름다운 해돋이 풍경을 만날 수<br>있는 울진해수욕장을 소개합니다.</em>
      </div>
     </div>
    </div>
    
    <!-- story -->
    <div class="story" id="story">
      <p>이야기로 만나는 비대면(언택트) 관광</p>
      <div class="story-inner">
        <div class="story_left">
          <a href="#" class="fixed_left">
            <img src="./images/story_left.jpg" alt="국립해양과학관">
            <div class="left_bottom">
              <div class="category">
                <span class="label">명소찾아<br> 삼만리</span>
              </div>
              <div class="left_text">
                <em>국립해양과학관</em><br>
                <strong>국내 최초 해양과학 전시문화...</strong>
                <span class="more_te">자세히 보기</span>
              </div>
            </div>
          </a>
        </div>
        <div class="story_right">
          <div class="story_list">
            <div class="mb">
              <div class="story_col n1">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_01.jpg" alt="왕피천케이블카"></div>
                  <div class="col_text">
                    <span>색다른 축제,체험</span>
                    <strong>왕피천케이블카</strong>
                    <em>자연 그대로의 명소이자 랜드마크</em>
                  </div>
                </a>
              </div>
              <div class="story_col n2">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_02.jpg" alt="">평해사구습지생태공원</div>
                  <div class="col_text">
                    <span>울진에서 힐링</span>
                    <strong>평해사구습지생태공원</strong>
                    <em>천혜의 자연풍경이 보이는 생태공원</em>
                  </div>
                </a>
              </div>
              <div class="story_col n3">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_03.jpg" alt="트래킹 코스"></div>
                  <div class="col_text">
                    <span>울진에서 힐링</span>
                    <strong>1박 2일 트래킹 코스</strong>
                    <em>금강송 군락 사이를 걸으며 힐링하는 여행</em>
                  </div>
                </a>
              </div>
            </div>
            <div class="mb">
              <div class="story_col n1">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_04.jpg" alt="은어다리"></div>
                  <div class="col_text">
                    <span>명소찾아 삼만리</span>
                    <strong>은어다리</strong>
                    <em>바람이 되어 바다를 질주한다</em>
                  </div>
                </a>
              </div>
              <div class="story_col n2">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_05.jpg" alt="왕피천공원"></div>
                  <div class="col_text">
                    <span>명소찾아 삼만리</span>
                    <strong>왕피천공원 두 번째 이야기</strong>
                    <em>자연과 공존하는 왕피천공원의 안전체...</em>
                  </div>
                </a>
              </div>
              <div class="story_col n3">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_06.jpg" alt="죽변항 수산물 축제"></div>
                  <div class="col_text">
                    <span>확트인 바다,풍경</span>
                    <strong>죽변항 수산물 축제</strong>
                    <em>죽변항에서 펼쳐지는 오감만족 즐거운...</em>
                  </div>
                </a>
              </div>
            </div>
            <div class="mb">
              <div class="story_col n1">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_07.jpg" alt="등기산공원/스카이워크"></div>
                  <div class="col_text">
                    <span>확트인 바다,풍경</span>
                    <strong>등기산공원/스카이워크</strong>
                    <em>바다를 가로지르는 스릴넘치는 하늘바...</em>
                  </div>
                </a>
              </div>
              <div class="story_col n2">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_08.jpg" alt="금강송 테마전시관/에코리움"></div>
                  <div class="col_text">
                    <span>울진에서 힐링</span>
                    <strong>금강송 테마전시관/에코리움</strong>
                    <em>숲을 통한 쉼과 여유 그리고 치유가 함께...</em>
                  </div>
                </a>
              </div>
              <div class="story_col n3">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_09.jpg" alt="울진 불영사"></div>
                  <div class="col_text">
                    <span>울진에서 힐링</span>
                    <strong>울진 불영사</strong>
                    <em>불영사 연못에서 만나는 부처와 나</em>
                  </div>
                </a>
              </div>
            </div>
            <div class="mb">
              <div class="story_col n1">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_10.jpg" alt="금강소나무숲길"></div>
                  <div class="col_text">
                    <span>확트인 바다,풍경</span>
                    <strong>금강소나무숲길(2코스)</strong>
                    <em>가을이 스민 금강소나무숲길</em>
                  </div>
                </a>
              </div>
              <div class="story_col n2">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_11.jpg" alt="금강소나무숲길"></div>
                  <div class="col_text">
                    <span>울진에서 힐링</span>
                    <strong>금강소나무숲길(4코스)</strong>
                    <em>아름답지만 쓸쓸한 대왕소나무를 만나다</em>
                  </div>
                </a>
              </div>
              <div class="story_col n3">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_12.jpg" alt="금강소나무숲길"></div>
                  <div class="col_text">
                    <span>울진에서 힐링</span>
                    <strong>금강소나무숲길(3코스)</strong>
                    <em>금강송의 생명을 느끼는 하루</em>
                  </div>
                </a>
              </div>
            </div>
            <div class="mb">
              <div class="story_col n1">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_13.jpg" alt="금강소나무숲길"></div>
                  <div class="col_text">
                    <span>울진에서 힐링</span>
                    <strong>금강소나무숲길(1코스)</strong>
                    <em>옛 보부상길을 걷다</em>
                  </div>
                </a>
              </div>
              <div class="story_col n2">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_14.jpg" alt="왕피천생태탐방로"></div>
                  <div class="col_text">
                    <span>울진에서 힐링</span>
                    <strong>왕피천생태탐방로(은어길)</strong>
                    <em>산책로에서 느끼는 왕피천의 비경</em>
                  </div>
                </a>
              </div>
              <div class="story_col n3">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_15.jpg" alt="왕피천생태탐방로"></div>
                  <div class="col_text">
                    <span>울진에서 힐링</span>
                    <strong>왕피천생태탐방로(2-1구간)</strong>
                    <em>왕피천 협곡을 걸으며 마주하는 절경 그..</em>
                  </div>
                </a>
              </div>
            </div>
            <div class="mb">
              <div class="story_col n1">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_16.jpg" alt="왕피천생태탐방로"></div>
                  <div class="col_text">
                    <span>울진에서 힐링</span>
                    <strong>왕피천생태탐방로(1-1구간)</strong>
                    <em>옛 길에서 남겨진 오랜 풍경과 이야기를...</em>
                  </div>
                </a>
              </div>
              <div class="story_col n2">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_17.jpg" alt="왕피천생태탐방로"></div>
                  <div class="col_text">
                    <span>울진에서 힐링</span>
                    <strong>왕피천생태탐방로(1구간)</strong>
                    <em>숲에서 배우는 역사와 자연의 소중함</em>
                  </div>
                </a>
              </div>
              <div class="story_col n3">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_18.jpg" alt="구수곡자연휴양림"></div>
                  <div class="col_text">
                    <span>울진에서 힐링</span>
                    <strong>구수곡자연휴양림</strong>
                    <em>솔바람 맡으며 숲을 걷다</em>
                  </div>
                </a>
              </div>
            </div>
            <div class="mb">
              <div class="story_col n1">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_19.jpg" alt="백암온천과 신선계곡"></div>
                  <div class="col_text">
                    <span>명소찾아 삼만리</span>
                    <strong>백암온천과 신선계곡</strong>
                    <em>어느 봄날의 신선놀음</em>
                  </div>
                </a>
              </div>
              <div class="story_col n2">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_20.jpg" alt="덕구온천"></div>
                  <div class="col_text">
                    <span>명소찾아 삼만리</span>
                    <strong>덕구온천</strong>
                    <em>경상북도 1호,국민 보양온천</em>
                  </div>
                </a>
              </div>
              <div class="story_col n3">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_21.jpg" alt="민물고기 생태체험관"></div>
                  <div class="col_text">
                    <span>명소찾아 삼만리</span>
                    <strong>민물고기 생태체험관</strong>
                    <em>민물고기의 모든 것</em>
                  </div>
                </a>
              </div>
            </div>
            <div class="mb">
              <div class="story_col n1">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_22.jpg" alt="울진왕피천공원"></div>
                  <div class="col_text">
                    <span>명소찾아 삼만리</span>
                    <strong>울진왕피천공원</strong>
                    <em>자연과 공존하는 친환경 울진을 만나다</em>
                  </div>
                </a>
              </div>
              <div class="story_col n2">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_23.jpg" alt="성류굴"></div>
                  <div class="col_text">
                    <span>명소찾아 삼만리</span>
                    <strong>성류굴</strong>
                    <em>2억 5천만 년의 시간이 빚은 신비의 지하...</em>
                  </div>
                </a>
              </div>
              <div class="story_col n3">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_24.jpg" alt="울진금강송 송이축제"></div>
                  <div class="col_text">
                    <span>색다른 축제,체험</span>
                    <strong>제15회 울진금강송 송이축제</strong>
                    <em>울진금강송이 빚은 천년의 향</em>
                  </div>
                </a>
              </div>
            </div>
            <div class="mb">
              <div class="story_col n1">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_25.jpg" alt="울진 워터피아 페스타"></div>
                  <div class="col_text">
                    <span>색다른 축제,체험</span>
                    <strong>제7회 울진 워터피아 페스타</strong>
                    <em>청정 울진에서 즐기는 오감만족 바다축제</em>
                  </div>
                </a>
              </div>
              <div class="story_col n2">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_26.jpg" alt="울진요트학교"></div>
                  <div class="col_text">
                    <span>색다른 축제,체험</span>
                    <strong>울진요트학교(요트와 윈드서핑)</strong>
                    <em>바람이 되어 바다를 질주한다</em>
                  </div>
                </a>
              </div>
              <div class="story_col n3">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_27.jpg" alt="울진 해양레포츠센터"></div>
                  <div class="col_text">
                    <span>색다른 축제,체험</span>
                    <strong>울진 해양레포츠센터</strong>
                    <em>바닷속 산책</em>
                  </div>
                </a>
              </div>
            </div>
            <div class="mb">
              <div class="story_col n1">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_28.jpg" alt="붉은대게 축제"></div>
                  <div class="col_text">
                    <span>색다른 축제,체험</span>
                    <strong>울진대게와 붉은대게 축제</strong>
                    <em>비단바다 후포항에서 울진대게와 놀다</em>
                  </div>
                </a>
              </div>
              <div class="story_col n2">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_29.jpg" alt="울진 대게"></div>
                  <div class="col_text">
                    <span>색다른 축제,체험</span>
                    <strong>울진 대게</strong>
                    <em>진짜 대게의 맛</em>
                  </div>
                </a>
              </div>
              <div class="story_col n3">
                <a href="#">
                  <div class="cut_img"><img src="./images/story_right_30.jpg" alt="울진바다"></div>
                  <div class="col_text">
                    <span>확트인 바다,풍경</span>
                    <strong>울진바다에서 보내는 하루</strong>
                    <em>멋있는 바다!맛있는 바다! 바라는 바다!</em>
                  </div>
                </a>
              </div>
            </div>
            <div class="story_col n1">
              <a href="#">
                <div class="cut_img"><img src="./images/story_right_31.jpg" alt="해수욕장과 해파랑길"></div>
                <div class="col_text">
                  <span>확트인 바다,풍경</span>
                  <strong>울진의 해수욕장과 해파랑길</strong>
                  <em>울진의 바다에서 여름을 외치다</em>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footmenu -->
    <div class="footmenu" id="footmenu">
      <div class="wave"></div>
      <div class="footmenu_inner">
        <p>QUICK SERVIC</p>
        <strong>자주찾는 메뉴</strong>
        <div class="f_icon">
          <a href="#">
            <div class="f_menu">
            </div>
            관광안내
          </a>
          <a href="#">
            <div class="f_menu2">
            </div>
            음식점
          </a>
          <a href="#">
            <div class="f_menu3">
            </div>
            울진숙박
          </a>
          <a href="#">
            <div class="f_menu4">
            </div>
            관광책자신청
          </a>
          <a href="#">
            <div class="f_menu5">
            </div>
            관광지도다운로드
          </a>
          <a href="#">
            <div class="f_menu6">
            </div>
            우리고장특산품
          </a>
          <a href="#">
            <div class="f_menu7">
            </div>
            울진군지
          </a>
        </div>
        <div class="f_more">
          <div class="news">
            <h4>보도자료</h4>
            <ul>
              <li>
                <a href="#">12월 울진문화예술회관(후포) 영화 상영 안내</a>
                <span>2022-12-02</span>
              </li>
              <li>
                <a href="#">
									&lt;2022 방방곡곡 문화공감&gt; 다원예술『페인터즈』 무료 공연 개최 
								</a>
                <span>2022-11-24</span>
              </li>
              <li>
                <a href="#">오페라시리즈 「마술피리」 무료공연 안내</a>
                <span>2022-11-17</span>
              </li>
            </ul>
            <p class="p_more"><a href="#">더보기</a></p>
          </div>
          <div class="cyber">
            <a href="#">
              <div class="a_inner">
                <p>ULJIN CYBERTOUR</p>
                <h3>울진 사이버투어</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  <?php
    require('inc/footer.php');
    require_once('inc/function.php');
  ?>
  </body>
</html>
