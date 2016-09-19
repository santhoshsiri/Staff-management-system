<!DOCTYPE>
<?php
  session_start();
  if($_SESSION["passwordh"]){
    
  }
   else {
     header("location:../index.html");
   }
   ?><?php 
    if (isset($_SESSION['passwordh'])){
        header("hod.php");
    }    
 ?>
<?php
         $department=$_POST['department'];
         $_SESSION['department']=$department;
         $text1 = $_POST['passwordh'];
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         if(! $conn )
        {
                 die('Could not connect: ' . mysql_error());
        }

        $query="SELECT * FROM hod where department='".$department."' and password='".$text1."'";
        mysql_select_db('sms');
        $result=mysql_query($query,$conn);
        if(mysql_num_rows($result)>0) 
                {
                
                    $_SESSION["passwordh"]=$text1;
                    header("Location:home.php");
                }
        else
        {
                  echo "<script>alert('You are not a Authorized user!')</script>";
                  echo "<script>location.href='hod.php'</script>"; 

        }
?>