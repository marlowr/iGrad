<?php 
  /*
    personal-tab.php
		This file is included in index.php under the personal-tab div. Contains all relevant fields regarding the 
    personal information of the student.
		
		Work Done By:
		Ryan Marlow
		Mingjie Deng
		Shahbaz Iqbal
	*/
?>

<div>
<h5>Student Information</h5>
<small class="form-text text-muted">
         * required fields. </small>
<hr>
</div>
<!-- Student Name Information -->
<div class="form-row">
  <div class="form-group col-md-4 <?php echo in_array('studentNameFirst', $missing)?'has-danger':''; ?>">
      <label for="studentNameFirst">First Name *</label>
      <input type="text" class="form-control <?php echo in_array('studentNameFirst', $missing)?'missing-field':''; ?>" id="studentNameFirst" name="studentNameFirst" value="<?php echo isset($studentNameFirst)?$studentNameFirst:'';?>" placeholder="First">
  </div>
  <div class="form-group col-md-1">
      <label for="studentNameMi">MI</label>
      <input type="text" class="form-control <?php echo in_array('studentNameMi', $missing)?'missing-field':''; ?>" id="studentNameMi" name="studentNameMi" value="<?php echo isset($studentNameMi)?$studentNameMi:'';?>" placeholder="MI">
  </div>
  <div class="form-group col-md-3">
      <label for="studentNameLast">Last name *</label>
      <input type="text" class="form-control <?php echo in_array('studentNameLast', $missing)?'missing-field':''; ?>" id="studentNameLast" name="studentNameLast" value="<?php echo isset($studentNameLast)?$studentNameLast:'';?>" placeholder="Last">
  </div>
  <div class="form-group col-md-4">
      <label for="studentNamePrevious">Previous Name(if applicable)</label>
      <input type="text" class="form-control <?php echo in_array('studentNamePrevious', $missing)?'missing-field':''; ?>" id="studentNamePrevious" name="studentNamePrevious" value="<?php echo isset($studentNamePrevious)?$studentNamePrevious:'';?>" placeholder="First MI Last (if applicable)">
    </div>
</div>

<!-- Student Birth Information -->
<div class="form-row">
  
  <div class="form-group col-md-3">
      <label for="studentDateOfBirth">Birthdate *</label>
      <input type="date" class="form-control <?php echo in_array('studentDateOfBirth', $missing)?'missing-field':''; ?>" id="studentDateOfBirth" name="studentDateOfBirth" placeholder="MM/DD/YYYY"
             value="<?php echo isset($studentDateOfBirth)?$studentDateOfBirth:'';?>">
  </div>
  <!---Unable to apply modal -->
