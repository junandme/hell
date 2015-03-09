<script type="text/javascript">
function go()
{
 
  
    window.open('/page/mail/show.php','IDwin','scrollbars=yes,width=1000,height=600');        
  
}
</script>

<?php

echo'
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a href="/page/main/main.php" class="navbar-brand">We are student</a>
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse" id="navbar-main">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Info <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="themes">
            <li><a href="/page/info/info_de.php">Default</a></li>
            <li class="divider"></li>
            <li><a href="/page/info/info_jun.php">Jun</a></li>
            <li><a href="/page/info/info_jong.php">Jong</a></li>
          </ul>
        </li>
        <li>
          <a href="/page/board/board.php">Board</a>
        </li>
        <li>
          <a href="/page/mail/mail.php">Recommendations</a>
        </li>
        <li>
          <a href="#">???</a>
        </li>';

        if($_SESSION['login_id']==='admin' || $_SESSION['login_id']==='a'){
          echo'
          <li>
           <a href="#" onclick="go();">M</a>
          </li>

          ';
        }

      echo'  
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="/page/login/log_out.php">Logout</a></li>
        <li><a href="/page/login/update.php" target="_self">My page</a></li>
      </ul>

    </div>
  </div>
</div>';

?>