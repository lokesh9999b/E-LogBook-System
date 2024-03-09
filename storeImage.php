
<?php
include'connect.php';
    
    $img = $_POST['image'];

    $regno = $_POST['reg'];
    $year = $_POST['year'];
    $sem = $_POST['sem'];


    $regno=strtoupper($regno);
    $folderPath = "uploads/log/";
    
    if($regno)
    {
        $query2="SELECT * FROM `students` WHERE `reg_no`='$regno'";
	    $res2=mysqli_query($con,$query2);
        $counter=mysqli_num_rows($res2);
        if($counter!=0)
        {
            $image_parts = explode(";base64,", $img);
    // $image_type_aux = explode("uploads/log/", $image_parts[0]);
    // $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    
	date_default_timezone_set("Asia/Calcutta");  
    $time=date('His');
	$photo=$regno.'_'.date("dmY").'_'.$time ;
    $fileName =  $photo. '.png';
date_default_timezone_set("Asia/Calcutta");  
$ct=date('Y-m-d H:i:s');
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
  
    //print_r($fileName);

    $query1="UPDATE `students` SET `year`=$year,`semester`=$sem WHERE reg_no='$regno'";
	$res1=mysqli_query($con,$query1);
    $query="INSERT INTO `log`(`regno`, `year`, `sem`, `photo`, `intime`, `out_time`) VALUES ('$regno','$year','$sem','$file','$ct','---')";
	$res=mysqli_query($con,$query);
     if($res)
	 {
    
		echo "<script>alert('Loged in successfully')</script>";
        echo"<script>document.location.href='login.php'</script>";
	 }
	 else
	 {
		echo "<script>alert(' NOT Loged in  Try Again')</script>";
        echo"<script>document.location.href='login.php'</script>";
	 }
 
        }

        else{
            echo "<script>alert('Student Not Registerd ..Please Register Again  ')</script>";
            echo"<script>document.location.href='register.php'</script>";
        }

    }
  
    // $image_parts = explode(";base64,", $img);
    // // $image_type_aux = explode("uploads/log/", $image_parts[0]);
    // // $image_type = $image_type_aux[1];
  
    // $image_base64 = base64_decode($image_parts[1]);
    
	// date_default_timezone_set("Asia/Calcutta");  
    // $time=date('His');
	// $photo=$regno.date("dmY").$time ;
    // $fileName =  $photo. '.png';
  
    // $file = $folderPath . $fileName;
    // file_put_contents($file, $image_base64);
  
    // //print_r($fileName);
    // $query="insert into log(regno,photo,out_time) values('$regno','$file','---')";
	// $res=mysqli_query($con,$query);
    //  if($res)
	//  {
    
	// 	echo "<script>alert('Loged in successfully')</script>";
    //     echo"<script>document.location.href='login.php'</script>";
	//  }
	//  else
	//  {
	// 	echo "<script>alert(' NOT Loged in  Try Again')</script>";
    //     echo"<script>document.location.href='login.php'</script>";
	//  }
?>
