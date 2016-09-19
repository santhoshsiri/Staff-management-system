<!DOCTYPE>
<?php
  session_start();
  if($_SESSION["passwordp"]){
    
  }
   else {
     header("location:../index.html");
   }
   ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
			
			</center>
			</div>
		</div>
<center>
<div id="page-wrapper">
                      <a href="home.php" class="home">home</a>
		<center><h4 class="fac">FACULTY LIST</h4></center>
			
			
			
			<center><form id="form" name="form" method="post" action="list.php">

                                <h4 style="text-align:center"><P class="dep">SELECT DEPT:
                                <select name="department">  
                                      <option value="CSE">CSE</option>
                                      <option value="ISE">ISE</option>
                                      <option value="ECE">ECE</option>
                                      <option value="MEC">MEC</option>
                                      <option value="CIV">CIV</option>
                                      <option value="EEE">EEE</option>
                                </select> <br><br>

                      
                                <input id="butt" class="container" type="submit" name="submit" value="VIEW"/>
             </form>
             </center>
</div>
</center>
<div id="copyright" class="container">
	<p>Developed by:<a>Computer Science Students</a> | 2013-2014 <a>BATCH</a>.</p>	
</div>
</body>
</html>
