<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../import/head.php"; ?>
<script>
function chk_input() {
  if(user_form.new_id.value==""||user_form.new_pw.value==""||user_form.new_pw_check.value==""||user_form.new_name.value==""||user_form.new_pone.value==""||user_form.new_email.value==""){
    alert("Not Full Data");
    if(user_form.new_id.value=="")
      user_form.new_id.focus();    
    else if(user_form.new_pw.value=="")
      user_form.new_pw.focus();
    else if(user_form.new_pw_check.value=="")
      user_form.new_pw_check.focus();
    else if(user_form.new_pone.value=="")
      user_form.new_pone.focus();
    else if(user_form.new_email.value=="")
      user_form.new_email.focus();
    else if(user_form.new_name.value=="")
      user_form.new_name.focus();
    return false;
  }
  else
  {
    return true;
  }
}

function chk_id()
{
  if(user_form.new_id.value==''){
    alert('Input ID');
    user_form.new_id.focus();
  } else{
    window.open('id_check.php?new_id='+user_form.new_id.value,'IDwin','width=400,height=200');        
  }
}

function chk_pw(){
  if(user_form.new_pw.value != user_form.new_pw_check.value){
    alert('not match paasword');
    user_form.new_pw.value="";
    user_form.new_pw_check.value="";
    user_form.new_pw.focus();
    return false;
  }
}

</script>
</head>
<body>
  <div class="container">
    <fieldset>
      <div class="col-lg-6 col-lg-offset-3">
        <legend>Sign Up</legend>
      </div>
      <form name="user_form" action="./join_check.php"   method="post" onsubmit="return chk_input()">
        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-3">
            <input type="text" class="form-control" placeholder="ID" id="p_id" name='new_id'   autofocus maxlength="15" >
          </div>
          <div class="col-lg-1">
            
             <input type="button" class="btn btn-primary" value='ID Check' onclick="chk_id();"/>
        </div>
        </div>
        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-3">
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
            <input type="text" class="form-control"  placeholder="Phone Number" name='new_pone' maxlength="15">
          </div>
        </div> 			
        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-3">
            <div class="radio">
              <label>
                <input type="radio" name="Radios"  value="male" checked="" >
                male
              </label>
              <label>
                <input type="radio" name="Radios"  value="female" >
                female
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-3">
            <input type="text" class="form-control"  placeholder="Email" name='new_email'>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-3">
            <input type="text" class="form-control"  placeholder="Name" name='new_name' maxlength="15">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-5">
            <a href="/index.php" class="btn btn-default">Cancel</a>
            <!-- <button class="btn btn-default">Cancel</button> -->
            <input type="submit" class="btn btn-primary" id='sub' value='Submit' disabled='true'/>

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