<div class="modal fade" id="unableToApply" tabindex="-1" role="dialog" aria-labelledby="unableToApplyLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="unableToApplyLabel">Notification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You must be between the ages of 16 and 21 by September 1st of this year to apply for iGrad.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  
  <div class="form-group col-md-3">
      <label for="studentCityOfBirth">Place of birth *</label>
      <input type="text" class="form-control <?php echo in_array('studentCityOfBirth', $missing)?'missing-field':''; ?>" id="studentCityOfBirth" name="studentCityOfBirth" value="<?php echo isset($studentCityOfBirth)?$studentCityOfBirth:'';?>" placeholder="City">
  </div>
  <div class="form-group col-md-2">
      <label for="studentStateOfBirth">State *</label>
      <select class="form-control" id="studentStateOfBirth" name="studentStateOfBirth">
          <option value="">Select</option>
          <option value="AL" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'AL') ? 'selected="selected"' : ''; ?>>Alabama</option>
          <option value="AK" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'AK') ? 'selected="selected"' : ''; ?>>Alaska</option>
          <option value="AZ" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'AZ') ? 'selected="selected"' : ''; ?>>Arizona</option>
          <option value="AR" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'AR') ? 'selected="selected"' : ''; ?>>Arkansas</option>
          <option value="CA" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'CA') ? 'selected="selected"' : ''; ?>>California</option>
          <option value="CO" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'CO') ? 'selected="selected"' : ''; ?>>Colorado</option>
          <option value="CT" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'CT') ? 'selected="selected"' : ''; ?>>Connecticut</option>
          <option value="DE" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'DE') ? 'selected="selected"' : ''; ?>>Delaware</option>
          <option value="DC" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'DC') ? 'selected="selected"' : ''; ?>>District Of Columbia</option>
          <option value="FL" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'FL') ? 'selected="selected"' : ''; ?>>Florida</option>
          <option value="GA" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'GA') ? 'selected="selected"' : ''; ?>>Georgia</option>
          <option value="HI" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'HI') ? 'selected="selected"' : ''; ?>>Hawaii</option>
          <option value="ID" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'ID') ? 'selected="selected"' : ''; ?>>Idaho</option>
          <option value="IL" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'IL') ? 'selected="selected"' : ''; ?>>Illinois</option>
          <option value="IN" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'IN') ? 'selected="selected"' : ''; ?>>Indiana</option>
          <option value="IA" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'IA') ? 'selected="selected"' : ''; ?>>Iowa</option>
          <option value="KS" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'KS') ? 'selected="selected"' : ''; ?>>Kansas</option>
          <option value="KY" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'KY') ? 'selected="selected"' : ''; ?>>Kentucky</option>
          <option value="LA" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'LA') ? 'selected="selected"' : ''; ?>>Louisiana</option>
          <option value="ME" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'ME') ? 'selected="selected"' : ''; ?>>Maine</option>
          <option value="MD" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'MD') ? 'selected="selected"' : ''; ?>>Maryland</option>
          <option value="MA" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'MA') ? 'selected="selected"' : ''; ?>>Massachusetts</option>
          <option value="MI" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'MI') ? 'selected="selected"' : ''; ?>>Michigan</option>
          <option value="MN" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'MN') ? 'selected="selected"' : ''; ?>>Minnesota</option>
          <option value="MS" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'MS') ? 'selected="selected"' : ''; ?>>Mississippi</option>
          <option value="MO" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'MO') ? 'selected="selected"' : ''; ?>>Missouri</option>
          <option value="MT" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'MT') ? 'selected="selected"' : ''; ?>>Montana</option>
          <option value="NE" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'NE') ? 'selected="selected"' : ''; ?>>Nebraska</option>
          <option value="NV" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'NV') ? 'selected="selected"' : ''; ?>>Nevada</option>
          <option value="NH" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'NH') ? 'selected="selected"' : ''; ?>>New Hampshire</option>
          <option value="NJ" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'NJ') ? 'selected="selected"' : ''; ?>>New Jersey</option>
          <option value="NM" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'NM') ? 'selected="selected"' : ''; ?>>New Mexico</option>
          <option value="NY" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'NY') ? 'selected="selected"' : ''; ?>>New York</option>
          <option value="NC" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'NC') ? 'selected="selected"' : ''; ?>>North Carolina</option>
          <option value="ND" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'ND') ? 'selected="selected"' : ''; ?>>North Dakota</option>
          <option value="OH" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'OH') ? 'selected="selected"' : ''; ?>>Ohio</option>
          <option value="OK" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'OK') ? 'selected="selected"' : ''; ?>>Oklahoma</option>
          <option value="OR" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'OR') ? 'selected="selected"' : ''; ?>>Oregon</option>
          <option value="PA" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'PA') ? 'selected="selected"' : ''; ?>>Pennsylvania</option>
          <option value="RI" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'RI') ? 'selected="selected"' : ''; ?>>Rhode Island</option>
          <option value="SC" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'SC') ? 'selected="selected"' : ''; ?>>South Carolina</option>
          <option value="SD" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'SD') ? 'selected="selected"' : ''; ?>>South Dakota</option>
          <option value="TN" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'TN') ? 'selected="selected"' : ''; ?>>Tennessee</option>
          <option value="TX" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'TX') ? 'selected="selected"' : ''; ?>>Texas</option>
          <option value="UT" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'UT') ? 'selected="selected"' : ''; ?>>Utah</option>
          <option value="VT" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'VT') ? 'selected="selected"' : ''; ?>>Vermont</option>
          <option value="VA" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'VA') ? 'selected="selected"' : ''; ?>>Virginia</option>
          <option value="WA" <?php echo (!isset($studentStateOfBirth) || empty($studentStateOfBirth) || $studentStateOfBirth == 'WA') ? 'selected="selected"' : ''; ?>>Washington</option>
          <option value="WV" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'WV') ? 'selected="selected"' : ''; ?>>West Virginia</option>
          <option value="WI" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'WI') ? 'selected="selected"' : ''; ?>>Wisconsin</option>
          <option value="WY" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'WY') ? 'selected="selected"' : ''; ?>>Wyoming</option>
          <option value="N/A" <?php echo (isset($studentStateOfBirth) && $studentStateOfBirth == 'N/A') ? 'selected="selected"' : ''; ?>>>Does Not Apply</option>
      </select>				
  </div>
  <div class="form-group col-md-4">
      <label for="studentCountryOfBirth">Country *</label>
        <select class="form-control" id="studentCountryOfBirth" name="studentCountryOfBirth" placeholder="Country" value="<?php echo isset($studentCountryOfBirth)?$studentCountryOfBirth:'';?>">
          <option value="">Select</option>
          <option value="AF" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AF') ? 'selected="selected"' : ''; ?>>Afghanistan</option>
          <option value="AX" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AX') ? 'selected="selected"' : ''; ?>>Åland Islands</option>
          <option value="AL" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AL') ? 'selected="selected"' : ''; ?>>Albania</option>
          <option value="DZ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'DZ') ? 'selected="selected"' : ''; ?>>Algeria</option>
          <option value="AS" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AS') ? 'selected="selected"' : ''; ?>>American Samoa</option>
          <option value="AD" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AD') ? 'selected="selected"' : ''; ?>>Andorra</option>
          <option value="AO" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AO') ? 'selected="selected"' : ''; ?>>Angola</option>
          <option value="AI" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AI') ? 'selected="selected"' : ''; ?>>Anguilla</option>
          <option value="AQ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AQ') ? 'selected="selected"' : ''; ?>>Antarctica</option>
          <option value="AG" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AG') ? 'selected="selected"' : ''; ?>>Antigua and Barbuda</option>
          <option value="AR" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AR') ? 'selected="selected"' : ''; ?>>Argentina</option>
          <option value="AM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AM') ? 'selected="selected"' : ''; ?>>Armenia</option>
          <option value="AW" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AW') ? 'selected="selected"' : ''; ?>>Aruba</option>
          <option value="AU" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AU') ? 'selected="selected"' : ''; ?>>Australia</option>
          <option value="AT" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AT') ? 'selected="selected"' : ''; ?>>Austria</option>
          <option value="AZ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AZ') ? 'selected="selected"' : ''; ?>>Azerbaijan</option>
          <option value="BS" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BS') ? 'selected="selected"' : ''; ?>>Bahamas</option>
          <option value="BH" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BH') ? 'selected="selected"' : ''; ?>>Bahrain</option>
          <option value="BD" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BD') ? 'selected="selected"' : ''; ?>>Bangladesh</option>
          <option value="BB" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BB') ? 'selected="selected"' : ''; ?>>Barbados</option>
          <option value="BY" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BY') ? 'selected="selected"' : ''; ?>>Belarus</option>
          <option value="BE" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BE') ? 'selected="selected"' : ''; ?>>Belgium</option>
          <option value="BZ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BZ') ? 'selected="selected"' : ''; ?>>Belize</option>
          <option value="BJ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BJ') ? 'selected="selected"' : ''; ?>>Benin</option>
          <option value="BM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BM') ? 'selected="selected"' : ''; ?>>Bermuda</option>
          <option value="BT" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BT') ? 'selected="selected"' : ''; ?>>Bhutan</option>
          <option value="BO" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BO') ? 'selected="selected"' : ''; ?>>Bolivia, Plurinational State of</option>
          <option value="BQ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BQ') ? 'selected="selected"' : ''; ?>>Bonaire, Sint Eustatius and Saba</option>
          <option value="BA" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BA') ? 'selected="selected"' : ''; ?>>Bosnia and Herzegovina</option>
          <option value="BW" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BW') ? 'selected="selected"' : ''; ?>>Botswana</option>
          <option value="BV" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BV') ? 'selected="selected"' : ''; ?>>Bouvet Island</option>
          <option value="BR" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BR') ? 'selected="selected"' : ''; ?>>Brazil</option>
          <option value="IO" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'IO') ? 'selected="selected"' : ''; ?>>British Indian Ocean Territory</option>
          <option value="BN" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BN') ? 'selected="selected"' : ''; ?>>Brunei Darussalam</option>
          <option value="BG" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BG') ? 'selected="selected"' : ''; ?>>Bulgaria</option>
          <option value="BF" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BF') ? 'selected="selected"' : ''; ?>>Burkina Faso</option>
          <option value="BI" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BI') ? 'selected="selected"' : ''; ?>>Burundi</option>
          <option value="KH" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'KH') ? 'selected="selected"' : ''; ?>>Cambodia</option>
          <option value="CM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CM') ? 'selected="selected"' : ''; ?>>Cameroon</option>
          <option value="CA" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CA') ? 'selected="selected"' : ''; ?>>Canada</option>
          <option value="CV" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CV') ? 'selected="selected"' : ''; ?>>Cape Verde</option>
          <option value="KY" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'KY') ? 'selected="selected"' : ''; ?>>Cayman Islands</option>
          <option value="CF" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CF') ? 'selected="selected"' : ''; ?>>Central African Republic</option>
          <option value="TD" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TD') ? 'selected="selected"' : ''; ?>>Chad</option>
          <option value="CL" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CL') ? 'selected="selected"' : ''; ?>>Chile</option>
          <option value="CN" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CN') ? 'selected="selected"' : ''; ?>>China</option>
          <option value="CX" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CX') ? 'selected="selected"' : ''; ?>>Christmas Island</option>
          <option value="CC" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CC') ? 'selected="selected"' : ''; ?>>Cocos (Keeling) Islands</option>
          <option value="CO" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CO') ? 'selected="selected"' : ''; ?>>Colombia</option>
          <option value="KM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'KM') ? 'selected="selected"' : ''; ?>>Comoros</option>
          <option value="CG" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CG') ? 'selected="selected"' : ''; ?>>Congo</option>
          <option value="CD" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CD') ? 'selected="selected"' : ''; ?>>Congo, the Democratic Republic of the</option>
          <option value="CK" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CK') ? 'selected="selected"' : ''; ?>>Cook Islands</option>
          <option value="CR" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CR') ? 'selected="selected"' : ''; ?>>Costa Rica</option>
          <option value="CI" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CI') ? 'selected="selected"' : ''; ?>>Côte d'Ivoire</option>
          <option value="HR" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'HR') ? 'selected="selected"' : ''; ?>>Croatia</option>
          <option value="CU" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CU') ? 'selected="selected"' : ''; ?>>Cuba</option>
          <option value="CW" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CW') ? 'selected="selected"' : ''; ?>>Curaçao</option>
          <option value="CY" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CY') ? 'selected="selected"' : ''; ?>>Cyprus</option>
          <option value="CZ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CZ') ? 'selected="selected"' : ''; ?>>Czech Republic</option>
          <option value="DK" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'DK') ? 'selected="selected"' : ''; ?>>Denmark</option>
          <option value="DJ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'DJ') ? 'selected="selected"' : ''; ?>>Djibouti</option>
          <option value="DM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'DM') ? 'selected="selected"' : ''; ?>>Dominica</option>
          <option value="DO" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'DO') ? 'selected="selected"' : ''; ?>>Dominican Republic</option>
          <option value="EC" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'EC') ? 'selected="selected"' : ''; ?>>Ecuador</option>
          <option value="EG" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'EG') ? 'selected="selected"' : ''; ?>>Egypt</option>
          <option value="SV" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SV') ? 'selected="selected"' : ''; ?>>El Salvador</option>
          <option value="GQ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GQ') ? 'selected="selected"' : ''; ?>>Equatorial Guinea</option>
          <option value="ER" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'ER') ? 'selected="selected"' : ''; ?>>Eritrea</option>
          <option value="EE" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'EE') ? 'selected="selected"' : ''; ?>>Estonia</option>
          <option value="ET" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'ET') ? 'selected="selected"' : ''; ?>>Ethiopia</option>
          <option value="FK" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'FK') ? 'selected="selected"' : ''; ?>>Falkland Islands (Malvinas)</option>
          <option value="FO" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'FO') ? 'selected="selected"' : ''; ?>>Faroe Islands</option>
          <option value="FJ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'FJ') ? 'selected="selected"' : ''; ?>>Fiji</option>
          <option value="FI" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'FI') ? 'selected="selected"' : ''; ?>>Finland</option>
          <option value="FR" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'FR') ? 'selected="selected"' : ''; ?>>France</option>
          <option value="GF" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GF') ? 'selected="selected"' : ''; ?>>French Guiana</option>
          <option value="PF" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'PF') ? 'selected="selected"' : ''; ?>>French Polynesia</option>
          <option value="TF" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TF') ? 'selected="selected"' : ''; ?>>French Southern Territories</option>
          <option value="GA" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GA') ? 'selected="selected"' : ''; ?>>Gabon</option>
          <option value="GM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GM') ? 'selected="selected"' : ''; ?>>Gambia</option>
          <option value="GE" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GE') ? 'selected="selected"' : ''; ?>>Georgia</option>
          <option value="DE" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'DE') ? 'selected="selected"' : ''; ?>>Germany</option>
          <option value="GH" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GH') ? 'selected="selected"' : ''; ?>>Ghana</option>
          <option value="GI" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GI') ? 'selected="selected"' : ''; ?>>Gibraltar</option>
          <option value="GR" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GR') ? 'selected="selected"' : ''; ?>>Greece</option>
          <option value="GL" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GL') ? 'selected="selected"' : ''; ?>>Greenland</option>
          <option value="GD" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GD') ? 'selected="selected"' : ''; ?>>Grenada</option>
          <option value="GP" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GP') ? 'selected="selected"' : ''; ?>>Guadeloupe</option>
          <option value="GU" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GU') ? 'selected="selected"' : ''; ?>>Guam</option>
          <option value="GT" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GT') ? 'selected="selected"' : ''; ?>>Guatemala</option>
          <option value="GG" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GG') ? 'selected="selected"' : ''; ?>>Guernsey</option>
          <option value="GN" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GN') ? 'selected="selected"' : ''; ?>>Guinea</option>
          <option value="GW" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GW') ? 'selected="selected"' : ''; ?>>Guinea-Bissau</option>
          <option value="GY" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GY') ? 'selected="selected"' : ''; ?>>Guyana</option>
          <option value="HT" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'HT') ? 'selected="selected"' : ''; ?>>Haiti</option>
          <option value="HM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'HM') ? 'selected="selected"' : ''; ?>>Heard Island and McDonald Islands</option>
          <option value="VA" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'VA') ? 'selected="selected"' : ''; ?>>Holy See (Vatican City State)</option>
          <option value="HN" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'HN') ? 'selected="selected"' : ''; ?>>Honduras</option>
          <option value="HK" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'HK') ? 'selected="selected"' : ''; ?>>Hong Kong</option>
          <option value="HU" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'HU') ? 'selected="selected"' : ''; ?>>Hungary</option>
          <option value="IS" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'IS') ? 'selected="selected"' : ''; ?>>Iceland</option>
          <option value="IN" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'IN') ? 'selected="selected"' : ''; ?>>India</option>
          <option value="ID" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'ID') ? 'selected="selected"' : ''; ?>>Indonesia</option>
          <option value="IR" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'IR') ? 'selected="selected"' : ''; ?>>Iran, Islamic Republic of</option>
          <option value="IQ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'IQ') ? 'selected="selected"' : ''; ?>>Iraq</option>
          <option value="IE" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'IE') ? 'selected="selected"' : ''; ?>>Ireland</option>
          <option value="IM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'IM') ? 'selected="selected"' : ''; ?>>Isle of Man</option>
          <option value="IL" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'IL') ? 'selected="selected"' : ''; ?>>Israel</option>
          <option value="IT" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'IT') ? 'selected="selected"' : ''; ?>>Italy</option>
          <option value="JM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'JM') ? 'selected="selected"' : ''; ?>>Jamaica</option>
          <option value="JP" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'JP') ? 'selected="selected"' : ''; ?>>Japan</option>
          <option value="JE" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'JE') ? 'selected="selected"' : ''; ?>>Jersey</option>
          <option value="JO" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'JO') ? 'selected="selected"' : ''; ?>>Jordan</option>
          <option value="KZ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'KZ') ? 'selected="selected"' : ''; ?>>Kazakhstan</option>
          <option value="KE" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'KE') ? 'selected="selected"' : ''; ?>>Kenya</option>
          <option value="KI" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'KI') ? 'selected="selected"' : ''; ?>>Kiribati</option>
          <option value="KP" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'KP') ? 'selected="selected"' : ''; ?>>Korea, Democratic People's Republic of</option>
          <option value="KR" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'KR') ? 'selected="selected"' : ''; ?>>Korea, Republic of</option>
          <option value="KW" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'KW') ? 'selected="selected"' : ''; ?>>Kuwait</option>
          <option value="KG" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'KG') ? 'selected="selected"' : ''; ?>>Kyrgyzstan</option>
          <option value="LA" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'LA') ? 'selected="selected"' : ''; ?>>Lao People's Democratic Republic</option>
          <option value="LV" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'LV') ? 'selected="selected"' : ''; ?>>Latvia</option>
          <option value="LB" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'LB') ? 'selected="selected"' : ''; ?>>Lebanon</option>
          <option value="LS" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'LS') ? 'selected="selected"' : ''; ?>>Lesotho</option>
          <option value="LR" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'LR') ? 'selected="selected"' : ''; ?>>Liberia</option>
          <option value="LY" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'LY') ? 'selected="selected"' : ''; ?>>Libya</option>
          <option value="LI" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'LI') ? 'selected="selected"' : ''; ?>>Liechtenstein</option>
          <option value="LT" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'LT') ? 'selected="selected"' : ''; ?>>Lithuania</option>
          <option value="LU" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'LU') ? 'selected="selected"' : ''; ?>>Luxembourg</option>
          <option value="MO" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MO') ? 'selected="selected"' : ''; ?>>Macao</option>
          <option value="MK" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MK') ? 'selected="selected"' : ''; ?>>Macedonia, the former Yugoslav Republic of</option>
          <option value="MG" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MG') ? 'selected="selected"' : ''; ?>>Madagascar</option>
          <option value="MW" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MW') ? 'selected="selected"' : ''; ?>>Malawi</option>
          <option value="MY" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MY') ? 'selected="selected"' : ''; ?>>Malaysia</option>
          <option value="MV" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MV') ? 'selected="selected"' : ''; ?>>Maldives</option>
          <option value="ML" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'ML') ? 'selected="selected"' : ''; ?>>Mali</option>
          <option value="MT" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MT') ? 'selected="selected"' : ''; ?>>Malta</option>
          <option value="MH" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MH') ? 'selected="selected"' : ''; ?>>Marshall Islands</option>
          <option value="MQ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MQ') ? 'selected="selected"' : ''; ?>>Martinique</option>
          <option value="MR" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MR') ? 'selected="selected"' : ''; ?>>Mauritania</option>
          <option value="MU" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MU') ? 'selected="selected"' : ''; ?>>Mauritius</option>
          <option value="YT" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'YT') ? 'selected="selected"' : ''; ?>>Mayotte</option>
          <option value="MX" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MX') ? 'selected="selected"' : ''; ?>>Mexico</option>
          <option value="FM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'FM') ? 'selected="selected"' : ''; ?>>Micronesia, Federated States of</option>
          <option value="MD" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MD') ? 'selected="selected"' : ''; ?>>Moldova, Republic of</option>
          <option value="MC" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MC') ? 'selected="selected"' : ''; ?>>Monaco</option>
          <option value="MN" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MN') ? 'selected="selected"' : ''; ?>>Mongolia</option>
          <option value="ME" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'ME') ? 'selected="selected"' : ''; ?>>Montenegro</option>
          <option value="MS" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MS') ? 'selected="selected"' : ''; ?>>Montserrat</option>
          <option value="MA" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MA') ? 'selected="selected"' : ''; ?>>Morocco</option>
          <option value="MZ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MZ') ? 'selected="selected"' : ''; ?>>Mozambique</option>
          <option value="MM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MM') ? 'selected="selected"' : ''; ?>>Myanmar</option>
          <option value="NA" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'NA') ? 'selected="selected"' : ''; ?>>Namibia</option>
          <option value="NR" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'NR') ? 'selected="selected"' : ''; ?>>Nauru</option>
          <option value="NP" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'NP') ? 'selected="selected"' : ''; ?>>Nepal</option>
          <option value="NL" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'NL') ? 'selected="selected"' : ''; ?>>Netherlands</option>
          <option value="NC" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'NC') ? 'selected="selected"' : ''; ?>>New Caledonia</option>
          <option value="NZ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'NZ') ? 'selected="selected"' : ''; ?>>New Zealand</option>
          <option value="NI" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'NI') ? 'selected="selected"' : ''; ?>>Nicaragua</option>
          <option value="NE" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'NE') ? 'selected="selected"' : ''; ?>>Niger</option>
          <option value="NG" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'NG') ? 'selected="selected"' : ''; ?>>Nigeria</option>
          <option value="NU" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'NU') ? 'selected="selected"' : ''; ?>>Niue</option>
          <option value="NF" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'NF') ? 'selected="selected"' : ''; ?>>Norfolk Island</option>
          <option value="MP" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MP') ? 'selected="selected"' : ''; ?>>Northern Mariana Islands</option>
          <option value="NO" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'NO') ? 'selected="selected"' : ''; ?>>Norway</option>
          <option value="OM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'OM') ? 'selected="selected"' : ''; ?>>Oman</option>
          <option value="PK" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'PK') ? 'selected="selected"' : ''; ?>>Pakistan</option>
          <option value="PW" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'PW') ? 'selected="selected"' : ''; ?>>Palau</option>
          <option value="PS" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'PS') ? 'selected="selected"' : ''; ?>>Palestinian Territory, Occupied</option>
          <option value="PA" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'PA') ? 'selected="selected"' : ''; ?>>Panama</option>
          <option value="PG" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'PG') ? 'selected="selected"' : ''; ?>>Papua New Guinea</option>
          <option value="PY" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'PY') ? 'selected="selected"' : ''; ?>>Paraguay</option>
          <option value="PE" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'PE') ? 'selected="selected"' : ''; ?>>Peru</option>
          <option value="PH" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'PH') ? 'selected="selected"' : ''; ?>>Philippines</option>
          <option value="PN" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'PN') ? 'selected="selected"' : ''; ?>>Pitcairn</option>
          <option value="PL" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'PL') ? 'selected="selected"' : ''; ?>>Poland</option>
          <option value="PT" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'PT') ? 'selected="selected"' : ''; ?>>Portugal</option>
          <option value="PR" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'PR') ? 'selected="selected"' : ''; ?>>Puerto Rico</option>
          <option value="QA" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'QA') ? 'selected="selected"' : ''; ?>>Qatar</option>
          <option value="RE" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'RE') ? 'selected="selected"' : ''; ?>>Réunion</option>
          <option value="RO" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'RO') ? 'selected="selected"' : ''; ?>>Romania</option>
          <option value="RU" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'RU') ? 'selected="selected"' : ''; ?>>Russian Federation</option>
          <option value="RW" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'RW') ? 'selected="selected"' : ''; ?>>Rwanda</option>
          <option value="BL" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'BL') ? 'selected="selected"' : ''; ?>>Saint Barthélemy</option>
          <option value="SH" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SH') ? 'selected="selected"' : ''; ?>>Saint Helena, Ascension and Tristan da Cunha</option>
          <option value="KN" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'KN') ? 'selected="selected"' : ''; ?>>Saint Kitts and Nevis</option>
          <option value="LC" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'LC') ? 'selected="selected"' : ''; ?>>Saint Lucia</option>
          <option value="MF" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'MF') ? 'selected="selected"' : ''; ?>>Saint Martin (French part)</option>
          <option value="PM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'PM') ? 'selected="selected"' : ''; ?>>Saint Pierre and Miquelon</option>
          <option value="VC" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'VC') ? 'selected="selected"' : ''; ?>>Saint Vincent and the Grenadines</option>
          <option value="WS" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'WS') ? 'selected="selected"' : ''; ?>>Samoa</option>
          <option value="SM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SM') ? 'selected="selected"' : ''; ?>>San Marino</option>
          <option value="ST" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'ST') ? 'selected="selected"' : ''; ?>>Sao Tome and Principe</option>
          <option value="SA" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SA') ? 'selected="selected"' : ''; ?>>Saudi Arabia</option>
          <option value="SN" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SN') ? 'selected="selected"' : ''; ?>>Senegal</option>
          <option value="RS" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'RS') ? 'selected="selected"' : ''; ?>>Serbia</option>
          <option value="SC" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SC') ? 'selected="selected"' : ''; ?>>Seychelles</option>
          <option value="SL" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SL') ? 'selected="selected"' : ''; ?>>Sierra Leone</option>
          <option value="SG" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SG') ? 'selected="selected"' : ''; ?>>Singapore</option>
          <option value="SX" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SX') ? 'selected="selected"' : ''; ?>>Sint Maarten (Dutch part)</option>
          <option value="SK" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SK') ? 'selected="selected"' : ''; ?>>Slovakia</option>
          <option value="SI" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SI') ? 'selected="selected"' : ''; ?>>Slovenia</option>
          <option value="SB" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SB') ? 'selected="selected"' : ''; ?>>Solomon Islands</option>
          <option value="SO" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SO') ? 'selected="selected"' : ''; ?>>Somalia</option>
          <option value="ZA" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'ZA') ? 'selected="selected"' : ''; ?>>South Africa</option>
          <option value="GS" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GS') ? 'selected="selected"' : ''; ?>>South Georgia and the South Sandwich Islands</option>
          <option value="SS" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SS') ? 'selected="selected"' : ''; ?>>South Sudan</option>
          <option value="ES" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'ES') ? 'selected="selected"' : ''; ?>>Spain</option>
          <option value="LK" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'LK') ? 'selected="selected"' : ''; ?>>Sri Lanka</option>
          <option value="SD" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SD') ? 'selected="selected"' : ''; ?>>Sudan</option>
          <option value="SR" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SR') ? 'selected="selected"' : ''; ?>>Suriname</option>
          <option value="SJ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SJ') ? 'selected="selected"' : ''; ?>>Svalbard and Jan Mayen</option>
          <option value="SZ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SZ') ? 'selected="selected"' : ''; ?>>Swaziland</option>
          <option value="SE" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SE') ? 'selected="selected"' : ''; ?>>Sweden</option>
          <option value="CH" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'CH') ? 'selected="selected"' : ''; ?>>Switzerland</option>
          <option value="SY" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'SY') ? 'selected="selected"' : ''; ?>>Syrian Arab Republic</option>
          <option value="TW" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TW') ? 'selected="selected"' : ''; ?>>Taiwan, Province of China</option>
          <option value="TJ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TJ') ? 'selected="selected"' : ''; ?>>Tajikistan</option>
          <option value="TZ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TZ') ? 'selected="selected"' : ''; ?>>Tanzania, United Republic of</option>
          <option value="TH" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TH') ? 'selected="selected"' : ''; ?>>Thailand</option>
          <option value="TL" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TL') ? 'selected="selected"' : ''; ?>>Timor-Leste</option>
          <option value="TG" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TG') ? 'selected="selected"' : ''; ?>>Togo</option>
          <option value="TK" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TK') ? 'selected="selected"' : ''; ?>>Tokelau</option>
          <option value="TO" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TO') ? 'selected="selected"' : ''; ?>>Tonga</option>
          <option value="TT" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TT') ? 'selected="selected"' : ''; ?>>Trinidad and Tobago</option>
          <option value="TN" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TN') ? 'selected="selected"' : ''; ?>>Tunisia</option>
          <option value="TR" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TR') ? 'selected="selected"' : ''; ?>>Turkey</option>
          <option value="TM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TM') ? 'selected="selected"' : ''; ?>>Turkmenistan</option>
          <option value="TC" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TC') ? 'selected="selected"' : ''; ?>>Turks and Caicos Islands</option>
          <option value="TV" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'TV') ? 'selected="selected"' : ''; ?>>Tuvalu</option>
          <option value="UG" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'UG') ? 'selected="selected"' : ''; ?>>Uganda</option>
          <option value="UA" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'UA') ? 'selected="selected"' : ''; ?>>Ukraine</option>
          <option value="AE" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'AE') ? 'selected="selected"' : ''; ?>>United Arab Emirates</option>
          <option value="GB" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'GB') ? 'selected="selected"' : ''; ?>>United Kingdom</option>
          <option value="US" <?php echo (!isset($studentCountryOfBirth) || empty($studentCountryOfBirth) || $studentCountryOfBirth == 'US') ? 'selected="selected"' : ''; ?>>United States</option>
          <option value="UM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'UM') ? 'selected="selected"' : ''; ?>>United States Minor Outlying Islands</option>
          <option value="UY" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'UY') ? 'selected="selected"' : ''; ?>>Uruguay</option>
          <option value="UZ" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'UZ') ? 'selected="selected"' : ''; ?>>Uzbekistan</option>
          <option value="VU" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'VU') ? 'selected="selected"' : ''; ?>>Vanuatu</option>
          <option value="VE" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'VE') ? 'selected="selected"' : ''; ?>>Venezuela, Bolivarian Republic of</option>
          <option value="VN" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'VN') ? 'selected="selected"' : ''; ?>>Viet Nam</option>
          <option value="VG" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'VG') ? 'selected="selected"' : ''; ?>>Virgin Islands, British</option>
          <option value="VI" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'VI') ? 'selected="selected"' : ''; ?>>Virgin Islands, U.S.</option>
          <option value="WF" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'WF') ? 'selected="selected"' : ''; ?>>Wallis and Futuna</option>
          <option value="EH" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'EH') ? 'selected="selected"' : ''; ?>>Western Sahara</option>
          <option value="YE" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'YE') ? 'selected="selected"' : ''; ?>>Yemen</option>
          <option value="ZM" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'ZM') ? 'selected="selected"' : ''; ?>>Zambia</option>
          <option value="ZW" <?php echo (isset($studentCountryOfBirth) && $studentCountryOfBirth == 'ZW') ? 'selected="selected"' : ''; ?>>Zimbabwe</option>
        </select>
    
  </div>
