<div class="row">
						<?php
						date_default_timezone_set("Asia/Calcutta");  
						$ct=date('Y-m-d');
						$c="select count(regno) as count from log where intime like '$ct%' and out_time='---' ";
						$re=mysqli_query($con,$c);
						$r=mysqli_fetch_assoc($re);

						$j="select count(regno) as count from log where intime like '$ct%' ";
						$je=mysqli_query($con,$j);
						$ee=mysqli_fetch_assoc($je);
		
						//date_default_timezone_set("Asia/Calcutta");  
						//$ct=date('Y-m-d H');
						$total="select count(regno) as count from log ";
						$resultcount=mysqli_query($con,$total);
						$results=mysqli_fetch_assoc($resultcount);

?>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
									<div class="dashboard_stats_wrap">
										<div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center theme-bg mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i></div></div>
										<div class="dashboard_stats_wrap_content"><h4><a href="std-list-curr.php"><?php echo $r['count'];?></h4></a> <span>Current Students in Digital Learning Center</span></div>
									</div>	
								</div>
								
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
									<div class="dashboard_stats_wrap">
										<div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-blue mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i></div></div>
										<div class="dashboard_stats_wrap_content"><h4><a href="tot-std-list.php"><?php echo $ee['count'];?></h4></a> <span>Total Students Visited Today</span></div>
									</div>	
								</div>
								
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
									<div class="dashboard_stats_wrap">
										<div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-warning mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i></div></div>
										<div class="dashboard_stats_wrap_content"><h4><a href="totalstudents.php"><?php echo $results['count'];?></h4></a><span>Total Students in Digital Learning Center</span></div>
									</div>	
								</div>
								
								
							</div>
							