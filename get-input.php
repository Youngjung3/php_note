<!-- 사용자 악의적으로 주소창을 통해 공격을 할 수 있다. 
    filter함수를 사용하여 데이터고르기
-->

<?php
    // $serviceKey=$_GET["serviceKey"];
    // $weather=$_GET["status"];
    // 필터에 해당하는지 확인하여 데이터 골라냄
    $prodcut=filter_input(INPUT_GET,'product',FILTER_VALIDATE_INT); //FILTER_VALIDATE_INT 정수 true INTEGER 정수 INT 4,5,6 
    #$prodcut=filter_input(INPUT_GET,'product',FILTER_VALIDATE_DOMAIN); 
    $limit=filter_input(INPUT_GET,'limit',FILTER_VALIDATE_INT);

/*     if($prodcut==false || $limit==false){
        die("장난하냐");
        // exit();
    } */

    if($prodcut==false){
        $prodcut=100;
    }
    if($limit==false){
        $limit=1;
    }

?>

<!-- ?serviceKey=abcdefg123&status=맑음 -->
<h1>get input</h1>
<?= '진열상품은 '.$prodcut. '이고 진열수량은 '.$limit.'입니다' ?>

<!-- ?product=티셔츠&limit=열개 -->

