<?php 
/*
    household-tab.php
		This file is included in index.php under the household-tab div. Contains all relevant fields and information regarding the 
    household of the student, including income, parent/guardians and other children in the home.
		
		Work Done By:
		Ryan Marlow
		Mingjie Deng
		Shahbaz Iqbal
	*/
?>

<div>
<h5>Household/Residence Information</h5>
<small class="form-text text-muted">
         * required fields. </small>
<hr>
</div>
<div class="form-row">
  <div class="form-group col-md-5 <?php echo in_array('residenceSituation', $missing)?'missing-field':''; ?>">
    <div>
      <p>Living Situation: *</p>
    </div>
    <label class="custom-control custom-radio">
        <input id="notHomeless" name="residenceSituation" type="radio" class="custom-control-input" value="Not Homeless" <?php echo (isset($residenceSituation) && $residenceSituation == "Not Homeless") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Living in Residence</span>
      </label>
    <label class="custom-control custom-radio">
        <input id="homeless" name="residenceSituation" type="radio" class="custom-control-input" value="Distressed" <?php echo (isset($residenceSituation) && $residenceSituation == "Distressed") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Homeless/Distressed</span>
      </label>
    <label for="totalLivingInResidence">Individuals Living In Residence: *</label>
    <div class="col-md-3"> 
    <input type="text" class="form-control <?php echo in_array('totalLivingInResidence', $missing)?'missing-field':''; ?>" id="totalLivingInResidence" placeholder="Total" name="totalLivingInResidence" value="<?php echo isset($totalLivingInResidence)?$totalLivingInResidence:'';?>">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="incomeDetails">Houshold Income: *</label>
    <div class="input-group">
      <span class="input-group-addon">$</span>
        <input type="text" class="form-control <?php echo in_array('incomeAmount', $missing)?'missing-field':''; ?>" placeholder="Income" name="incomeAmount" value="<?php echo isset($incomeAmount)?$incomeAmount:'';?>"/>
    </div>
    <label class="custom-control custom-radio"> 
        <input name="income" type="radio" class="custom-control-input" value="Monthly" <?php echo (isset($income) && $income == "Monthly") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Monthly</span>
     </label>
    <label class="custom-control custom-radio">
        <input name="income" type="radio" class="custom-control-input" value="Yearly" <?php echo (isset($income) && $income == "Yearly") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Yearly</span>
      </label>
  </div>
</div>
<hr>



