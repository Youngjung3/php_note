<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function</h1>
    <pre>
        function 함수이름(매개변수1,매개변수2){
            ...실행문;
        }
        함수이름(인자1,인자2);
    </pre>
    <?php
        function add($x,$y){
            //함수의 결과를 호출지점으로 반환하고 종료
            return $x+$y; //30
            return $x*$y; //200
            echo "열려라 먹으면 자고 먹으면 자고...";
        }
        echo add(10,20);

        ?>
        <h2>배열의 값을 출력하는 함수:print_r</h2>
        <?php
            $fruit=['apple','orange','banana', 'mango'];
            echo '<pre>';
            echo  print_r($fruit);           
            echo '</pre>';
            
            $sleeper=['정선문','이영범', '김민정'];
            member($sleeper);
            function member($name){
                echo '<pre>';   
                print_r($name);           
                echo '</pre>';
            }
        ?>
        <h2>변수-scope</h2>
        <?php
            function sum1($x,$y){
                $result = $x+$y;
                return $result;
                echo $result;
            }
            sum1(10,20);
            $result=sum1(10,20);
            echo $result;
        ?>
        <h2>지역변수</h2>
        <?php
            function myFunc(){
                $var=10;
                echo $var;
            }
            myFunc();
        ?>
        <h2>전역변수</h2>
        <p>php에서 전역변수를 코드블럭 내부에서 사용하려면 global을 쓴다</p>
        <?php
            $var2=20;
            function myFunc2(){
                // 함수 외부에 선언되었어도 사용안됨
                // echo '$var2';
                global $var2;
                echo $var2;
            }
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
            function increment(){
                //$count=0;
                static $count=0;
                echo "{$count}<br>";
                $count++;
            }
            increment(); //0,0
            increment(); //0,1
            increment(); //0,2
        ?>
        <h2>$_GLOBALS</h2>
        https://www.php.net/manual/en/language.variables.superglobals
        <p>php에는 superglobal 변수가 존재</p>
</body>
</html>