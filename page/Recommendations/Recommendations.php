<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Recommedations</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../import/head.php"; ?>
</head>
<body>

  <!-- 네비게이션바 -->
  <?php include "../import/nav.php"; ?>


  <div class="container">
    <fieldset>
      <div class="jumbotron">
        <h2>Recommedations</h2>
      </div>
      <form name="write" class="member" method="post" action="sendmail.php">
        <div class="form-group">
          <div class="col-lg-8 col-lg-offset-2">
            <label>Sender</label>
            <input class="form-control" type="text" name="id" id="id" value='<?php echo"{$_SESSION['login_id']}";?>' disabled="true"/>
          </div>          
        </div>

        <div class="form-group">
          <div class="col-lg-8 col-lg-offset-2">
            <label>Title</label>
            <input class="form-control" placeholder="title" name="title" id="title" minlength='1'/>
          </div>
        </div>



        <div class="form-group">
          <div class="col-lg-8 col-lg-offset-2">
            <label>Text</label>
            <textarea class="form-control" rows="15" placeholder="Text" name="article" id="article"></textarea>
          </div>          
        </div>

        <div class="form-group">
          <div class="col-lg-8 col-lg-offset-2">

           <input class=" btn btn-primary" type="submit" value="sendmail" />
         </div>          
       </div>
       

       <!-- 저작권표시바닥글 -->
       <?php include "../import/footer.php"; ?>


     </fieldset>
   </form>
 </div>
 <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
 <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <script src="../../assets/js/bootswatch.js"></script>
</body>
</html>
