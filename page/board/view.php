<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Page</title>
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
      <h1>View</h1>
    </div>
    <form class="form-horizontal">
      <fieldset>
        <legend>게시글 보기</legend>
        <div class="form-group">
          <div class="col-lg-8 col-lg-offset-2">
            <?php if ($data['notice']==1) :?>
            <span class="label label-danger">Notice</span>
          <?php else :?>

        <?php endif ?>
        <div class="pull-right">
          <h4>Writer : <?php echo $data['name'] ?></h4>
        </div>
              <!-- 
              <input type="view" class="form-control"  placeholder="<?php echo $data['title'] ?>" name='title' maxlength="30">
              <textarea class="form-control" rows="15" placeholder="<?php echo $data['content'] ?>" id="textArea" name='content'></textarea> -->
            </div>

            <div class="col-lg-8 col-lg-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <strong><?php echo $data['title'] ?></strong>
                </div>
                <div class="panel-body">
                 <?php echo $data['content'] ?>
               </div>
             </div>
           </div>
           <div class="col-lg-8 col-lg-offset-2">
            <div class="pull-right">
              <a href="board.php" class="btn btn-default">List</a>
              <a href="/page/board/delete.php?num=<?php echo $data['num']; ?>" class="btn btn-warning" id='edit'>Delete</a>
              <a href="/page/board/edit.php?num=<?php echo $data['num']; ?>" class="btn btn-default" id='edit'>Edit</a>
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
