<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
<?php
extract($_POST);


$article = wordwrap($article, 70);
mail ( 'whdrjs0@gmail.com' , $title , $article)
?>

<script>alert("이메일을 전송하였습니다."); location.href="/page/main/main.php";</script>

</body>
</html>