<h6>Current Residence</h6>
<div class="form-row">
  <div class="form-group col-md-3">
    <label for="studentAddressStreet">Street *</label>
    <input type="text" class="form-control <?php echo in_array('studentAddressStreet', $missing)?'missing-field':''; ?>" id="studentAddressStreet" placeholder="Street" name="studentAddressStreet" value="<?php echo isset($studentAddressStreet)?$studentAddressStreet:'';?>">
  </div>
  <div class="form-group col-md-3">
    <label for="studentAddressCity">City *</label>
    <input type="text" class="form-control <?php echo in_array('studentAddressCity', $missing)?'missing-field':''; ?>" id="studentAddressCity" placeholder="City" name="studentAddressCity" value="<?php echo isset($studentAddressCity)?$studentAddressCity:'';?>">
  </div>
  <div class="form-group col-md-2">
    <label for="studentAddressState">State *</label>
    <select class="form-control <?php echo in_array('studentAddressState', $missing)?'missing-field':''; ?>" id="studentAddressState" name="studentAddressState">
          <option value="">Select</option>
          <option value="AL" <?php echo (isset($studentAddressState) && $studentAddressState == 'AL') ? 'selected="selected"' : ''; ?>>Alabama</option>
          <option value="AK" <?php echo (isset($studentAddressState) && $studentAddressState == 'AK') ? 'selected="selected"' : ''; ?>>Alaska</option>
          <option value="AZ" <?php echo (isset($studentAddressState) && $studentAddressState == 'AZ') ? 'selected="selected"' : ''; ?>>Arizona</option>
          <option value="AR" <?php echo (isset($studentAddressState) && $studentAddressState == 'AR') ? 'selected="selected"' : ''; ?>>Arkansas</option>
          <option value="CA" <?php echo (isset($studentAddressState) && $studentAddressState == 'CA') ? 'selected="selected"' : ''; ?>>California</option>
          <option value="CO" <?php echo (isset($studentAddressState) && $studentAddressState == 'CO') ? 'selected="selected"' : ''; ?>>Colorado</option>
          <option value="CT" <?php echo (isset($studentAddressState) && $studentAddressState == 'CT') ? 'selected="selected"' : ''; ?>>Connecticut</option>
          <option value="DE" <?php echo (isset($studentAddressState) && $studentAddressState == 'DE') ? 'selected="selected"' : ''; ?>>Delaware</option>
          <option value="DC" <?php echo (isset($studentAddressState) && $studentAddressState == 'DC') ? 'selected="selected"' : ''; ?>>District Of Columbia</option>
          <option value="FL" <?php echo (isset($studentAddressState) && $studentAddressState == 'FL') ? 'selected="selected"' : ''; ?>>Florida</option>
          <option value="GA" <?php echo (isset($studentAddressState) && $studentAddressState == 'GA') ? 'selected="selected"' : ''; ?>>Georgia</option>
          <option value="HI" <?php echo (isset($studentAddressState) && $studentAddressState == 'HI') ? 'selected="selected"' : ''; ?>>Hawaii</option>
          <option value="ID" <?php echo (isset($studentAddressState) && $studentAddressState == 'ID') ? 'selected="selected"' : ''; ?>>Idaho</option>
          <option value="IL" <?php echo (isset($studentAddressState) && $studentAddressState == 'IL') ? 'selected="selected"' : ''; ?>>Illinois</option>
          <option value="IN" <?php echo (isset($studentAddressState) && $studentAddressState == 'IN') ? 'selected="selected"' : ''; ?>>Indiana</option>
          <option value="IA" <?php echo (isset($studentAddressState) && $studentAddressState == 'IA') ? 'selected="selected"' : ''; ?>>Iowa</option>
          <option value="KS" <?php echo (isset($studentAddressState) && $studentAddressState == 'KS') ? 'selected="selected"' : ''; ?>>Kansas</option>
          <option value="KY" <?php echo (isset($studentAddressState) && $studentAddressState == 'KY') ? 'selected="selected"' : ''; ?>>Kentucky</option>
          <option value="LA" <?php echo (isset($studentAddressState) && $studentAddressState == 'LA') ? 'selected="selected"' : ''; ?>>Louisiana</option>
          <option value="ME" <?php echo (isset($studentAddressState) && $studentAddressState == 'ME') ? 'selected="selected"' : ''; ?>>Maine</option>
          <option value="MD" <?php echo (isset($studentAddressState) && $studentAddressState == 'MD') ? 'selected="selected"' : ''; ?>>Maryland</option>
          <option value="MA" <?php echo (isset($studentAddressState) && $studentAddressState == 'MA') ? 'selected="selected"' : ''; ?>>Massachusetts</option>
          <option value="MI" <?php echo (isset($studentAddressState) && $studentAddressState == 'MI') ? 'selected="selected"' : ''; ?>>Michigan</option>
          <option value="MN" <?php echo (isset($studentAddressState) && $studentAddressState == 'MN') ? 'selected="selected"' : ''; ?>>Minnesota</option>
          <option value="MS" <?php echo (isset($studentAddressState) && $studentAddressState == 'MS') ? 'selected="selected"' : ''; ?>>Mississippi</option>
          <option value="MO" <?php echo (isset($studentAddressState) && $studentAddressState == 'MO') ? 'selected="selected"' : ''; ?>>Missouri</option>
          <option value="MT" <?php echo (isset($studentAddressState) && $studentAddressState == 'MT') ? 'selected="selected"' : ''; ?>>Montana</option>
          <option value="NE" <?php echo (isset($studentAddressState) && $studentAddressState == 'NE') ? 'selected="selected"' : ''; ?>>Nebraska</option>
          <option value="NV" <?php echo (isset($studentAddressState) && $studentAddressState == 'NV') ? 'selected="selected"' : ''; ?>>Nevada</option>
          <option value="NH" <?php echo (isset($studentAddressState) && $studentAddressState == 'NH') ? 'selected="selected"' : ''; ?>>New Hampshire</option>
          <option value="NJ" <?php echo (isset($studentAddressState) && $studentAddressState == 'NJ') ? 'selected="selected"' : ''; ?>>New Jersey</option>
          <option value="NM" <?php echo (isset($studentAddressState) && $studentAddressState == 'NM') ? 'selected="selected"' : ''; ?>>New Mexico</option>
          <option value="NY" <?php echo (isset($studentAddressState) && $studentAddressState == 'NY') ? 'selected="selected"' : ''; ?>>New York</option>
          <option value="NC" <?php echo (isset($studentAddressState) && $studentAddressState == 'NC') ? 'selected="selected"' : ''; ?>>North Carolina</option>
          <option value="ND" <?php echo (isset($studentAddressState) && $studentAddressState == 'ND') ? 'selected="selected"' : ''; ?>>North Dakota</option>
          <option value="OH" <?php echo (isset($studentAddressState) && $studentAddressState == 'OH') ? 'selected="selected"' : ''; ?>>Ohio</option>
          <option value="OK" <?php echo (isset($studentAddressState) && $studentAddressState == 'OK') ? 'selected="selected"' : ''; ?>>Oklahoma</option>
          <option value="OR" <?php echo (isset($studentAddressState) && $studentAddressState == 'OR') ? 'selected="selected"' : ''; ?>>Oregon</option>
          <option value="PA" <?php echo (isset($studentAddressState) && $studentAddressState == 'PA') ? 'selected="selected"' : ''; ?>>Pennsylvania</option>
          <option value="RI" <?php echo (isset($studentAddressState) && $studentAddressState == 'RI') ? 'selected="selected"' : ''; ?>>Rhode Island</option>
          <option value="SC" <?php echo (isset($studentAddressState) && $studentAddressState == 'SC') ? 'selected="selected"' : ''; ?>>South Carolina</option>
          <option value="SD" <?php echo (isset($studentAddressState) && $studentAddressState == 'SD') ? 'selected="selected"' : ''; ?>>South Dakota</option>
          <option value="TN" <?php echo (isset($studentAddressState) && $studentAddressState == 'TN') ? 'selected="selected"' : ''; ?>>Tennessee</option>
          <option value="TX" <?php echo (isset($studentAddressState) && $studentAddressState == 'TX') ? 'selected="selected"' : ''; ?>>Texas</option>
          <option value="UT" <?php echo (isset($studentAddressState) && $studentAddressState == 'UT') ? 'selected="selected"' : ''; ?>>Utah</option>
          <option value="VT" <?php echo (isset($studentAddressState) && $studentAddressState == 'VT') ? 'selected="selected"' : ''; ?>>Vermont</option>
          <option value="VA" <?php echo (isset($studentAddressState) && $studentAddressState == 'VA') ? 'selected="selected"' : ''; ?>>Virginia</option>
          <option value="WA" <?php echo (!isset($studentAddressState) || empty($studentAddressState) || $studentAddressState == 'WA') ? 'selected="selected"' : ''; ?>>Washington</option>
          <option value="WV" <?php echo (isset($studentAddressState) && $studentAddressState == 'WV') ? 'selected="selected"' : ''; ?>>West Virginia</option>
          <option value="WI" <?php echo (isset($studentAddressState) && $studentAddressState == 'WI') ? 'selected="selected"' : ''; ?>>Wisconsin</option>
          <option value="WY" <?php echo (isset($studentAddressState) && $studentAddressState == 'WY') ? 'selected="selected"' : ''; ?>>Wyoming</option>
          <option value="N/A" <?php echo (isset($studentAddressState) && $studentAddressState == 'N/A') ? 'selected="selected"' : ''; ?>>>Does Not Apply</option>
        </select>
  </div>
  <div class="form-group col-md-2">
    <label for="studentAddressZip">Zip</label>
    <input type="text" class="form-control <?php echo in_array('studentAddressZip', $missing)?'missing-field':''; ?>" id="studentAddressZip" placeholder="Zip" name="studentAddressZip" value="<?php echo isset($studentAddressZip)?$studentAddressZip:'';?>">
  </div>
  <div class="form-group col-md-2 <?php echo in_array('sameAsMailing', $missing)?'missing-field':''; ?>">
    <div>
      <p>Same as mailing? *</p>
    </div>
    <label class="custom-control custom-radio">
        <input id="sameAsMailing" name="sameAsMailing" type="radio" class="custom-control-input" value="Yes" <?php echo (isset($sameAsMailing) && $sameAsMailing == "Yes") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Yes</span>
      </label>
    <label class="custom-control custom-radio">
        <input id="notSameAsMailing" name="sameAsMailing" type="radio" class="custom-control-input" value="No" <?php echo (isset($sameAsMailing) && $sameAsMailing == "No") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">No</span>
    </label> 
  </div>
