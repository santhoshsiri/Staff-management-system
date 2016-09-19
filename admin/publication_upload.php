<?php
  session_start();
  if($_SESSION["passworda"]){
    
  }
   else {
     header("location:../index.html");
   }
   ?>
<?php

$department=$_SESSION['department'];
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sms";
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
error_reporting(E_ALL ^ E_NOTICE);
$fid=$_POST['fid'];

        
 
$name_ncf_paper = $_FILES['ncf_paper']['name'];
$tmp_name_ncf_paper = $_FILES['ncf_paper']['tmp_name'];
$type_ncf_paper= $_FILES['ncf_paper']['type'];
$extension_ncf_paper=strtolower(substr($name_ncf_paper, strpos($name_ncf_paper , '.') + 1));




$name_ncf_certificate= $_FILES['ncf_certificate']['name'];
$tmp_name_ncf_certificate = $_FILES['ncf_certificate']['tmp_name'];
$type_ncf_certificate= $_FILES['ncf_certificate']['type'];
$extension_ncf_certificate=strtolower(substr($name_ncf_certificate, strpos($name_ncf_certificate , '.') + 1));



$name_icf_paper= $_FILES['icf_paper']['name'];
$tmp_name_icf_paper = $_FILES['icf_paper']['tmp_name'];
$type_icf_paper= $_FILES['icf_paper']['type'];
$extension_icf_paper=strtolower(substr($name_icf_paper, strpos($name_icf_paper , '.') + 1));




$name_icf_certificate= $_FILES['icf_certificate']['name'];
$tmp_name_icf_certificate = $_FILES['icf_certificate']['tmp_name'];
$type_icf_certificate= $_FILES['icf_certificate']['type'];
$extension_icf_certificate=strtolower(substr($name_icf_certificate, strpos($name_icf_certificate , '.') + 1));


$name_igr_paper= $_FILES['igr_paper']['name'];
$tmp_name_igr_paper = $_FILES['igr_paper']['tmp_name'];
$type_igr_paper= $_FILES['igr_paper']['type'];
$extension_igr_paper=strtolower(substr($name_igr_paper, strpos($name_igr_paper , '.') + 1));


$name_igr_certificate= $_FILES['igr_certificate']['name'];
$tmp_name_igr_certificate = $_FILES['igr_certificate']['tmp_name'];
$type_igr_certificate= $_FILES['igr_certificate']['type'];
$extension_igr_certificate=strtolower(substr($name_igr_certificate, strpos($name_igr_certificate , '.') + 1));



$name_ngr_paper= $_FILES['ngr_paper']['name'];
$tmp_name_ngr_paper = $_FILES['ngr_paper']['tmp_name'];
$type_ngr_paper= $_FILES['ngr_paper']['type'];
$extension_ngr_paper=strtolower(substr($name_ngr_paper, strpos($name_ngr_paper , '.') + 1));


$name_ngr_certificate= $_FILES['ngr_certificate']['name'];
$tmp_name_ngr_certificate = $_FILES['ngr_certificate']['tmp_name'];
$type_ngr_certificate= $_FILES['ngr_certificate']['type'];
$extension_ngr_certificate=strtolower(substr($name_ngr_certificate, strpos($name_ngr_certificate , '.') + 1));




if(isset($name_icf_paper))
    {
        if(!empty($name_icf_paper))
        {

           if(($extension_icf_paper=='jpeg'||$extension_icf_paper=='jpg'&& $type_icf_paper=='image/jpeg')||($extension_icf_paper=='pdf'&& $type_icf_paper=='application/pdf')||($extension_icf_paper=='doc'&& $type_icf_paper=='application/msword')){
            
       
           			
                         			if(file_exists("../faculty/$fid"))
                                    {
                                      
                                    }
                              else
                                    {
                                      mkdir("../faculty/$fid");
                                    }
                               $location="../faculty/$fid/";
                               if(move_uploaded_file($tmp_name_icf_paper, $location."icf_paper.$extension_icf_paper"))

                                  {		
                                          		$location_photo="faculty/$fid/icf_paper.$extension_icf_paper";
                                          		$sql="UPDATE publications SET icf_paper='$location_photo' WHERE fid=$fid";
                                          		if($result=mysql_query($sql))
                                                {
                                                      echo "<script>alert('Details uploaded successfully')</script>";
                                                      echo "<script>location.href='publication.php'</script>"; 
                                                }
                                                else
                                                {
                                                     echo "<script>alert('connection problem')</script>";
                                                     echo "<script>location.href='publication.php'</script>"; 
                                                }
                                     
                                  }
                               else
                                   echo "not uploaded";
           }
           else
           {
               echo "<script>alert('document format is not supported')</script>";
           }

        }
     
    }


