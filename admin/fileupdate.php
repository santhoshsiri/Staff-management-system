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
$fname=$_POST['fname'];
$dob=$_POST['dob'];
$designation=$_POST['designation'];
$qualification=$_POST['qualification'];
$salary=$_POST['salary'];
 if($fid!=''&& $fname!=''&& $dob!='' && $designation!='' && $qualification!='' && $salary!='' )
  {
$sql="UPDATE faculty SET fname='$fname',department='$department',dob='$dob',designation='$designation',qualification='$qualification',salary='$salary' WHERE fid='$fid'";
        if($result=mysql_query($sql))
          {
          
          }
          else
          {
            echo "<script>alert('faculty doesnot exist')</script>";
                            echo "<script>location.href='fileupdate.php'</script>"; 
          }
          
    
  }
 else
  {
                  echo "<script>alert('Details cannot be empty')</script>";
                  echo "<script>location.href='fileupdate.php'</script>"; 
  }



$name_photo = $_FILES['photo']['name'];
$tmp_name_photo = $_FILES['photo']['tmp_name'];
$type_photo= $_FILES['photo']['type'];
$extension_photo=strtolower(substr($name_photo, strpos($name_photo , '.') + 1));




$name_pan= $_FILES['pancard']['name'];
$tmp_name_pan = $_FILES['pancard']['tmp_name'];
$type_pan= $_FILES['pancard']['type'];
$extension_pan=strtolower(substr($name_pan, strpos($name_pan , '.') + 1));



$name_adhar= $_FILES['adharcard']['name'];
$tmp_name_adhar = $_FILES['adharcard']['tmp_name'];
$type_adhar= $_FILES['adharcard']['type'];
$extension_adhar=strtolower(substr($name_adhar, strpos($name_adhar , '.') + 1));




$name_resume= $_FILES['resume']['name'];
$tmp_name_resume = $_FILES['resume']['tmp_name'];
$type_resume= $_FILES['resume']['type'];
$extension_resume=strtolower(substr($name_resume, strpos($name_resume , '.') + 1));


$name_collegeid= $_FILES['collegeid']['name'];
$tmp_name_collegeid = $_FILES['collegeid']['tmp_name'];
$type_collegeid= $_FILES['collegeid']['type'];
$extension_collegeid=strtolower(substr($name_collegeid, strpos($name_collegeid , '.') + 1));


$name_apprisal= $_FILES['apprisal']['name'];
$tmp_name_apprisal = $_FILES['apprisal']['tmp_name'];
$type_apprisal= $_FILES['apprisal']['type'];
$extension_apprisal=strtolower(substr($name_apprisal, strpos($name_apprisal , '.') + 1));



$name_appointment= $_FILES['appointment']['name'];
$tmp_name_appointment = $_FILES['appointment']['tmp_name'];
$type_appointment= $_FILES['appointment']['type'];
$extension_appointment=strtolower(substr($name_appointment, strpos($name_appointment , '.') + 1));


$name_sslc= $_FILES['sslc']['name'];
$tmp_name_sslc = $_FILES['sslc']['tmp_name'];
$type_sslc= $_FILES['sslc']['type'];
$extension_sslc=strtolower(substr($name_sslc, strpos($name_sslc , '.') + 1));



$name_puc= $_FILES['puc']['name'];
$tmp_name_puc = $_FILES['puc']['tmp_name'];
$type_puc= $_FILES['puc']['type'];
$extension_puc=strtolower(substr($name_puc, strpos($name_puc , '.') + 1));



$name_degree= $_FILES['degree']['name'];
$tmp_name_degree = $_FILES['degree']['tmp_name'];
$type_degree= $_FILES['degree']['type'];
$extension_degree=strtolower(substr($name_degree, strpos($name_degree , '.') + 1));




$name_master= $_FILES['master']['name'];
$tmp_name_master = $_FILES['master']['tmp_name'];
$type_master= $_FILES['master']['type'];
$extension_master=strtolower(substr($name_master, strpos($name_master, '.') + 1));




$name_phd= $_FILES['phd']['name'];
$tmp_name_phd = $_FILES['phd']['tmp_name'];
$type_phd= $_FILES['phd']['type'];
$extension_phd=strtolower(substr($name_phd, strpos($name_phd , '.') + 1));



$name_publication= $_FILES['publication']['name'];
$tmp_name_publication = $_FILES['publication']['tmp_name'];
$type_publication= $_FILES['publication']['type'];
$extension_publication=strtolower(substr($name_publication, strpos($name_publication , '.') + 1));




$name_workshop= $_FILES['workshop']['name'];
$tmp_name_workshop= $_FILES['workshop']['tmp_name'];
$type_workshop= $_FILES['workshop']['type'];
$extension_workshop=strtolower(substr($name_workshop, strpos($name_workshop , '.') + 1));