</div>

  <!-- Hidden mailing div -->
  <div id="mailingAddress" <?php echo (isset($sameAsMailing) && $sameAsMailing == "No") ? "style='display: block;'" : ""; ?>>
    <div>
       <h6>
    Please specify mailing address:
      </h6>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="mailingAddressStreet">Street/PO Box *</label>
        <input type="text" class="form-control <?php echo in_array('mailingAddressStreet', $missing)?'missing-field':''; ?>" id="mailingAddressStreet" placeholder="Street" name="mailingAddressStreet" value="<?php echo isset($mailingAddressStreet)?$mailingAddressStreet:'';?>">
      </div>
      <div class="form-group col-md-4">
        <label for="mailingAddressCity">City *</label>
        <input type="text" class="form-control <?php echo in_array('mailingAddressCity', $missing)?'missing-field':''; ?>" id="mailingAddressCity" placeholder="City" name="mailingAddressCity" value="<?php echo isset($mailingAddressCity)?$mailingAddressCity:'';?>">
      </div>
      <div class="form-group col-md-2">
        <label for="mailingAddressState">State *</label>
        <select class="form-control <?php echo in_array('mailingAddressState', $missing)?'missing-field':''; ?>" id="mailingAddressState" name="mailingAddressState">
                <option value="">Select</option>
                <option value="AL" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'AL') ? 'selected="selected"' : ''; ?>>Alabama</option>
                <option value="AK" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'AK') ? 'selected="selected"' : ''; ?>>Alaska</option>
                <option value="AZ" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'AZ') ? 'selected="selected"' : ''; ?>>Arizona</option>
                <option value="AR" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'AR') ? 'selected="selected"' : ''; ?>>Arkansas</option>
                <option value="CA" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'CA') ? 'selected="selected"' : ''; ?>>California</option>
                <option value="CO" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'CO') ? 'selected="selected"' : ''; ?>>Colorado</option>
                <option value="CT" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'CT') ? 'selected="selected"' : ''; ?>>Connecticut</option>
                <option value="DE" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'DE') ? 'selected="selected"' : ''; ?>>Delaware</option>
                <option value="DC" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'DC') ? 'selected="selected"' : ''; ?>>District Of Columbia</option>
                <option value="FL" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'FL') ? 'selected="selected"' : ''; ?>>Florida</option>
                <option value="GA" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'GA') ? 'selected="selected"' : ''; ?>>Georgia</option>
                <option value="HI" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'HI') ? 'selected="selected"' : ''; ?>>Hawaii</option>
                <option value="ID" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'ID') ? 'selected="selected"' : ''; ?>>Idaho</option>
                <option value="IL" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'IL') ? 'selected="selected"' : ''; ?>>Illinois</option>
                <option value="IN" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'IN') ? 'selected="selected"' : ''; ?>>Indiana</option>
                <option value="IA" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'IA') ? 'selected="selected"' : ''; ?>>Iowa</option>
                <option value="KS" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'KS') ? 'selected="selected"' : ''; ?>>Kansas</option>
                <option value="KY" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'KY') ? 'selected="selected"' : ''; ?>>Kentucky</option>
                <option value="LA" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'LA') ? 'selected="selected"' : ''; ?>>Louisiana</option>
                <option value="ME" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'ME') ? 'selected="selected"' : ''; ?>>Maine</option>
                <option value="MD" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'MD') ? 'selected="selected"' : ''; ?>>Maryland</option>
                <option value="MA" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'MA') ? 'selected="selected"' : ''; ?>>Massachusetts</option>
                <option value="MI" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'MI') ? 'selected="selected"' : ''; ?>>Michigan</option>
                <option value="MN" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'MN') ? 'selected="selected"' : ''; ?>>Minnesota</option>
                <option value="MS" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'MS') ? 'selected="selected"' : ''; ?>>Mississippi</option>
                <option value="MO" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'MO') ? 'selected="selected"' : ''; ?>>Missouri</option>
                <option value="MT" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'MT') ? 'selected="selected"' : ''; ?>>Montana</option>
                <option value="NE" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'NE') ? 'selected="selected"' : ''; ?>>Nebraska</option>
                <option value="NV" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'NV') ? 'selected="selected"' : ''; ?>>Nevada</option>
                <option value="NH" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'NH') ? 'selected="selected"' : ''; ?>>New Hampshire</option>
                <option value="NJ" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'NJ') ? 'selected="selected"' : ''; ?>>New Jersey</option>
                <option value="NM" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'NM') ? 'selected="selected"' : ''; ?>>New Mexico</option>
                <option value="NY" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'NY') ? 'selected="selected"' : ''; ?>>New York</option>
                <option value="NC" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'NC') ? 'selected="selected"' : ''; ?>>North Carolina</option>
                <option value="ND" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'ND') ? 'selected="selected"' : ''; ?>>North Dakota</option>
                <option value="OH" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'OH') ? 'selected="selected"' : ''; ?>>Ohio</option>
                <option value="OK" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'OK') ? 'selected="selected"' : ''; ?>>Oklahoma</option>
                <option value="OR" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'OR') ? 'selected="selected"' : ''; ?>>Oregon</option>
                <option value="PA" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'PA') ? 'selected="selected"' : ''; ?>>Pennsylvania</option>
                <option value="RI" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'RI') ? 'selected="selected"' : ''; ?>>Rhode Island</option>
                <option value="SC" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'SC') ? 'selected="selected"' : ''; ?>>South Carolina</option>
                <option value="SD" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'SD') ? 'selected="selected"' : ''; ?>>South Dakota</option>
                <option value="TN" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'TN') ? 'selected="selected"' : ''; ?>>Tennessee</option>
                <option value="TX" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'TX') ? 'selected="selected"' : ''; ?>>Texas</option>
                <option value="UT" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'UT') ? 'selected="selected"' : ''; ?>>Utah</option>
                <option value="VT" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'VT') ? 'selected="selected"' : ''; ?>>Vermont</option>
                <option value="VA" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'VA') ? 'selected="selected"' : ''; ?>>Virginia</option>
                <option value="WA" <?php echo (!isset($mailingAddressState) || empty($mailingAddressState) || $mailingAddressState == 'WA') ? 'selected="selected"' : ''; ?>>Washington</option>
                <option value="WV" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'WV') ? 'selected="selected"' : ''; ?>>West Virginia</option>
                <option value="WI" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'WI') ? 'selected="selected"' : ''; ?>>Wisconsin</option>
                <option value="WY" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'WY') ? 'selected="selected"' : ''; ?>>Wyoming</option>
                <option value="N/A" <?php echo (isset($mailingAddressState) && $mailingAddressState == 'N/A') ? 'selected="selected"' : ''; ?>>>Does Not Apply</option>
            </select>
          </div>
      <div class="form-group col-md-2">
        <label for="mailingAddressZip">Zip *</label>
        <input type="text" class="form-control <?php echo in_array('mailingAddressZip', $missing)?'missing-field':''; ?>" id="mailingAddressZip" placeholder="Zip" name="mailingAddressZip" value="<?php echo isset($mailingAddressZip)?$mailingAddressZip:'';?>">
      </div>
  </div>
