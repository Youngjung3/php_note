<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>우와 이건 index.php</h1>
    <!-- 여기는 html -->
    <?php
        //한줄주석
        /* 여러줄주석 
            파일.php
            php는 html과 함께 사용할 수 있다
        */
        //php 변수선언 $식별자='값';
        $name='망고';
        #한줄주석
        //php 출력 echo
        // '문자' .$변수. ,
        echo '안녕',$name.'<br>';
        echo '안녕,'.$name;
        echo '<h2>',$name,'대장</h2>';
        echo "<h2>.$name,대장2</h2>";
    ?>
    <table>
        <tr>
            <td>table</td>
            <td>table</td>
            <td>table</td>
        </tr>
    </table>
    <ul>
        <li>list</li>
        <li>list</li>
    </ul>
    <?php
        echo '<hr>php두번째 ' .$name .'<br>';
        $name="형섭";

        #echo $name'종건';
        echo $name. '종건';
        #echo '천주' .$name.'종건';
    ?>
    <!-- standard tag -->
    <?php
        echo "<hr> 🎃$name";
    ?>
    <!-- short open tag -->
    <?
        $name="내현";
        echo "<hr> 🥕 $name";
    ?>
    <!-- echo shortcut -->
    <p>
        <?= $name. "f" ?>
    </p>
</body>
</html>