if(isset($name_photo))
    {
        if(!empty($name_photo))
        {

           if($extension_photo=='jpeg'||$extension_photo=='jpg'&& $type_photo=='image/jpeg')
           {	
           			
           			if(file_exists("../faculty/$fid"))
                {
                  
                }
                else
                {
                  mkdir("../faculty/$fid");
                }
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_photo, $location.'photo.jpg'))

                    {		
                    		$location_photo="faculty/$fid/photo.jpg";
                    		$sql="UPDATE uploads SET photo='$location_photo' WHERE fid=$fid";
                    		if($result=mysql_query($sql))
                        {
                            echo "<script>alert('Details uploaded successfully')</script>";
                            echo "<script>location.href='fileupdate.php'</script>"; 
                          }
                          else
                          {
                            echo "<script>alert('connection problem')</script>";
                             echo "<script>location.href='fileupdate.php'</script>"; 
                          }
                       
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               
           }

        }
        else
        {
            echo "<script>alert('Photo cannot be empty')</script>";
             echo "<script>location.href='fileupdate.php'</script>"; 
        }

    }
   



    if(isset($name_pan))
    {
        if(!empty($name_pan))
        {

           if(($extension_pan=='jpeg'||$extension_pan=='jpg'&& $type_pan=='image/jpeg')||($extension_pan=='pdf'&& $type_pan=='application/pdf')
            ||($extension_pan=='doc'&& $type_pan=='application/msword'))
           {	
           			
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_pan, $location."pancard.$extension_pan"))
                    {
                        $location_photo="faculty/$fid/pancard.$extension_pan";
                    		$sql="UPDATE uploads SET pan='$location_photo' WHERE fid=$fid";
                    		$result=mysql_query($sql);
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('Please upload an image file')</script>";
           }

        }
        else
        {
           
        }

    }



    if(isset($name_adhar))
   		 {
        if(!empty($name_adhar))
        {

           if(($extension_adhar=='jpeg'||$extension_adhar=='jpg'&& $type_adhar=='image/jpeg')||($extension_adhar=='pdf'&& $type_adhar=='application/pdf')
            ||($extension_adhar=='doc'&& $type_adhar=='application/msword'))
           {	
           			
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_adhar, $location."adharcard.$extension_adhar"))
                    {
                    $location_photo="faculty/$fid/adharcard.$extension_adhar";
                    		$sql="UPDATE uploads SET adhar='$location_photo' WHERE fid=$fid";
                    		$result=mysql_query($sql);
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('Please upload an image file')</script>";
           }

        }
        else
        {
            
        }

    }




    if(isset($name_resume))
   		 {
        if(!empty($name_resume))
        {

           if(($extension_resume=='jpeg'||$extension_resume=='jpg'&& $type_resume=='image/jpeg')||($extension_resume=='pdf'&& $type_resume=='application/pdf')
            ||($extension_resume=='doc'&& $type_adhar=='application/msword'))
           {	
           			
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_resume, $location."resume.$extension_resume"))
                    {
                    		$location_photo="faculty/$fid/resume.$extension_resume";
                    		$sql="UPDATE uploads SET resume='$location_photo' WHERE fid=$fid";
                    		$result=mysql_query($sql);
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('Please upload an image file')</script>";
           }

        }
        else
        {
           
        }

    }


    if(isset($name_collegeid))
   		 {
        if(!empty($name_collegeid))
        {

           if(($extension_collegeid=='jpeg'||$extension_collegeid=='jpg'&& $type_collegeid=='image/jpeg')||($extension_collegeid=='pdf'&& $type_collegeid=='application/pdf')
            ||($extension_collegeid=='doc'&& $type_collegeid=='application/msword'))
           {	
           			
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_collegeid, $location."collegeid.$extension_collegeid"))
                    {
                    		$location_photo="faculty/$fid/collegeid.$extension_collegeid";
                    		$sql="UPDATE uploads SET collegeid='$location_photo' WHERE fid=$fid";
                    		$result=mysql_query($sql);
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('Please upload an image file')</script>";
           }

        }
        else
        {
           
        }

    }



    if(isset($name_apprisal))
   		 {
        if(!empty($name_apprisal))
        {

           if(($extension_apprisal=='jpeg'||$extension_apprisal=='jpg'&& $type_apprisal=='image/jpeg')||($extension_apprisal=='pdf'&& $type_apprisal=='application/pdf')
            ||($extension_apprisal=='doc'&& $type_apprisal=='application/msword'))
           {	
           			
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_apprisal, $location."apprisal.$extension_apprisal"))
                    {
                    		$location_photo="faculty/$fid/apprisal.$extension_apprisal";
                    		$sql="UPDATE uploads SET apprisal='$location_photo' WHERE fid=$fid";
                    		$result=mysql_query($sql);
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('Please upload an image file')</script>";
           }

        }
        else
        {
           
        }

    }


       if(isset($name_appointment))
   		 {
        if(!empty($name_appointment))
        {

           if(($extension_apprisal=='jpeg'||$extension_apprisal=='jpg'&& $type_apprisal=='image/jpeg')||($extension_apprisal=='pdf'&& $type_apprisal=='application/pdf')
            ||($extension_apprisal=='doc'&& $type_apprisal=='application/msword'))
           {	
           			
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_appointment, $location."appointment.$extension_apprisal"))
                    {
                    		$location_photo="faculty/$fid/appointment.$extension_apprisal";
                    		$sql="UPDATE uploads SET appointment='$location_photo' WHERE fid=$fid";
                    		$result=mysql_query($sql);
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('Please upload an image file')</script>";
           }

        }
        else
        {
           
        }

    }




    if(isset($name_sslc))
   		 {
        if(!empty($name_sslc))
        {

           if(($extension_sslc=='jpeg'||$extension_sslc=='jpg'&& $type_sslc=='image/jpeg')||($extension_sslc=='pdf'&& $type_sslc=='application/pdf')
            ||($extension_sslc=='doc'&& $type_sslc=='application/msword'))
           {	
           			
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_sslc, $location."sslc.$extension_sslc"))
                    {
                    		$location_photo="faculty/$fid/sslc.$extension_sslc";
                    		$sql="UPDATE uploads SET sslc='$location_photo' WHERE fid=$fid";
                    		$result=mysql_query($sql);
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('Please upload an image file')</script>";
           }

        }
        else
        {
          
        }

    }


      if(isset($name_puc))
   		 {
        if(!empty($name_puc))
        {

           if(($extension_puc=='jpeg'||$extension_puc=='jpg'&& $type_puc=='image/jpeg')||($extension_puc=='pdf'&& $type_puc=='application/pdf')
            ||($extension_puc=='doc'&& $type_puc=='application/msword'))
           {	
           			
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_puc, $location."puc.$extension_puc"))
                    {
                    	$location_photo="faculty/$fid/puc.jpg";
                    		$sql="UPDATE uploads SET puc='$location_photo' WHERE fid=$fid";
                    		$result=mysql_query($sql);
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('Please upload an image file')</script>";
           }

        }
        else
        {
            
        }

    }


 if(isset($name_degree))
   		 {
        if(!empty($name_degree))
        {

           if(($extension_degree=='jpeg'||$extension_degree=='jpg'&& $type_degree=='image/jpeg')||($extension_degree=='pdf'&& $type_degree=='application/pdf')
            ||($extension_degree=='doc'&& $type_degree=='application/msword'))
           {	
           			
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_degree, $location."degree.$extension_degree"))
                    {
                    	$location_photo="faculty/$fid/degree.$extension_degree";
                    		$sql="UPDATE uploads SET degree='$location_photo' WHERE fid=$fid";
                    		$result=mysql_query($sql);
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('Please upload an image file')</script>";
           }

        }
        else
        {
            
        }

    }


     if(isset($name_master))
   		 {
        if(!empty($name_master))
        {

           if(($extension_master=='jpeg'||$extension_master=='jpg'&& $type_master=='image/jpeg')||($extension_master=='pdf'&& $type_master=='application/pdf')
            ||($extension_master=='doc'&& $type_master=='application/msword'))
           {	
           			
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_master, $location."master.$extension_master"))
                    {
                  $location_photo="faculty/$fid/master.$extension_master";
                    		$sql="UPDATE uploads SET master='$location_photo' WHERE fid=$fid";
                    		$result=mysql_query($sql);
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('Please upload an image file')</script>";
           }

        }
        else
        {
            
        }

    }