</div>
<hr>
<h6>Please add an emergency contact: </h6>
<div class="form-row">
  <div class="form-group col-md-2">
    <label for="emergencyContactFirst">First Name: *</label>
    <input type="text" class="form-control <?php echo in_array('emergencyContactFirst', $missing)?'missing-field':''; ?>" id="emergencyContactFirst" name="emergencyContactFirst" placeholder="First" value="<?php echo isset($emergencyContactFirst)?$emergencyContactFirst:'';?>">
  </div>
  <div class="form-group col-md-2">
    <label for="emergencyContactLast">Last Name: *</label>
    <input type="text" class="form-control <?php echo in_array('emergencyContactLast', $missing)?'missing-field':''; ?>" id="emergencyContactLast" name="emergencyContactLast" placeholder="Last" value="<?php echo isset($emergencyContactLast)?$emergencyContactLast:'';?>">
  </div>
  <div class="form-group col-md-2">
    <label for="emergencyContactPhone">Phone: *</label>
    <input type="phone" class="form-control <?php echo in_array('emergencyContactPhone', $missing)?'missing-field':''; ?>" id="emergencyContactPhone" name="emergencyContactPhone" placeholder="123-456-7890" value="<?php echo isset($emergencyContactPhone)?$emergencyContactPhone:'';?>">
  </div>
  <div class="form-group col-md-4">
    <label for="emergencyContactEmail">Email: *</label>
    <input type="email" class="form-control <?php echo in_array('emergencyContactEmail', $missing)?'missing-field':''; ?>" id="emergencyContactEmail" name="emergencyContactEmail" placeholder="Example@mail.com" value="<?php echo isset($emergencyContactEmail)?$emergencyContactEmail:'';?>">
  </div>
  <div class="form-group col-md-2">
    <label for="emergencyContactRelationship">Relation to student: *</label>
    <select class="form-control <?php echo in_array('emergencyContactRelationship', $missing)?'missing-field':''; ?>" id="emergencyContactRelationship" name="emergencyContactRelationship">
      <option value="">Select</option>
      <option  value="Father" <?php echo (isset($emergencyContactRelationship) && $emergencyContactRelationship == 'Father') ? 'selected="selected"' : ''; ?>>Father</option>
      <option value="Mother" <?php echo (isset($emergencyContactRelationship) && $emergencyContactRelationship == 'Mother') ? 'selected="selected"' : ''; ?>>Mother</option>
      <option value="Step-Father" <?php echo (isset($emergencyContactRelationship) && $emergencyContactRelationship == 'Step-Father') ? 'selected="selected"' : ''; ?>>Step-Father</option>
      <option value="Step-Mother" <?php echo (isset($emergencyContactRelationship) && $emergencyContactRelationship == 'Step-Mother') ? 'selected="selected"' : ''; ?>>Step-Mother</option>
      <option value="Guardian" <?php echo (isset($emergencyContactRelationship) && $emergencyContactRelationship == 'Guardian') ? 'selected="selected"' : ''; ?>>Guardian</option>
      <option value="Other" <?php echo (isset($emergencyContactRelationship) && $emergencyContactRelationship == 'Other') ? 'selected="selected"' : ''; ?>>Other</option>
     </select>
   </div>
  <div id="otherRelationshipDiv" <?php echo (isset($emergencyContactRelationship) && $emergencyContactRelationship == 'Other') ? "style='display: block;'" : ''; ?> class="col-md-4">
    <label for="emergencyContactOther">Other: *</label>
    <input type="text" class="form-control <?php echo in_array('emergencyContactOther', $missing)?'missing-field':''; ?>" id="emergencyContactOther" name="emergencyContactOther" placeholder="Relation" value="<?php echo isset($emergencyContactOther)?$emergencyContactOther:'';?>">
  </div>
