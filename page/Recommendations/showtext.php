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
        $sql = "SELECT * FROM send ";
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_num_rows($result);
        $total_record = $rows;
        
        $record_per_page = 20;

        if( isset($page) ) {
          $now_page = $page;
        } else {
          $now_page = 1;
        }
        ?>

        <?php if($total_record==0) :?>글이 존재하지 않습니다.<?php else:?><?php endif?>

        <?php

        extract($_GET);

        $start_record = $record_per_page*($now_page-1);
        $record_to_get = $record_per_page;
        if( $start_record+$record_to_get > $total_record) {
          $record_to_get = $total_record - $start_record;
        }
        $sql = "SELECT * from send WHERE num={$num} and 1 ORDER BY num DESC LIMIT $start_record, $record_to_get";
        $read = "update send set readcheck=1 where num={$num}";
        if ($conn->query($read) === TRUE) {
        }else{
          echo" error ";
        }        
        $result = mysqli_query($conn,$sql);
        ?>
        
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

