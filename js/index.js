/*
  index.js
  This JavaScript file takes care of the functionality of the iGrad form. 
  Includes date of birth check, div traversal, and all the small/hidden functionality of the form.
  
  Work done by:
  Ryan Marlow
*/

$(document).ready(function () {
  var numOfSchool = 0;
  var numOfGuardian = 0;
  var numOfSibling = 0;
  
  $('#studentTable').dataTable();
  
  
  
  //Date validation check.
    $("#studentDateOfBirth").blur(function() {
      var dob = $('#studentDateOfBirth').val();
      var currentYear = new Date().getFullYear();
      var importantDate = new Date(currentYear,08,01);
      var check = (new Date(importantDate) - new Date(dob))/(365.25 * 24 * 60 * 60 * 1000); 
      if(!(check >=16 && check < 21)) {
        $('#unableToApply').modal('toggle')
        $("#studentDateOfBirth").addClass("is-invalid");
        }
      else {
        $("#studentDateOfBirth").removeClass("is-invalid");
        $("#studentDateOfBirth").addClass("is-valid");
      }
    });
    
  //Next/previous button functionality.
    $(".next").click(function() {
      //Selects next tab and panel from the html based on the next parent li from the currently active li
        var nextTab = $('a.active').parent('li').next().children();
        var nextPanel = $("div.active").next();

        //Removes current active class effectively "hiding" current div.
        $("a.active").removeClass('active');
        $("div.active").removeClass('active show');
      
        //Add active class to next tab and panel effectively "showing" next div.
        nextTab.addClass('active');
        nextPanel.addClass('active show');
        window.scrollTo(0,0);
    });
  
   $(".prev").click(function() {
        //Selects previous tab and panel from the html based on the next parent li from the currently active li
        var prevTab = $('a.active').parent('li').prev().children();
        var prevPanel = $("div.active").prev();

        //Removes current active class effectively "hiding" current div.
        $("a.active").removeClass('active');
        $("div.active").removeClass('active show');
        prevTab.addClass('active');
        prevPanel.addClass('active show'); 
        window.scrollTo(0,0);
    });
  
  //Displays details for behavior.
  $("#disciplineNo").click(function(){
    $("#disciplineDetails").hide(1000);
  });
  
  $("#disciplineYes").click(function(){
    $("#disciplineDetails").show(1000);
  });
  
  
  //Displays details for behavior.
  $("#behaviorNo").click(function(){
    $("#behaviorDetails").hide(1000);
  });
  
  $("#behaviorYes").click(function(){
    $("#behaviorDetails").show(1000);
  });
  
  //Displays mailing address fields if different.
  $("#sameAsMailing").click(function(){
    $("#mailingAddress").hide(1000);
  });
  
  $("#notSameAsMailing").click(function(){
    $("#mailingAddress").show(1000);
  });
  
  //Displays foreign education div if yes.
  $("#outsideEducation").click(function(){
    $("#foreignEducation").show(1000);
  });
  
  $("#noOutsideEducation").click(function(){
    $("#foreignEducation").hide(1000);
  });
  
  //Displays explaination option for distress
  $("#distressYes").click(function(){
    $("#distressDetailsDiv").show(1000);
  });
  
  $("#distressNo").click(function(){
    $("#distressDetailsDiv").hide(1000);
  });
  
  //Displays explaination option for distress
  $("#holidayNo").click(function(){
    $("#holidayDetailsDiv").show(1000);
  });
  
  $("#holidayYes").click(function(){
    $("#holidayDetailsDiv").hide(1000);
  });
  
  //Displays other field if other is clicked.
  $("#emergencyContactRelationship").blur(function() {
    var emergencyRelationship = $("#emergencyContactRelationship").val();
    if(emergencyRelationship == "Other") {
      $("#otherRelationshipDiv").show(1000);
    } else {
      $("#otherRelationshipDiv").hide(1000);
    }
  });
  
  //Adds student race to visible list on race selection/de-selection
  $(".raceCheck").change(function() {
    // If checked
    var value = $(this).val(),
        $list = $("#studentRaceList");
    if (this.checked) {
        //add to the right
        $list.append("<li data-value='" + value + "'>" + value + "<input type='hidden' name='studentRace[]' value='" + value + "'/></li>");
    }
    else {
        //hide to the right
        $list.find('li[data-value="' + value + '"]').remove();
    }
  });
  
  //Add student medical information to visible list on race selection/de-selection
  $(".medicalCheck").change(function() {
    // If checked
    var value = $(this).val(),
        $list = $("#medicalList");
    if (this.checked) {
        //add medical
        $list.append("<li data-value='" + value + "'>" + value + "<input type='hidden' name='studentMedical[]' value='" + value + "'/></li>");
    }
    else {
        //hide medical
        $list.find('li[data-value="' + value + '"]').remove();
    }
  });
  
  //Adds Schools to studentSchoolList
  $('#schoolDone').click(function() {
      var grade = $('#schoolGrade').val();
      var years = $('#schoolYear').val();
      var city = $('#schoolCity').val();
      var state = $('#schoolState').val();
      var schoolName = $('#schoolName').val();
      $('#studentSchoolList').append("<ul name='studentSchool" + numOfSchool + "'>" +
                                  "<li>School: " + schoolName + "<input type='hidden' name='school" + numOfSchool + "[schoolName]" + "'value='" + schoolName + "'/></li>" +
                                  "<li>Grade(s) attended: " + grade + "<input type='hidden' name='school" + numOfSchool + "[schoolGrade]" + "'value='" + grade + "'/></li>" +
                                  "<li>Year(s) attended: " + years + "<input type='hidden' name='school" + numOfSchool + "[schoolYear]" + "'value='" + years + "'/></li>" +
                                  "<li>City: " + city + "<input type='hidden' name='school" + numOfSchool + "[schoolCity]" + "'value='" + city + "'/></li>" +
                                  "<li>State: " + state + "<input type='hidden' name='school" + numOfSchool + "[schoolState]" + "'value='" + state + "'/></li>" +
                                  "<a class='btn btn-secondary btn-sm removeSchool'>Remove</a>" +
                                  "</ul>");
      $('#schoolGrade').val("");
      $('#schoolYear').val("");
      $('#schoolCity').val("");
      $('#schoolState').val("");
      $('#schoolName').val("");
      numOfSchool++;
  });
  
  //Adds parents to the parent list
   $('#guardianDone').click(function() {
      var guardianFirstName = $('#guardianFirstName').val();
      var guardianMI = $('#guardianMI').val();
      var guardianLastName = $('#guardianLastName').val();
      var guardianPhone = $('#guardianPhone').val();
      var guardianEmail = $('#guardianEmail').val();
      var relationshipToStudent = $('#relationshipToStudent').val();
      var guardianIsMil = $('.guardianIsMil:radio:checked').val();
      $('#guardianList').append("<ul name='guardianListItem" + numOfGuardian + "'>" +
                                  "<li>Parent/Guardian Name: " + guardianFirstName + " "+ guardianMI + " "+ guardianLastName +
                                  "<input type='hidden' name='guardian" + numOfGuardian + "[guardianFirstName]" + "'value='" + guardianFirstName + "'/>" +
                                  "<input type='hidden' name='guardian" + numOfGuardian + "[guardianMI]" + "'value='" + guardianMI + "'/>" +
                                  "<input type='hidden' name='guardian" + numOfGuardian + "[guardianLastName]" + "'value='" + guardianLastName + "'/></li>" +
                                  "<li>Phone: " + guardianPhone + "<input type='hidden' name='guardian" + numOfGuardian + "[guardianPhone]" + "'value='" + guardianPhone + "'/></li>" +
                                  "<li>Email: " + guardianEmail + "<input type='hidden' name='guardian" + numOfGuardian + "[guardianEmail]" + "'value='" + guardianEmail + "'/></li>" +
                                  "<li>Relationship to Student: " + relationshipToStudent + "<input type='hidden' name='guardian" + numOfGuardian + "[relationshipToStudent]" + "'value='" + relationshipToStudent + "'/></li>" +
                                  "<li>Military: " + guardianIsMil + "<input type='hidden' name='guardian" + numOfGuardian + "[guardianIsMil]" + "'value='" + guardianIsMil + "'/></li>" +
                                  "<a class='btn btn-secondary btn-sm removeGuardian'>Remove</a>" +
                                  "</ul><br>");
      $('#guardianFirstName').val("");
      $('#guardianMI').val("");
      $('#guardianLastName').val("");
      $('#guardianPhone').val("");
      $('#guardianEmail').val("");
      $('#relationshipToStudent').val("");
      $('.guardianIsMil').find('label').removeClass('active').end().find('[type="radio"]').prop('checked', false);
      numOfGuardian++;
  });
  
  //Adds siblings to the sibling list
  $('#siblingDone').click(function(){
      var siblingFirstName = $('#siblingFirstName').val();
      var siblingLastName = $('#siblingLastName').val();
      var siblingAge = $('#siblingAge').val();
      var siblingGrade = $('#siblingGrade').val();
      var siblingSchool = $('#siblingSchool').val();
      $('#siblingList').append("<ul name='siblingListItem" + numOfSibling + "'>" +
                                  "<li>Sibling Name: " + siblingFirstName + " "+ siblingLastName +
                                  "<input type='hidden' name='sibling" + numOfSibling + "[siblingFirstName]" + "'value='" + siblingFirstName + "'/>" +
                                  "<input type='hidden' name='sibling" + numOfSibling + "[siblingLastName]" + "'value='" + siblingLastName + "'/></li>" +
                                  "<li>Age: " + siblingAge + "<input type='hidden' name='sibling" + numOfSibling + "[siblingAge]" + "'value='" + siblingAge + "'/></li>" +
                                  "<li>Grade: " + siblingGrade + "<input type='hidden' name='sibling" + numOfSibling + "[siblingGrade]" + "'value='" + siblingGrade + "'/></li>" +
                                  "<li>School: " + siblingSchool + "<input type='hidden' name='sibling" + numOfSibling + "[siblingSchool]" + "'value='" + siblingSchool + "'/></li>" +
                                  "<a class='btn btn-secondary btn-sm removeSibling'>Remove</a>" +
                                  "</ul><br>");
      $('#siblingFirstName').val("");
      $('#siblingLastName').val("");
      $('#siblingAge').val("");
      $('#siblingGrade').val("");
      $('#siblingSchool').val("");
      numOfSibling++;
  });
  
  $('#studentSchoolList').on('click', 'a', function() {
    $(this).closest('ul').remove();
  });
  $('#guardianList').on('click', 'a', function() {
    $(this).closest('ul').remove();
  });
  $('#siblingList').on('click', 'a', function() {
    $(this).closest('ul').remove();
  });
  
  //Checks required fields, changes red x to green checkmark if all required fields met.
  $(".nav-link").click(function() {
    $(".tabicon").closest("span").removeClass("incomplete");
    $(".tabicon").closest("span").addClass("complete");
  });
  
  $("button.saveAndExit").click(function() {
    $("#saveAndExitEmail").html("Email: " + $("input[name='studentEmail']").val());
  }); 
  
});