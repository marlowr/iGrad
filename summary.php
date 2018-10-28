<?php

/*
		summary.php
		This file shows a summary of information from the student as input from the iGrad application form.
		
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
	require '/home2/ryanmarl/include/common.inc.php';

	if (!isset($_SESSION['role'])) {
        header('Location:login.php');
    exit;
    }
	//set the student_id if available
	if (!empty($_GET['student_id'])) {
		$student_id = $_GET['student_id'];
	} elseif (isset($_SESSION['student_id'])) {
		$student_id = $_SESSION['student_id'];
	} else {
		//No running directly into this page, redirect to index.php
		echo "<meta http-equiv='refresh' content='3; url=index.php' />";
		echo "You are going in a wrong page, rediret after 3 seconds...";
		exit;
	}
    
    //Handle the submit form
    if (!empty($_POST['submit'])) {
        if ($_POST['submit'] == 'Submit' && !empty($_POST['agreements']) && !empty($_POST['signature'])) {  // Student submit the application
            
            $agreements = implode("|", $_POST['agreements']);
            $signature = mysqli_real_escape_string($cnxn, htmlentities(trim($_POST['signature'])));
            
            $sql = "UPDATE `student` SET `submit_time`='$curdate', `enrollment_status`='Submitted', `agreements`='$agreements', `signature`='$signature' WHERE student_id='$student_id'";
			
            $success = mysqli_query($cnxn, $sql); 
			if($success){
                header('Location:congratulation.php');
                exit;
            } else {
                echo "<p>Your application could not be submitted <br>".mysqli_error($cnxn)."</p>";
				exit;
            }
            
        } elseif ($_POST['submit'] == 'Approve') {  // Admin approve the application
            
            $sql = "UPDATE `student` SET `enrollment_status`='Approved' WHERE student_id='$student_id'";
			
            $success = mysqli_query($cnxn, $sql);
			if($success){
                header('Location:admin.php');
                exit;
            } else {
                echo "<p>Sql Server Error: <br>".mysqli_error($cnxn)."</p>";
				exit;
            }
        }
    }

		$sqlGuardian = "SELECT * FROM guardian WHERE student_id='$student_id'";
			$guardianResult = mysqli_query($cnxn, $sqlGuardian);
			

		$sqlSiblings = "SELECT * FROM siblingsattending WHERE student_id='$student_id'";
			$siblingsResult = mysqli_query($cnxn, $sqlSiblings);    
			

		$sql = "SELECT * FROM student WHERE student_id='$student_id'";
			$result = mysqli_query($cnxn, $sql);
			$row = mysqli_fetch_assoc($result);    
 
	

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
        <!-- Nav tabs -->
        <div class="container group">
            <ul class="nav nav-tabs nav-fill" id="navigation" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="summary-tab" role="tab" aria-controls="summary" aria-selected="true">
                    Summary
                </a>
              </li>
            </ul>
				<form method="post" action="summary.php?student_id=<?php echo $student_id; ?>">
			<!-- Tab Content -->
  		<div class="tab-content">                
                <!-- Summary Tab -->
                <div class="tab-pane fade next-panel active show" id="summary" role="tabpanel" aria-labelledby="summary-tab">
					<hr>
					<h5>Review Student Information</h5>
					<hr>
					<div class="form-row student-content">
						<div class="student-columns">
							<p><span class="bold">First Name:</span> <?php echo isset($studentNameFirst)?$studentNameFirst:'N/A';?></p>
							<p><span class="bold">Middle Initial:</span> <?php echo isset($studentNameMi)?$studentNameMi:'N/A';?></p>
							<p><span class="bold">Last Name:</span> <?php echo isset($studentNameLast)?$studentNameLast:'N/A';?></p>
							<p><span class="bold">Previous Name:</span> <?php echo isset($studentNamePrevious)?$studentNamePrevious:'N/A';?></p>
						</div>
						<div class="student-columns">
							<p><span class="bold">Date of Birth:</span> <?php echo isset($studentDateOfBirth)?$studentDateOfBirth:'N/A';?></p>
							<p><span class="bold">City of Birth:</span> <?php echo isset($studentCityOfBirth)?$studentCityOfBirth:'N/A';?></p>
							<p><span class="bold">State of Birth:</span> <?php echo isset($studentStateOfBirth)?$studentStateOfBirth:'N/A';?></p>
							<p><span class="bold">Country of Birth:</span> <?php echo isset($studentCountryOfBirth)?$studentCountryOfBirth:'N/A';?></p>
						</div>
					</div>
					<div class="form-row student-content">
						<div class="student-columns">
							<p><span class="bold">Gender:</span> <?php echo isset($studentGender)?$studentGender:'N/A';?></p>
							<p><span class="bold">Race:</span></p>
							<ul><?php
									//Displays all listed races.
									if(isset($studentRace)) {
										foreach ($studentRace as $race){
											echo "<li class='summarylist'>$race</li>";
										};
									} else {
										echo "<li class='summarylist'>N/A</li>";
									};
								?>
							</ul>
						</div>
						<div class="student-columns">
							<p><span class="bold">Email:</span> <?php echo isset($studentEmail)?$studentEmail:'N/A';?></p>
							<p><span class="bold">Phone:</span> <?php echo isset($studentPhone)?$studentPhone:'N/A';?></p>
							<p><span class="bold">ID Upload File:</span> <?php echo isset($studentFileUpload)?$studentFileUpload:'N/A';?></p>
						</div>
					</div>
					<hr>
					<h5>Review Language Information</h5>
					<hr>
					<div class="form-row student-content">
						<div class="student-columns">
							<p><span class="bold">Primary Language:</span> <?php echo isset($studentPrimaryLanguage)?$studentPrimaryLanguage:'N/A';?></p>
							<p><span class="bold">Family Language:</span> <?php echo isset($familyCommunication)?$familyCommunication:'N/A';?></p>
							<p><span class="bold">First Language:</span> <?php echo isset($firstLanguage)?$firstLanguage:'N/A';?></p>
							<p><span class="bold">Home Language:</span> <?php echo isset($studentHomeLanguage)?$studentHomeLanguage:'N/A';?></p>
						</div>
						<div class="student-columns">
							<p><span class="bold">English Language Development Support:</span> <?php echo isset($studentHomeLanguage)?$studentHomeLanguage:'N/A';?></p>
							<p><span class="bold">Foreign Education:</span> <?php echo isset($outsideEducation)?$outsideEducation:'N/A';?></p>
							<ul>
								<li class="summarylist">Number of Months:</span> <?php echo isset($outsideEducation)?$outsideEducation:'N/A';?></li>
								<li class="summarylist">Language of Instruction:</span> <?php echo isset($developmentSupportLanguage)?$developmentSupportLanguage:'N/A';?></li>
							</ul>
							<p><span class="bold">Grade Attending US School:</span> <?php echo isset($firstAttendUS)?$firstAttendUS:'N/A';?></p>
						</div>
					</div>
					<hr>
					<h5>Review Education Information</h5>
					<hr>
					<div class="form-row student-content">
						<div class="student-columns">
							<p><span class="bold">Schools Attended:</span></p>
							<?php
                  $schoolSql = "SELECT * FROM schoolHistory WHERE student_id='$student_id'";
                  $schoolResult = mysqli_query($cnxn, $schoolSql);
                  for ($i=0; $i<mysqli_num_rows($schoolResult); $i++) {          
                    $schoolRow = mysqli_fetch_assoc($schoolResult);
                    
                    $schoolName=$schoolRow['schoolName'];
                    $schoolGrade=$schoolRow['schoolGrade'];
                    $schoolYear=$schoolRow['schoolYear'];
                    $schoolCity=$schoolRow['schoolCity'];
                    $schoolState=$schoolRow['schoolState'];
                    $whichSchool="studentSchool".$i;          
                    
                    echo "<ul name='$whichSchool'>";
                    echo "<li class='summarylist'>School: {$schoolName} <input type='hidden' name='{$whichSchool}[schoolName] 'value='{$schoolName}'/></li>";
                    echo "<li class='summarylist'>Highest Grade: $schoolGrade <input type='hidden' name='{$whichSchool}[schoolGrade] 'value='$schoolGrade'/></li>";
                    echo "<li class='summarylist'>Years: $schoolYear <input type='hidden' name='{$whichSchool}[schoolYear] 'value='$schoolYear'/></li>";
                    echo "<li class='summarylist'>City: $schoolCity <input type='hidden' name='{$whichSchool}[schoolCity] 'value='$schoolCity'/></li>";
                    echo "<li class='summarylist'>State: $schoolState <input type='hidden' name='{$whichSchool}[schoolState] 'value='$schoolState'/></li>";
                    echo "</ul><br>";
                  }
                ?>				
							<p><span class="bold">Program Participation:</span></p>
							<ul>
								<?php
									//Displays all listed races.
									if(isset($participatePrograms)) {
										foreach ($participatePrograms as $program){
											echo "<li class='summarylist'> $program</li>";
										};
									} else {
										echo "<li class='summarylist'>N/A</li>";
									};
								?>
							</ul>
							<p><span class="bold">Expelled:</span> <?php echo isset($expelled)?$expelled:'N/A';?></p>
						</div>
						<div class="student-columns">
							<p><span class="bold">Student's Experience:</span> <?php echo isset($studentSchoolExperience)?$studentSchoolExperience:'N/A';?></p>
							<p><span class="bold">Student's Feedback:</span> <?php echo isset($studentSchoolFeedback)?$studentSchoolFeedback:'N/A';?></p>
						</div>
					</div>
					<hr>
					<h5>Review Household Information</h5>
					<hr>
					<div class="form-row student-content">
						<div class="student-columns">
							<p><span class="bold">Living Situation: </span> <?php echo isset($residenceSituation)?$residenceSituation:'N/A';?></p>
							<p><span class="bold">Income: </span> <?php echo isset($incomeAmount)?"$" . $incomeAmount . " ":' N/A ';
																		echo isset($income)?$income: ' N/A ';?></p>
							<p><span class="bold">Emergency Contact: </span></p>
							<ul>
								<li class='summarylist'>First: <?php echo isset($emergencyContactFirst)?$emergencyContactFirst:'N/A';?></li>
								<li class='summarylist'>Last: <?php echo isset($emergencyContactLast)?$emergencyContactLast:'N/A';?></li>
								<li class='summarylist'>Phone: <?php echo isset($emergencyContactPhone)?$emergencyContactPhone:'N/A';?></li>
								<li class='summarylist'>E-mail: <?php echo isset($emergencyContactEmail)?$emergencyContactEmail:'N/A';?></li>
								<li class='summarylist'>Relation to Student: <?php echo isset($emergencyContactRelationship)?$emergencyContactRelationship:'N/A';?></li>
								<?php
									if(!isset($emergencyContactOther))
									{
										echo "<li class='summarylist'>" . $emergencyContactOther . "</li>";
									}
								?>
							</ul>
						</div>
						<div class="student-columns">
							<p><span class="bold">Residence Address: </span></p>
							<ul>
								<li class='summarylist'>Street: <?php echo isset($studentAddressStreet)?$studentAddressStreet:'N/A';?></li>
								<li class='summarylist'>City: <?php echo isset($studentAddressCity)?$studentAddressCity:'N/A';?></li>
								<li class='summarylist'>State: <?php echo isset($studentAddressState)?$studentAddressState:'N/A';?></li>
								<li class='summarylist'>Zip: <?php echo isset($studentAddressZip)?$studentAddressZip:'N/A';?></li>
								<li class='summarylist'>Same as mailing: <?php echo isset($sameAsMailing)?$sameAsMailing:'N/A';?></li>
							</ul>
							<?php if(isset($sameAsMailing) && $sameAsMailing == "No") {
									echo "<p><span class='bold'>Mailing Address: </span></p>";
									echo "<ul>";
									echo "<li class='summarylist'>Street: <?php echo isset($mailingAddressStreet)?$mailingAddressStreet:'N/A';?></li>";
									echo "<li class='summarylist'>City: <?php echo isset($mailingAddressCity)?$mailingAddressCity:'N/A';?></li>";
									echo "<li class='summarylist'>State: <?php echo isset($mailingAddressState)?$mailingAddressState:'N/A';?></li>";
									echo "<li class='summarylist'>Zip: <?php echo isset($mailingAddressZip)?$mailingAddressZip:'N/A';?></li>";
									echo "</ul>";
							};?>
							<p><span class="bold">Distress in Family:</span> <?php echo isset($distress)?$distress:'N/A';?></p>
							
							<?php
								if(!isset($distressDetails))
								 echo "<ul><li class='summarylist'>Details: " . $distressDetails . "</li></ul>";
							?>
						</div>
					</div>
					<div class="form-row student-content">
						<div class="student-columns">
							<p><span class="bold">Parent/Guardian: </span></p>
							
								<?php
							while($guardianRows = mysqli_fetch_assoc($guardianResult))	{
                echo "<ul>";
								echo "<li class='summarylist'>Name: " . $guardianRows['guardianFirstName'] . " " . $guardianRows['guardianMI'] . " " . $guardianRows['guardianLastName'] . "</li>";
								echo "<li class='summarylist'>Email: " . $guardianRows['guardianEmail'] . "</li>";
								echo "<li class='summarylist'>Phone: " . $guardianRows['guardianPhone'] . "</li>";
								echo "<li class='summarylist'>Relation: " . $guardianRows['relationshipToStudent'] . "</li>";
								echo "<li class='summarylist'>Military: " . $guardianRows['guardianIsMil'] . "</li>";
                echo "</ul>";
								}
							?>
							<p><span class="bold">Family Celebrates Holidays: </span> <?php echo isset($holiday)?$holiday:'N/A';?></p>
							<?php
								if(!isset($holidayDetails))
								 echo "<ul><li class='summarylist'>Details: " . $holidayDetails . "</li></ul>";
							?>
						</div>
						<div class="student-columns">
							<p><span class="bold">Siblings: </span></p>
							<?php
								while($siblingRows = mysqli_fetch_assoc($siblingsResult))	{
                  echo "<ul>";
									echo "<li class='summarylist'>Name: " . $siblingRows['siblingFirstName'] . " " . $siblingRows['siblingLastName'] . "</li>";
									echo "<li class='summarylist'>Age: " . $siblingRows['siblingAge'] . "</li>";
									echo "<li class='summarylist'>School: " . $siblingRows['siblingSchool'] . "</li>";
									echo "<li class='summarylist'>Grade: " . $siblingRows['siblingGrade'] . "</li>";
                  echo "</ul>";
								}
							?>
						
						</div>
					</div>
					<hr>
					<h5>Review Medical Information</h5>
					<hr>
					<div class="form-row student-content">
						<div class="student-columns">
							<p><span class="bold">Student Medical History: </span></p>
							<ul>
							<?php
								if(isset($studentMedical)) {
									foreach($studentMedical as $medical)
									{
										echo "<li class='summarylist'>$medical</li>";
									};
									if(isset($otherHealth)) {
										echo "<li class='summarylist'>$otherHealth</li>";
									};
								} else {
									echo "<li class='summarylist'>N/A</li>";
								};
							?>
							</ul>
					</div>
					</div>
					<hr>
					<h5>Review Other Information</h5>
					<hr>
					<div class="form-row student-content">
						<div class="student-columns">
							<p><span class="bold">Disciplinary Action: </span> <?php echo isset($discipline)?$discipline:'N/A';?></p>
							<ul>
							<?php
								if(isset($discipline) && $discipline == "Yes")
								{
									echo "<li class='summaryList'>Details: " . isset($disciplineDetails)?$disciplineDetails:'N/A';
								}
							?>
							</ul>
						</div>
						<div class="student-columns">
							<p><span class="bold">Criminal Behavior: </span> <?php echo isset($behavior)?$behavior:'N/A';?></p>
							<ul>
							<?php
								if(isset($behavior) && $behavior == "Yes")
								{
									echo "<li class='summaryList'>Details: " . isset($behaviorDetails)?$behaviorDetails:'N/A';
								}
							?>
							</ul>
						</div>
					</div>
					<div class="form-row student-content">
						<div class="student-columns">
							<p><span class="bold">Strengths/Weaknesses: </span> <?php echo isset($studentAttributes)?$studentAttributes:'N/A';?></p>
						</div>
						<div class="student-columns">
							<p><span class="bold">Additional Information: </span> <?php echo isset($additionalInformation)?$additionalInformation:'N/A';?></p>
						</div>
					</div>
				</div>
				<hr>
				<div class="form-row signatures">
					<label class="custom-control custom-checkbox">
						
            <!--<span class="tabicon complete">&#10003;</span>-->
            <input type="checkbox" class="custom-control-input" name="agreements[]" value="emergencyContactRelease" <?php echo in_array('emergencyContactRelease', $agreements) ? 'checked' : ''; ?>>
						
            <span class="custom-control-indicator"></span>
						<span class="custom-control-description authorize">STUDENT RELEASE AUTHORIZATION: In the event the school is unable 
						to contact the parents or legal guardian, I authorize my student to be release to the person(s) listed as 
						emergency contacts.</span>
					</label>
				
					<label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="agreements[]" value="emergencyMedicalAuthority" <?php echo in_array('emergencyMedicalAuthority', $agreements) ? 'checked' : ''; ?>>
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description authorize">EMERGENCY MEDICAL AUTHORIZATION: If the parents or legal guardian
						on record cannot be reached at the time of an emergency, and if immediate observation or treatment is urgent
						in the judgment of the school authorities, I authorize and direct the school authorizties to send the student
						(properly accompanied) to the hospital or doctor most easily accessible. I understand I will assume full 
						responsibility for the payment of any services rendered.</span>
					</label>
					
					<label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="agreements[]" value="householdVerify" <?php echo in_array('householdVerify', $agreements) ? 'checked' : ''; ?>>
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description authorize">HEAD OF HOUSEHOLD: I certify (promise) that all information
						on this application is true and that all income is reported. I understand that iGrad will get state and federal
						funds basd on the information I give. I understand that school officials may verify (check) this information. 
						I understand if I purposely give false information that I may be prosecuted. I understand the student's economic
						status may be shared with other programs/agencies as allowed by law.
						</span>
					</label>
					
					<label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="agreements[]" value="kclsksdStudentAccount" <?php echo in_array('kclsksdStudentAccount', $agreements) ? 'checked' : ''; ?>>
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description authorize">I DO NOT want the student to be included in the KCLS/KSD Student Account Program</span>
					</label>
					
					<label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="agreements[]" value="informationVerify" <?php echo in_array('informationVerify', $agreements) ? 'checked' : ''; ?>>
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description authorize">I verify all the information on this form to be true and accurate to the best of my knowledge.</span>
					</label>
				</div>
	<hr>
				<label>Parent/Guardian (or student if over 18) Signature</label>
				<div class="col-md-6">
					<input type="text" class="form-control" name="signature" value="<?php echo isset($signature)?$signature:'';?>" placeholder="First Middle Last">
				</div>
	<hr>
				<div class="form-row">
						<?php
								if (isset($_SESSION['role']) && $_SESSION['role'] == 2) { // 1:student
										echo '<a class="btn btn-secondary ml-auto" href="admin.php">Back To List</a>';
										echo '<input type="submit" name="submit" value="Approve" class="btn btn-success">';   
								} elseif (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
									echo '<a class="btn btn-secondary ml-auto" href="index.php">Edit Application</a>';
									echo '<input type="submit" name="submit" value="Submit" class="btn btn-success">';
								}
						?>
					
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
		<script src='js/index.js'></script>        
    </body>
</html>