</div>
<!--Student Gender-->
<div class="form-row">
  <div class="form-group col-md-3 <?php echo in_array('studentGender', $missing)?'missing-field':''; ?>">
      <div>
          <p>Gender: *</p>
      </div>
   <label class="custom-control custom-radio">
     <?php 
     if(isset($studentGender))
     {
         if($studentGender === 'Female') {
          $female = true;
          }
          else if($studentGender === 'Male') {
          $male = true;
          } 
     }
     ?>
     
        <input id="male" name="studentGender" type="radio" class="custom-control-input" value="Male" <?php echo (isset($studentGender) && $studentGender == "Male") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Male</span>
      </label>
      <label class="custom-control custom-radio">
        <input id="female" name="studentGender" type="radio" class="custom-control-input" value="Female" <?php echo (isset($studentGender) && $studentGender == "Female") ? "checked='true'" : ""; ?>>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Female</span>
      </label>
  </div>
  
  <!-- Student Race -->
  <div class="form-group col-md-3 <?php echo in_array('studentRace', $missing)?'missing-field':''; ?>">
      <!-- Button trigger modal -->
      <label>Please select student's race: *</label>
      <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#raceModal" id="racebtn">Student Race</button>
      
      <!-- Modal And Modal Header -->
      <div class="modal fade" id="raceModal" tabindex="-1" role="dialog" aria-labelledby="raceModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="raceModalLabel">Select all that apply</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <!-- Modal Body -->
              <div class="modal-body">
                <div id="accordion" role="tablist" aria-multiselectable="true">
                  <!-- Hispanic Card -->
                  <div class="card">
                    <div class="card-header" role="tab" id="hispanicHeading">
                      <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#hispanic" aria-expanded="true" aria-controls="hispanic">
                          Hispanic/Latino
                        </a>
                      </h5>
                    </div>

                    <div id="hispanic" class="collapse show" role="tabpanel" aria-labelledby="hispanicHeading">
                      <div class="card-block">
                        <div class="form-row">
                          <ul>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Cuban" <?php echo (isset($studentRace) && in_array('Cuban', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Cuban</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Dominican" <?php echo (isset($studentRace) && in_array('Dominican', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Dominican</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Spaniard" <?php echo (isset($studentRace) && in_array('Spaniard', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Spaniard</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Puerto Rican" <?php echo (isset($studentRace) && in_array('Puerto Rican', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Puerto Rican</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input raceCheck" value="Mexican" <?php echo (isset($studentRace) && in_array('Mexican', $studentRace)) ? 'checked' : ''; ?>>
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">Mexican</span>
                               </label>
                            </li>
                          </ul>
                          <!-- Second List -->
                          <ul>
                        
                            <li>
                               <label class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input raceCheck" value="Central American" <?php echo (isset($studentRace) && in_array('Central American', $studentRace)) ? 'checked' : ''; ?>>
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">Central American</span>
                                </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="South American" <?php echo (isset($studentRace) && in_array('South American', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">South American</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Latin American" <?php echo (isset($studentRace) && in_array('Latin American', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Latin American</span>
                             </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Other Hispanic" <?php echo (isset($studentRace) && in_array('Other Hispanic', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Other Hispanic</span>
                              </label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Hispanic Card -->
                  <!-- Non Hispanic Card -->
                  <div class="card">
                    <div class="card-header" role="tab" id="nonhispanicHeading">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#nonhispanic" aria-expanded="false" aria-controls="nonhispanic">
                          Non-Hispanic
                        </a>
                      </h5>
                    </div>
                    <div id="nonhispanic" class="collapse" role="tabpanel" aria-labelledby="nonhispanicHeading">
                      <div class="card-block">
                        <div class="form-row">
                          <ul>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="African/African American/Black/Haitian/Ethiopian" <?php echo (isset($studentRace) && in_array('African/African American/Black/Haitian/Ethiopian', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">African/African American/Black/Haitian/Ethiopian</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="White/Caucasian/European/Russian/Middle Eastern" <?php echo (isset($studentRace) && in_array('White/Caucasian/European/Russian/Middle Eastern', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">White/Caucasian/European/Russian/Middle Eastern</span>
                              </label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Non-Hispanic Card -->
                  <!-- Asian Card -->
                  <div class="card">
                    <div class="card-header" role="tab" id="asianHeading">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#asian" aria-expanded="false" aria-controls="asian">
                          Asian
                        </a>
                      </h5>
                    </div>
                    <div id="asian" class="collapse" role="tabpanel" aria-labelledby="asianHeading">
                      <div class="card-block">
                        <div class="form-row">
                          <ul>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Asian Indian" <?php echo (isset($studentRace) && in_array('Asian Indian', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Asian Indian</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Cambodian" <?php echo (isset($studentRace) && in_array('Cambodian', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Cambodian</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Chinese" <?php echo (isset($studentRace) && in_array('Chinese', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Chinese</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Filipino" <?php echo (isset($studentRace) && in_array('Filipino', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Filipino</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input raceCheck" value="Hmong" <?php echo (isset($studentRace) && in_array('Hmong', $studentRace)) ? 'checked' : ''; ?>>
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">Hmong</span>
                               </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input raceCheck" value="Indonesian" <?php echo (isset($studentRace) && in_array('Indonesian', $studentRace)) ? 'checked' : ''; ?>>
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">Indonesian</span>
                               </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input raceCheck" value="Japanese" <?php echo (isset($studentRace) && in_array('Japanese', $studentRace)) ? 'checked' : ''; ?>>
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">Japanese</span>
                               </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input raceCheck" value="Korean" <?php echo (isset($studentRace) && in_array('Korean', $studentRace)) ? 'checked' : ''; ?>>
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">Korean</span>
                               </label>
                            </li>
                          </ul>
                          <!-- Second List -->
                          <ul>
                            <li>
                               <label class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input raceCheck" value="Laotian" <?php echo (isset($studentRace) && in_array('Laotian', $studentRace)) ? 'checked' : ''; ?>>
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">Laotian</span>
                                </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Malaysian" <?php echo (isset($studentRace) && in_array('Malaysian', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Malaysian</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Pakistani" <?php echo (isset($studentRace) && in_array('Pakistani', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Pakistani</span>
                             </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Singaporean" <?php echo (isset($studentRace) && in_array('Singaporean', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Singaporean</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Taiwanese" <?php echo (isset($studentRace) && in_array('Taiwanese', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Taiwanese</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Thai" <?php echo (isset($studentRace) && in_array('Thai', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Thai</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Vietnamese" <?php echo (isset($studentRace) && in_array('Vietnamese', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Vietnamese</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Other Asian" <?php echo (isset($studentRace) && in_array('Other Asian', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Other Asian</span>
                              </label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Asian Card -->
                  <!-- Hawaiian Card -->
                  <div class="card">
                    <div class="card-header" role="tab" id="hawaiianHeading">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#hawaiian" aria-expanded="false" aria-controls="hawaiian">
                          Native Hawaiian/Other Pacific Islander
                        </a>
                      </h5>
                    </div>
                    <div id="hawaiian" class="collapse" role="tabpanel" aria-labelledby="hawaiianHeading">
                      <div class="card-block">
                        <div class="form-row">
                          <ul>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Native Hawaiian" <?php echo (isset($studentRace) && in_array('Native Hawaiian', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Native Hawaiian</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Fijian" <?php echo (isset($studentRace) && in_array('Fijian', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Fijian</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Guamanian/Chamorro" <?php echo (isset($studentRace) && in_array('Guamanian/Chamorro', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Guamanian/Chamorro</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Mariana Islander" <?php echo (isset($studentRace) && in_array('Mariana Islander', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Mariana Islander</span>
                              </label>
                            </li>
                          </ul>
                          <!-- Second List -->
                          <ul>
                            <li>
                               <label class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input raceCheck" value="Melanesian" <?php echo (isset($studentRace) && in_array('Melanesian', $studentRace)) ? 'checked' : ''; ?>>
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">Melanesian</span>
                                </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Samoan" <?php echo (isset($studentRace) && in_array('Samoan', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Samoan</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Tongan" <?php echo (isset($studentRace) && in_array('Tongan', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Tongan</span>
                             </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Other Pacific Islander" <?php echo (isset($studentRace) && in_array('Other Pacific Islander', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Other Pacific Islander</span>
                              </label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Hawaiian Card -->
                  <!-- American Indian Card -->
                  <div class="card">
                    <div class="card-header" role="tab" id="indianHeading">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#indian" aria-expanded="false" aria-controls="indian">
                          American Indian/Alaskan Native
                        </a>
                      </h5>
                    </div>
                    <div id="indian" class="collapse" role="tabpanel" aria-labelledby="indianHeading">
                      <div class="card-block">
                        <div class="form-row">
                          <ul class="studentRace">
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Alaska Native" <?php echo (isset($studentRace) && in_array('Alaska Native', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Alaska Native</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Chehalis" <?php echo (isset($studentRace) && in_array('Chehalis', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Chehalis</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Colville" <?php echo (isset($studentRace) && in_array('Colville', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Colville</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Cowlitz" <?php echo (isset($studentRace) && in_array('Cowlitz', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Cowlitz</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Hoh" <?php echo (isset($studentRace) && in_array('Hoh', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Hoh</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Hames" <?php echo (isset($studentRace) && in_array('Hames', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Hames</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Kalispel" <?php echo (isset($studentRace) && in_array('Kalispel', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Kalispel</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Lower Elwha" <?php echo (isset($studentRace) && in_array('Lower Elwha', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Lower Elwha</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Lummi" <?php echo (isset($studentRace) && in_array('Lummi', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Lummi</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Makah" <?php echo (isset($studentRace) && in_array('Makah', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Makah</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Muckleshoot" <?php echo (isset($studentRace) && in_array('Muckleshoot', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Muckleshoot</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Nisqually" <?php echo (isset($studentRace) && in_array('Other Asian', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Nisqually</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Nooksack" <?php echo (isset($studentRace) && in_array('Nooksack', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Nooksack</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Port Gamble Clallam" <?php echo (isset($studentRace) && in_array('Port Gamble Clallam', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Port Gamble Clallam</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Puyallup" <?php echo (isset($studentRace) && in_array('Puyallup', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Puyallup</span>
                              </label>
                            </li>
                            <li>
                               <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Quileute" <?php echo (isset($studentRace) && in_array('Quileute', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Quileute</span>
                              </label>
                            </li>
                          </ul>
                          <!-- Second List -->
                          <ul class="studentRace">
                            <li>
                               <label class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input raceCheck" value="Quinault" <?php echo (isset($studentRace) && in_array('Quinault', $studentRace)) ? 'checked' : ''; ?>>
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">Quinault</span>
                                </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Samish" <?php echo (isset($studentRace) && in_array('Samish', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Samish</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Sauk-Suiattle" <?php echo (isset($studentRace) && in_array('Sauk-Suiattle', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Sauk-Suiattle</span>
                             </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Shoalwater" <?php echo (isset($studentRace) && in_array('Shoalwater', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Shoalwater</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Skokomish" <?php echo (isset($studentRace) && in_array('Skokomish', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Skokomish</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Snoqualmie" <?php echo (isset($studentRace) && in_array('Snoqualmie', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Snoqualmie</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Spokane" <?php echo (isset($studentRace) && in_array('Spokane', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Spokane</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Squaxin Island" <?php echo (isset($studentRace) && in_array('Squaxin Island', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Squaxin Island</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Stillaguamish" <?php echo (isset($studentRace) && in_array('Stillaguamish', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Stillaguamish</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Suquamish" <?php echo (isset($studentRace) && in_array('Suquamish', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Suquamish</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Swinomish" <?php echo (isset($studentRace) && in_array('Swinomish', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Swinomish</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Tulalip" <?php echo (isset($studentRace) && in_array('Tulalip', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Tulalip</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Upper Skagit" <?php echo (isset($studentRace) && in_array('Upper Skagit', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Upper Skagit</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Yakama" <?php echo (isset($studentRace) && in_array('Yakama', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Yakama</span>
                              </label>
                            </li>
                            <li>
                             <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input raceCheck" value="Other Indian" <?php echo (isset($studentRace) && in_array('Other Indian', $studentRace)) ? 'checked' : ''; ?>>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Other Indian</span>
                              </label>
                            </li>  
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End American Indian Card -->
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal" id="raceContinue">Continue</button>
              </div>
          </div>
      </div>
      </div>
  </div>
  <!-- End Modal -->
  <div class="form-group col-md-6">
      <p>Student Race:</p>
      <ul id="studentRaceList">
        <?php
          if (!empty($studentRace)) {
            foreach ($studentRace as $value) {
              if(!empty($value)) {
                echo "<li data-value='$value'> $value <input type='hidden' name='studentRace[]' value='$value'/></li>";
              }
            }
          }
        ?>
        <!-- This filled out by jquery and race Selection -->
      </ul>
  </div>
</div>
<div class="form-row">
  <div class="rm-group col-md-3">
      <label for="studentEmail">Student Email: *</label>
          <input type="studentEmail" class="form-control <?php echo in_array('studentEmail', $missing)?'missing-field':''; ?>" id="studentEmail" name="studentEmail" placeholder="Example@mail.com" value="<?php echo isset($studentEmail)?$studentEmail:'';?>">
  </div>
  <div class="form-group col-md-3">
      <label for="studentPhone">Student Phone: *</label>
      <input type="studentPhone" class="form-control <?php echo in_array('studentPhone', $missing)?'missing-field':''; ?>" id="studentPhone" name="studentPhone" placeholder="123-456-7890" value="<?php echo isset($studentPhone)?$studentPhone:'';?>">
      <small id="studentPhonehelp" class="form-text text-muted">
          Best number to reach the student. </small>
  </div>
  <div class="form-group col-md-4 ">
      <label <?php echo in_array('studentFileUpload', $missing)?'class="missing-field"':''; ?>>Photo ID *</label>
      <input type="file" name="studentFileUpload" value="<?php isset($studentFileUpload) ? $studentFileUpload : '';?>" />
      <small id="studentFileUploadHelp" class="form-text text-muted">
          Please upload valid ID for student(if over 18) or parent/guardian ID(if under 17)</small>						
  </div>
</div>
<hr>
<div class="form-row">
  <button type="button" class="btn btn-success saveAndExit" data-toggle="modal" data-target="#saveAndExit">
   Save and Exit
  </button>
  <a class="btn btn-secondary ml-auto next">Next</a>
</div>