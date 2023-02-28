<?php
    $title="서브페이지1";
    // error 발생시 에러문장 출력후 실행
    // 단순반복
    include_once('inc/header.php');
    #include('inc/function.php');
    // 에러발생시 에러내용 자세히출력
    // 엄격한 문법검사
    // 기능을 부를때
    require('inc/function.php');
    #require_once('inc/function.php');
?>
    <hr>
    <pre>
        function 함수이름(매개변수1,매개변수2){
            ...실행문;
        }
        함수이름(인자1,인자2);
    </pre>
    <?php

        echo add(10,20);
        ?>
        <h2>배열의 값을 출력하는 함수:print_r</h2>
        <?php
            $fruit=['apple','orange','banana', 'mango'];
            echo '<pre>';
            echo  print_r($fruit);           
            echo '</pre>';
            
            $sleeper=['김민정'];
            member($sleeper);

        ?>
        <h2>변수-scope</h2>
        <?php
            sum1(10,20);
            $result=sum1(10,20);
            echo $result;
        ?>
        <h2>지역변수</h2>
        <?php
            myFunc();
        ?>
        <h2>전역변수</h2>
        <p>php에서 전역변수를 코드블럭 내부에서 사용하려면 global을 쓴다</p>
        <?php
            $var2=20;
            myFunc2();
            echo $var2;
        ?>
        <h2>정적변수</h2>
        <p>
            함수 내부에서 static 키워드로 선언한 변수
            함수의 호출이 종료되어도 메모리상에 존재함.
            지역 변수처럼 해당 함수 내부에서만 접근가능.
        </p>
        <?php
            increment(); //0,0
            increment(); //0,1
            increment(); //0,2
        ?>
        <hr>
        <?php
            include('inc/footer.php');
        ?>
</body>
</html>