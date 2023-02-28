<?php
    function add($x,$y){
        //함수의 결과를 호출지점으로 반환하고 종료
        return $x*$y; //200
        return $x+$y; //30
        echo "열려라 먹으면 자고 먹으면 자고...";
    }
    function member($name){
        if(!isset($name)){
            $name="다 일어났니";
        }

        echo '<pre>';   
        print_r($name);           
        echo '</pre>';
    }
    function sum1($x,$y){
        $result = $x+$y;
        return $result;
        echo $result;
    }
    function myFunc(){
        $var=10;
        echo $var;
    }
    function myFunc2(){
        // 함수 외부에 선언되었어도 사용안됨
        // echo '$var2';
        global $var2;
        echo $var2;
    }
    function increment(){
        //$count=0;
        static $count=0;
        echo "{$count}<br>";
        $count++;
    }
?>