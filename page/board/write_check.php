<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Write check</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../import/head.php"; ?>
</head>
<body>
  <?php
  extract($_POST);
  $indate = date("Y-m-d H:i:s");

  if($_POST['notice'] == 'on') {
    $sql = "INSERT INTO board (title, content, date, writer, notice) VALUES ('{$_POST['title']}', '{$_POST['content']}', '{$indate}', '{$_POST['nowId']}', 1)";
    $result = mysqli_query($conn,$sql);
  } else {
    $sql = "INSERT INTO board (title, content, date, writer) VALUES ('{$_POST['title']}', '{$_POST['content']}', '{$indate}', '{$_POST['nowId']}')";
    $result = mysqli_query($conn,$sql);
  }

  if($result) {
    echo "<script>
    alert('등록완료');
    location.href='board.php';
    </script>";
  } else {
    echo "<script>
    alert('등록실패');
    history.back();
    </script>";
  }

  ?>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/bootswatch.js"></script>
</body>
</html>