if(isset($name_icf_certificate))
    {
        if(!empty($name_icf_certificate))
        {

           if(($extension_icf_certificate=='jpeg'||$extension_icf_certificate=='jpg'&& $type_icf_certificate=='image/jpeg')||($extension_icf_certificate=='pdf'&& $type_icf_certificate=='application/pdf')
            ||($extension_icf_certificate=='doc'&& $type_icf_certificate=='application/msword'))
           {  
                
                if(file_exists("../faculty/$fid"))
                {
                  
                }
                else
                {
                  mkdir("../faculty/$fid");
                }
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_icf_certificate, $location."icf_certificate.$extension_icf_certificate"))

                    {   
                        $location_photo="faculty/$fid/icf_certificate.$extension_icf_certificate";
                        $sql="UPDATE publications SET icf_certificate='$location_photo' WHERE fid=$fid";
                        if($result=mysql_query($sql))
                        {
                            echo "<script>alert('Details uploaded successfully')</script>";
                            echo "<script>location.href='publication.php'</script>"; 
                          }
                          else
                          {
                            echo "<script>alert('connection problem')</script>";
                             echo "<script>location.href='publication.php'</script>"; 
                          }
                       
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('document format is not supported')</script>";
           }

        }
     }

if(isset($name_ncf_paper))
    {
        if(!empty($name_ncf_paper))
        {

           if(($extension_ncf_paper=='jpeg'||$extension_ncf_paper=='jpg'&& $type_ncf_paper=='image/jpeg')||($extension_ncf_paper=='pdf'&& $type_ncf_paper=='application/pdf')
            ||($extension_ncf_paper=='doc'&& $type_ncf_paper=='application/msword'))
           {  
                
                if(file_exists("../faculty/$fid"))
                {
                  
                }
                else
                {
                  mkdir("../faculty/$fid");
                }
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_ncf_paper, $location."ncf_paper.$extension_ncf_paper"))

                    {   
                        $location_photo="faculty/$fid/ncf_paper.$extension_ncf_paper";
                        $sql="UPDATE publications SET ncf_paper='$location_photo' WHERE fid=$fid";
                        if($result=mysql_query($sql))
                        {
                            echo "<script>alert('Details uploaded successfully')</script>";
                            echo "<script>location.href='publication.php'</script>"; 
                          }
                          else
                          {
                            echo "<script>alert('connection problem')</script>";
                             echo "<script>location.href='publication.php'</script>"; 
                          }
                       
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('document format is not supported')</script>";
           }

        }
     
}



if(isset($name_ncf_certificate))
    {
        if(!empty($name_ncf_certificate))
        {

           if(($extension_ncf_certificate=='jpeg'||$extension_ncf_certificate=='jpg'&& $type_ncf_certificate=='image/jpeg')||($extension_ncf_certificate=='pdf'&& $type_ncf_certificate=='application/pdf')
            ||($extension_ncf_certificate=='doc'&& $type_ncf_certificate=='application/msword'))
           {  
                
                if(file_exists("../faculty/$fid"))
                {
                  
                }
                else
                {
                  mkdir("../faculty/$fid");
                }
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_ncf_certificate, $location."ncf_certificate.$extension_ncf_certificate"))

                    {   
                        $location_photo="faculty/$fid/ncf_certificate.$extension_ncf_certificate";
                        $sql="UPDATE publications SET ncf_certificate='$location_photo' WHERE fid=$fid";
                        if($result=mysql_query($sql))
                        {
                            echo "<script>alert('Details uploaded successfully')</script>";
                            echo "<script>location.href='publication.php'</script>"; 
                          }
                          else
                          {
                            echo "<script>alert('connection problem')</script>";
                             echo "<script>location.href='publication.php'</script>"; 
                          }
                       
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('document format is not supported')</script>";
           }

        }
   }  




