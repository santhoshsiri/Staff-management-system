<!DOCTYPE>
<html lang="en">
<head>
  <script type = "text/javascript" >
       function preventBack(){window.history.forward(1);}
        setTimeout("preventBack()", 10);
        window.onload=function(){null};
    </script>
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
			<H1>STAFF MANAGEMENT SYSTEM</H1>
			</center>
			</div>
		</div>
<center>
<div id="page-wrapper">
                        <form id="form" name="form" method="post" action="access.php">

                                <h1 style="text-align:center"><p class="hod">ADMIN LOGIN</p> </h1>
                                <h2 style="text-align:center"><P class="dep">SELECT DEPT:
                                <select name="department">  
                                      <option value="CSE">CSE</option>
                                      <option value="ISE">ISE</option>
                                      <option value="ECE">ECE</option>
                                      <option value="MEC">MEC</option>
                                      <option value="CIV">CIV</option>
                                      <option value="EEE">EEE</option>
                                </select> <br>

                                <p class="pswd" >PASSWORD:<input type="password" name="passworda"><br><br> 
                                <input id="butt" class="container" type="submit" name="submit" value="LOGIN"/>
                        </form>
</div>
</center>
<div id="copyright" class="container">
	<p>Developed by:<a>Computer Science Students</a> | 2013-2014 <a>BATCH</a>.</p>	
</div>
</body>
</html>
