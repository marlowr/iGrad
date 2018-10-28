<?php
	/*
		index.php
		This file is the main page for the iGrad administration page. Most form funcationality 
		and fields are either in this file or in a file included within the html/PHP.
		
		Work Done By:
		Ryan Marlow
		Mingjie Deng
		Shahbaz Iqbal
	*/
	
    session_start();
	//unset($_SESSION['student_id']);
	//Error reporting. For debugging, should comment it before release
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	//Connect to DB
	require '/home2/ryanmarl/include/db.php';
	require '/home2/ryanmarl/include/common.inc.php';
	
	//set the student_id if available
	if (isset($_SESSION['student_id'])) {
		$student_id = $_SESSION['student_id'];
	} else {
		$student_id = "";
	}
	
	
	if (!empty($_POST['submit'])) {
		//For debugging, should comment it before release
		//print_r($_POST);
        $submit = strtolower($_POST['submit']);
		$_POST['submit'] = "";
        
		//Check all the fields. If there is required field missing, put that into the missing array.
		foreach ($table_student_var as $key) {
			if (!isset($_POST[$key]) || empty($_POST[$key])) {
				$$key = '';
                if (in_array($key, $required)) {
                    $missing[] = $key;
                }
			} else {
				$value = $_POST[$key];
				$value = is_array($value) ? implode("|", $value) : trim($value);
				$$key = mysqli_real_escape_string($cnxn, htmlentities($value));
			}
		}
			
				
		//Check if the applicant is eligible by his/her birthday
		if(!empty($studentDateOfBirth) && !isAgeEligible($studentDateOfBirth)) {
			echo "<p>Eligible applician should be at least 16, and not yet 21, on Sept 1 of the current school year.</p>";
			echo "<p>Unfortunately you are not eligible for this application.</p>";
			return;
		}
		
		//If already has student_id, update the student info into the database, otherwise create a new student profile
		if (isset($_SESSION['student_id'])) {
			//update the application
            $sql = "UPDATE `student` SET `studentNameFirst`='$studentNameFirst', `studentNameMi`='$studentNameMi',
                `studentNameLast`='$studentNameLast', `studentNamePrevious`='$studentNamePrevious', `studentDateOfBirth`='$studentDateOfBirth',
                `studentCityOfBirth`='$studentCityOfBirth', `studentStateOfBirth`='$studentStateOfBirth', `studentCountryOfBirth`='$studentCountryOfBirth',
                `studentGender`='$studentGender', `studentRace`='$studentRace', `studentEmail`='$studentEmail', `studentPhone`='$studentPhone',
                `studentFileUpload`='$studentFileUpload', `familyCommunication`='$familyCommunication', `firstLanguage`='$firstLanguage',
                `studentHomeLanguage`='$studentHomeLanguage', `studentPrimaryLanguage`='$studentPrimaryLanguage',
                `developmentSupport`='$developmentSupport', `outsideEducation`='$outsideEducation', `developmentSupportMonths`='$developmentSupportMonths',
                `developmentSupportLanguage`='$developmentSupportLanguage', `firstAttendUS`='$firstAttendUS', `participatePrograms`='$participatePrograms',
                `expelled`='$expelled', `studentSchoolExperience`='$studentSchoolExperience', `studentSchoolFeedback`='$studentSchoolFeedback',
                `residenceSituation`='$residenceSituation', `totalLivingInResidence`='$totalLivingInResidence', `incomeAmount`='$incomeAmount', `income`='$income', `studentAddressStreet`='$studentAddressStreet',
                `studentAddressCity`='$studentAddressCity', `studentAddressState`='$studentAddressState', `studentAddressZip`='$studentAddressZip',
                `sameAsMailing`='$sameAsMailing', `mailingAddressStreet`='$mailingAddressStreet', `mailingAddressCity`='$mailingAddressCity',
                `mailingAddressState`='$mailingAddressState', `mailingAddressZip`='$mailingAddressZip', `emergencyContactFirst`='$emergencyContactFirst',
                `emergencyContactLast`='$emergencyContactLast', `emergencyContactPhone`='$emergencyContactPhone',
                `emergencyContactEmail`='$emergencyContactEmail', `emergencyContactRelationship`='$emergencyContactRelationship',
                `emergencyContactOther`='$emergencyContactOther', `distress`='$distress', `distressDetails`='$distressDetails', `holiday`='$holiday',
                `holidayDetails`='$holidayDetails', `studentMedical`='$studentMedical', `otherHealth`='$otherHealth',
                `anaphylacticAllergy`='$anaphylacticAllergy', `anaphylacticSymptoms`='$anaphylacticSymptoms', `epiPen`='$epiPen',
                `asthmaLength`='$asthmaLength', `asthmaMissedSchool`='$asthmaMissedSchool', `allergy`='$allergy', `allergySymptoms`='$allergySymptoms',
                `allergyMedication`='$allergyMedication', `homeMedication`='$homeMedication', `schoolMedication`='$schoolMedication',
                `discipline`='$discipline', `disciplineDetails`='$disciplineDetails', `behavior`='$behavior', `behaviorDetails`='$behaviorDetails',
                `studentAttributes`='$studentAttributes', `additionalInformation`='$additionalInformation'
                WHERE student_id=$student_id";
			
            $success = mysqli_query($cnxn, $sql);
			if(!$success){
                echo "<p>Your application could not be saved <br>".mysqli_error($cnxn)."</p>";
				return;
            }
            //$_SESSION['role'] = 1;
            //$_SESSION['studentEmail'] = $studentEmail;
		} else {
			//Create a new student profile
            $sql = "INSERT INTO `student` VALUES (DEFAULT, $curdate, DEFAULT, DEFAULT,
                '$studentNameFirst', '$studentNameMi', '$studentNameLast', '$studentNamePrevious', '$studentDateOfBirth',
                '$studentCityOfBirth', '$studentStateOfBirth', '$studentCountryOfBirth', '$studentGender', '$studentRace',
                '$studentEmail', '$studentPhone', '$studentFileUpload', '$familyCommunication', '$firstLanguage',
                '$studentHomeLanguage', '$studentPrimaryLanguage', '$developmentSupport', '$outsideEducation',
                '$developmentSupportMonths', '$developmentSupportLanguage', '$firstAttendUS', '$participatePrograms',
                '$expelled', '$studentSchoolExperience', '$studentSchoolFeedback', '$residenceSituation', '$totalLivingInResidence',
                '$incomeAmount', '$income', '$studentAddressStreet', '$studentAddressCity', '$studentAddressState', '$studentAddressZip',
                '$sameAsMailing', '$mailingAddressStreet', '$mailingAddressCity', '$mailingAddressState', '$mailingAddressZip',
                '$emergencyContactFirst', '$emergencyContactLast', '$emergencyContactPhone', '$emergencyContactEmail',
                '$emergencyContactRelationship', '$emergencyContactOther', '$distress', '$distressDetails', '$holiday',
                '$holidayDetails', '$studentMedical', '$otherHealth', '$anaphylacticAllergy', '$anaphylacticSymptoms', '$epiPen',
                '$asthmaLength', '$asthmaMissedSchool', '$allergy', '$allergySymptoms', '$allergyMedication', '$homeMedication',
                '$schoolMedication', '$discipline', '$disciplineDetails', '$behavior', '$behaviorDetails', '$studentAttributes',
                '$additionalInformation', DEFAULT, DEFAULT)";  
			
            $success = mysqli_query($cnxn, $sql);			
			if($success){
                //Get the student_id of the new student and set into a session
                $student_id = mysqli_insert_id($cnxn);
				$_SESSION['student_id'] = $student_id;
                $_SESSION['role'] = 1;  // 1:student
                $_SESSION['studentEmail'] = $studentEmail;
                
				//Add a member in database
                $password = create_password();
                $password_encry = hash("sha256", $password);
                $sql = "INSERT INTO `members` VALUES (DEFAULT, '$student_id', DEFAULT, '$studentEmail', '$password_encry', 1)";
                $success = mysqli_query($cnxn, $sql);
                if ($success) {
                    $_SESSION['password'] = $password;
                }
			} else {
                //Display error                        
                echo "<p>Your application could not be saved <br>".mysqli_error($cnxn)."</p>";
                echo $sql;
				return;
            }
		}
        
        
        //Delect the schoolHistory, guardian and sibling info and insert the new info into database.
        $sql = "DELETE FROM `schoolHistory` WHERE student_id=$student_id";
        $success = mysqli_query($cnxn, $sql);
        if (!$success) {
                //echo $sql;
                echo "<p>Something went awry".mysqli_error($cnxn)."</p>";
        }
        $sql = "DELETE FROM `guardian` WHERE student_id=$student_id";
        $success = mysqli_query($cnxn, $sql);
        $sql = "DELETE FROM `siblingsattending` WHERE student_id=$student_id";
        $success = mysqli_query($cnxn, $sql);
        
        //Insert the new school info into the schoolHistory table
        $num = 0;
        $field = "school";
        $key = $field . $num;
        while (isset($_POST[$key])) {
            $value = $_POST[$key];
            $sql = "INSERT INTO `schoolHistory` VALUES (DEFAULT, '$student_id', '$value[schoolName]', '$value[schoolGrade]', '$value[schoolYear]', '$value[schoolCity]', '$value[schoolState]')";
            $success = mysqli_query($cnxn, $sql);
            $num++;
            $key = $field . $num;
        }
        
        //Insert the new guardian info into the guardian table
        $num = 0;
        $field = "guardian";
        $key = $field . $num;
        while (isset($_POST[$key])) {
            $value = $_POST[$key];
            $sql = "INSERT INTO `guardian` VALUES (DEFAULT, '$student_id', '$value[guardianFirstName]', '$value[guardianLastName]', '$value[guardianMI]', '$value[relationshipToStudent]', '$value[guardianIsMil]', '$value[guardianEmail]', '$value[guardianPhone]')";
            $success = mysqli_query($cnxn, $sql);
            $num++;
            $key = $field . $num;
        }
        
        //Insert the new sibling info into the siblingsattending table
        $num = 0;
        $field = "sibling";
        $key = $field . $num;
        while (isset($_POST[$key])) {
            $value = $_POST[$key];
            $sql = "INSERT INTO `siblingsattending` VALUES (DEFAULT, '$student_id', '$value[siblingFirstName]', '$value[siblingLastName]', '$value[siblingAge]', '$value[siblingSchool]', '$value[siblingGrade]')";
            $success = mysqli_query($cnxn, $sql);
            $num++;
            $key = $field . $num;
        }
        
        
        //Redirect to different page by the button user click
        if ($submit == 'save and exit') {
            header('Location:saveandexit.php');
            exit;
        } elseif (($submit == 'review and submit') && (!$missing)) {
			header('Location:summary.php');
            exit;
		}
	}
	
	
	//select student info from database and set all the variables to be sticky;
	if (!empty($student_id)) {
		$sql = "SELECT * FROM student WHERE student_id='$student_id'";
        $result = mysqli_query($cnxn, $sql);
        $row = mysqli_fetch_assoc($result);    
            
        //Make the fields sticky
        //print_r($row);
		$start_time=$row['start_time'];
		$submit_time=$row['submit_time'];
		$enrollment_status=$row['enrollment_status'];		
		
		$studentNameFirst=$row['studentNameFirst'];
		$studentNameMi=$row['studentNameMi'];
		$studentNameLast=$row['studentNameLast'];
		$studentNamePrevious=$row['studentNamePrevious'];
		$studentDateOfBirth=$row['studentDateOfBirth'];
		$studentCityOfBirth=$row['studentCityOfBirth'];
		$studentStateOfBirth=$row['studentStateOfBirth'];
		$studentCountryOfBirth=$row['studentCountryOfBirth'];
		$studentGender=$row['studentGender'];
		$studentRace = explode('|', $row['studentRace']);
		$studentEmail=$row['studentEmail'];
		$studentPhone=$row['studentPhone'];
		$studentFileUpload=$row['studentFileUpload'];		
		
		$familyCommunication=$row['familyCommunication'];
		$firstLanguage=$row['firstLanguage'];
		$studentHomeLanguage=$row['studentHomeLanguage'];
		$studentPrimaryLanguage=$row['studentPrimaryLanguage'];
		$developmentSupport=$row['developmentSupport'];
		$outsideEducation=$row['outsideEducation'];
		$developmentSupportMonths=$row['developmentSupportMonths'];
		$developmentSupportLanguage=$row['developmentSupportLanguage'];
		$firstAttendUS=$row['firstAttendUS'];		
		
		$participatePrograms = explode('|', $row['participatePrograms']);
		$expelled=$row['expelled'];
		$studentSchoolExperience=$row['studentSchoolExperience'];
		$studentSchoolFeedback=$row['studentSchoolFeedback'];		
		
		$residenceSituation=$row['residenceSituation'];
        $totalLivingInResidence=$row['totalLivingInResidence'];        
		$incomeAmount=$row['incomeAmount'];
		$income=$row['income'];
		$studentAddressStreet=$row['studentAddressStreet'];
		$studentAddressCity=$row['studentAddressCity'];
		$studentAddressState=$row['studentAddressState'];
		$studentAddressZip=$row['studentAddressZip'];
		$sameAsMailing=$row['sameAsMailing'];
		$mailingAddressStreet=$row['mailingAddressStreet'];
		$mailingAddressCity=$row['mailingAddressCity'];
		$mailingAddressState=$row['mailingAddressState'];
		$mailingAddressZip=$row['mailingAddressZip'];
		$emergencyContactFirst=$row['emergencyContactFirst'];
		$emergencyContactLast=$row['emergencyContactLast'];
		$emergencyContactPhone=$row['emergencyContactPhone'];
		$emergencyContactEmail=$row['emergencyContactEmail'];
		$emergencyContactRelationship=$row['emergencyContactRelationship'];
		$emergencyContactOther=$row['emergencyContactOther'];
		$distress=$row['distress'];
		$distressDetails=$row['distressDetails'];
		$holiday=$row['holiday'];
		$holidayDetails=$row['holidayDetails'];		
		
		$studentMedical = explode('|', $row['studentMedical']);
		$otherHealth=$row['otherHealth'];
		$anaphylacticAllergy=$row['anaphylacticAllergy'];
		$anaphylacticSymptoms=$row['anaphylacticSymptoms'];
		$epiPen=$row['epiPen'];
		$asthmaLength=$row['asthmaLength'];
		$asthmaMissedSchool=$row['asthmaMissedSchool'];
		$allergy=$row['allergy'];
		$allergySymptoms=$row['allergySymptoms'];
		$allergyMedication=$row['allergyMedication'];
		$homeMedication=$row['homeMedication'];
		$schoolMedication=$row['schoolMedication'];
		
		$discipline=$row['discipline'];
		$disciplineDetails=$row['disciplineDetails'];
		$behavior=$row['behavior'];
		$behaviorDetails=$row['behaviorDetails'];
		$studentAttributes=$row['studentAttributes'];
		$additionalInformation=$row['additionalInformation'];
        
        $agreements = explode('|', $row['agreements']);
		$signature=$row['signature'];

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
            <h1><img src="imgs/iG-resize.png" alt="Kent School District Banner">iGrad Application Form</h1>
		</div>
		<?php
        if (empty($student_id)) {
            echo '<div> <a href="login.php" class="btn btn-secondary ml-auto" id="returning">Returning Applicant?</a> </div>';
        }
        ?>

        <!-- Nav tabs -->
        <div class="container group">
            <ul class="nav nav-tabs nav-fill" id="navigation" role="tablist">
              <li class="nav-item">
                <a class="nav-link next-tab active" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">
                    Personal <!-- <span class="tabicon incomplete">&#10005;</span> -->
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link next-tab" id="language-tab" data-toggle="tab" href="#language" role="tab" aria-controls="language" aria-selected="false">
                    Language  <!-- <span class="tabicon incomplete">&#10005;</span> -->
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link next-tab" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">
                    Education  <!-- <span class="tabicon incomplete">&#10005;</span> -->
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link next-tab" id="household-tab" data-toggle="tab" href="#household" role="tab" aria-controls="household" aria-selected="false">
                    Household Information  <!-- <span class="tabicon incomplete">&#10005;</span> -->
                </a>
              </li>
                <li class="nav-item">
                <a class="nav-link" id="health-tab" data-toggle="tab" href="#health" role="tab" aria-controls="health" aria-selected="false">
                    Health/Wellness  <!-- <span class="tabicon incomplete">&#10005;</span> -->
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">
                    Other Info  <!-- <span class="tabicon incomplete">&#10005;</span> -->
                </a>
              </li>
            </ul>
        
        
            <!-- Start the form here -->
			<form method="post" action="#">
			<!-- <form method="post" action="summary.php"> -->
			<!-- Tab Content -->
            <div class="tab-content" id="myTabContent">                
				
                <!-- Personal Tab -->
                <div class="tab-pane fade next-panel active show" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                    <?php include 'personal-tab.php';?>
                </div>
                
                <!-- Language Tab -->
                <div class="tab-pane fade next-panel" id="language" role="tabpanel" aria-labelledby="language-tab">
                    <?php include 'language-tab.php';?>
                </div>
                
                <!-- Education Tab -->
                <div class="tab-pane fade next-panel" id="education" role="tabpanel" aria-labelledby="education-tab">
                    <?php include 'education-tab.php';?>
                </div>
                
                <!-- Parent/Guardian Tab -->
                <div class="tab-pane fade next-panel" id="household" role="tabpanel" aria-labelledby="household-tab">
                    <?php include 'household-tab.php';?>   
                </div>
                
                <!-- Health Tab -->
                <div class="tab-pane fade next-panel" id="health" role="tabpanel" aria-labelledby="health-tab">
                    <?php include 'health-tab.php';?>
                </div>
                
                <!-- Other Tab -->
                <div class="tab-pane fade next-panel" id="other" role="tabpanel" aria-labelledby="other-tab">
                    <?php include 'other-tab.php';?>
                </div>
				</div>
					<!-- Save and Exit Modal -->
					<div class="modal fade" id="saveAndExit" tabindex="-1" role="dialog" aria-labelledby="saveAndExitTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="saveAndExitTitle">Finished?</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									By clicking Save and Exit, we will send a random generated password to your email, so
                                    you can start where you left off when you return.<br>
									<hr>
                                    Please make sure the e-mail address you provided is correct:
									<div class="form-row">
										<ul>
											<li id='saveAndExitEmail'></li>
											<!-- <li>Password: &nbsp;<input class="" name="password" type="password" placeholder="Auto-generate if empty"></li> -->
										</ul>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Back to application</button>
                                    <input type="submit" name="submit" value="Save and exit" class="btn btn-primary">
									<!-- <button type="button" class="btn btn-primary">Save and exit</button> -->
								</div>
							</div>
						</div>
					</div>
			<!-- End the form here -->
			</form>
     </div>
		
			
		<!-- BootStrap JS -->
			
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
			
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.1/js/tether.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
		<script src='js/index.js'></script>     
		</body>
</html>