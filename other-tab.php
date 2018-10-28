<?php 
/*
    other-tab.php
		This file is included in index.php under the other-tab div. Contains all relevant fields regarding
    miscellaneous infomration from the student.
		
		Work Done By:
		Ryan Marlow
		Mingjie Deng
		Shahbaz Iqbal
	*/
?>

<div>
<h5>Miscellaneous Information</h5> 
<small class="form-text text-muted">
         * required fields. </small>
<hr>
</div>
<!-- Other Tab-->

<div class="form-row">
  <div class="form-group col-md-6 <?php echo in_array('discipline', $missing)?'missing-field':''; ?>">
      <div>
          <p>Are there any past, current, or pending disciplinary actions involving the student? *</p>
      </div>
      <label class="custom-control custom-radio">
        <input id="disciplineYes" name="discipline" type="radio" class="custom-control-input" value="Yes" <?php echo (isset($discipline) && $discipline == "Yes") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Yes</span>
      </label>
      <label class="custom-control custom-radio">
        <input id="disciplineNo" name="discipline" type="radio" class="custom-control-input" value="No" <?php echo (isset($discipline) && $discipline == "No") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">No</span>
      </label>
      <div class="form-group col-md-8" id="disciplineDetails" <?php echo (isset($discipline) && $discipline == "Yes") ? "style='display: block;'" : ""; ?>>
        <label for="disciplineDetails">Please explain more: </label>
        <input type="text" class="form-control" name="disciplineDetails" value="<?php echo isset($disciplineDetails) ? $disciplineDetails : '';?>">
      </div>
  </div>
  <div class="form-group col-md-6 <?php echo in_array('behavior', $missing)?'missing-field':''; ?>">
      <div>
          <p>Does the student have any history of violent behavior, sex or criminal offense, or controlled substance or alcohol violation? *</p>
      </div>
      <label class="custom-control custom-radio ">
        <input id="behaviorYes" name="behavior" type="radio" class="custom-control-input" value="Yes" <?php echo (isset($behavior) && $behavior == "Yes") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Yes</span>
      </label>
      <label class="custom-control custom-radio">
        <input id="behaviorNo" name="behavior" type="radio" class="custom-control-input" value="No" <?php echo (isset($behavior) && $behavior == "No") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">No</span>
      </label>
      <div class="form-group col-md-8" id="behaviorDetails" <?php echo (isset($behavior) && $behavior == "Yes") ? "style='display: block;'" : ""; ?>>
      <label for="behaviorDetails">Please explain more: </label>
      <input type="text" class="form-control" name="behaviorDetails" value="<?php echo isset($behaviorDetails)?$behaviorDetails:'';?>">
      </div>
  </div>
</div>
<hr>

<div class="form-row">
  <div class="form-group col-md-6">
    <label for="studentAttributes">Briefly describe the student's strengths and weaknesses:</label>
    <input type="text" class="form-control" id="studentAttributes" name="studentAttributes" value="<?php echo isset($studentAttributes)?$studentAttributes:'';?>"></input>
  </div>
  <div class="form-group col-md-6">
    <label for="additionalInformation">Any additional information:</label>
    <input class="form-control" id="additionalInformation" name="additionalInformation" value="<?php echo isset($additionalInformation)?$additionalInformation:'';?>"></input>
  </div>
</div>


<hr>
<div class="form-row">
<a class="btn btn-secondary ml-auto prev">Previous</a>
<input type="submit" name="submit" value="Review and Submit" class="btn btn-success">
</div>