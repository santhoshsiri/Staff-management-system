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
    session_start();
    if (isset($_SESSION['passworda'])){
        header("access.php");
    }    
 ?>
<?php
         $department=$_POST['department'];
         $_SESSION['department']=$department;
         $text1 = $_POST['passworda'];
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         if(! $conn )
        {
                 die('Could not connect: ' . mysql_error());
        }

        $query="SELECT * FROM admin where department='".$department."' and password='".$text1."'";
        mysql_select_db('sms');
        $result=mysql_query($query,$conn);
        if(mysql_num_rows($result)>0) 
                {
                
                    $_SESSION["passworda"]=$text1;
                    header("Location:home.php");
                }
        else
        {
                  echo "<script>alert('You are not a Authorized user!')</script>";
                  echo "<script>location.href='admin.php'</script>"; 

        }
?>