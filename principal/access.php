<?php
  session_start();
  if($_SESSION["passwordp"]){
    
  }
   else {
     header("location:../index.html");
   }
   ?>
<?php 
   
    if (isset($_SESSION['passwordp'])){
        header("principal.php");
    }    
 ?>
<?php
         $text1 = $_POST['passwordp'];
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         if(! $conn )
        {
                 die('Could not connect: ' . mysql_error());
        }

        $query="SELECT * FROM principal where password='".$text1."'";
        mysql_select_db('sms');
        $result=mysql_query($query,$conn);
        if(mysql_num_rows($result)>0) 
                {
                
                    $_SESSION["passwordp"]=$text1;
                    header("Location:home.php");
                }
        else
        {
                  echo "<script>alert('You are not a Authorized user!')</script>";
                  echo "<script>location.href='principal.php'</script>"; 

        }
?>