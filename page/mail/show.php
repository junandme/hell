<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Board</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../import/head.php"; ?>
</head>
<body>
  <!-- 네비게이션바 -->
  <?php include "../import/nav.php"; ?>

  <!-- 컨텐츠 -->
  <div class="container">

    <div class="jumbotron">
      <h1>Help</h1>
    </div>

    <table class="table table-striped table-hover ">
      
      <thead>
        <tr>
          <th width="7%">글번호</th>
          <th>Text</th>
          <th width="11%">작성자</th>
          <th class="timeDate" width="15%">등록시간</th>
        </tr>
      </thead>
            <tbody>
        <?php
        $sql = "SELECT * FROM board";
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
        $start_record = $record_per_page*($now_page-1);
        $record_to_get = $record_per_page;
        if( $start_record+$record_to_get > $total_record) {
          $record_to_get = $total_record - $start_record;
        }
        $sql = "SELECT * from send WHERE rec='admin' and 1 ORDER BY num DESC LIMIT $start_record, $record_to_get";
        $result = mysqli_query($conn,$sql);
        ?>
        
        <?php while($data = $result->fetch_array()):?>

        
        
        <tr>
          <td align="center"> <?php echo $data['num'] ?></td>
          <td> <?php echo $data['content'] ?></td>
          <td> <?php echo $data['sender'] ?></td>
          <td> <?php echo $data['senddate'] ?></td>
        </tr>
        
        <?php endwhile ?>
        

      </tbody>
    </table>
  <!-- 페이지번호 -->
    <div align="center">
      <ul class="pagination">
        <li class="disabled"><a href="#">«</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">»</a></li>
      </ul>
      <div class="pull-right">
        <a href="write.php" class="btn btn-default">글쓰기</a>
      </div>
    </div>
    <!-- 저작권표시바닥글 -->
    <?php include "../import/footer.php"; ?>
  </div>

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/bootswatch.js"></script>
  </body>
</html>