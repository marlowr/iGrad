<?php 
  /*
    language-tab.php
		This file is included in index.php under the language-tab div. Contains all relevant fields and information regarding the 
    language of the student and family.
		
		Work Done By:
		Ryan Marlow
		Mingjie Deng
		Shahbaz Iqbal
	*/
?>

<div>
<h5>Right to Translation and Interpretation Services</h5>
<small class="form-text text-muted">
         * required fields. </small>
<hr>
</div>
<p>Indicate your language preference so we can provide an interpreter or translated documents, free of charge, when you need them.</p>       
<p>All parents have the right to information about their student's education in a language they understand.</p>

<div class="form-row">
  <div class="form-group col-md-4">
      <label for="familyCommunication">1. In what language(s) would your family prefer to communicate with school? *</label>
      <input type="text" class="form-control <?php echo in_array('familyCommunication', $missing)?'missing-field':''; ?>" id="familyCommunication" name="familyCommunication" value="<?php echo isset($familyCommunication)?$familyCommunication:'';?>" placeholder="Enter Language"> <!--ADDED NAME HERE -->
  </div>
</div>
<hr>
<h5> Eligibility for Language Development Support Information about the student's language helps us identify students who qualify for support to develop the language skills necessary for success in school. Testing may be necessary to detemine if language supports are needed.</h5>

<div class="form-row">
  <div class="form-group col-md-4">
      <label for="studentFirstLanguage">2. What language did the student learn first? *</label>
      <input type="text" class="form-control <?php echo in_array('firstLanguage', $missing)?'missing-field':''; ?>" id="firstLanguage" name="firstLanguage" value="<?php echo isset($firstLanguage)?$firstLanguage:'';?>" placeholder="Enter Language"> <!--ADDED NAME HERE -- MING UPLOADED ON GOOOGLE DOC FOR TEXT BOX> -->
  </div>
  <div class="form-group col-md-5">
      <label for="studentHomeLanguage">3. What language does the student use primarily at home? *</label>&nbsp;
      <input type="text" class="form-control <?php echo in_array('studentHomeLanguage', $missing)?'missing-field':''; ?>" id="studentHomeLanguage" name="studentHomeLanguage" value="<?php echo isset($studentHomeLanguage)?$studentHomeLanguage:'';?>" placeholder="Enter Language"> <!--ADDED NAME HERE -->
  </div>
    <div class="form-group col-md-6">
      <label for="studentPrimaryLanguage">4. What is the primary language used in the home, regardless of the language spoken by the student? *</label>
      <input type="text" class="form-control <?php echo in_array('studentPrimaryLanguage', $missing)?'missing-field':''; ?>" id="studentLanguage" name="studentPrimaryLanguage" value="<?php echo isset($studentPrimaryLanguage)?$studentPrimaryLanguage:'';?>" placeholder="Enter Language"> <!--ADDED NAME HERE -->
  </div>
    <div class="form-group col-md-4 <?php echo in_array('developmentSupport', $missing)?'missing-field':''; ?>">
      <label for="developmentSupport" >5. Has the student received English language development supporting a previous school? *</label>
          <label class="custom-control custom-radio">
            <input id="yes" name="developmentSupport" type="radio" value="yes" <?php echo (isset($developmentSupport) && $developmentSupport == "yes") ? "checked='true'" : ""; ?> class="custom-control-input "> <!--FOR RADIO BUTTON...ADDED HERE  UPDATED ONE-->
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Yes</span>
           </label>
           <label class="custom-control custom-radio">
            <input id="female" name="developmentSupport" type="radio" value="no" <?php echo (isset($developmentSupport) && $developmentSupport == "no") ? "checked='true'" : ""; ?> class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">No</span>
          </label>
        </div>
</div>
<hr>
<h5>Prior Education</h5>
<p> Your responses about the student's birth country and previous education: </p>
   <p> • Give us information about the knowledge and skills the student is bringing to school. </p>
   <p> • May enable the school district to receive additional federal funding to provide support to the student.</p>
<div class="form-row">
  <div class="form-group col-md-4 <?php echo in_array('outsideEducation', $missing)?'missing-field':''; ?>">
      <label for="outsideEducation">6. Has the student ever received formal education outside of the United States? (Kindergarten - 12  grade) *</label>
        <label class="custom-control custom-radio">
            <input id="outsideEducation" name="outsideEducation" type="radio" class="custom-control-input" value="Yes" <?php echo (isset($outsideEducation) && $outsideEducation == "Yes") ? "checked='true'" : ""; ?>>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Yes</span>
           </label>
           <label class="custom-control custom-radio">
            <input id="noOutsideEducation" name="outsideEducation" type="radio" class="custom-control-input" value="No" <?php echo (isset($outsideEducation) && $outsideEducation == "No") ? "checked='true'" : ""; ?>>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">No</span>
          </label>
          <!-- Hidden Div -->
          <div id="foreignEducation">
            <div class="form-group col-md-8">
                <label for="developmentSupportMonths">Number of months:</label>
                <input type="text" class="form-control <?php echo in_array('suppportmonths', $missing)?'missing-field':''; ?>" id="developmentSupportMonths" name="suppportmonths" value="<?php echo isset($suppportmonths)?$suppportmonths:'';?>" placeholder="Months"> <!--ADDED NAME HERE -->
            </div>
            <div class="form-group col-md-8">
                <label for="developmentSupportLanguage">Language of instruction:</label>
                <input type="text" class="form-control <?php echo in_array('supportlang', $missing)?'missing-field':''; ?>" id="developmentSupportLanguage" name="supportlang" value="<?php echo isset($supportlang)?$supportlang:'';?>" placeholder="Language"> <!--ADDED NAME HERE -->
            </div>
          </div>
  </div>
</div>


<div class="form-row">
    <div class="form-group col-md-3">
      <label for="firstAttendUS">7. When did the student first attend a school in the United States? (Kindergarten - 12  grade) *</label>
      <input type="text" class="form-control <?php echo in_array('firstAttendUS', $missing)?'missing-field':''; ?>" id="firstAttendUS" name="firstAttendUS" value="<?php echo isset($firstAttendUS)?$firstAttendUS:'';?>" placeholder="Grade">
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