<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Main</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../import/head.php"; ?>
</head>
<body>
  <!-- 네비게이션바 -->
  <?php include "../import/nav.php"; ?>

  <!-- 컨텐츠 -->
  <div class="container">

    <!-- 메인페이지대문짝 -->
    <div class="jumbotron">
      <h1>Welcome!!</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, explicabo. In architecto, fuga nulla qui quos saepe sit minus quis a, adipisci quia. Voluptates sint, facilis autem deleniti velit alias?</p>
      <p><a class="btn btn-primary btn-lg" href="#">Learn more</a></p>
    </div>

    <!-- 공지사항테이블 -->
    <div class="col-lg-6">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th></th>
            <th>Notice</th>
            <th>Board</th>
            <th>Gallery</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="info">
            <td>3</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="success">
            <td>4</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="danger">
            <td>5</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="warning">
            <td>6</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="active">
            <td>7</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
        </tbody>
      </table> 
    </div>
    <div class="col-lg-3 col-lg-offset-3">
      <div>
        <img src="/img/twitter.png" alt="twitter">
      </div>
      <div>
        <img src="/img/facebook.png" alt="facebook">
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
