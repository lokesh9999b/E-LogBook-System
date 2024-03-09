

<?php
session_start();



	// if(empty($_SESSION['NAME'])){


	//     echo" <script>document.location='index.php'</script>";
	// }
/*
 include 'connect.php';	
 if(isset($_POST['register']))
 {
 

	$regno=$_POST['regno'];

	date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
	$time=date('His');
	$photo=$regno.date("dmY").$time ;
	
    $filename = $_FILES["file"]["name"];

    $tempname = $_FILES["file"]["tmp_name"];  

        $folder = "uploads/registerd/".$photo.".jpeg";   	


        if (move_uploaded_file($tempname, $folder)) {

            echo "<script>alert('image inserted successfully')</script>";

        }else{

            echo "<script>alert('image not inserted successfully')</script>";
        }
    

	$query="insert into register(name,dob,reg_no,branch,year,mobile,photo) values('$name','$dob','$regno','$branch','$year','$mobile' ,'$photo')";
	$res=mysqli_query($con,$query);
     if($res)
	 {
		echo "<script>alert('Data inserted successfully')</script>";
	 }
	 else
	 {
		echo "<script>alert('Data NOT inserted successfully')</script>";
	 }
	}*/
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
	<!-- <link  href="assets/css/leaderboard.css"> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<?php
	include 'connect.php';
    //  if(isset($_POST['submit']))
	//  {
	// 	// $name=$_POST['name'];
	// 	// $name=strtoupper($name);
	
	// 	// $gender=$_POST['gender'];
	// 	$regno=$_POST['regno'];
	// 	$regno=strtoupper($regno);
	// 	// $branch=$_POST['branch'];
	// 	$year=$_POST['year'];
	// 	$sem=$_POST['sem'];
	
		
	// 	   $query="UPDATE `students` SET `year`=$year,`semester`=$sem WHERE reg_no=$regno";
	// 	   $res=mysqli_query($con,$query);
	// 	   if($res)
	// 	{
	// 		echo '<script>alert("updated")</script>';
	// 	}
	//  }
		

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

	<section class="gray-simple">

		<!-- row Start -->
		<h2 style="text-align:center">SRKR ENGINEERING COLLEGE(AUTONOMOUS)</h2>
		<!-- <h3 style="text-align:center">Student Login</h3> -->
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="custom-tab customize-tab tabs_creative">


					
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<section>
								<div class="container">
									<div class="row justify-content-center">

										<div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
											<form method="POST" action="storeImage.php" enctype="multipart/form-data">
												<div class="crs_log_wrap">
													<div class="crs_log__thumb">
														<img src="assets/img/2.png" class="img-fluid" alt="">
													</div>
													<div class="crs_log__caption">
														<div class="rcs_log_123">
															<div class="rcs_ico"><i class="fas fa-user"></i></div>
														</div>

														<div class="rcs_log_124">
															<div class="Lpo09">
																<h4>Login</h4>
															</div>
															<div class="form-group">
																<label>Registerd Number</label>
																<input type="text" name="reg" class="form-control" name="reg" placeholder="Registered No" required>
															</div>
															<div class="form-group">
																<label>Year</label>
																<select name="year" class="form-control" id="year" required>
																	<option value="0">Select Year</option>
																	<option value="1">1st Year</option>
																	<option value="2">2nd Year</option>
																	<option value="3">3rd Year</option>
																	<option value="4">4th Year</option>
																</select>
															</div>
															<div class="form-group">
																<label>Semester</label>
																<select name="sem" class="form-control" id="sem" required>
																	<option value="0">Select Semester</option>
																	<option value="1">1st Semester</option>
																	<option value="2">2nd Semester</option>
																</select>
															</div>
															<div class="row">

																<div class="col-md-10">
																	<div id="my_camera1"></div>
																	<input type=button value="Take Snapshot" class="btn btn-primary" onClick="take_snapshot_student()">
																	<input type="hidden" name="image" class="image-tag-student">
																</div>

																<br />
																<div class="col-md-10">
																	<div id="results_1"></div>
																</div>
																<div class="col-md-12 text-center">
																	<br />
																	<button onClick="take_snapshot_student()" name="submit" class="btn btn-success">Login</button>
																</div>

																<div class="form-group">
																	<p>Not yet registered?</p>
																	<!-- <a href="register.php"><button class=>Register Now</button></a> -->
																	<a href="register.php" class="btn btn-warning">Register here!</a>
																</div>
															</div>
														</div>
													</div>

											</form>
										</div>

									</div>
								</div>
							</section>
						</div>
						
	</section>

	<section class="pt-0">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10 col-lg-12 col-md-12 col-sm-12">
					<div class="col-lg-6 col-md-12 col-sm-12">
						<h4></h4>

						<div class="input-with-icon">
							<input type="text" class="form-control" placeholder="Search Here" name="name" id="myInput" onkeyup="searchFun()">
							<i class="ti-search"></i>

						</div><br>
						<?php
						date_default_timezone_set("Asia/Calcutta");
						$date = date('d-m-Y');
						?>
						<label>Date : <?php echo $date ?></label>
					</div>
					<div class="table-responsive">

						<table id="myTable" class="table table-striped wishlist">
							<thead>
								<tr>
									<th>PHOTO ID</th>
									<th>ID</th>
									<!-- <th>Name</th> -->
									<th>in time</th>
									<th>out time</th>
									<th>Log out</th>

									<!-- <th class="text-end">Action</th> -->
								</tr>
							</thead>
							<tbody>


								<?php
								include 'connect.php';
								date_default_timezone_set("Asia/Calcutta");
								$date = date('Y-m-d');
								

								$query = "SELECT regno,photo,intime,out_time FROM log WHERE intime like '$date%'";
								$run = mysqli_query($con, $query);
								while ($res = mysqli_fetch_assoc($run)) {
									$reg = $res['regno'];
									$photo = $res['photo'];
									$intime = $res['intime'];
									$outtime = $res['out_time'];
									$ct = date('Y-m-d H:i:s');
                                // $query1="select name from students where regno=$reg";
								// $res1=mysqli_query($con,$query1);
								// while($res2=mysqli_fetch_assoc($res1))
								// {
								// 	$name=$res2['name']
								// }

									echo '<tr>
							
														 <td><div class="tb_course_thumb"><img src="' . $photo . '" class="img-fluid" alt=""></div></td>
														 <td><b>' . $reg . '<b><span class="tb_date"></span></td>
														 <td><span class="wish_price theme-cl">' . $intime . '</span></td>
														 <td>' . $outtime . '</td>';
									if ($outtime == "---") {
										echo '<td><a href="logout.php?reg=' . $reg . '&t=' . $intime . '" class="btn theme-bg text-white">Log out </a></td>
															</tr>';
									} else {
										echo '<td>Loged out</td>
													 </tr>';
									}
								} ?>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</section>


	<script>
		const searchFun = () => {
			let filter = document.getElementById('myInput').value.toUpperCase();

			let myTable = document.getElementById('myTable');

			let tr = myTable.getElementsByTagName('tr');

			for (var i = 0; i < tr.length; i++) {
				let td = tr[i].getElementsByTagName('td')[1];
				let t1 = tr[i].getElementsByTagName('td')[0];

				if (td || t1) {
					let textvlaue = td.textContent || td.innerHTML;
					let pid = t1.textContent || t1.innerHTML;
					if (textvlaue.toUpperCase().indexOf(filter) > -1 || pid.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}
			}

		}
	</script>

	<!-- Configure a few settings and attach camera -->
	<script language="JavaScript">
		Webcam.set({
			width: 490,
			height: 390,
			image_format: 'jpeg',
			jpeg_quality: 90
		});

		Webcam.attach('#my_camera1');

		function take_snapshot_student() {
			Webcam.snap(function(data_uri_student) {
				$(".image-tag-student").val(data_uri_student);
				document.getElementById('results_1').innerHTML = '<img src="' + data_uri_student + '"/>';
			});
		}
	</script>

	<!-- <script language="JavaScript">
		Webcam.set({
			width: 490,
			height: 390,
			image_format: 'jpeg',
			jpeg_quality: 90
		});

		Webcam.attach('#my_camera_teacher');

		function take_snapshot_teacher() {
			Webcam.snap(function(data_uri) {
				$(".image-tag-teacher").val(data_uri);
				document.getElementById('results_teacher').innerHTML = '<img src="' + data_uri + '"/>';
			});
		}
	</script>

	<script language="JavaScript">
		Webcam.set({
			width: 490,
			height: 390,
			image_format: 'jpeg',
			jpeg_quality: 90
		});

		Webcam.attach('#my_camera_school');

		function take_snapshot_school() {
			Webcam.snap(function(data_uri) {
				$(".image-tag-school").val(data_uri);
				document.getElementById('results_school').innerHTML = '<img src="' + data_uri + '"/>';
			});
		}
	</script>
	<script language="JavaScript">
		Webcam.set({
			width: 490,
			height: 390,
			image_format: 'jpeg',
			jpeg_quality: 90
		});

		Webcam.attach('#my_camera_college');

		function take_snapshot_college() {
			Webcam.snap(function(data_uri) {
				$(".image-tag-college").val(data_uri);
				document.getElementById('results_college').innerHTML = '<img src="' + data_uri + '"/>';
			});
		}
	</script>
	<script language="JavaScript">
		Webcam.set({
			width: 490,
			height: 390,
			image_format: 'jpeg',
			jpeg_quality: 90
		});

		Webcam.attach('#my_camera_other');

		function take_snapshot_other() {
			Webcam.snap(function(data_uri) {
				$(".image-tag-other").val(data_uri);
				document.getElementById('results_other').innerHTML = '<img src="' + data_uri + '"/>';
			});
		}
	</script>
	<script language="JavaScript">
		Webcam.set({
			width: 490,
			height: 390,
			image_format: 'jpeg',
			jpeg_quality: 90
		});

		Webcam.attach('#my_camera_5');

		function take_snapshot_5() {
			Webcam.snap(function(data_uri_guest) {
				$(".image-tag-guest").val(data_uri_guest);
				document.getElementById('results_5').innerHTML = '<img src="' + data_uri_guest + '"/>';
			});
		}
	</script> -->

	<!-- ============================ Login Wrap ================================== --
			<script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
			<script  type="text/javascript">
let camera_button = document.querySelector("#start-camera");
let video = document.querySelector("#video");
let click_button = document.querySelector("#click-photo");
let canvas = document.querySelector("#canvas");
let dataurl = document.querySelector("#dataurl");
let dataurl_container = document.querySelector("#dataurl-container");

camera_button.addEventListener('click', async function() {
   	let stream = null;

    try {
    	stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
    }
    catch(error) {
    	alert(error.message);
    	return;
    }

    video.srcObject = stream;

    video.style.display = 'block';
    camera_button.style.display = 'none';
    click_button.style.display = 'block';
});

click_button.addEventListener('click', function() {
    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
   	let image_data_url = canvas.toDataURL('image/jpeg');
    
    dataurl.value = image_data_url;

    dataurl_container.style.display = 'block';
});

</script>
    


			 ============================ Footer Start ================================== -->
			 <style>
        p{text-align: center;}
    </style>
			<p><b>Developed By</b><a href="https://www.linkedin.com/in
/bommagani-lokesh-326348228"> LOKESH.B & JASWANTH.D</p>
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

			<style>
        p{text-align: center;}
    </style>
			<p><b>Powered By</b> <a href="https://www.devbydevs.co">DevByDevs.co</a>
	<!-- ============================ Footer End ================================== -->


	<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


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


</body>

</html>