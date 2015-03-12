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
      <h1>This page is board~</h1>
    </div>

    <table class="table table-striped table-hover ">
      <div class="col-lg-4 pull-right">
        <div class="col-lg-9">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <div class="col-lg-3">
          <a href="write.php" class="btn btn-default">검색</a>
        </div>
      </div>
      <thead>
        <tr>
          <th width="7%">글번호</th>
          <th>글제목</th>
          <th width="11%">작성자</th>
          <th class="timeDate" width="15%">등록시간</th>
        </tr>
      </thead>
      <!-- <tbody>
        <tr class="info">
          <td><span class="label label-danger">Notice</span></td>
          <td>공지사항</td>
          <td>박준혁</td>
          <td>2015-02-19 21:27</td>
        </tr>
        <tr class="info">
          <td><span class="label label-danger">Notice</span></td>
          <td>공지사항</td>
          <td>박준혁</td>
          <td>2015-02-19 21:27</td>
        </tr>
        <tr class="info">
          <td><span class="label label-danger">Notice</span></td>
          <td>공지사항</td>
          <td>박준혁</td>
          <td>2015-02-19 21:27</td>
        </tr>
        <tr>
          <td>1</td>
          <td>DB에서 가져올 글들</td>
          <td>정종선</td>
          <td>2015-02-22 10:20</td>
        </tr>
        <tr>
          <td>2</td>
          <td>DB에서 가져올 글들</td>
          <td>정종선</td>
          <td>2015-02-22 10:20</td>
        </tr>
        <tr>
          <td>3</td>
          <td>DB에서 가져올 글들</td>
          <td>정종선</td>
          <td>2015-02-22 10:20</td>
        </tr>
        <tr>
          <td>4</td>
          <td>DB에서 가져올 글들</td>
          <td>정종선</td>
          <td>2015-02-22 10:20</td>
        </tr>
        <tr>
          <td>5</td>
          <td>DB에서 가져올 글들</td>
          <td>정종선</td>
          <td>2015-02-22 10:20</td>
        </tr>
        <tr>
          <td>6</td>
          <td>DB에서 가져올 글들</td>
          <td>정종선</td>
          <td>2015-02-22 10:20</td>
        </tr>
      </tbody> -->
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
        $sql = "SELECT * from board,user WHERE writer=id and 1 ORDER BY num DESC LIMIT $start_record, $record_to_get";
        $result = mysqli_query($conn,$sql);
        ?>
        
        <?php while($data = $result->fetch_array()):?>

        <?php
        $nDate = date("Y-m-d");
        $aDate = date($data['date']);

        $na = date_parse($nDate);
        $aa = date_parse($aDate);
        
        if($na[year]-$aa[year]==0 && $na[month]-$aa[month]==0 && $na[day]-$aa[day]==0) {
          // $getDate = 'date_format($nDate, "Y-m-d")';
          $getDate = substr($aDate, 11, 18);
        } else {
          // $getDate = 'date_format($nDate, "H:i:s")';
          $getDate = substr($aDate, 0, 10);
        }
        ?>

        <?php if($data[notice]) :?>
        <tr class="info">
          <td align="center"> <span class="label label-danger">Notice</span></td>
          <td> <?php echo $data['title'] ?></td>
          <td> <?php echo $data['name'] ?></td>
          <!-- <td> <?php echo $data['date'] ?></td> -->
          <td> <?php echo $getDate ?></td>
        </tr>
        <?php else:?>        
        <?php endif?>
        <?php endwhile ?>

        <?php
        $sql = "SELECT * from board,user WHERE writer=id and 1 ORDER BY num DESC LIMIT $start_record, $record_to_get";
        $result = mysqli_query($conn,$sql);
        ?>

        <?php while($data = $result->fetch_array()):?>
        <?php
        $nDate = date("Y-m-d");
        $aDate = date($data['date']);

        $na = date_parse($nDate);
        $aa = date_parse($aDate);
        
        if($na[year]-$aa[year]==0 && $na[month]-$aa[month]==0 && $na[day]-$aa[day]==0) {
          // $getDate = 'date_format($nDate, "Y-m-d")';
          $getDate = substr($aDate, 11, 18);
        } else {
          // $getDate = 'date_format($nDate, "H:i:s")';
          $getDate = substr($aDate, 0, 10);
        }
        ?>

        <?php if(!$data[notice]) :?>
        <tr>
          <td align="center"> <?php echo $data['num'] ?></td>
          <td> <?php echo $data['title'] ?></td>
          <td> <?php echo $data['name'] ?></td>
          <!-- <td> <?php echo $data['date'] ?></td> -->
          <td> <?php echo $getDate ?></td>
        </tr>
        <?php else:?>        
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