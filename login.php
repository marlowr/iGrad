<?php
/*
		login.php
		This file is the main login page for either returning applicants or administrators. The login of the user will direct them to the appropriate page.
		
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
	
	if (!empty($_POST['submit'])) {
		$email = $_POST['email'];
		$password_input = hash("sha256", $_POST['password']);
		
		if (!empty($email) && !empty($password_input)) {
			$sql = "SELECT * FROM members WHERE email='$email'";
			$result = mysqli_query($cnxn, $sql);
      
      if (mysqli_num_rows($result) >= 1) {
        $row = mysqli_fetch_assoc($result);        
        $id=$row['id'];
        $student_id=$row['student_id'];
        $username=$row['username'];
        $email=$row['email'];
        $password=$row['password'];
        $role=$row['role'];      
      
        if ($password == $password_input) {
          $_SESSION['role'] = $role;
          if ($role == 1) { // 1=student
            $_SESSION['student_id'] = $student_id;
            $_SESSION['studentEmail'] = $email;
            header('Location:index.php');
            exit;
          } else if ($role == 2) { //2=admin
            header('Location:admin.php');
            exit;
          }
        } else {
          $err = "Email or password does not match";
        }
      } else {
        $err = "Email or password does not match";
      }
		} else {
      $err = "Please input your email address and password";
    }
	}
		
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>iGrad Login</title>
  <!-- Bootstrap core CSS-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">
				<div class="form-row">
					<img src="imgs/iG-resize.png" alt="Kent School District Banner">
					<h2 id="loginHeader">Login</h2>
				</div>							
			</div>
      <div class="card-body">
        <form method="post" action="#">
          <?php
          if (isset($err)) {
            echo "<div class='text-center text-danger'> $err </div>";
          }
          ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="adminemail" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email/admin@igrad.com">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="adminpassword" name="password" type="password" placeholder="Password/admin">
          </div>
          <!-- <a class="btn btn-primary btn-block" href="admin.php">Login</a> -->
					<input type="submit" name="submit" value="Login" class="btn btn-primary btn-block">
        </form>
        <div class="text-center">
					<hr>
          <button type="button" class="btn btn-secondary btn-sm saveAndExit" data-toggle="modal" data-target="#saveAndExit">
   					Forgot Password?
  				</button>
					<hr>
					<a class="btn btn-primpary btn-block btn-success" href="index.php">
						New Student?
					</a>
        </div>
				<!-- Save and Exit Modal -->
					<div class="modal fade" id="saveAndExit" tabindex="-1" role="dialog" aria-labelledby="saveAndExitTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="saveAndExitTitle">Forgot Password?</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form method="post" action="forgot.php">
								<div class="modal-body">
									Please enter the e-mail address used to save the application:
									<hr>
									<div class="form-row">
											<div class="rm-group col-md-10">
											<label for="email">Email:</label>
											<input type="text" class="form-control" name="studentEmail" placeholder="Example@mail.com">
									</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                  <input type="submit" name="submit" value="Forgot Password" class="btn btn-primary">
								</div>
								</form>
							</div>
						</div>
					</div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<script src="//code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
		<script src='js/index.js'></script>  
</body>

</html>
