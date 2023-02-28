<?php
    $products=$_GET["product"];
    $Limit=$_GET["limit"];
?>
<h1>get input</h1>
<?= $products.'<br>진열상품리스트'.$products.'.👍Limit '.$Limit?>
<p>진열상품목록: <?= $products?> 👍 구매한도 : <?= $Limit?></p>

<!-- ?product=10&limit=2 -->