</div>

<div class="form-row">
  <div class="col-md-12">
    <p>Household Information: </p>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#guardianModal">
        + Add Parent/Guardian(s)
    </button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#siblingModal">
        + Add Sibling(s)
    </button>

    <!-- Guardian Modal -->
    <div class="modal fade" id="guardianModal" tabindex="-1" role="dialog" aria-labelledby="guardianModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="guardianModalLabel">Add Parent/Guardian</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">

            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="guardianFirstName">First Name</label>
                <input type="text" class="form-control" id="guardianFirstName" placeholder="First">
              </div>
              <div class="form-group col-md-2">
                <label for="guardianMI">MI</label>
                <input type="text" class="form-control" id="guardianMI" placeholder="MI">
              </div>
              <div class="form-group col-md-5">
                <label for="guardianLastName">Last name</label>
                <input type="text" class="form-control" id="guardianLastName" placeholder="Last">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="guardianPhone">Phone</label>
                <input type="text" class="form-control" id="guardianPhone" placeholder="Phone">
              </div>
              <div class="form-group col-md-6">
                <label for="guardianEmail">Email</label>
                <input type="text" class="form-control" id="guardianEmail" placeholder="Email">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="relationship">Relationship to student:</label>
                <select class="form-control" id="relationshipToStudent">
                          <option value="">Select</option>
                          <option value="Father">Father</option>
                          <option value="Mother">Mother</option>
                          <option value="Step-Father">Stepfather</option>
                          <option value="Step-Mother">Stepmother</option>
                          <option value="Guardian">Guardian</option>
                          <option value="Other">Other</option>
                      </select>
              </div>
              <div class="col-md-2"></div>
              <div class="form-group col-md-5">
                <div>
                  <p>Active Military? </p>
                </div>
								<div class="guardianIsMil">
									<label class="custom-control custom-radio">     
											<input type="radio" class="custom-control-input guardianIsMil" id="guardianIsMil" value="Yes">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description">Yes</span>
									</label>
									<label class="custom-control custom-radio">
											<input type="radio" class="custom-control-input guardianIsMil" id="guardianIsMil" value="No">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description">No</span>
									</label>
								</div>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardianDone">Done</button>
          </div>
        </div>
      </div>
    </div>
    <!-- The Modal End -->
    <!-- Sibling Modal -->
    <div class="modal fade" id="siblingModal" tabindex="-1" role="dialog" aria-labelledby="siblingModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="siblingModalLabel">Add Sibling</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">

            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="siblingFirstName">First Name</label>
                <input type="text" class="form-control" id="siblingFirstName" placeholder="First">
              </div>
              <div class="form-group col-md-5">
                <label for="siblingLastName">Last name</label>
                <input type="text" class="form-control" id="siblingLastName" placeholder="Last">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="siblingAge">Age</label>
                <input type="text" class="form-control" id="siblingAge" placeholder="Current Age">
              </div>
              <div class="form-group col-md-5">
                <label for="siblingGrade">Grade</label>
                <input type="text" class="form-control" id="siblingGrade" placeholder="Current Grade">
              </div>
              <div class="form-group col-md-10">
                <label for="siblingSchool">School</label>
                <input type="text" class="form-control" id="siblingSchool" placeholder="School Name">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="siblingDone">Done</button>
          </div>
        </div>
      </div>
    </div>
    <!--End sibling Modal-->
  </div>
