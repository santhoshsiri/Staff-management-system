<!DOCTYPE>
<?php
  session_start();
  if($_SESSION["passwordh"]){
    
  }
   else {
     header("location:../index.html");
   }
   ?><?php


$link = mysqli_connect("localhost", "root", "", "sms");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$department = $_SESSION["department"];
$_SESSION="$department";
$Password1 = mysqli_real_escape_string($link, $_POST['pwd1']);
$Password2 = mysqli_real_escape_string($link, $_POST['pwd2']);
if($Password1==$Password2 && $Password2!=0)
 {
$sql = "UPDATE admin SET Password='$Password2' WHERE department='$department'";
if(mysqli_query($link, $sql)){
     echo "<script>alert('Password has been updated sucessfully')</script>";
         echo "<script>location.href='chpasswd.php'</script>";
} else{
     echo "<script>alert('sorry could not able to connect')</script>";
         echo "<script>location.href='chpasswd.php'</script>". mysqli_error($link);
}
 }
 else{
 	 echo "<script>alert('Passwords are not matching please try Again!')</script>";
         echo "<script>location.href='chpasswd.php'</script>"; 
 }

mysqli_close($link);
?>