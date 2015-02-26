<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "../import/head.php"; ?>

</head>
<body>



<body>
  <!-- 네비게이션바 -->
  <?php include "../import/nav.php"; ?>


    <!-- 메인페이지대문짝 -->
    <div class="jumbotron">
      <h1>I can't design</h1>
      <!-- w<p><a class="btn btn- primary btn-lg" href="#">Learn more</a></p> -->
    </div>

    <fieldset>
      
      <form name="write_form" action="./write_check.php"   method="post" >

        <div class="form-group">
          <div class="col-lg-9 col-lg-offset-1">
            <input type="text" class="form-control"  placeholder="Title" name='title' maxlength="30">
          </div>
          <div class="col-lg-9 col-lg-offset-1">

           <textarea class="form-control" rows="15" placeholder="Text" id="textArea"></textarea>
            
          </div>
          <div class="col-lg-9 col-lg-offset-1">
            <input type="submit" class="btn btn-primary" id='write' value='Write' />
          </div>
        </div>

        
        
      </fieldset>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/bootswatch.js"></script>
</body>
</html>