</div>


<!-- Lists the parents and siblings as added -->
<div class="form-group col-md-12">
  <p>Listed Parent/Guardians:</p>
  <div id="guardianList" class="form-row guardianList">
      <!-- This filled out by user / Guardian modal -->
      <?php
        $schoolSql = "SELECT * FROM guardian WHERE student_id='$student_id'";
        $schoolResult = mysqli_query($cnxn, $schoolSql);
        for ($i=0; $i<mysqli_num_rows($schoolResult); $i++) {          
          $schoolRow = mysqli_fetch_assoc($schoolResult);
          
          $guardianFirstName=$schoolRow['guardianFirstName'];
          $guardianLastName=$schoolRow['guardianLastName'];
          $guardianMI=$schoolRow['guardianMI'];
          $relationshipToStudent=$schoolRow['relationshipToStudent'];
          $guardianIsMil=$schoolRow['guardianIsMil'];
          $guardianEmail=$schoolRow['guardianEmail'];
          $guardianPhone=$schoolRow['guardianPhone'];
          $whichGuardian="guardian".$i;          
                    
          echo "<ul name='guardianListItem{$i}'>";
          echo "<li>Parent/Guardian Name: $guardianFirstName $guardianMI $guardianLastName";
          echo "<input type='hidden' name='{$whichGuardian}[guardianFirstName]' value='$guardianFirstName'/>";
          echo "<input type='hidden' name='{$whichGuardian}[guardianMI]' value='$guardianMI'/>";
          echo "<input type='hidden' name='{$whichGuardian}[guardianLastName]' value='$guardianLastName'/></li>";
          echo "<li>Phone: $guardianPhone <input type='hidden' name='{$whichGuardian}[guardianPhone]' value='$guardianPhone'/></li>";
          echo "<li>Email: $guardianEmail <input type='hidden' name='{$whichGuardian}[guardianEmail]' value='$guardianEmail'/></li>";
          echo "<li>Relationship to Student: $relationshipToStudent <input type='hidden' name='{$whichGuardian}[relationshipToStudent]' value='$relationshipToStudent'/></li>";
          echo "<li>Military: $guardianIsMil <input type='hidden' name='{$whichGuardian}[guardianIsMil]' value='$guardianIsMil'/></li>";
          echo "<a class='btn btn-secondary btn-sm removeGuardian'>Remove</a>";
          echo "</ul><br>";
        }
      ?>
  </div>
  <hr>
  <p>Listed Siblings:</p>
  <div id="siblingList" class="form-row">
      <!-- This filled out by user / Sibling modal -->
      <?php
        $sql = "SELECT * FROM siblingsattending WHERE student_id='$student_id'";
        $result = mysqli_query($cnxn, $sql);
        for ($i=0; $i<mysqli_num_rows($result); $i++) {          
          $row = mysqli_fetch_assoc($result);
          
          $siblingFirstName=$row['siblingFirstName'];
          $siblingLastName=$row['siblingLastName'];
          $siblingAge=$row['siblingAge'];
          $siblingSchool=$row['siblingSchool'];
          $siblingGrade=$row['siblingGrade'];
          $whichSibling="sibling".$i;          
          
          echo "<ul name='siblingListItem{$i}'>";
          echo "<li>Sibling Name: $siblingFirstName $siblingLastName";
          echo "<input type='hidden' name='{$whichSibling}[siblingFirstName]' value='$siblingFirstName'/>";
          echo "<input type='hidden' name='{$whichSibling}[siblingLastName]' value='$siblingLastName'/></li>";
          echo "<li>Age: $siblingAge<input type='hidden' name='{$whichSibling}[siblingAge]' value='$siblingAge'/></li>";
          echo "<li>Grade: $siblingGrade<input type='hidden' name='{$whichSibling}[siblingGrade]'  value='$siblingGrade'/></li>";
          echo "<li>School: $siblingSchool <input type='hidden' name='{$whichSibling}[siblingSchool]'value='$siblingSchool'/></li>";
          echo "<a class='btn btn-secondary btn-sm removeSibling'>Remove</a>";
          echo "</ul><br>";
        }
      ?>
  </div>
