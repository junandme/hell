<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../import/head.php"; ?>
</head>
<body>
  <!-- 네비게이션바 -->
  <?php include "../import/nav.php"; ?>
  
  <?php
  extract($_GET);
  $sql = "SELECT * from board,user WHERE num={$num} and writer=id";  
  $result = mysqli_query($conn, $sql);
  $data = $result->fetch_array();
  ?>

  <div class="container">
    <!-- 메인페이지대문짝 -->
    <div class="jumbotron">
      <h1>Edit</h1>
    </div>
    <form name="edit_form" action="edit_check.php" method="post" >
      <fieldset>
        <div class="form-group">
          <div class="col-lg-8 col-lg-offset-2">
            <input type="hidden" name='num' value='<?php echo $data['num'] ?>'>
            <label>
              <?php if($data['notice']==1) :?>
              <input type="checkbox" name='notice' checked> Notice </input>
            <?php else :?>
            <input type="checkbox" name='notice'> Notice </input>
            <?php endif ?>
            </label>
            <div class="pull-right">
              <h4>Writer : <?php echo $data['id'] ?></h4>
            </div>
            <input type="text" class="form-control" placeholder="Title" value="<?php echo $data['title'] ?>" name='title' maxlength="30">
            <textarea class="form-control" rows="15" placeholder="Text" id="textArea" name='content'><?php echo $data['content'] ?></textarea>
            <div class="pull-right">
              <a href="view.php?num=<?php echo $data['num'] ?>" class="btn btn-default">Cancel</a>
              <input type="submit" class="btn btn-default" id='write' value='Edit'/>
            </div>
          </div>
        </div>
      </fieldset>
    </form>

    <!-- 저작권표시바닥글 -->
    <?php include "../import/footer.php"; ?>
    </div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/bootswatch.js"></script>
</body>
</html>
