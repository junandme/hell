<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Board</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../import/head.php"; ?>
</head>
<body>


  <!-- 컨텐츠 -->
  <div class="container">
    <table class="table table-striped table-hover ">
      <thead>
        <tr>

          <th>Text</th>
          
        </tr>
      </thead>
      <tbody>
        

        <?php

        extract($_GET);

        
        $sql = "SELECT * from send WHERE num={$num} ";
        $read = "update send set readcheck=1 where num={$num}";
        if ($conn->query($read) === TRUE) {
        }else{
          echo" error ";
        }        
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_num_rows($result);
        ?>
        <?php if($rows==0) :?>글이 존재하지 않습니다.<?php else:?><?php endif?>
        
        <?php while($data = $result->fetch_array()):?>

        <tr>
          <td style='word-break:break-all'><?php echo $data['content'] ?></td>
        </tr>
      <?php endwhile ?>
    </tbody>
  </table>

</div>

<div class="pull-right col-lg-6 col-lg-offset-3">
  <a href="/page/Recommendations/show.php" class="btn btn-default">Back</a>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/bootswatch.js"></script>
</body>
</html>