</div>




<!-- Misc Questions on Household -->
<hr>
<div class="form-row">
  <div class="form-group col-md-6 <?php echo in_array('distress', $missing)?'missing-field':''; ?>">
    <div>
      <p>Has there been an event in the family that might affect the student? *</p>
    </div>
    <label class="custom-control custom-radio">
        <input id="distressYes" name="distress" type="radio" class="custom-control-input" value="Yes" <?php echo (isset($distress) && $distress == "Yes") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Yes</span>
      </label>
    <label class="custom-control custom-radio">
        <input id="distressNo" name="distress" type="radio" class="custom-control-input" value="No" <?php echo (isset($distress) && $distress == "No") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">No</span>
     </label><br>
    <div id="distressDetailsDiv">
      <label for="distressDetails">Please explain the distress: </label>
      <input type="text" class="form-control" id="distressDetails" placeholder="(Divorce, Death, Illness, etc.)" name="distressDetails" value="<?php echo isset($distressDetails)?$distressDetails:'';?>">
    </div>
  </div>
  <div class="form-group col-md-6 <?php echo in_array('holiday', $missing)?'missing-field':''; ?>">
    <div>
      <p>Do you celebrate birthdays and/or holidays in your home? *</p>
    </div>
    <label class="custom-control custom-radio">
        <input id="holidayYes" name="holiday" type="radio" class="custom-control-input" value="Yes" <?php echo (isset($holiday) && $holiday == "Yes") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Yes</span>
      </label>
    <label class="custom-control custom-radio">
        <input id="holidayNo" name="holiday" type="radio" class="custom-control-input" value="No" <?php echo (isset($holiday) && $holiday == "No") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">No</span>
     </label><br>
    <div id="holidayDetailsDiv">
      <label for="holidayDetails">Please explain why: </label>
      <input type="text" class="form-control" id="holidayDetails" placeholder="(optional)" name="holidayDetails" value="<?php echo isset($distressDetails)?$distressDetails:'';?>">
    </div>
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