<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Write Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../import/head.php"; ?>
</head>
<body>
  <!-- 네비게이션바 -->
  <?php include "../import/nav.php"; ?>
  
  <?php
  $now_id=$_SESSION['login_id'];
  ?>
  <div class="container">

    <!-- 메인페이지대문짝 -->
    <div class="jumbotron">
      <h1>Please create a post</h1>
      <!-- w<p><a class="btn btn- primary btn-lg" href="#">Learn more</a></p> -->
    </div>
    <fieldset>
      <form name="write_form" action="./write_check.php" method="post" >
        <div class="form-group">
          <div class="col-lg-8 col-lg-offset-2">
            <label>
              <input type="checkbox" name='notice'> Notice </input>
            </label>
            <div class="pull-right">
              <h4>Writer : <?php echo $now_id ?></h4>
              <input type="hidden" name='nowId' value='<?php echo $now_id ?>'>
            </div>
            <input type="text" class="form-control"  placeholder="Title" name='title' maxlength="30">
            <textarea class="form-control" rows="15" placeholder="Text" id="textArea" name='content'></textarea>
            <div class="pull-right">
              <a href="board.php" class="btn btn-default">Cancel</a>
              <input type="submit" class="btn btn-default" id='write' value='Write'/>
            </div>
          </div>
        </div>
      </form>
    </fieldset>

    <!-- 저작권표시바닥글 -->
    <?php include "../import/footer.php"; ?>
  </div>

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/bootswatch.js"></script>
</body>
</html>
