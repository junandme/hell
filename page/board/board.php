<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Board</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="../../assets/css/bootswatch.min.css">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
<script src="../bower_components/respond/dest/respond.min.js"></script>
<![endif]-->
<script>

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-23019901-1']);
_gaq.push(['_setDomainName', "bootswatch.com"]);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>
</head>
<body>
  <!-- 네비게이션바 -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="../main/main.html" class="navbar-brand">We are student</a>
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
              <li><a href="../info/info_de.html">Default</a></li>
              <li class="divider"></li>
              <li><a href="../info/info_jun.html">Jun</a></li>
              <li><a href="#">Jong</a></li>
            </ul>
          </li>
          <li>
            <a href="board.php">Board</a>
          </li>
          <li>
            <a href="#">Recommendations</a>
          </li>
          <li>
            <a href="#">???</a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="../../index.html">Logout</a></li>
          <li><a href="#" target="_self">My page</a></li>
        </ul>

      </div>
    </div>
  </div>

  <!-- 컨텐츠 -->
  <div class="container">

    <div class="jumbotron">
      <h1>This page is board~</h1>
    </div>
    
    <table class="table table-striped table-hover ">
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
    <a href="write.html" align="right" class="btn btn-default">Write</a>

    <!-- 저작권표시바닥글 -->
    <footer>
      <div class="row">
        <div class="col-lg-12">
          <ul class="list-unstyled">
            <li class="pull-right"><a href="#top">Back to top</a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100001477704398" target="_blank">Facebook</a></li>
            <li><a href="https://github.com/junandme/hell" target="_blank">GitHub</a></li>
          </ul>
          <p>Made by JunHyuk-Park and JongSun-Jeong. Contact him at <a href="mailto:junhyuk00@gmail.com">junhyuk00@gmail.com</a> and <a href="mailto:whdrjs0@gmail.com">whdrjs0@gmail.com</a>.</p>
          <p>Code released under the <a href="https://github.com/thomaspark/bootswatch/blob/gh-pages/LICENSE">MIT License</a>.</p>
          <p>Based on <a href="http://getbootstrap.com" target="_blank">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts" target="_blank">Google</a>.</p>

        </div>
      </div>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/bootswatch.js"></script>
</body>
</html>