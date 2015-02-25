<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Board</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <? include "../import/head.php"; ?>
</head>
<body>
  <!-- 네비게이션바 -->
  <? include "../import/nav.php"; ?>

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
          <th width="10%">글번호</th>
          <th width="60%">글제목</th>
          <th width="15%">글쓴이</th>
          <th width="15%">날짜</th>
        </tr>
      </thead>
      <tbody>
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
    <? include "../import/footer.php"; ?>
  </div>

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/bootswatch.js"></script>
</body>
</html>