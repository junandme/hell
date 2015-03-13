<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>edit check</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../import/head.php"; ?>
</head>
<body>
  <?php
  extract($_POST);
  $num = $_POST['num'];

  if($_POST['notice'] == 'on') {
    $sql = "UPDATE board SET title = '{$_POST['title']}', content = '{$_POST['content']}', notice = 1 WHERE num = {$_POST[num]}";
    $result = mysqli_query($conn,$sql);
  } else {
    $sql = "UPDATE board SET title = '{$_POST['title']}', content = '{$_POST['content']}', notice = 0 WHERE num = {$_POST[num]}";
    $result = mysqli_query($conn,$sql);
  }

  if($result) {
    echo "<script>
    alert('수정완료');
    location.href='view.php?num=$num';
    </script>";
  } else {
    echo "<script>
    alert('수정실패');
    history.back();
    </script>";
  }

  ?>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/bootswatch.js"></script>
</body>
</html>