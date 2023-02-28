<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <h1>배열</h1>
    <h2>배열생성</h2>
    <?php
        $fruits=array();
        $fruits[0]="바나나";
        $fruits[1]="사과";
        $fruits[2]="한라봉";
        // $fruits[3]="감";
        /* 에러남
            배열의 값을 꺼낼때는 원소단위로
         */
        echo $fruits[0];
        echo $fruits[1];
        echo $fruits[2];
        ?>
        
        <h2>isset</h2>
        <p>isset은 변수가 준비되었는지 확인하는 함수</p>
        <?php 
            if(isset($fruits[3])){
                echo $fruits[3];
            }else{
                echo "그거없다";
            }     
        ?>

        <h2>배열조작</h2>
        <p>count 배열의 개수반환</p>

        <?php 
            $fruits=array('apple','banana','orange');
            // 배열.length => count(배열)
            for($i=0; $i<count($fruits); $i++){
                echo $fruits[$i].'<br>';
            }
        ?>
</body>
</html>