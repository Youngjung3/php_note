<?php
    $result=1<3;
    /**
     * 1이 반환됨
     * 1 true
     * 0 = false 화면에 출력X
     ***/ 
    $result=3<1;

    echo $result;
    /**
     * false 를 출력하려면?
     * 반환된 false를 다시 비교한다
     */
    echo $result==false;
?>

<?php
    $first_name='mango';
    $last_name='kim';
    $br='<br>';
    // && and, || or, xor(!) (두개가 달라야 참) - 전부 사용가능 
    if($first_name=="Mango" xor $last_name == 'kim'){
        echo $br.'🎅진짜';
    }else{
        echo $br.'가짜';
    }

?>