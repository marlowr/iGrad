<?php

/*
		forgot.php
		This file shows a summary of information from the student as input from the iGrad application form.
		
		Work Done By:
		Ryan Marlow
    
    PHP by Mingjie Deng.
	*/

    session_start();
	
	//Error reporting. For debugging, should comment it out before release
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	//Connect to DB
	require '/home2/ryanmarl/include/db.php';
	require '/home2/ryanmarl/include/common.inc.php';

    if (empty($_POST['submit']) || empty($_POST['studentEmail'])) {
        header('Location:login.php');
        exit;
    } else {
        $studentEmail = $_POST['studentEmail'];
        $password = create_password();
        $password_encry = hash("sha256", $password);
        $sql = "UPDATE `members` set `password`='$password_encry' where `email`='$studentEmail'";
        $success = mysqli_query($cnxn, $sql);
        if ($success) {
            $_SESSION['password'] = $password;
            mailToStudent($studentEmail, $password);
        } else {
            echo "Something went awry".mysqli_error($cnxn);
            exit;
        }
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
	
        <title>iGrad Application</title>
	</head>

    <body>
        <!-- Centered header of page. -->
        <div class="titlebar">
            <h1><img src="imgs/iG-resize.png" alt="Kent School District Banner">iGrad Application</h1>
        </div>
        <!-- Nav tabs -->
        <div class="container group">
            <ul class="nav nav-tabs nav-fill" id="navigation" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="congrats-tab" role="tab" aria-controls="congrats" aria-selected="true">
                   <h2>
                     Your password has been reset.
                  </h2>
                </a>
              </li>
            </ul>
        <!-- Tab Content -->
        <div class="tab-content">                
            <!-- Summary Tab -->
            <div class="tab-pane fade next-panel active show" id="congrats" role="tabpanel" aria-labelledby="congrats-tab">
                  <hr>
                  <p>
                    We have generated a password and sent it to your email:
                  </p>
                   <h3>Login:  <?php echo isset($studentEmail) ? $studentEmail : '';?></h3>
        
                  <p>
                    If you have any questions, please feel free to call us at (253) 373-4723.
                  </p>
                  <p>
                    Also you can connect with iGrad through these social media sites:
                  </p>
                  
                    <a href="https://www.facebook.com/iG415" target="_blank" rel="noopener noreferrer"><img title="Facebook" src="https://www.kent.k12.wa.us/cms/lib/WA01001454/centricity/domain/38/facebook.png" alt="Facebook "></a>
                    <a href="https://twitter.com/iGrad415" target="_blank" rel="noopener noreferrer"><img title="Twitter" src="https://www.kent.k12.wa.us/cms/lib/WA01001454/centricity/domain/38/twitter.png" alt="Twitter "></a>
                    <a href="http://www.linkedin.com/company/kent-school-district" target="_blank" rel="noopener noreferrer"><img title="LinkedIn" src="https://www.kent.k12.wa.us/cms/lib/WA01001454/centricity/domain/38/linkedin.png" alt="LinkedIn "></a>
                    <a target="_blank" href="http://www.youtube.com/user/KentSchoolDistrictIT"><img style="border: px solid;" title="YouTube" src="https://www.kent.k12.wa.us/cms/lib/WA01001454/Centricity/Domain/38/YouTube.png" alt="YouTube "></a>&nbsp;
                    <a target="_blank" href="https://www.kent.k12.wa.us/Page/4992"><img title="Mobile" src="https://www.kent.k12.wa.us/cms/lib/WA01001454/Centricity/Domain/38/Mobile.png" alt="Mobile"></a>
                  
                </a>
            </div>

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