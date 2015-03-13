<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Text</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../import/head.php"; ?>
  
</head>
<body>
  <!-- 컨텐츠 -->
  <div class="container">
    <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th width="7%">글번호</th>
          <th>Title</th>
          <th width="11%">작성자</th>
          <th class="timeDate" width="20%">등록시간</th>
        </tr>
      </thead>
            <tbody>
        <?php
        $sql = "SELECT * FROM send";
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

        <?php if($data['readcheck']!=1) :?>
        <tr class="info" >
          <td align="center"> <span class="label label-danger">New</span></td>
          <td style='word-break:break-all; cursor:hand;' onclick="document.location = '/page/Recommendations/showtext.php?num=<?php echo $data['num']; ?>';"><a href="#"><?php echo $data['title'] ?></a></td>
          <td> <?php echo $data['sender'] ?></td>
          <td> <?php echo $data['senddate'] ?></td>
        </tr>
        <?php else:?>
        <tr class="info" >
          <td align="center"> <?php echo $data['num'] ?></td>
          <td style='word-break:break-all; cursor:hand;' onclick="document.location = '/page/Recommendations/showtext.php?num=<?php echo $data['num']; ?>';"><a href="#"><?php echo $data['title'] ?></a></td>
          <td> <?php echo $data['sender'] ?></td>
          <td> <?php echo $data['senddate'] ?></td>
        </tr>
        <?php endif?>
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
    </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/bootswatch.js"></script>
  </body>
</html>