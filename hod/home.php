<!DOCTYPE>
<?php
  session_start();
  if($_SESSION["passwordh"]){
    
  }
   else {
     header("location:../index.html");
   }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type = "text/javascript" >
       function preventBack(){window.history.forward(1);}
        setTimeout("preventBack()", 10);
        window.onload=function(){null};
    </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>


		<div id="logo">
			<div id="menu">
				<center>
			<H1>STAFF MANAGEMENT SYSTEM</H1><br><br>
			<H1>ADMIN HOME</H1>
			</center>
			</div>
		</div>
<center>
<div id="page-wrapper">
                      <h4 class="logout"><a href="logout.php">logout</a></h4>
	<div id="three-column" class="container">
		<center><div id="tbox1">
			
			<a href="chpasswd.php" class="button">CHANGE PASSWORD</a> </div><br>
		<div id="tbox2">
			
			<a href="list.php" class="button">FACULTY LIST</a></div></center>

</div>
</center>
<div id="copyright" class="container">
	<p>Developed by:<a>Computer Science Students</a> | 2013-2014 <a>BATCH</a>.</p>	
</div>
</body>
</html>
