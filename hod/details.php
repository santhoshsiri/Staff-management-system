<!DOCTYPE>
<?php
  session_start();
  if($_SESSION["passwordh"]){
    
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


     $result3 = mysql_query("SELECT * FROM publications WHERE  fid='$fid' ");
    $row3 = mysql_fetch_assoc( $result3, MYSQL_ASSOC );
?>




<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript">     
        function Print() 
    {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
  
            location.href='admin_summary.php'
                }
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
			<H1>FACULTY DETAILED REPORT</H1>
			</cu yuenter>
			</div>
		</div>

<div id="page-wrapper">
  <a href="home.php" class="home">home</a>
	<?php

		$result2 = mysql_query("SELECT * FROM uploads WHERE  fid='$fid' ");
		$row2= mysql_fetch_assoc( $result2, MYSQL_ASSOC );
	?>
<center><h4>PERSONAL INFORMATION</h4></center>
<img class="img1"src="<?php echo '../'.$row2['photo']; ?>">
<p>FACULTY ID:<a class="upload"><?php echo $row['fid']; ?></a></p>
<p>FACULTY NAME:<a class="upload"><?php echo $row['fname']; ?></a></p>
<p>DEPARTMENT:<a class="upload"><?php echo $row['department']; ?></a></p>
<p>DATE OF BIRTH:<a class="upload"><?php echo $row['dob']; ?></a></p>
<p>DESIGNATION:<a class="upload"><?php echo $row['designation']; ?></a></p>
<p>QUALIFICATION:<a class="upload"><?php echo $row['qualification']; ?></a></p>
<p>SALARY:<a class="upload3"><?php echo $row['salary']; ?></a></p>


<?php

$result1 = mysql_query("SELECT * FROM uploads WHERE  fid='$fid' ");
$row1= mysql_fetch_assoc( $result1, MYSQL_ASSOC );
?>
<center><h4>PERSONAL DOCUMENTS</h4></center>
<p class="info">FACULTY PHOTO:
<a class="download" href="<?php echo '../'.$row1['photo'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row1['photo'] ?>" >View</a>
<a class="upload1"><?php if($row1['photo']!='')echo " uploaded"; else echo " not found";?></a></p>



<p class="info">PANCARD:
<a class="download" href="<?php echo '../'.$row1['pan'] ?>" download>Download!</a>
<a class="view"href="<?php echo '../'.$row1['pan'] ?>">View</a>
<a class="upload1"><?php if($row1['pan']!='')echo " uploaded"; else echo " not found";?></a></p>


<p class="info">ADHARCARD:
<a class="download" href="<?php echo '../'.$row1['adhar'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row1['adhar'] ?>" >View</a>
<a class="upload1"><?php if($row1['adhar']!='')echo " uploaded"; else echo " not found";?></a></p>

<center><h4>COLLEGE</h4></center>
<p class="info">RESUME:
<a class="download" href="<?php echo '../'.$row1['resume'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row1['resume'] ?>" >View</a>
<a class="upload1"><?php if($row1['resume']!='')echo " uploaded"; else echo " not found";?></a></p>



<p class="info">APPIRISAL:
<a class="download" href="<?php echo '../'.$row1['apprisal'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row1['apprisal'] ?>" >View</a>
<a class="upload1"><?php if($row1['apprisal']!='')echo " uploaded"; else echo " not found";?></a></p>


<p class="info">APPOINTMENT:
<a class="download" href="<?php echo '../'.$row1['appointment'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row1['appointment'] ?>" >View</a>
<a class="upload1"><?php if($row1['appointment']!='')echo " uploaded"; else echo " not found";?></a></p>

<center><h4>EDUCATION</h4></center>
<p class="info">SSLC MARKSCARD:
<a class="download" href="<?php echo '../'.$row1['sslc'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row1['sslc'] ?>" >View</a>
<a class="upload1"><?php if($row1['sslc']!='')echo " uploaded"; else echo " not found";?></a></p>


<p class="info">PUC MARKSCARD:
<a class="download" href="<?php echo '../'.$row1['puc'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row1['puc'] ?>" >View</a>
<a class="upload1"><?php if($row1['puc']!='')echo " uploaded"; else echo " not found";?></a></p>


<p class="info">DEGREE CERTIFICATE:
<a class="download" href="<?php echo '../'.$row1['degree'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row1['degree'] ?>" >View</a>
<a class="upload1"><?php if($row1['degree']!='')echo " uploaded"; else echo " not found";?></a></p>


<p class="info">MASTER CERTIFICATE:
<a class="download" href="<?php echo '../'.$row1['master'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row1['master'] ?>" >View</a>
<a class="upload1"><?php if($row1['master']!='')echo " uploaded"; else echo " not found";?></a></p>


<p class="info">PHD CERTIFICATE:
<a class="download" href="<?php echo '../'.$row1['phd'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row1['phd'] ?>" >View</a>
<a class="upload1"><?php if($row1['phd']!='')echo " uploaded"; else echo " not found";?></a></p>


<p class="info">WORKSHOP:
<a class="download" href="<?php echo '../'.$row1['workshop'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row1['workshop'] ?>" >View</a>
<a class="upload1"><?php if($row1['workshop']!='')echo " uploaded"; else echo " not found";?></a></p>


<center>
<p class="info" ><h4>PUBLICATIONS:</h4></center>
  <center><p class="info" >INTERNATIONAL CONFERENCE:</center>
    <p class="info" >PAPER:
<a class="download" href="<?php echo '../'.$row3['icf_paper'] ?>" download>Download!</a>
<a class="view"href="<?php echo '../'.$row3['icf_paper'] ?>" >View</a>
<a class="upload1"><?php if($row3['icf_paper']!='')echo " uploaded"; else echo " not found";?></a></p>

 <p class="info" >CERTIFICATE:
<a class="download" href="<?php echo '../'.$row3['icf_certificate'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row3['icf_certificate'] ?>" >View</a>
<a class="upload1"><?php if($row3['icf_certificate']!='')echo " uploaded"; else echo " not found";?></a></p>


  <center><p class="info" >NATIONAL CONFERENCE:</center>
    <p class="info" >PAPER:
<a class="download" href="<?php echo '../'.$row3['ncf_paper'] ?>" download>Download!</a>
<a class="view"href="<?php echo '../'.$row3['ncf_paper'] ?>" >View</a>
<a class="upload1"><?php if($row3['ncf_paper']!='')echo " uploaded"; else echo " not found";?></a></p>

<p class="info" >CERTIFICATE:
<a class="download" href="<?php echo '../'.$row3['ncf_certificate'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row3['ncf_certificate'] ?>" >View</a>
<a class="upload1"><?php if($row3['ncf_certificate']!='')echo " uploaded"; else echo " not found";?></a></p>


 <center> <p class="info" >INTERNATIONAL JOURNALS:</center>
    <p class="info" >PAPER:
<a class="download" href="<?php echo '../'.$row3['igr_paper'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row3['igr_paper'] ?>" >View</a>
<a class="upload1"><?php if($row3['igr_paper']!='')echo " uploaded"; else echo " not found";?></a></p>

 <p class="info" >CERTIFICATE:
<a class="download" href="<?php echo '../'.$row3['igr_certificate'] ?>" download>Download!</a>
<a class="view"href="<?php echo '../'.$row3['igr_certificate'] ?>" >View</a>
<a class="upload1"><?php if($row3['igr_certificate']!='')echo " uploaded"; else echo " not found";?></a></p>

<center> <p class="info" >NATIONAL JOURNALS:</center>
    <p class="info" >PAPER:
<a class="download" href="<?php echo '../'.$row3['ngr_paper'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row3['ngr_paper'] ?>" >View</a>
<a class="upload1"><?php if($row3['ngr_paper']!='')echo " uploaded"; else echo " not found";?></a></p>

 <p class="info" >CERTIFICATE:
<a class="download" href="<?php echo '../'.$row3['ngr_certificate'] ?>" download>Download!</a>
<a class="view" href="<?php echo '../'.$row3['ngr_certificate'] ?>" >View</a>
<a class="upload1"><?php if($row3['ngr_certificate']!='')echo " uploaded"; else echo " not found";?></a></p>

</div>
<center>
<div id="print">
      <input type="button" value="Print" onClick="print()">
  </div> <div>
  </center>

<div id="copyright" class="container">
	<p>Developed by:<a>Computer Science Students</a> | 2013-2014 <a>BATCH</a>.</p>	
</div>
</body>
</html>