if(isset($name_igr_paper))
    {
        if(!empty($name_icf_paper))
        {

           if(($extension_igr_paper=='jpeg'||$extension_igr_paper=='jpg'&& $type_igr_paper=='image/jpeg')||($extension_igr_paper=='pdf'&& $type_igr_paper=='application/pdf')
            ||($extension_igr_paper=='doc'&& $type_igr_paper=='application/msword'))
           {  
                
                if(file_exists("../faculty/$fid"))
                {
                  
                }
                else
                {
                  mkdir("../faculty/$fid");
                }
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_igr_paper, $location."igr_paper.$extension_igr_paper"))

                    {   
                        $location_photo="faculty/$fid/igr_paper.$extension_igr_paper";
                        $sql="UPDATE publications SET igr_paper='$location_photo' WHERE fid=$fid";
                        if($result=mysql_query($sql))
                        {
                            echo "<script>alert('Details uploaded successfully')</script>";
                            echo "<script>location.href='publication.php'</script>"; 
                          }
                          else
                          {
                            echo "<script>alert('connection problem')</script>";
                             echo "<script>location.href='publication.php'</script>"; 
                          }
                       
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('document format is not supported')</script>";
           }

        }
     
}


if(isset($name_igr_certificate))
    {
        if(!empty($name_igr_certificate))
        {

           if(($extension_igr_certificate=='jpeg'||$extension_igr_certificate=='jpg'&& $type_igr_certificate=='image/jpeg')||($extension_igr_certificate=='pdf'&& $type_igr_certificate=='application/pdf')
            ||($extension_igr_certificate=='doc'&& $type_igr_certificate=='application/msword'))
           {  
                
                if(file_exists("../faculty/$fid"))
                {
                  
                }
                else
                {
                  mkdir("../faculty/$fid");
                }
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_igr_certificate, $location."igr_certificate.$extension_igr_certificate"))

                    {   
                        $location_photo="faculty/$fid/igr_certificate.$extension_igr_certificate";
                        $sql="UPDATE publications SET igr_certificate='$location_photo' WHERE fid=$fid";
                        if($result=mysql_query($sql))
                        {
                            echo "<script>alert('Details uploaded successfully')</script>";
                            echo "<script>location.href='publication.php'</script>"; 
                          }
                          else
                          {
                            echo "<script>alert('connection problem')</script>";
                             echo "<script>location.href='publication.php'</script>"; 
                          }
                       
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('document format is not supported')</script>";
           }

        }
     
}


    if(isset($name_ngr_paper))
    {
        if(!empty($name_icf_paper))
        {

           if(($extension_ngr_paper=='jpeg'||$extension_ngr_paper=='jpg'&& $type_ngr_paper=='image/jpeg')||($extension_ngr_paper=='pdf'&& $type_ngr_paper=='application/pdf')
            ||($extension_ngr_paper=='doc'&& $type_ngr_paper=='application/msword'))
           {  
                
                if(file_exists("../faculty/$fid"))
                {
                  
                }
                else
                {
                  mkdir("../faculty/$fid");
                }
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_ngr_paper, $location."ngr_paper.$extension_ngr_paper"))

                    {   
                        $location_photo="faculty/$fid/ngr_paper.$extension_ngr_paper";
                        $sql="UPDATE publications SET ngr_paper='$location_photo' WHERE fid=$fid";
                        if($result=mysql_query($sql))
                        {
                            echo "<script>alert('Details uploaded successfully')</script>";
                            echo "<script>location.href='publication.php'</script>"; 
                          }
                          else
                          {
                            echo "<script>alert('connection problem')</script>";
                             echo "<script>location.href='publication.php'</script>"; 
                          }
                       
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('document format is not supported')</script>";
           }

        }
     }


if(isset($name_ngr_certificate))
    {
        if(!empty($name_ngr_certificate))
        {

           if(($extension_ngr_certificate=='jpeg'||$extension_ngr_certificate=='jpg'&& $type_ngr_certificate=='image/jpeg')||($extension_ngr_certificate=='pdf'&& $type_ngr_certificate=='application/pdf')
            ||($extension_ngr_certificate=='doc'&& $type_ngr_certificate=='application/msword'))
           {  
                
                if(file_exists("../faculty/$fid"))
                {
                  
                }
                else
                {
                  mkdir("../faculty/$fid");
                }
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_ngr_certificate, $location."ngr_certificate.$extension_ngr_certificate"))

                    {   
                        $location_photo="faculty/$fid/ngr_certificate.$extension_ngr_certificate";
                        $sql="UPDATE publications SET ngr_certificate='$location_photo' WHERE fid=$fid";
                        if($result=mysql_query($sql))
                        {
                            echo "<script>alert('Details uploaded successfully')</script>";
                            echo "<script>location.href='publication.php'</script>"; 
                          }
                          else
                          {
                            echo "<script>alert('connection problem')</script>";
                             echo "<script>location.href='publication.php'</script>"; 
                          }
                       
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('document format is not supported')</script>";
           }

        }
     
}




?>