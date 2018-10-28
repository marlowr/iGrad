<?php /*
		This file is included in index.php under the education-tab div. Contains all relevant fields and information regarding the 
    previous education of the student.
		
		Work Done By:
		Ryan Marlow
		Mingjie Deng
		Shahbaz Iqbal
	*/
?>

<div>
<h5>Previous Education</h5>
  <small class="form-text text-muted">
         * required fields. 
  </small>
<hr>
</div>

<p>Please list every high school or institution in which you earned high school credit:</p>

<!-- Add school button *opens school modal* -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#schoolModal">
   + Add School
</button>

<!-- School Modal Start -->
<div class="modal fade" id="schoolModal" tabindex="-1" role="dialog" aria-labelledby="schoolModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="schoolModalLabel">Please list every high school or institution in which you earned high school credit: *</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="schoolGrade">Grade:</label>
                <input type="text" class="form-control" id="schoolGrade" placeholder="Grade(s) attended">
            </div>
            <div class="form-group col-md-5">
                <label for="schoolYear">Years(s) attended:</label>
                <input type="text" class="form-control" id="schoolYear" placeholder="Example: 2005-2010">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="schoolCity">City:</label>
                <input type="text" class="form-control" id="schoolCity" placeholder="City">
            </div>
            <div class="form-group col-md-5">
      <label for="schoolState">State:</label>
      <select class="form-control" id="schoolState">
          <option value="">Select</option>
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">District Of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="ME">Maine</option>
          <option value="MD">Maryland</option>
          <option value="MA">Massachusetts</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="RI">Rhode Island</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT">Utah</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
      </select>				
  </div>
           <div class="form-row col-md-10">
                <label for="previousSchool">School/Institution Name</label>
                <input type="text" class="form-control" id="schoolName" placeholder="School Name">
            </div>	
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="schoolDone">Done</button>
      </div>
    </div>
  </div>
</div>
<hr>
<div class="form-group col-md-10">
  <p>Student Schools:</p>
  <div id="studentSchoolList" class="form-row studentSchoolList">
      <!-- This filled out by user / School modal -->
      <?php
        $sql = "SELECT * FROM schoolHistory WHERE student_id='$student_id'";
        $result = mysqli_query($cnxn, $sql);
        for ($i=0; $i<mysqli_num_rows($result); $i++) {          
          $row = mysqli_fetch_assoc($result);
          
          $schoolName=$row['schoolName'];
          $schoolGrade=$row['schoolGrade'];
          $schoolYear=$row['schoolYear'];
          $schoolCity=$row['schoolCity'];
          $schoolState=$row['schoolState'];
          $whichSchool="studentSchool".$i;          
          
          echo "<ul name='$whichSchool'>";
          echo "<li>School: {$schoolName} <input type='hidden' name='{$whichSchool}[schoolName] 'value='{$schoolName}'/></li>";
          echo "<li>Highest Grade: $schoolGrade <input type='hidden' name='{$whichSchool}[schoolGrade] 'value='$schoolGrade'/></li>";
          echo "<li>Years: $schoolYear <input type='hidden' name='{$whichSchool}[schoolYear] 'value='$schoolYear'/></li>";
          echo "<li>City: $schoolCity <input type='hidden' name='{$whichSchool}[schoolCity] 'value='$schoolCity'/></li>";
          echo "<li>State: $schoolState <input type='hidden' name='{$whichSchool}[schoolState] 'value='$schoolState'/></li>";
          echo "<a class='btn btn-secondary btn-sm removeSchool'>Remove</a>";
          echo "</ul>";
        }
      ?>
  </div>
</div>
<hr>
 
<div class="form-row">
  
  <div class="form-group col-md-5">
    <p class="col-md-10"> Did you participate in any of the following programs? (Check all that apply)</p>
    <ul>
      <li>
         <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" value="Special Education" name="participatePrograms[]" <?php echo (isset($participatePrograms) && in_array('Special Education', $participatePrograms)) ? 'checked' : ''; ?>>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Special Education</span>
          </label>
      </li>
      <li>
       <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" value="Section 504" name="participatePrograms[]" <?php echo (isset($participatePrograms) && in_array('Section 504', $participatePrograms)) ? 'checked' : ''; ?>>
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">504</span>
        </label>
      </li>
      <li>
       <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" value="English Learner" name="participatePrograms[]" <?php echo (isset($participatePrograms) && in_array('English Learner', $participatePrograms)) ? 'checked' : ''; ?>>
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">English Language Learner</span>
       </label>
      </li>
  </ul>
  </div>
  
  <div class="form-group col-md-5 <?php echo in_array('expelled', $missing)?'missing-field':''; ?>">
    <p class="col-md-10">Are you currently suspended or expelled from a previous school? *</p>
      <label class="custom-control custom-radio">
        <input name="expelled" type="radio" value="Yes" <?php echo (isset($expelled) && $expelled == "Yes") ? "checked='true'" : ""; ?> class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Yes</span>
      </label>
      <label class="custom-control custom-radio">
        <input name="expelled" type="radio" value="No" <?php echo (isset($expelled) && $expelled == "No") ? "checked='true'" : ""; ?> class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">No</span>
      </label>
  </div>
</div>
<hr>
<div class="form-row">
  <div class="form-group col-md-5">
    <label for="studentSchoolExperience">How does the student like school? Previous teachers? Other Students?</label>
    <textarea class="form-control" id="studentSchoolExperience" rows="4" name="studentSchoolExperience"><?php echo isset($studentSchoolExperience) ? $studentSchoolExperience : '';?></textarea>
  </div>
   <div class="form-group col-md-5">
    <label for="studentSchoolFeedback">How is the student doing in school? (Grades,teacher feedback, etc.)</label>
    <textarea class="form-control" id="studentSchoolFeedback" rows="4" name="studentSchoolFeedback"><?php echo isset($studentSchoolFeedback) ? $studentSchoolFeedback : '';?></textarea>
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