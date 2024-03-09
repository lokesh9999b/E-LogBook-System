<?php session_start();
 include '../connect.php';
 if(isset($_POST['submit']))
 {
     $user=$_POST['name'];
     $pass=$_POST['password'];
    //  $query="select * from admin where user_name='$user' and password='$pass'";
    //  $res=mysqli_query($con,$query);
    //  $details=mysqli_fetch_assoc($res);
    //  $counter=mysqli_num_rows($res);
	$query=$con->prepare("select name,des,photo from admin where (username=? and password=?)");
	$query->bind_param("ss",$user,$pass);
	$query->execute();
	$query->bind_result($name,$des,$photo);
	// $query->store_result();
	$details=$query->fetch();
	$query->close();
	// $query->bind_result($count);
      
     if($details)
     {
		if($des=='staff')
		{
			$_SESSION['NAME']=$name;
        $_SESSION['deg']=$des;
        $_SESSION['photo_admin']=$photo;
		echo" <script>document.location='staff-dashboard.php'</script>";
		}
		else{
        $_SESSION['NAME']=$name;
        $_SESSION['deg']=$des;
        $_SESSION['photo_admin']=$photo;
      
        echo" <script>document.location='std-list-curr.php'</script>";
		}
     }
     else 
     {
     echo "<script type='text/javascript'>alert('Inavalid Username or Password')</script>";

    }
    
    
    
 }
 ?>

<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Themezhub">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>
		 
        <!-- Custom CSS -->
        <link href="../assets/css/styles.css" rel="stylesheet">
		
    </head>
	
    <body>

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			
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
										<img src="../assets/img/1.png" class="img-fluid" alt="">
									</div>
									<div class="crs_log__caption">
										<div class="rcs_log_123">
											<div class="rcs_ico"><i class="fas fa-lock"></i></div>
										</div>
										
										<div class="rcs_log_124">
											<div class="Lpo09"><h4>Login Your Account</h4></div>
											<div class="form-group">
												<label>User Name</label>
												<input type="text" name="name" class="form-control" placeholder="Enter User Name">
											</div>
											<div class="form-group">
												<label>Password</label>
												<input type="password" name="password" class="form-control" placeholder="*******">
											</div>
											<div class="form-group">
												<button  type="submit" name="submit" class="btn full-width btn-md theme-bg text-white">Login</button>
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
			<!-- <footer class="dark-footer skin-dark-footer style-2">
				<div class="footer-middle">
					<div class="container">
						<div class="row">
							
							<div class="col-lg-5 col-md-5">
								<div class="footer_widget">
									<img src="../assets/img/logo-light.png" class="img-footer small mb-2" alt="">
									<h4 class="extream mb-3">Do you need help with<br>anything?</h4>
									<p>Receive updates, hot deals, tutorials, discounts sent straignt in your inbox every month</p>
									<div class="foot-news-last">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Email Address">
											<div class="input-group-append">
												<button type="button" class="input-group-text theme-bg b-0 text-light">Subscribe</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-6 col-md-7 ml-auto">
								<div class="row">
								
									<div class="col-lg-4 col-md-4">
										<div class="footer_widget">
											<h4 class="widget_title">Layouts</h4>
											<ul class="footer-menu">
												<li><a href="#">Home Page</a></li>
												<li><a href="#">About Page</a></li>
												<li><a href="#">Service Page</a></li>
												<li><a href="#">Property Page</a></li>
												<li><a href="#">Contact Page</a></li>
												<li><a href="#">Single Blog</a></li>
											</ul>
										</div>
									</div>
											
									<div class="col-lg-4 col-md-4">
										<div class="footer_widget">
											<h4 class="widget_title">All Sections</h4>
											<ul class="footer-menu">
												<li><a href="#">Headers<span class="new">New</span></a></li>
												<li><a href="#">Features</a></li>
												<li><a href="#">Attractive<span class="new">New</span></a></li>
												<li><a href="#">Testimonials</a></li>
												<li><a href="#">Videos</a></li>
												<li><a href="#">Footers</a></li>
											</ul>
										</div>
									</div>
							
									<div class="col-lg-4 col-md-4">
										<div class="footer_widget">
											<h4 class="widget_title">Company</h4>
											<ul class="footer-menu">
												<li><a href="#">About</a></li>
												<li><a href="#">Blog</a></li>
												<li><a href="#">Pricing</a></li>
												<li><a href="#">Affiliate</a></li>
												<li><a href="#">Login</a></li>
												<li><a href="#">Changelog<span class="update">Update</span></a></li>
											</ul>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">© 2021 SkillUp. Designd By <a href="../index.htm">ThemezHub</a>.</p>
							</div>
						</div>
					</div>
				</div>
			</footer> -->
			<!-- ============================ Footer End ================================== -->
			
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content overli" id="loginmodal">
						<div class="modal-header">
							<h5 class="modal-title">Login Your Account</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
							</button>
						  </div>
						<div class="modal-body">
							<div class="login-form">
								<form>
								
									<div class="form-group">
										<label>User Name</label>
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="User or email">
											<i class="ti-user"></i>
										</div>
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<div class="input-with-icon">
											<input type="password" class="form-control" placeholder="*******">
											<i class="ti-unlock"></i>
										</div>
									</div>
									
									<div class="form-group row">
										<div class="col-xl-4 col-lg-4 col-4">
											<input id="admin" class="checkbox-custom" name="admin" type="checkbox">
											<label for="admin" class="checkbox-custom-label">Admin</label>
										</div>
										<div class="col-xl-4 col-lg-4 col-4">
											<input id="student" class="checkbox-custom" name="student" type="checkbox" checked="">
											<label for="student" class="checkbox-custom-label">Student</label>
										</div>
										<div class="col-xl-4 col-lg-4 col-4">
											<input id="instructor" class="checkbox-custom" name="instructor" type="checkbox">
											<label for="instructor" class="checkbox-custom-label">Tutors</label>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width theme-bg text-white">Login</button>
									</div>
									
									<div class="rcs_log_125 pt-2 pb-3">
										<span>Or Login with Social Info</span>
									</div>
									<div class="rcs_log_126 full">
										<ul class="social_log_45 row">
											<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-facebook text-info"></i>Facebook</a></li>
											<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-google text-danger"></i>Google</a></li>
											<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-twitter theme-cl"></i>Twitter</a></li>
										</ul>
									</div>
								
								</form>
							</div>
						</div>
						<div class="crs_log__footer d-flex justify-content-between mt-0">
							<div class="fhg_45"><p class="musrt">Don't have account? <a href="signup.html" class="theme-cl">SignUp</a></p></div>
							<div class="fhg_45"><p class="musrt"><a href="forgot.html" class="text-danger">Forgot Password?</a></p></div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
		<style>
        p{text-align: center;}
    </style>
			<p><b>Developed By</b><a href="https://www.linkedin.com/in
/bommagani-lokesh-326348228"> LOKESH.B</a> & <a href="https://www.linkedin.com/in/jaswanth-dasari-357b13244">JASWANTH.D</a></p>
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

			<style>
        p{text-align: center;}
    </style>
			<p><b>Powered By</b> <a href="https://www.devbydevs.co">DevByDevs.co</a>
		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/popper.min.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/select2.min.js"></script>
		<script src="../assets/js/slick.js"></script>
		<script src="../assets/js/moment.min.js"></script>
		<script src="../assets/js/daterangepicker.js"></script> 
		<script src="../assets/js/summernote.min.js"></script>
		<script src="../assets/js/metisMenu.min.js"></script>	
		<script src="../assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		

	</body>
</html>