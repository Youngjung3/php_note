<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
</head>
<body>
    <h1>글쓰기</h1>
    <form action="insert.php" method="post">
        <p>
            <label for="name">작성자:</label>
            <input type="text" id="name" name="name">
        </p>
        <p>
            <label for="message">메시지:</label>
            <textarea id="message" name="message" col="30" rows="10"></textarea>
        </p>
        <input type="submit" value="전송">
    </form>
</body>
</html>