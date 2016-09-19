<!DOCTYPE>
<?php
  session_start();
  if($_SESSION["passworda"]){
    
  }
   else {
     header("location:../index.html");
   }
   ?>
<?php
$fid=$_GET['FID'];
$department=$_SESSION['department'];

    $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
      
      $selected = mysql_select_db("sms", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
    $result = mysql_query("SELECT * FROM faculty WHERE department='$department' AND fid='$fid' ");
    $row = mysql_fetch_assoc( $result, MYSQL_ASSOC );

    $result1 = mysql_query("SELECT * FROM uploads WHERE fid='$fid' ");
    $row1 = mysql_fetch_assoc( $result1, MYSQL_ASSOC );
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

						<form id="form1" name="form1" method="post" action="fileupdate.php" enctype="multipart/form-data">



                            <h2>PERSONAL INFORMATION</h4><h2><br>
                            <h4><p class="facult">FACULTY ID :<input type="text" name="fid" value="<?php echo $row['fid'];?>"></a> </h4><br>
                            <h4><p class="facult">FACULTY NAME :<input type="text" name="fname" value="<?php echo $row['fname'];?>"></a> </h4><br>
                            <h4><p class="facult">DATE OF BIRTH:<input type="date" name="dob" value="<?php echo $row['dob'];?>"></a> </h4><br>
                            <h4><p class="facult">DESIGNATION:<input type="text" name="designation" value="<?php echo $row['designation'];?>"></a> </h4><br>
                            <h4><p class="facult">QUALIFICATION:<input type="text" name="qualification" value="<?php echo $row['qualification'];?>"></a> </h4><br>
                            <h4><p class="facult">SALARY:<input type="price" name="salary" value="<?php echo $row['salary'];?>"></a> </h4><br><br>
            								<h2 class="doc">DOCUMENTS</h2><br>
            								<h4 class="side">PERSONAL</h4>
            								 	<h4 class="lg">UPLOAD PHOTO :<a class="upload1"><?php if($row1['photo']!='')echo " uploaded"; else echo " not found";?></a> UPDATE 
                                                  			 	<input type="file" name="photo" value="<?php echo $row1['photo'];?>"/></h4><br>
                                    			<h4 class="lg">UPLOAD PAN CARD :
                                          <a class="upload1"><?php if($row1['pan']!='')echo " uploaded"; else echo " not found";?></a> UPDATE 
                                   				<input type="file" name="pancard"/></h4> <br>

                                   				<h4 class="lg">UPLOAD ADHAR CARD :
                                          <a class="upload1"><?php if($row1['adhar']!='')echo " uploaded"; else echo " not found";?></a> UPDATE 
                                   				<input type="file" name="adharcard"/></h4> <br>
                            

                                 
                        									<h4 class="side">COLLEGE</h4>
                        								 	<h4 class="lg">UPLOAD RESUME : 
                                          <a class="upload1"><?php if($row1['resume']!='')echo " uploaded"; else echo " not found";?></a> UPDATE  
                                   			 	<input type="file" name="resume"/></h4><br>


                                    			<h4 class="lg">UPLOAD COLLEGE ID :
                                            <a class="upload1"><?php if($row1['collegeid']!='')echo " uploaded"; else echo " not found";?></a> UPDATE 
                                   				<input type="file" name="collegeid"/></h4> <br>

                                   				<h4 class="lg">UPLOAD APPRISAL :
                                            <a class="upload1"><?php if($row1['apprisal']!='')echo " uploaded"; else echo " not found";?></a> UPDATE 
                                   				<input type="file" name="apprisal"/></h4> <br>

                                   				<h4 class="lg">UPLOAD APPOINTMENT LETTER :
                                            <a class="upload1"><?php if($row1['appointment']!='')echo " uploaded"; else echo " not found";?></a> UPDATE 
                                   				<input type="file" name="appointment"/></h4> <br>

                               

            									            <h4 class="side">EDUCATIONAL</h4>
            										          <h4 class="side">MARKS CARDS</h4>
            								          	   <h4 class="lg">UPLOAD SSLC MARKSCARD :  
                                            <a class="upload1"><?php if($row1['sslc']!='')echo " uploaded"; else echo " not found";?></a> UPDATE 
                                   			 	<input type="file" name="sslc"/></h4><br>

                                    			<h4 class="lg">UPLOAD PU MARKSCARD :
                                            <a class="upload1"><?php if($row1['puc']!='')echo " uploaded"; else echo " not found";?></a> UPDATE 
                                   				<input type="file" name="puc"/></h4> <br>

                                   				<h4 class="lg">UPLOAD DEGREE CERTIFICATE :
                                            <a class="upload1"><?php if($row1['degree']!='')echo " uploaded"; else echo " not found";?></a> UPDATE 
                                   				<input type="file" name="degree"/></h4> <br>

                                   				<h4 class="lg">UPLOAD MASTERDEGREE CERTIFICATE :
                                            <a class="upload1"><?php if($row1['master']!='')echo " uploaded"; else echo " not found";?></a> UPDATE 
                                   				<input type="file" name="master"/></h4> <br>

                                   				<h4 class="lg">UPLOAD PHD CERTIFICATE :
                                            <a class="upload1"><?php if($row1['phd']!='')echo " uploaded"; else echo " not found";?></a> UPDATE 
                                   				<input type="file" name="phd"/></h4> <br>

                                   				<h4 class="side">WORKSHOPS/FFD/CONTESTS</h4>
                                   				<h4 class="lg">UPLOAD CERTIFICATE :
                                            <a class="upload1"><?php if($row1['workshop']!='')echo " uploaded"; else echo " not found";?></a> UPDATE 
                                   				<input type="file" name="workshop"/></h4> <br>
                                   			
                                           <center><input class="container" type="submit" name="submit" value="upload"/></center>
                          </form>

</div>

<div id="copyright" class="container">
	<p>Developed by:<a>Computer Science Students</a> | 2013-2014 <a>BATCH</a>.</p>	
</div>
</body>
</html>