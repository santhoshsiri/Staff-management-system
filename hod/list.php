<!DOCTYPE>
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
$department=$_SESSION['department'];

	  $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
      
      $selected = mysql_select_db("sms", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
    $result = mysql_query("SELECT * FROM faculty WHERE department='$department' ");

?>

        

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default2.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>


		<div id="logo">
			<div id="menu">
			<center>
			<H1>STAFF MANAGEMENT SYSTEM</H1><br><br>
			<H1>DEPARTMENT OF <?php echo $department?></H1>
			</center>
			</cu yuenter>
			</div>
		</div>

<div id="page-wrapper">
	<a href="home.php" class="home">home</a>
	<center><h4  class="listof">LIST OF FACULTIES</h4></center>
	<p class="fid2">FACULTY ID </p> <p class="fname2">FACULTY NAME</p>
	<div id="list">
	<?php
          while( $row = mysql_fetch_assoc( $result, MYSQL_ASSOC ) )
			{ 
			       
            ?> <a class="listfid" href="details.php?FID=<?=$row['fid']?>"> <?php echo $row['fid']; ?> </a><a class="listfname"href="details.php?FID=<?=$row['fid']?>"> <?php echo $row['fname']; ?> </a><br><br>
            <?php
            }
        ?>
</div>
</div>

<div id="copyright" class="container">
	<p>Developed by:<a>Computer Science Students</a> | 2013-2014 <a>BATCH</a>.</p>	
</div>
</body>
</html>
