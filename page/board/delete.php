<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>delete</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../import/head.php"; ?>
</head>
<body>
  <?php
  extract($_GET);
  $num = $_GET['num'];

  $sql = "DELETE FROM board WHERE num = $num";
  $result = mysqli_query($conn, $sql);

  if($result) {
    echo "<script>
    alert('삭제완료');
    location.href='board.php';
    </script>";
  } else {
    echo "<script>
    alert('삭제실패');
    history.back();
    </script>";
  }

  ?>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/bootswatch.js"></script>
</body>
</html>