if(isset($name_phd))
   		 {
        if(!empty($name_phd))
        {

           if(($extension_phd=='jpeg'||$extension_phd=='jpg'&& $type_phd=='image/jpeg')||($extension_phd=='pdf'&& $type_phd=='application/pdf')
            ||($extension_phd=='doc'&& $type_phd=='application/msword'))
           {	
           			
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_phd, $location."phd.$extension_phd"))
                    {
                    	$location_photo="faculty/$fid/phd.$extension_adhar";
                    		$sql="UPDATE uploads SET phd='$location_photo' WHERE fid=$fid";
                    		$result=mysql_query($sql);
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('Please upload an image file')</script>";
           }

        }
        else
        {
            
        }

    }







if(isset($name_workshop))
   		 {
        if(!empty($name_workshop))
        {

           if(($extension_workshop=='jpeg'||$extension_workshop=='jpg'&& $type_workshop=='image/jpeg')||($extension_workshop=='pdf'&& $type_workshop=='application/pdf')
            ||($extension_workshop=='doc'&& $type_workshop=='application/msword'))
           {	
           			
                 $location="../faculty/$fid/";
                 if(move_uploaded_file($tmp_name_workshop, $location."workshop.$extension_workshop"))
                    {
                    		$location_photo="faculty/$fid/workshop.$extension_workshop";
                    		$sql="UPDATE uploads SET workshop='$location_photo' WHERE fid=$fid";
                    		$result=mysql_query($sql);
                    }
                 else
                       echo "not uploaded";
           }
           else
           {
               echo "<script>alert('Please upload an image file')</script>";
           }

        }
        else
        {
           
        }

    }












?>