<?php
 include 'connect.php';
 if(isset($_POST['register']))
 {
	$name=$_POST['name'];
	$name=strtoupper($name);

	$gender=$_POST['gender'];
	$regno=$_POST['regno'];
	$regno=strtoupper($regno);
	$branch=$_POST['branch'];
	$year=$_POST['year'];
	$sem=$_POST['sem'];

	date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
	$time=date('d-m-Y H:i:s');
	$photo=$regno.date("d/m/Y").$time ;
	$query="INSERT INTO `students`(`reg_no`, `name`, `gender`, `branch`, `year`, `semester`)VALUES ('$regno','$name','$gender','$branch','$year','$sem')";
	$res=mysqli_query($con,$query);
     if($res)
	 {
		echo "<script>alert('Data inserted successfully')</script>";
		echo"<script>document.location.href='login.php'</script>";
	 }
	 else
	 {
		echo "<script>alert('Data NOT inserted successfully')</script>";
	 }
	}
 ?>

<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Themezhub">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aicte -idea Lab </title>
		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		<link  href="assets/css/leaderboard.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
         <?php
	

		?>	
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Login Wrap ================================== -->
			<section>
				<div class="container">
					<div class="row justify-content-center">
					
						<div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
							<form method="POST">
								<div class="crs_log_wrap">
									<div class="crs_log__thumb">
										<img src="assets/img/2.png" class="img-fluid" alt="">
									</div>
									<div class="crs_log__caption">
										<div class="rcs_log_123">
											<div class="rcs_ico"><i class="fas fa-lock"></i></div>
										</div>
										
										<div class="rcs_log_124">
											<div class="Lpo09"><h4>Registration Form</h4></div>
											<div class="form-group">
												<label>Name</label>
												<input type="text" name="name" class="form-control" placeholder="Enter your Full Name" required>
											</div>
											<div class="form-group">
												<label>Date Of Birth</label>
												<input type="date" name="dob"class="form-control" placeholder="Enter your Date Of Birth" required>
											</div>
											<div class="form-group">
											   <label>Gender</label>
											<select name="gender" class="form-control"  id="gender" requires>
											<option value="0" >Select Gender</option>
											    <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="others">Others</option>
                                                <!-- <option value="4">4</option> -->
                                               </select>
                                            </div>
											<div class="form-group">
												<label>Registration Number</label>
												<input type="text" name="regno" maxlength=10 class="form-control" placeholder="Enter your Register number" required >
											</div>
											<label>Branch</label>
											<select name="branch"name="branch" class="form-control"  id="branch" required>
												<option value="0" >Select Branch</option>
												<option value="CSE">CSE</option>
                                                <option value="IT">IT</option>
                                                <option value="AI&DS">AI&DS</option>
												<option value="AI&ML">AI&ML</option>
                                                <option value="CSBS">CSBS</option>
												<option value="CSD">CSD</option>
												<option value="ECE">ECE</option>
												<option value="EEE">EEE</option>
												<option value="CIVIL">CIVIL</option>
												<option value="MECH">MECH</option>
                                               </select>
										    <div class="form-group">
											   <label>Year</label>
											<select name="year" class="form-control"  id="year" required>
											<option value="0" >Select Year</option>
											    <option value="1">1st Year</option>
                                                <option value="2">2nd Year</option>
                                                <option value="3">3rd Year</option>
                                                <option value="4">4th Year</option>
                                               </select>
                                            </div>
											<div class="form-group">
											   <label>Semester</label>
											<select name="sem" class="form-control"  id="sem" required>
											<option value="0" >Select Semester</option>
											<option value="1">1st Semester</option>
                                                <option value="2">2nd Semester</option>
                                            </select>
                                            </div>
											<!-- <div class="form-group">
												<label>Mobile</label>
												<input type="number" name="mobile" maxlength=10 class="form-control" placeholder="Enter your Mobile Number" required>
											</div> -->
											<div  >
												<button type="submit"class="btn btn-primary" name="register">Register</button>
												<div>
												<p>if you already registered</p>
												<a  href="login.php">login here</input></a>
</div>
                                              
											</div>
										</div>
										
									</div>
									
							</form>
							

						</div>

					</div>
				</div>
			</section>
			<!-- ============================ Login Wrap ================================== -->
			
			<!-- ============================ Footer Start ================================== -->
			<?php
		
			 ?>
			<!-- ============================ Footer End ================================== -->
			
			
			

		</div>
		
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/daterangepicker.js"></script> 
		<script src="assets/js/summernote.min.js"></script>
		<script src="assets/js/metisMenu.min.js"></script>	
		<script src="assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		

	</body>
</html>