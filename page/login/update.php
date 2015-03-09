<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Main</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../import/head.php"; ?>

  <script>




  function chk_pw(){
    if(pw_form.new_pw.value != pw_form.new_pw_check.value){
      alert('not match paasword');
      pw_form.new_pw.value="";
      pw_form.new_pw_check.value="";
      pw_form.new_pw.focus();
      return false;
    }
    else{
      document.getElementById('sub').disabled=false;
    }
  }

  </script>


</head>
<body>
	
  

  <!-- 네비게이션바 -->
  <?php include "../import/nav.php"; ?>

  <?php
  $now_id=$_SESSION['login_id'];

  $sql = "SELECT * from user where id='$now_id' ";

  $result = mysqli_query($conn,$sql);

  $row = mysqli_fetch_assoc($result);

  $count=mysqli_num_rows($result);

  $now_email=$row["email"];
  $now_name=$row["name"];
  $now_phone=$row["pone"];

  ?>

  <div class="container">
    <fieldset>
      <div class="jumbotron">
        <h2>Change Information</h2>
      </div>
      <form class="form-horizontal" name="pw_form" action="./pw_check.php"   method="post" onsubmit="return chk_input()">
        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-3">
            <input type="text" class="form-control" value='ID : <?php echo $now_id;?>' disabled='true'>
          </div>          
        </div>
        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-3">
            <label>Password chenge</label>
            <input type="password" class="form-control"  placeholder="Password" name='new_pw' maxlength="15">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-3">
            <input type="password" class="form-control"  placeholder="Password Check" name='new_pw_check' onblur='chk_pw();' maxlength="15">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-3">
            <!-- <button class="btn btn-default">Cancel</button> -->
            <input type="submit" class="btn btn-primary" id='sub' value='Pw Chenge' disabled='true'>
          </div>
        </div>
      </form>
      <form class="form-horizontal" name="other_form" action="./other_check.php"   method="post" onsubmit="return chk_input()">
        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-3">
            <label>Phone Number</label>
            <input type="text" class="form-control"  placeholder="Phone Number" value='<?php echo $now_phone ; ?>' name='new_pone' maxlength="15">
          </div>
        </div>      
        
        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-3">
            <label>Email</label>
            <input type="text" class="form-control"  placeholder="Email" value='<?php echo $now_email ; ?>' name='new_email'>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-3">
            <label>Name</label>
            <input type="text" class="form-control"  placeholder="Name" value='<?php echo $now_name ; ?>' name='new_name' maxlength="15">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-3">
            <!-- <button class="btn btn-default">Cancel</button> -->
            <input type="submit" class="btn btn-primary" id='sub' value='Other Change' >

          </div>
        </div>
        <!-- 저작권표시바닥글 -->
        <?php include "../import/footer.php"; ?>
        
      </fieldset>
    </form>
    
  </div>



  
</div>


<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/bootswatch.js"></script>
</body>
</html>
