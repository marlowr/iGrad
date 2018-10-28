<?php /*
		This file is included in index.php under the health-tab div. Contains all relevant fields and information regarding the 
    health of the student.
		
		Work Done By:
		Ryan Marlow
		Mingjie Deng
		Shahbaz Iqbal
	*/
?>

<div>
<h5>Student Health/Wellness Information</h5>
<small class="form-text text-muted">
         * required fields. </small>
<hr>
</div>

 <p>This information is needed to plan an appropriate program for the student and to prepare for any emergency situation if one should arise.
Your school nurse will contact you if there are any additional questions.</p>

<h6>DOES THE STUDENT HAVE:</h6>
<div class="form-row">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#medHistory">
  MEDICAL HISTORY
  </button>     
  <button type="button" class="btn btn-primary collapse" data-toggle="modal" data-target="#anaphylaxis" id="anaphylaxisButton">
    Anaphylaxis
  </button>
  <button type="button" class="btn btn-primary collapse" data-toggle="modal" data-target="#diabetes" id="diabetesButton">
    Diabetes
  </button>
   <button type="button" class="btn btn-primary collapse" data-toggle="modal" data-target="#asthma" id="asthmaButton">
    Asthma
  </button>
   <button type="button" class="btn btn-primary collapse" data-toggle="modal" data-target="#allergies" id="allergiesButton">
    Allergies
  </button>
</div>

<!-- Copy and paste, so far and so on -->



