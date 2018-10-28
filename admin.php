<?php
	/*
		This file is the administration page for the iGrad Application. Shows a table of students currently applying or have applied to the iGrad program.
		
		Work Done By:
		Ryan Marlow
		Mingjie Deng
		Shahbaz Iqbal
	*/



    session_start();
	
	//Error reporting. For debugging, should comment it before release
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	//Connect to DB
	require '/home2/ryanmarl/include/db.php';
    
    if (!isset($_SESSION['role']) || $_SESSION['role'] != 2) {
        header('Location:login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
              integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="css/index.css">
	
        <title>iGrad Admin</title>
	</head>

    <body>
        <!-- Centered header of page. -->
        <div class="titlebar">
            <h1><img src="imgs/iG-resize.png" alt="Kent School District Banner">iGrad Admin</h1>
        </div>
        <!-- Nav tabs -->
        <div class="container group">
            <ul class="nav nav-tabs nav-fill" id="navigation" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="summary-tab" role="tab" aria-controls="summary" aria-selected="true">
                    Student Table
                </a>
              </li>
            </ul>
				<form method="post" action="summary.php">
			<!-- Tab Content -->
            <div class="tab-content">                
                <!-- Summary Tab -->
                <div class="tab-pane fade next-panel active show" id="summary" role="tabpanel" aria-labelledby="summary-tab">
									<div class="table-responsive">
										<table class="table table-bordered" id="studentTable" width="100%" cellspacing="0">
											<thead>
												 <tr>
												<th>Name</th>
												<th>Phone #</th>
												<th>Email Address</th>
												<th>Starting Time</th>
												<th>Form Status</th>
												<th>Enrollment Status</th>
												<th>Review</th>
												 </tr>
											</thead>
											<tfoot>
												<tr>
												<th>Name</th>
												<th>Phone #</th>
												<th>Email Address</th>
												<th>Starting Time</th>
												<th>Form Status</th>
												<th>Enrollment Status</th>
												<th>Review</th>
												</tr>
											</tfoot>
											<tbody>
												 <?php
													//Query database
													$sql = "SELECT student_id,studentNameFirst,studentNameLast,studentEmail,studentPhone,start_time,submit_time,enrollment_status FROM student";
													$result = mysqli_query($cnxn, $sql);

													//Display results
													while($row = mysqli_fetch_assoc($result)) {
															//print_r($row);

															$student_id = $row['student_id'];
															$studentNameFirst = $row['studentNameFirst'];
															$studentNameLast = $row['studentNameLast'];
															$studentEmail = $row['studentEmail'];
															$phone = $row['studentPhone'];
															$start_time = $row['start_time'];
															$submit_time = $row['submit_time'];
															$submit_time = (empty($submit_time)) ? "incomplete" : "submitted on $submit_time";
															$enrollment_status = $row['enrollment_status'];

															echo    "<tr>
																					<th>$studentNameLast,$studentNameFirst</th>
																					<td>$phone</th>
																					<td>$studentEmail</th>
																					<td>$start_time</td>
																					<td>$submit_time</td>
																					<td>$enrollment_status</td>
																					<td><a href='summary.php?student_id=$student_id'>Review</a></td>
																			</tr>";
													};
											?>
											</tbody>
										</table>
									</div>
								</div>
												<hr>
												<!--
												<div class="form-row">
													<a class="btn btn-secondary ml-auto" href="index.php">Edit Application</a>
													<input type="submit" name="submit" value="Submit" class="btn btn-success">
												</div>
												-->
										</div>

								</div>
					
		<!-- End the form here -->

		<!-- BootStrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<script src="//code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
		 <script src="js/sb-admin-datatables.min.js"></script>
		<script src='js/index.js'></script>        
    </body>
</html>