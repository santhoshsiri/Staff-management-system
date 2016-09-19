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
						<form id="form1" name="form1" method="post" action="fileupload.php" enctype="multipart/form-data">



                            <h2>PERSONAL INFORMATION</h4><h2><br>
                            <h4><p class="facult">FACULTY ID :<input type="text" name="fid"></a> </h4><br>
                            <h4><p class="facult">FACULTY NAME :<input type="text" name="fname"></a> </h4><br>
                            <h4><p class="facult">DATE OF BIRTH:<input type="date" name="dob"></a> </h4><br>
                            <h4><p class="facult">DESIGNATION:<input type="text" name="designation"></a> </h4><br>
                            <h4><p class="facult">QUALIFICATION:<input type="text" name="qualification"></a> </h4><br>
                            <h4><p class="facult">SALARY:<input type="price" name="salary"></a> </h4><br><br>
            								<h2 class="doc">DOCUMENTS</h2><br>
            								<h4 class="side">PERSONAL</h4>
            								 	<h4 class="lg">UPLOAD PHOTO :  
                                   			 	<input type="file" name="photo"/></h4><br>
                                    			<h4 class="lg">UPLOAD PAN CARD :
                                   				<input type="file" name="pancard"/></h4> <br>
                                   				<h4 class="lg">UPLOAD ADHAR CARD :
                                   				<input type="file" name="adharcard"/></h4> <br>
                            

                                 
                        									<h4 class="side">COLLEGE</h4>
                        								 	<h4 class="lg">UPLOAD RESUME :  
                                   			 	<input type="file" name="resume"/></h4><br>
                                    			<h4 class="lg">UPLOAD COLLEGE ID :
                                   				<input type="file" name="collegeid"/></h4> <br>
                                   				<h4 class="lg">UPLOAD APPRISAL :
                                   				<input type="file" name="apprisal"/></h4> <br>
                                   				<h4 class="lg">UPLOAD APPOINTMENT LETTER :
                                   				<input type="file" name="appointment"/></h4> <br>

                               

            									            <h4 class="side">EDUCATIONAL</h4>
            										          <h4 class="side">MARKS CARDS</h4>
            								          	   <h4 class="lg">UPLOAD SSLC MARKSCARD :  
                                   			 	<input type="file" name="sslc"/></h4><br>
                                    			<h4 class="lg">UPLOAD PU MARKSCARD :
                                   				<input type="file" name="puc"/></h4> <br>
                                   				<h4 class="lg">UPLOAD DEGREE CERTIFICATE :
                                   				<input type="file" name="degree"/></h4> <br>
                                   				<h4 class="lg">UPLOAD MASTERDEGREE CERTIFICATE :
                                   				<input type="file" name="master"/></h4> <br>
                                   				<h4 class="lg">UPLOAD PHD CERTIFICATE :
                                   				<input type="file" name="phd"/></h4> <br>

                                   				<h4 class="side">WORKSHOPS/FFD/CONTESTS</h4>
                                   				<h4 class="lg">UPLOAD CERTIFICATE :
                                   				<input type="file" name="workshop"/></h4> <br>
                                   			
                                        <center>   <input class="container" type="submit" name="submit" value="upload"/></center>
                          </form>
                        

</div>

<div id="copyright" class="container">
	<p>Developed by:<a>Computer Science Students</a> | 2013-2014 <a>BATCH</a>.</p>	
</div>
</body>
</html>
