<!DOCTYPE>
<?php
  session_start();
  if($_SESSION["passworda"]){
    
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
<link href="default1.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
		<div id="logo">
			<div id="menu">
				<center>
						<h1 class="h11">STAFF MANAGEMENT SYSTEM</h1>
						<h4 class="fid">FACULTY INFORMATION ENTEY FORM</h4>
				</center>
			</div>
		</div>

<div id="page-wrapper">


            <a href="home.php" class="home">home</a>
						<form id="form1" name="form1" method="post" action="publication_upload.php" enctype="multipart/form-data">



                            <h2>PUBLICATIONS DETAILS</h4><h2><br>
                            <h4><p class="facult">FACULTY ID :<input type="text" name="fid"></a> </h4><br>
                            

                                   				<center><h4 class="side">CONFERENCE</h4></center>
                                          <h4 class="side">INTERNATIONAL CONFERENCE</h4>
                                          <h4 class="lg">UPLOAD PAPER :
                                          <input type="file" name="icf_paper"/></h4> <br>
                                   				<h4 class="lg">UPLOAD CERTIFICATE :
                                   				<input type="file" name="icf_certificate"/></h4> <br>

                                          <h4 class="side">NATIONAL CONFERENCE</h4>
                                           <h4 class="lg">UPLOAD PAPER :
                                          <input type="file" name="ncf_paper"/></h4> <br>
                                          <h4 class="lg">UPLOAD CERTIFICATE :
                                          <input type="file" name="ncf_certificate"/></h4> <br>

                                          <center><h4 class="side">JOURNALS</h4></center>
                                           <h4 class="side">INTERNATIONAL JOURNALS</h4>
                                          <h4 class="lg">UPLOAD PAPER :
                                          <input type="file" name="igr_paper"/></h4> <br>
                                          <h4 class="lg">UPLOAD CERTIFICATE :
                                          <input type="file" name="igr_certificate"/></h4> <br>

                                          <h4 class="side">NATIONAL JOURNALS</h4>
                                           <h4 class="lg">UPLOAD PAPER :
                                          <input type="file" name="ngr_paper"/></h4> <br>
                                          <h4 class="lg">UPLOAD CERTIFICATE :
                                          <input type="file" name="ngr_certificate"/></h4> <br>
                                   			
                                           <center><input class="container" type="submit" name="submit" value="upload"/></center>
                          </form>
                        

</div>

<div id="copyright" class="container">
	<p>Developed by:<a>Computer Science Students</a> | 2013-2014 <a>BATCH</a>.</p>	
</div>
</body>
</html>
