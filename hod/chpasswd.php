<!DOCTYPE>
<?php
  session_start();
  if($_SESSION["passwordh"]){
    
  }
   else {
     header("location:../index.html");
   }
   ?><!DOCTYPE>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default1.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>


<div id="back">
            <center><h1><br>CHANGE YOUR PASSWORD</h1></center>
<div id="page-wrapper">
	  <a href="home.php" class="home">home</a>
<form method="post" name="myForm" action="update.php">

<h4 id="he">Enter new password:
  <input type = "password"
             name = "pwd1"><br><br>

<h4>Confirm new password:
  <input type = "password"
             name = "pwd2"><br><br>

<input type="submit" name="Submit" value="change"></center>
  
</form>
</div>



<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>