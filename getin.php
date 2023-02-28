<?php
    $serviceKey=$_GET["serviceKey"];
    $weather=$_GET["status"];
?>

<!-- ?serviceKey=abcdefg123&status=맑음 -->
<h1>get input</h1>
<?= $serviceKey. '는 이고 <br> 날씨는 '.$weather.'입니다' ?>