<!-- Modal for MEDICAL HISTORY -->
<div class="modal fade" id="medHistory" tabindex="-1" role="dialog" aria-labelledby="medHistoryLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <!-- This is modal header -->
      <div class="modal-header">
        <h5 class="modal-title" id="medHistoryLabel">Check all that apply</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- This is modal content -->
      <!-- put your content here -->
           <div class="modal-body">
              <ul>
                <li>
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input medicalCheck" value="Allergies" data-toggle="collapse" data-target="#allergiesButton" <?php echo (isset($studentMedical) && in_array('Allergies', $studentMedical)) ? 'checked' : ''; ?>>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Allergies*</span>
                  </label>
                </li>
                <li>
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input medicalCheck" value="Anaphylaxis" data-toggle="collapse" data-target="#anaphylaxisButton" <?php echo (isset($studentMedical) && in_array('Anaphylaxis', $studentMedical)) ? 'checked' : ''; ?>>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Anaphylaxis (Life threatening allergy)* </span>
                  </label>
                </li>
                <li>
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input medicalCheck" value="Bee/Insect allergy" <?php echo (isset($studentMedical) && in_array('Bee/Insect allergy', $studentMedical)) ? 'checked' : ''; ?>>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Bee/Insect allergy</span>
                  </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input medicalCheck" value="Asthma" data-toggle="collapse" data-target="#asthmaButton" <?php echo (isset($studentMedical) && in_array('Asthma', $studentMedical)) ? 'checked' : ''; ?>>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Asthma*</span>
                  </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Birth Defect" <?php echo (isset($studentMedical) && in_array('Birth Defect', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Concerns/defect present at birth</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Frequent ear infections" <?php echo (isset($studentMedical) && in_array('Frequent ear infections', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Frequent ear infections</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Hearing loss" <?php echo (isset($studentMedical) && in_array('Hearing loss', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Hearing loss</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Speech difficulties" <?php echo (isset($studentMedical) && in_array('Speech difficulties', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Speech difficulties</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Severe headaches" <?php echo (isset($studentMedical) && in_array('Severe headaches', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Severe headaches</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Seizures" <?php echo (isset($studentMedical) && in_array('Seizures', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Seizures</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Neurological condition" <?php echo (isset($studentMedical) && in_array('Neurological condition', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Neurological condition</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="ADD" <?php echo (isset($studentMedical) && in_array('ADD', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">ADD</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="ADHD" <?php echo (isset($studentMedical) && in_array('ADHD', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">ADHD</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Heart condition" <?php echo (isset($studentMedical) && in_array('Heart condition', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Heart condition</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Diabetes" data-toggle="collapse" data-target="#diabetesButton" <?php echo (isset($studentMedical) && in_array('Diabetes', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Diabetes*</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Blood disorder" <?php echo (isset($studentMedical) && in_array('Blood disorder', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Blood disorder</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Orthopedic condition" <?php echo (isset($studentMedical) && in_array('Orthopedic condition', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Orthopedic condition</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Chronic condition/disability" <?php echo (isset($studentMedical) && in_array('Chronic condition/disability', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Chronic condition/disability</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Vision concerns" <?php echo (isset($studentMedical) && in_array('Vision concerns', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Vision concerns</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Serious injury/surgery" <?php echo (isset($studentMedical) && in_array('Serious injury/surgery', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Serious injury/surgery</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Emotional health concerns" <?php echo (isset($studentMedical) && in_array('Emotional health concerns', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Emotional health concerns</span>
                   </label>
                </li>
                <li>
                   <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input medicalCheck" value="Other health concerns" <?php echo (isset($studentMedical) && in_array('Other health concerns', $studentMedical)) ? 'checked' : ''; ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Other health concerns</span>
                   </label>
                  <br>
                   <label for="otherHealth">Please explain if other:</label>
                   <input type="otherHealth" class="form-control" id="otherHealth" name="otherHealth" placeholder="Other" value="<?php echo isset($otherHealth)?$otherHealth:'';?>">
                </li>
              </ul>
      </div>

      <!-- This is modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
      </div>


    </div>
  </div>
</div>
<!-- The Modal End -->



<!-- Modal for Anaphylaxis -->
<div class="modal fade" id="anaphylaxis" tabindex="-1" role="dialog" aria-labelledby="anaphylaxisLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <!-- This is modal header -->
      <div class="modal-header">
        <h5 class="modal-title" id="anaphylaxisLabel">Anaphylaxis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- This is modal content -->
      <div class="modal-body">
      <p>If the student has an anaphylactic allergy as indicated, please answer the following questions: </p>
      <!-- put your content here -->
        <div class="form-row">
              <div class="form-group col-md-5">
                <label for="anaphylacticAllergy">1. What is the student allergic to? *</label>
                <input type="text" class="form-control" id="anaphylacticAllergy" name="anaphylacticAllergy" value="<?php echo isset($anaphylacticAllergy)?$anaphylacticAllergy:'';?>">
              </div>
              <div class="form-group col-md-5">
                <label for="anaphylacticSymptoms">2. What are the student's symptoms? *</label>
                <input type="text" class="form-control" id="anaphylacticSymptoms" name="anaphylacticSymptoms" value="<?php echo isset($anaphylacticSymptoms)?$anaphylacticSymptoms:'';?>">
              </div>
             <div class="form-group col-md-5">
                <div>
                  <p>3. Has the student been prescribed an Epi-Pen?</p>
                </div>
                <label class="custom-control custom-radio">
                    <input id="epiPen" name="epiPen" type="radio" class="custom-control-input" value="Yes" <?php echo (isset($epiPen) && $epiPen == "Yes") ? "checked='true'" : ""; ?>>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Yes</span>
                  </label>
                <label class="custom-control custom-radio">
                    <input id="noepiPen" name="epiPen" type="radio" class="custom-control-input" value="No" <?php echo (isset($epiPen) && $epiPen == "No") ? "checked='true'" : ""; ?>>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">No</span>
                  </label>
              </div>
         </div>
       <p> Please contact the school nurse to help implement your student's individualized healthcare plan. </p>
      </div>

      <!-- This is modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
      </div>
    </div>
  </div>
</div>

<!--MODELS ENDS HERE -->

      <!-- Modal for Diabetes -->
<div class="modal fade" id="diabetes" tabindex="-1" role="dialog" aria-labelledby="diabetes" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <!-- This is modal header -->
      <div class="modal-header">
        <h5 class="modal-title" id="anaphylaxisLabel">Diabetes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- This is modal content -->
      <div class="modal-body">

      <!-- put your content here -->
      <p> There is a state law, which requires all students with diabetes to have an individualized health care
      plan implemented in the school setting. If the student is diabetic, please contact the school nurse to help write your student's plan. </p>
      </div>

      <!-- This is modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
      </div>


    </div>
  </div>
</div>

<!--MODELS ENDS HERE -->


      <!-- Modal for Asthma -->
<div class="modal fade" id="asthma" tabindex="-1" role="dialog" aria-labelledby="asthma" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <!-- This is modal header -->
      <div class="modal-header">
        <h5 class="modal-title" id="asthmaLabel">Asthma</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- This is modal content -->
      <div class="modal-body">
  
          <!-- put your content here -->
          <p> If your student has asthma as indicated, please answer the following questions: </p>
    
          <div class="form-row">
            <label for="asthmaLength">1. How long has the student had asthma? *</label>
            <input type="text" class="form-control" id="asthmaLength" placeholder="Years" name="asthmaLength" value="<?php echo isset($asthmaLength)?$asthmaLength:'';?>">
          </div>
          <div class="form-row">
            <label for="asthmaMissedSchool">2. How many days has the student missed school last year due to asthma? *</label>
            <input type="text" class="form-control" id="asthmaMissedSchool" placeholder="Days" name="asthmaMissedSchool" value="<?php echo isset($asthmaMissedSchool)?$asthmaMissedSchool:'';?>">
          </div>
      </div>

      <!-- This is modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
      </div>


    </div>
  </div>
</div>

<!--MODELS ENDS HERE -->
  <!-- Modal for allergies -->
<div class="modal fade" id="allergies" tabindex="-1" role="dialog" aria-labelledby="allergies" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <!-- This is modal header -->
      <div class="modal-header">
        <h5 class="modal-title" id="allergiesLabel">Allergies</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- This is modal content -->
      <div class="modal-body">
  
          <!-- put your content here -->
          <p> If your student has allergies as indicated, please answer the following questions: </p>
    
          <div class="form-row">
            <label for="allergy">1. What is the student allergic to? *</label>
            <input type="text" class="form-control" placeholder="Peanuts,Dogs,Bees,etc..." name="allergy" value="<?php echo isset($allergy)?$allergy:'';?>">
          </div>
          <div class="form-row">
            <label for="allergySymptoms">2. What are the symptoms? *</label>
            <input type="text" class="form-control" placeholder="Skin rash,Headache,Swelling,etc..." name="allergySymptoms" value="<?php echo isset($allergySymptoms)?$allergySymptoms:'';?>">
          </div>
          <div class="form-row">
            <label for="allergyMedication">3. If taking medication, please indicate which: *</label>
            <input type="text" class="form-control" name="allergyMedication" placeholder="Zyrtec-D,Allegra D,Claritin D,etc..." value="<?php echo isset($allergyMedication)?$allergyMedication:'';?>">
          </div>
      </div>

      <!-- This is modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
      </div>


    </div>
  </div>
</div>

<!--MODELS ENDS HERE -->
<div class="form-group col-md-6">
      <p>Medical History:</p>
      <ul id = "medicalList">
        <!-- This filled out by jquery and race Selection -->
        <?php
          if (!empty($studentMedical)) {
            foreach ($studentMedical as $value) {
              if(!empty($value)) {
                echo "<li data-value='$value'> $value <input type='hidden' name='studentMedical[]' value='$value'/></li>";
              }
            }
          }
        ?>
      </ul>
  </div>
<hr>
<h5>MEDICATION</h5>
<div class="form-row">
  <div class="form-group col-md-4 <?php echo in_array('homeMedication', $missing)?'missing-field':''; ?>">
    <div>
      <p>Is medication needed at home? *</p>
    </div>
    <label class="custom-control custom-radio">
        <input id="homeMedication" name="homeMedication" type="radio" class="custom-control-input" value="Yes" <?php echo (isset($homeMedication) && $homeMedication == "Yes") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Yes</span>
      </label>
    <label class="custom-control custom-radio">
        <input id="noHomeMedication" name="homeMedication" type="radio" class="custom-control-input" value="No" <?php echo (isset($homeMedication) && $homeMedication == "No") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">No</span>
      </label>
</div>
<div class="form-group col-md-4 <?php echo in_array('schoolMedication', $missing)?'missing-field':''; ?>">
    <div>
      <p>Is medication needed at school? *</p>
    </div>
    <label class="custom-control custom-radio">
        <input id="schoolMedication" name="schoolMedication" type="radio" class="custom-control-input" value="Yes" <?php echo (isset($schoolMedication) && $schoolMedication == "Yes") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Yes</span>
      </label>
    <label class="custom-control custom-radio">
        <input id="noSchoolMedication" name="schoolMedication" type="radio" class="custom-control-input" value="No" <?php echo (isset($schoolMedication) && $schoolMedication == "No") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">No</span>
      </label>
</div>
</div>

<hr>
<div class="form-row">
<button type="button" class="btn btn-success saveAndExit" data-toggle="modal" data-target="#saveAndExit">
   Save and Exit
  </button>
  <a class="btn btn-secondary ml-auto prev">Previous</a>
  <a class="btn btn-secondary next">Next</a>
</div>