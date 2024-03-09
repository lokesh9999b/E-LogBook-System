<?php
include 'connect.php';
$reg=$_GET['reg'];
$t=$_GET['t'];
date_default_timezone_set("Asia/Calcutta");  
$ct=date('Y-m-d H:i:s');
$query="update   log set out_time='$ct' where regno='$reg' and out_time='---'";
	$res=mysqli_query($con,$query);
     if($res)
	 {
		echo "<script>alert('you Have Loged Out successfully')</script>";
        echo"<script>document.location.href='login.php'</script>";
	 }
	 else
	 {
		echo "<script>alert(' Please try Again')</script>";
        echo"<script>document.location.href='login.php'</script>";
	 }1


?>