<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array-1</title>
</head>
<body>
    <h1>배열</h1>
    <h2>배열생성</h2>

    <?php
        $arr=array();
        $arr[0]='바나나';
        $arr[1]='사과';
        $arr[2]='한라봉';

        echo $arr[0];
        echo $arr[1];
        echo $arr[2];
    ?>

    <h2>isset</h2>
    <p>isset은 변수가 준비되었는지 확인하는 함수</p>
    <?php
        if(isset($arr[3])){
            echo '🍗🍗🍖🍖🍗🍗🍖🍗🍗';
        }else{
            echo '없다 🚽🚽🚽🚽🚽🚽🚽🚽🚽🚽';
        }
    ?>

    <h2>배열조작</h2>
    <p>count 배열의 개수반환</p>
    <p>
        1. 변수 생성 후 배열의 원소할당(생각나는걸로)
        2. for 문으로 원소 각각 출력
    </p>
    <?php
        $arr2=array('🚗','🚓','🚕');
        for($i=0; $i<count($arr2);$i++){
            echo $arr2[$i].'<br>';
        }
    ?>
    <h2>연관배열 Associative Array</h2>
    <p>키와 값으로 연결</p>
    <?php
        // foreach(배열명 as 변수)
        foreach($arr as $item){
            echo $item.'<br>';
        }
    ?>

    <h3>과일가격표</h3>
    <?php
        $prices=array();
        $prices['apple']=1000;
        $prices['banana']=2000;
        $prices['melon']=10000;
        // 배열.forEach(funtion(){}) - 자바스크립트
        //for(원소변수명 of 배열){}
        //foreach(배열 as 키 => 원소변수명) {}

        //$prices 배열을 $key 기준으로 하나씩 꺼내서 변수 $price에 저장
        foreach($prices as $key => $price){
            echo $key."_".$price.'<br>';    
        }
    ?>
    <h3>Q.</h3>
    <?php
        $name=array();
        $name['김🚲']='종건';
        $name['김🏍 ']='형섭';
        $name['박🛹']='천주';
        foreach($name as $key1 => $fullname){
            echo $key1.$fullname.'<br>';
        }
        echo '<hr>';
        $name1=array();
        $name1['김종건']='🚲';
        $name1['김형섭']='🏍';
        $name1['박천주']='🛹';
        foreach($name1 as $key1 => $fullname){
            echo $key1.$fullname.'<br>';
        }
        
        echo '<hr>';
        $array=array("모밀국수"=>3000,"삼겹살"=>9900,"라면"=>10000);
        foreach($array as $key => $price){
            echo $key.'🥢'.$price.'<br>';
        }
    ?>
    <script>
        let obj={
            cloud:"구름",
            sun:"해",
        }
        console.log(obj[0]);
    </script>
    <h2>Loop</h2>
    <h3>while</h3>
    <p>while(조건){실행}</p>
    <?php
        $i=1;
        while($i<6){
            echo($i++).'<br>';
        }
    ?>

    <h3>do/while</h3>
    <p>do{실행}while(조건){실행}</p>
    <?php
        $j=4;
        do{
            echo $j--.'<br>';
        }
        while($j>=0);
    ?>

    <h3>for</h3>
    <!-- for로 변경 -->
    <?php
        for($i=1;$i<6;$i++){
            echo $i.'<br>';
        }
    ?>
    <h3>foreach</h3>
    <?php
        $result=array(0,5,6,7,8,9);
        foreach($result as $res){
            echo "변수 \$result의 값은 {$res} 입니다 <br>";
        }
    ?>
    <h3>foreach : associative array</h3>
    <p> 키와 값이 있는 배열</p>
    <?php
        $scores=array(
            "국어"=>80,
            "영어"=>20,
            "수학"=>0,
            "과학"=>100,
        );
        foreach($scores as $key => $sco){
            echo "배열 \$scores의 키값 '{$key}'에 대한 값은 {$sco}입니다. <br>";
        }
    ?>

    <h2>문제</h2>
    <p>배열을 이용해 과목성적의 합계와 평균 구하시오</p>
    <p>과목별점수:영어 99, 컴퓨터 80, 프로그래밍 85</p>
    <p>과목별점수를 변수에 할당</p>
    <p>과목별점수를 배열에 할당</p>
    <?php
        // $grade=array(
        //     "영어"=>99,
        //     "컴퓨터"=>80,
        //     "프로그래밍"=>85,
        // );
        // echo "과목점수: ";
        // foreach($grade as $key =>$sco){
        //     echo $sco.',';
        // }
        // echo "<br>과목합계:";
        // foreach($grade as $key =>$sco){
        //     echo $sco;
        // }
    ?>

    <?php
        $eng=99;
        $com=80;
        $pro=85;

        $score[0]=99;
        $score[1]=80;
        $score[2]=85;

        echo "과목점수:{$eng},{$com},{$pro}<br>";
        echo "합계: ".array_sum($score).'<br>';
		echo "평균: ".array_sum($score)/count($score).'<br>';
        $sum=0;
        for($a=0; $a<count($score);$a++){
            $sum+=$score[$a];
        }
        echo '<hr>합계: '.$sum;
        $avg=$sum/count($score);
        echo '<hr>평균: '.$avg.'<br>';
        echo $sum/count($score);
    ?>
</body>
</html>