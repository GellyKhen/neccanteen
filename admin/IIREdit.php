<?php
session_start();
$VarcharStudentAccountNumber = $_SESSION['sessionStudentAccountNumber'];
$VarcharStudentAccountPassword = $_SESSION['sessionStudentAccountPassword'];
?>
<!doctype html>
<html lang="en">
<head>
	
	<title>Individual Inventory Record</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<style>
	h3 {color:white;}
	p {color:blue;}
	</style>
<!--Bootstrap for form-->

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-city.jpg')">
	    <!--   Creative Tim Branding   -->
	    <a href="http://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <a href="home.html">
	                <img src="assets/img/pup_logo.png">
	            	</a>
	            </div>
	            <div class="brand">
	                Polytechnic University Of The Philippines
	            </div>
	        </div>
	    </a>

		<!--  Made With Material Kit  -->
		<a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">MK</div>
			<div class="made-with">Made with <strong>MK</strong></div>
		</a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
			                <form action="IIRNewSignUp.php" method="post">
			                <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Guidance Counseling And Testing Services
		                        	</h3>
									<h5> Individual Inventory Record Form </h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#personalinformation" data-toggle="tab">I. Personal Information</a></li>
			                            <li><a href="#educationalbackground" data-toggle="tab">II. Educational Background</a></li>
			                            <li><a href="#homeandfamilybackground" data-toggle="tab">III. Home And Family Background</a></li>
			                            <li><a href="#health" data-toggle="tab">IV. Health</a></li>
			                            <li><a href="#interestsandhobbies" data-toggle="tab">V. Interests And Hobbies</a></li>
			                            <li><a href="#testresult" data-toggle="tab">VI. Test Results</a></li>
			                        </ul>
								</div>

								<?php
                        		include("connectionString.php");
                        		$queryStudent = "SELECT * FROM tbl_studentaccount INNER JOIN tbl_personalinfo ON tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber WHERE tbl_studentaccount.studentNumber = '$VarcharStudentAccountNumber'";
                        		$resultStudent = mysqli_query($connect, $queryStudent); 
                                while($row = mysqli_fetch_array($resultStudent))  
                                {  
                                   
                                        $varcharStudentNumber = $row['studentNumber'];
                                        $varcharStudentFirstName = $row['studentFirstName'];
                                        $varcharStudentMiddleName = $row['studentMiddleName'];
                                        $varcharStudentLastName = $row['studentLastName'];
                                        $varcharStudentCourseCode = $row['courseCode'];
                                        $varcharStudentYear = $row['year'];
                                        $varcharStudentSection =  $row['section'];

                                         
                           
                                }
                                $result2 = mysqli_query($connect, "SELECT * FROM `tbl_personalinfo` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `infoID` DESC LIMIT 1");
                                                                     
                                   while($res2 = mysqli_fetch_array($result2)){
                                    $varcharStudentCollege = $res2['collegeCode'];
                                    $varcharStudentCourse = $res2['courseCode'];
                                    $varcharStudentSex = $res2['sex'];
                                    $varcharStudentSexuality = $res2['sexuality'];
                                    $varcharStudentAge = $res2['age'];
                                    $varcharStudentYear = $res2['year'];
                                    $varcharStudentSection = $res2['section'];
                                    $varcharStudentCivilStatus = $res2['civilStatus'];
                                    $varcharStudentBirthdate = $res2['birthDate'];
                                    $varcharStudentHeight = $res2['height'];
                                    $varcharStudentWeight = $res2['weight'];
                                    $varcharStudentComplexion = $res2['complexion'];
                                    $varcharStudentBirthplace = $res2['birthPlace'];
                                    $varcharStudentCityHouseNumber = $res2['cityHouseNumber'];
                                    $varcharStudentCityProvince = $res2['cityProvince'];
                                    $varcharStudentCityCity = $res2['cityName'];
                                    $varcharStudentCityBarangay = $res2['cityBarangay'];

                                    $tempStudentCityAddress = $varcharStudentCityHouseNumber .' '. $varcharStudentCityProvince .' '. $varcharStudentCityCity .' '. $varcharStudentCityBarangay; 

                                    $varcharStudentProvinceHouseNumber = $res2['provinceHouseNumber'];
                                    $varcharStudentProvinceProvince = $res2['provinceProvincial'];
                                    $varcharStudentProvinceCity = $res2['provinceName'];
                                    $varcharStudentProvinceBarangay = $res2['provinceBarangay'];

                                    $tempStudentProvinceAddress = $varcharStudentProvinceHouseNumber .' '.  $varcharStudentProvinceProvince . ' ' . $varcharStudentProvinceCity . ' ' .  $varcharStudentProvinceBarangay;

                                    $varcharStudentTelNum = $res2['telNumber'];
                                    $varcharStudentMobileNum = $res2['mobileNumber'];
                                    $varcharStudentHSGWA = $res2['hsGWA'];
                                    $varcharStudentReligion = $res2['religion'];
                                    $varcharStudentEmployerName = $res2['employerName'];
                                    $varcharStudentEmployerAddress = $res2['employerAddress'];
                                    $varcharStudentContactPersonName = $res2['contactPersonName'];
                                    $varcharStudentContactPersonAddress = $res2['cpAddress'];
                                    $varcharStudentContactPersonRelationship = $res2['cpRelationship'];
                                    $varcharStudentContactPersonContactNumber = $res2['cpContactNumber'];
                                   }

                                   $result2point5 = mysqli_query($connect, "SELECT * FROM `tbl_educationalbackground` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `educationID` DESC LIMIT 1");
                                   while($res2point5 = mysqli_fetch_array($result2point5)){
                                    $varcharStudentPreSchoolName = $res2point5['prepSchoolName'];
                                    $varcharStudentPreSchoolAddress = $res2point5['prepSchoolAddress'];
                                    $varcharStudentPreSchoolType = $res2point5['prepType'];
                                    $varcharStudentPreSchoolYearAttended = $res2point5['prepYearAttended'];
                                    $varcharStudentPreSchoolAwards = $res2point5['prepAwards'];
                                    $varcharStudentPreSchoolImage = $res2point5['prepImage'];
                                    $varcharStudentElementarySchoolName = $res2point5['elemSchoolName'];
                                    $varcharStudentElementarySchoolAddress = $res2point5['elemSchooAddress'];
                                    $varcharStudentElementarySchoolType = $res2point5['elemType'];
                                    $varcharStudentElementarySchoolYearAttended = $res2point5['elemYearAttended'];
                                    $varcharStudentElementarySchoolAwards = $res2point5['elemAwards'];
                                    $varcharStudentELemntarySchoolImage = $res2point5['elemImage'];
                                    $varcharStudentHSSchoolName = $res2point5['hsSchoolName'];
                                    $varcharStudentHSSchoolAddress = $res2point5['hsSchoolAddress'];
                                    $varcharStudentHSSchoolType = $res2point5['hsType'];
                                    $varcharStudentHSSchoolYearAttended = $res2point5['hsYearAttended'];
                                    $varcharStudentHSSchoolAwards = $res2point5['hsAwards'];
                                    $varcharStudentHSSchoolImage = $res2point5['hsImage'];
                                    $varcharStudentVocationalSchoolName = $res2point5['vocSchoolName'];
                                    $varcharStudentVocationalSchoolAddress = $res2point5['vocSchoolAddress'];
                                    $varcharStudentVocationalSchoolType = $res2point5['vocType'];
                                    $varcharStudentVocationalSchoolYearAttended = $res2point5['vocYearAttended'];
                                    $varcharStudentVocationalAwards = $res2point5['vocAwards'];
                                    $varcharStudentVocationalImage = $res2point5['vocImage'];
                                    $varcharStudentCollegeSchoolName = $res2point5['collegeSchoolName'];
                                    $varcharStudentCollegeSchoolAddress = $res2point5['collegeSchoolAddress'];
                                    $varcharStudentCollegeSchoolType = $res2point5['collegeType'];
                                    $varcharStudentCollegeSchoolYearAttended = $res2point5['collegeYearAttended'];
                                    $varcharStudentCollegeSchoolAwards = $res2point5['collegeAwards'];
                                    $varcharStudentCollegeSchoolImage = $res2point5['collegeImage'];
                                    $varcharStudentNatureOfSchooling = $res2point5['natureOfSchooling'];
                                    $varcharStudentInterruptedWhy = $res2point5['interuptedWhy'];





                                   }


                                   $result3 = mysqli_query($connect, "SELECT * FROM `tbl_familybackground` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `familyID` DESC LIMIT 1");
                                   while($res3 = mysqli_fetch_array($result3)){
                                    $varcharStudentFatherName = $res3['fatherName'];
                                    $varcharStudentFatherAge = $res3['fatherAge'];
                                    $varcharStudentFatherStatus = $res3['fatherStatus'];
                                    $varcharStudentFatherEducation = $res3['fatherEducation'];
                                    $varcharStudentFatherOccupation = $res3['fatherOccupation'];
                                    $varcharStudentFatherEmployerName = $res3['fatherEmployerName'];
                                    $varcharStudentFatherEmployerAddress = $res3['fatherEmployerAdd'];

                                    $varcharStudentMotherName = $res3['motherName'];
                                    $varcharStudentMotherAge = $res3['motherAge'];
                                    $varcharStudentMotherStatus = $res3['motherStatus'];
                                    $varcharStudentMotherEducation = $res3['motherEducation'];
                                    $varcharStudentMotherOccupation = $res3['motherOccupation'];
                                    $varcharStudentMotherEmployerName = $res3['motherEmployerName'];
                                    $varcharStudentMotherEmployerAddress = $res3['motheremployerAdd'];

                                    $varcharStudentGuardianName = $res3['guardianName'];
                                    $varcharStudentGuardianAge = $res3['guardianAge'];
                                    $varcharStudentGuardianRelation = $res3['guardianRelation'];
                                    $varcharStudentGuardianEducation = $res3['guardianEducation'];
                                    $varcharStudentGuardianOccupation = $res3['guardianOccupation'];
                                    $varcharStudentGuardianEmployerName = $res3['guardianEmployerName'];
                                    $varcharStudentGuardianEmployerAddress = $res3['guardianEmployerAdd'];

                                    $varcharStudentMaritalRelationship = $res3['parentsMaritalRelation'];
                                    $varcharStudentNumOfChildren = $res3['noOfChildren'];
                                    $varcharStudentNumOfBrother = $res3['noOfBrother'];
                                    $varcharStudentNumOfSister = $res3['noOfSister'];
                                    $varcharStudentSiblingsEmployed = $res3['broSisEmployed'];
                                    $varcharStudentOrdinalPosition = $res3['ordinalPosition'];
                                    $varcharStudentSiblingSupporter = $res3['siblingSupporter'];
                                    $varcharStudentSchoolFinancer = $res3['schoolFinancer'];
                                    $varcharStudentWeeklyAllowance = $res3['weeklyAllowance'];
                                    $varcharStudentMonthlyIncome = $res3['totalMonthlyIncome'];
                                    $varcharStudentStudyPlace = $res3['studyPlace'];
                                    $varcharStudentRoomSharing = $res3['roomSharing'];
                                    $varcharStudentNatureOfResidence = $res3['natureOfResidence'];
                                   }

                                   $result4 = mysqli_query($connect, "SELECT * FROM `tbl_healthinfo` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `healthID` DESC LIMIT 1");
                                   while($res4 = mysqli_fetch_array($result4)){
                                    $varcharStudentHealthID = $res4['healthID'];
                                    $varcharStudentVisionProblem = $res4['visionProblem'];
                                    $varcharStudentHearingProblem = $res4['hearingProblem'];
                                    $varcharStudentSpeechProblem = $res4['speechProblem'];
                                    $varcharStudentGeneralHealth = $res4['generalHealth'];
                                    $varcharStudentPsychiatristConsult = $res4['psychiatristConsult'];
                                    $varcharStudentPsychiatristWhen = $res4['psychiatristWhen'];
                                    $varcharStudentPsychiatristReason  = $res4['psychiatristReason'];
                                    $varcharStudentPsychologistConsult = $res4['psychologistConsult'];
                                    $varcharStudentPsychologistWhen = $res4['psychologistWhen'];
                                    $varcharStudentPsychologistReason = $res4['psychologistReason'];
                                    $varcharStudentCounselorConsult = $res4['counselorConsult'];
                                    $varcharStudentCounselorWhen = $res4['counselorWhen'];
                                    $varcharStudentCounselorReason = $res4['counselorReason'];


                                   }
                                   $result5 = mysqli_query($connect, "SELECT * FROM `tbl_interesthobbies` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `interestID` DESC LIMIT 1");
                                   while($res5 = mysqli_fetch_array($result5)){
                                    $varcharStudentInterestID = $res5['interestID'];
                                    $varcharStudentClubName = $res5['clubName'];
                                    $varcharStudentFavSubject = $res5['favSubject'];
                                    $varcharStudentLeastFavSubject = $res5['leastFavSubject'];
                                    $varcharStudentHobby1 = $res5['hobby1'];
                                    $varcharStudentHobby2 = $res5['hobby2'];
                                    $varcharStudentHobby3 = $res5['hobby3'];
                                    $varcharStudentHobby4 = $res5['hobby4'];
                                    $varcharStudentJoinedOrganization = $res5['joinedOrganization'];
                                    $varcharStudentInterestOrganization = $res5['interestOrganization'];
                                    $varcharStudentOrganizationPosition = $res5['organizationPosition'];

                                    }
                                    $result6 = mysqli_query($connect, "SELECT * FROM `tbl_testrecord` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `testID` DESC LIMIT 1");
                                   while($res6 = mysqli_fetch_array($result6)){
                                    
                                    $varcharStudentTestID = $res6['testID'];
                                    $varcharStudentTestName = $res6['testName'];
                                    $varcharStudentTestRawScore = $res6['testRawScore']; 
                                    $varcharStudentTestPercentile = $res6['testPercentile'];
                                    $varcharStudentTestDescription = $res6['testDescription'];

                                    
                                   }


                                   if($varcharStudentSex = "F"){
                                    $varcharStudentSex = "Female";
                                   }
                                   else if($varcharStudentSex = "M"){
                                    $varcharStudentSex = "Male";
                                   }

                                   $varcharStudentDisplayPic =  "getimage.php?id=2015-01438-MN-0";

                                  ?>
                                
                           ?> 
		                      
		                        <div class="tab-content">
		                            <div class="tab-pane" id="personalinformation">
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h4 class="info-text"> I. Personal Information </h4>
		                                	</div>
		                                	<!--Upper Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                		<h4 class="info-text"> Name </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">First Name</label>
		                                        	<input type="text" class="form-control" id="firstname" value="<?php echo $varcharStudentFirstName ?>" name = "txtbxStudentFirstName" readonly>
		                                    	</div>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Last Name</label>
		                                        	<input type="text" class="form-control" id="lastname" value="<?php echo $varcharStudentLastName ?>" name="txtbxStudentLastName" readonly>
		                                    	</div>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Middle Name</label>
		                                        	<input type="text" class="form-control" id="middlename" value="<?php echo $varcharStudentMiddleName ?>" name="txtbxStudentMiddleName" readonly>
		                                    	</div>

		                                    	<h4 class="info-text"> Physiological Information </h4>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Height</label>
		                                        	<input type="text" class="form-control" id="height" name="txtbxStudentHeight" value="<?php echo $varcharStudentHeight ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Weight</label>
		                                        	<input type="text" class="form-control" id="weight" name="txtbxStudentWeight" value="<?php echo $varcharStudentWeight ?>">
		                                    	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Complexion</label>
		                                        	<select class="form-control" name="dropdownStudentComplexion">
                                					
                                					<option disabled="" selected=""></option>

                                					<option value="White Skin">White Skin</option>
                                					<option value="Fair Sin">Fair Skin</option>
                                					<option value="Medium Skin">Medium Skin</option>
                                					<option value="Olive Skin">Olive Skin</option>
                                					<option value="Tan Brown">Tan Brown</option>
                                					<option value="Black Brown">Black Brown</option>
                               					 	<option value="Dark Skin">Dark Skin</option>
                              					</select>
		                                    	</div>
		                                    	<?php

       								 	// php select option value from database
        								          include("connectionString.php");
								
        								// mysql select query
        								          $queryCollege2 = "SELECT * FROM tbl_college";
        								          $queryCourse2 = "SELECT * FROM tbl_course";
								
        								// for method 1/
        								          $resultCollege2 = mysqli_query($connect, $queryCollege2);
        								          $resultCourse2 = mysqli_query($connect, $queryCourse2);
								
        								         ?>
												<h4 class="info-text"> Course, Year and Section </h4>

												<div class="form-group label-floating">
		                                            <label class="control-label">College</label>
	                                            	<select name="dropdownStudentCollege" class="form-control">
                                					<option disabled=""></option>
                                					<?php while($row = mysqli_fetch_array($resultCollege2)):;?>
                    <option value="<?php echo $row['collegeCode'];?>"><?php echo $row['collegeCode'];?> - <?php echo $row['collegeName'];?></option>
                  <?php endwhile;?>
	                                            	</select>
	                                        	</div>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Course</label>
	                                            	<select name="dropdownStudentCourse" class="form-control">
	                                                	<option disabled=""></option>
	                                                	<?php while($row = mysqli_fetch_array($resultCourse2)):;?>
                    <option value="<?php echo $row['courseCode'];?>"><?php echo $row['courseCode'];?> - <?php echo $row['courseName'];?></option>
                  <?php endwhile;?>
	                                            	</select>
	                                        	</div>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Year</label>
	                                            	<input type="text" class="form-control" id="year" value="<?php echo $VarcharStudentYear ?>" name="txtbxStudentYear"readonly>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Section</label>
		                                        	<input type="text" class="form-control" id="section" value="<?php echo $VarcharStudentSection ?>" name="txtbxStudentSection" readonly>
		                                    	</div>

		                                    	
		                                	</div>
		                                	<!--Upper Right-->
		                                	<div class="col-sm-5">
		                                    	<h4 class="info-text"> Gender And Sexuality</h4>
												<div class="form-group label-floating">
												<label class="control-label">Gender</label>
  												
		                                    	
  												<!--<label class="btn btn-secondary active">
    											<input type="radio" name="options" id="option1" autocomplete="off" checked> Active
  												</label>-->
  												<div class="btn-group btn-group-toggle" data-toggle="buttons">
  												<br>
  												<label class="btn btn-secondary">
    											<input type="radio" name="radioGender" id="radioGender" autocomplete="off" value="M">♂Male
  												</label>
  												<label class="btn btn-secondary">
    											<input type="radio" name="radioGender" id="radioGender" autocomplete="off" value="F"> ♀Female
  												</label>
												</div>
		                                    	</div>


	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Sexuality(Sexual Orientation)</label>
		                                        	<select class="form-control" name="dropdownStudentSexuality">
                                					
                                					<option disabled="" selected=""></option>
                                					<option value="Heterosexual">Heterosexual</option>
                               						<option value="Homosexual">Homosexual</option>
                                					<option value="Bisexual">Bisexual</option>
                                					<option value="Pansexual">Pansexual</option>
                                					<option value="Demisexual">Demisexual</option>
                                					<option value="Queer">Queer</option>
                                					<option value="Asexual">Asexual</option>
                                					<option value="Others">Others</option>
                              					</select>
		                                    	</div>

		                                    	<div class="input-group">
		                                            	<input type="text" class="form-control" id="collegegrad" name="txtbxSexualityOthers">
		                                            	<span class="input-group-addon">If Others Is Selected</span>
		                                        	</div>
		                                        <h4 class="info-text">State</h4>
	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Age</label>
		                                        	<input type="text" class="form-control" id="age" name="txtbxStudentAge" value="<?php echo $varcharStudentAge ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label" sel>Civil Status</label>
		                                        	<select class="form-control" name="dropdownStudentCivilStatus">
                                					<option disabled="" selected=""></option>
                                					<option value="Single">Single</option>
                               						<option value="Married">Married</option>
                                					<option value="Divorced">Divorced</option>
                                					<option value="Widowed">Widowed</option>
                              					</select>
		                                    	</div>

		                                    	<h4 class="info-text"> Birthdate </h4>

		                                    	<div class="form-group label-floating">
		                                           <input type = "date" name="txtbxStudentBirthdate" value="<?php echo $varcharStudentBirthdate ?>">
	                                        	</div>

	                                        	<h4 class="info-text"> Other Basic Information </h4>
	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Place Of Birth</label>
		                                        	<input type="text" class="form-control" id="placeofbirth" name="txtbxStudentPlaceOfBirth" value="<?php echo $varcharStudentBirthplace ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Email Address</label>
		                                        	<input type="email" class="form-control" id="emailaddress" name="txtbxStudentEmail">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Telephone Number</label>
		                                        	<input type="text" class="form-control" id="telnum" name="txtbxStudentTelNum" value="<?php echo $varcharStudentTelNum ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Mobile Number</label>
		                                        	<input type="text" class="form-control" id="mobilenum" name="txtbxStudentMobileNum" value="<?php echo $varcharStudentMobileNum ?>">
		                                    	</div>
	                                        	
	                                        </div>


		                                	<!--Lower Left-->
		                                	
		                                	
		                                	<div class="col-sm-5 col-sm-offset-1">

		                                		<h4 class="info-text"> Location </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">City-House Number</label>
		                                        	<input type="text" class="form-control" id="cityaddress" name="txtbxStudentCityHouseNumber" value="<?php echo $varcharStudentCityHouseNumber ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">City-Province</label>
		                                        	<input type="text" class="form-control" id="cityaddress" name="txtbxStudentCityProvince" value="NCR" readonly>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">City-City Name</label>
		                                        	<input type="text" class="form-control" id="cityaddress" name="txtbxStudentCityCity" value="<?php echo $varcharStudentCityCity ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">City-City Barangay</label>
		                                        	<input type="text" class="form-control" id="cityaddress" name="txtbxStudentCityBarangay" value="<?php echo $varcharStudentCityBarangay ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Provincial-Home Number</label>
		                                        	<input type="text" class="form-control" id="provincialaddress" name="txtbxStudentProvincialHouseNumber" value="<?php echo $varcharStudentCityHouseNumber ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Provincial-Province</label>
		                                        	<input type="text" class="form-control" id="provincialaddress" name="txtbxStudentProvincialProvince" value="<?php echo $varcharStudentProvinceProvince ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Provincial-City/Municipality</label>
		                                        	<input type="text" class="form-control" id="provincialaddress" name="txtbxStudentProvincialCity" value="<?php echo $varcharStudentProvinceCity ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Provincial-Barangay</label>
		                                        	<input type="text" class="form-control" id="provincialaddress" name="txtbxStudentProvincialBarangay" value="<?php echo $varcharStudentProvinceBarangay ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Highschool General Average</label>
		                                        	<input type="text" class="form-control" id="hsgenave" name="txtbxStudentHSGenAve" value="<?php echo $varcharStudentHSGWA ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Religion</label>
		                                        	<input type="text" class="form-control" id="religion" name="txtbxStudentReligion" value="<?php echo $varcharStudentReligion ?>">
		                                    	</div>

		                                	</div>
		                                	<!--Lower Right-->
		                                	<div class="col-sm-5">
		                                		<h4 class="info-text"> If You Are Working </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Name Of Employer</label>
		                                        	<input type="text" class="form-control" id="religion" name="txtbxStudentNameOfEmployer" value="<?php echo $varcharStudentEmployerName ?>">
		                                    	</div>
		                                		
		                                		<div class="form-group label-floating">
		                                        	<label class="control-label">Address Of Employer</label>
		                                        	<input type="text" class="form-control" id="religion" name="txtbxStudentAddressoFEmployer" value="<?php echo $varcharStudentEmployerAddress ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Contact Person Name</label>
		                                        	<input type="text" class="form-control" id="religion" name="txtbxStudentContactPersonName" value="<?php echo $varcharStudentContactPersonName ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Contact Person Address</label>
		                                        	<input type="text" class="form-control" id="religion" name="txtbxStudentContactPersonAddress" value="<?php echo $varcharStudentContactPersonAddress ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Contact Person Relationship</label>
		                                        	<input type="text" class="form-control" id="religion" name="txtbxStudentContactPersonRelationship" value="<?php echo $varcharStudentContactPersonRelationship ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Contact Person Contact Num</label>
		                                        	<input type="text" class="form-control" id="religion" name="txtbxStudentContactPersonContactNumber" value="<?php echo $varcharStudentContactPersonContactNumber ?>">
		                                    	</div>

		                                	</div>
		                                	</div>
		                            	</div>
		                            	<li><button id="btnSecondPage" name="btnSecondPage" type="button" class="btn btn-info btn-lg">PROCEED</button></li>
		                            <div class="tab-pane" id="educationalbackground">
		                                <h4 class="info-text"> II. Educational Background </h4>
		                                <div class="row">
		                                    <!--Left-->
		                                    <div class="row">
		                                	<div class="col-sm-12">

		                                	</div>
		                                	<!--Upper Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">

		                                		<h4 class="info-text"> Pre-elementary </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Graduated</label>
		                                        	<input type="text" class="form-control" id="pre-elemgrad" name="txtbxStudentPre-ElemGrad" value="<?php echo $varcharStudentPreSchoolName ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Address</label>
		                                        	<input type="text" class="form-control" id="pre-elemaddress" name="txtbxStudentPre-ElemAddress" value="<?php echo $varcharStudentPreSchoolAddress ?>">
		                                    	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Type</label>
	                                            	<select name="dropdownStudentPre-ElemType" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Public">Public</option>
            											<option value="Private">Private</option>
	                                            	</select>
	                                        	</div>
	                                        	
	                                        	<?php

	                                        	$varcharStartPreSchool = substr($varcharStudentPreSchoolYearAttended, -6);

	                                        	$varcharEndPreSchool = substr($varcharStudentPreSchoolYearAttended, 6);
	                                        	?>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">From Year</label>
		                                        	<input type="text" class="form-control" id="txtbxStudentPre-ElemNumOfAttendance" name="txtbxStudentPre-ElemNumOfAttendance1" value="<?php echo $varcharStartPreSchool ?> >

		                                        	<!--<span class="input-group-addon">From Year</span>-->
		                                        </div>
		                                        <div class="form-group label-floating">
		                                        	<label class="control-label">To Year</label>
		                                        	<input type="text" class="form-control" id="txtbxStudentPre-ElemNumOfAttendance" name="txtbxStudentPre-ElemNumOfAttendance2" value="<?php echo $varcharEndPreSchool ?>>
		                                        	<!--<span class="input-group-addon">To Year</span>-->
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Honors Received/Special Awards</label>
		                                        	<input type="text" class="form-control" id="pre-elemhonors" name="txtbxStudentPre-ElemHonors" value="<?php echo $varcharStudentPreSchoolAwards ?>">
		                                    	</div>
		                                	</div>
		                                	<!--Upper Right-->
		                                	<div class="col-sm-5">
		                                    	<h4 class="info-text"> Elementary </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Graduated</label>
		                                        	<input type="text" class="form-control" id="elemgrad" name="txtbxStudentElemGrad" value="<?php echo $varcharStudentElementarySchoolName ?>" >
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Address</label>
		                                        	<input type="text" class="form-control" id="elemaddress" name="txtbxStudentElemAddress" value="<?php echo $varcharStudentElementarySchoolAddress ?>">
		                                    	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Type</label>
	                                            	<select name="dropdownStudentELemType" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Public">Public</option>
            											<option value="Private">Private</option>
	                                            	</select>
	                                        	</div>

	                                        	<?php

	                                        	$varcharStartElementary = substr($varcharStudentElementarySchoolYearAttended, -6);

	                                        	$varcharEndElementary = substr($varcharStudentElementarySchoolYearAttended, 6);
	                                        	?>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">From Year</label>
		                                        	<input type="text" class="form-control" id="elemnumofattendance" name="txtbxStudentElemNumOfAttendance1" value="<?php echo $varcharStartElementary ?>" >
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">To Year</label>
		                                        	<input type="text" class="form-control" id="elemnumofattendance" name="txtbxStudentElemNumOfAttendance2" value="<?php echo $varcharEndElementary ?>">
		                                    	</div>


		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Honors Received/Special Awards</label>
		                                        	<input type="text" class="form-control" id="elemhonors" name="txtbxStudentElemHonors" 
		                                        	value="<?php echo $varcharStudentElementarySchoolAwards ?>">
		                                    	</div>
		                                	</div>
		                                	<!--Lower Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<h4 class="info-text"> Highschool </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Graduated</label>
		                                        	<input type="text" class="form-control" id="hsgrad" name="txtbxStudentHSGrad" value="<?php echo $varcharStudentHSSchoolName ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Address</label>
		                                        	<input type="text" class="form-control" id="hsaddress" name="txtbxStudentHSAddress" value="<?php echo $varcharStudentHSSchoolAddress ?>">
		                                    	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Type</label>
	                                            	<select name="dropdownStudentHSType" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Public">Public</option>
            											<option value="Private">Private</option>
	                                            	</select>
	                                        	</div>

	                                        	<?php

	                                        	$varcharStartHS = substr($varcharStudentHSSchoolYearAttended, -6);

	                                        	$varcharEndHS = substr($varcharStudentHSSchoolYearAttended, 6);
	                                        	?>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">From Year</label>
		                                        	<input type="text" class="form-control" id="hsnumofattendance" name="txtbxStudentHSNumOfAttendance1" value="<?php echo $varcharStartHS ?>">
		                                    	</div>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">To Year</label>
		                                        	<input type="text" class="form-control" id="hsnumofattendance" name="txtbxStudentHSNumOfAttendance2" value="<?php echo $varcharEndHS ?>">
		                                    	</div>


		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Honors Received/Special Awards</label>
		                                        	<input type="text" class="form-control" id="hshonors" name="txtbxStudentHSHonors" value="<?php echo $varcharStudentHSSchoolAwards ?>">
		                                    	</div>

		                                    	<h4 class="info-text"> College (IF Any) </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Graduated</label>
		                                        	<div class="input-group">
		                                            	<input type="text" class="form-control" id="collegegrad" name="txtbxStudentCollegeGrad" value="<?php echo $varcharStudentCollegeSchoolName ?>">
		                                            	
		                                        	</div>
		                                        </div>
		                                        <div class="form-group label-floating">
		                                        	<label class="control-label">School Address</label>
		                                        	<input type="text" class="form-control" id="collegeaddress" name="txtbxStudentCollegeAddress" value="<?php echo $varcharStudentCollegeSchoolAddress ?>">
		                                    	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Type</label>
	                                            	<select name="dropdownStudentCollegeType" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Public">Public</option>
            											<option value="Private">Private</option>
	                                            	</select>
	                                        	</div>

	                                        	<?php

	                                        	$varcharStartCollege = substr($varcharStudentCollegeSchoolYearAttended, -6);

	                                        	$varcharEndCollege = substr($varcharStudentCollegeSchoolYearAttended, 6);
	                                        	?>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">From Year</label>
		                                        	<input type="text" class="form-control" id="collegenumofattendance" name="txtbxStudentCollegeNumofAttendance1" value="<?php echo $varcharStartCollege ?>">
		                                    	</div>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">To Year</label>
		                                        	<input type="text" class="form-control" id="collegenumofattendance" name="txtbxStudentCollegeNumofAttendance2" value="<?php echo $varcharEndCollege ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Honors Received/Special Awards</label>
		                                        	<input type="text" class="form-control" id="collegehonors" name="txtbxStudentCollegeHonors" value="<?php echo $varcharStudentCollegeSchoolAwards ?>">
		                                    	</div>

		                                    	

		                                	</div>
		                                	<!--Lower Right-->
		                                	<div class="col-sm-5">
		                                    	<h4 class="info-text"> Vocational </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Graduated</label>
		                                        	<input type="text" class="form-control" id="vocationalgrad" name="txtbxStudentVocationalGrad" value="<?php echo $VarcharStudentVocationalName ?>">
		                                    	</div>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Address</label>
		                                        	<input type="text" class="form-control" id="vocationaladdress" name="txtbxStudentVocationalAddress" value="<?php echo $VarcharStudentVocationalAddress ?>">
		                                    	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Type</label>
	                                            	<select name="dropdownStudentVocationalType" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Public">Public</option>
            											<option value="Private">Private</option>
	                                            	</select>
	                                        	</div>

	                                        	<?php

	                                        	$varcharStartVocational = substr($varcharStudentVocationalSchoolYearAttended, -6);

	                                        	$varcharEndVocational = substr($varcharStudentVocationalSchoolYearAttended, 6);
	                                        	?>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">From Year</label>
		                                        	<input type="text" class="form-control" id="vocationalnumofattendance" name="txtbxStudentVocationalNumOfAttendance1" value="<?php echo $varcharStartVocational ?>">
		                                    	</div>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">To Year</label>
		                                        	<input type="text" class="form-control" id="vocationalnumofattendance" name="txtbxStudentVocationalNumOfAttendance2" value="<?php echo $varcharEndVocational ?>">
		                                    	</div>


		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Honors Received/Special Awards</label>
		                                        	<input type="text" class="form-control" id="vocationalhonors" name="txtbxStudentVocationalHonors" value="<?php echo $varcharStudentVocationalAwards ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Type Of Schooling</label>
		                                        	<select name="dropdownStudentNatureOfSchooling" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option>Continuing</option>
            											<option>Regular</option>
            											<option>Interrupted</option>
	                                            	</select>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	
		                                        	<input type="text" class="form-control" id="vocationalhonors" name="txtbxStudentInterruptedWhy" value="<?php echo $varcharStudentInterruptedWhy ?>">
		                                        	<span class="input-group-addon">If Interrupted Why?</span>
		                                    	</div>
		                                	
		                                	</div>
		                            	</div>
		                                    </div>
		                                </div>

		                            <div class="tab-pane" id="homeandfamilybackground">
		                            	<h4 class="info-text"> III. Home And Family Background </h4>
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                	</div>
		                                	<!--Upper Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                		<h4 class="info-text"> Father </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Name</label>
		                                        	<input type="text" class="form-control" id="father_name" name="txtbxStudentFatherName" value="<?php echo $varcharStudentFatherName ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Educational attainment</label>
	                                            	<select name="dropdownStudentFatherEducationalAttainment" class="form-control">
	                                                	<option disabled="" selected=""></option>
                                <option value="Elementary Undergraduate">Elementary Undergraduate</option>
                                <option value="Elementary Graduate">Elementary graduate</option>
                                <option value="High School Undergraduate">High School Undergraduate</option>
                                <option value="High School Graduate">High School Graduate</option>
                                <option value="College Undergraduate">College undergraduate</option>
                                <option value="Vocational Graduate">Vocational Graduate</option>
                                <option value="Masteral Unit">Masteral Unit</option>
                                <option value="Doctoral Degree">Doctoral Degree</option>
	                                            	</select>
	                                        	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Name Of Employer</label>
		                                        	<input type="text" class="form-control" id="father_employer" name="txtbxStudentFatherNameOfEmployer" value="<?php echo $varcharStudentFatherEmployerName ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Age</label>
		                                        	<input type="text" class="form-control" id="father_age" name="txtbxStudentFatherAge" value="<?php echo $varcharStudentFatherAge ?>">
		                                    	</div>

		                                    	<div class="btn-group btn-group-toggle" data-toggle="buttons">
  												<!--<label class="btn btn-secondary active">
    											<input type="radio" name="options" id="option1" autocomplete="off" checked> Active
    											
  												</label>-->
  												<br>
  												<label class="btn btn-secondary">
    											<input type="radio" name="radioStudentFatherStatus" id="option2" autocomplete="off" value="Living"> Living
  												</label>
  												<label class="btn btn-secondary">
    											<input type="radio" name="radioStudentFatherStatus" id="option3" autocomplete="off" value="Deceased"> Deceased
  												</label>
												</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Occupation</label>
		                                        	<input type="text" class="form-control" id="father_occupation" name="txtbxStudentFatherOccupation" value="<?php echo $varcharStudentFatherOccupation ?>">
			                                    	</div>

			                                    <div class="form-group label-floating">
		                                        	<label class="control-label">Occupation Type</label>
	                                            	<select name="dropdownStudentFatherOccupationType" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                            <optgroup>
                                <option value="Abroad">Abroad</option>
                                </optgroup>
                                <optgroup label="Local">
                                <option value="Government">Government</option>
                                <option value="Private">Private</option>
                            	</optgroup>
	                                            	</select>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Address Of Employer</label>
		                                        	<input type="text" class="form-control" id="father_employeraddress" name="txtbxStudentFatherEmployerAddress" value="<?php echo $varcharStudentFatherEmployerAddress ?>">
		                                    	</div>
		                                	</div>
		                                	<!--Upper Right-->
		                                	<div class="col-sm-5">
		                                    	<h4 class="info-text"> Mother </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Name</label>
		                                        	<input type="text" class="form-control" id="mother_name" name="txtbxStudentMotherName" value="<?php echo $varcharStudentMotherName ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Educational attainment</label>
	                                            	<select name="dropdownStudentMotherEducationalAttainment" class="form-control">
	                                                	<option disabled="" selected=""></option>
                                <option value="Elementary Undergraduate">Elementary Undergraduate</option>
                                <option value="Elementary Graduate">Elementary graduate</option>
                                <option value="High School Undergraduate">High School Undergraduate</option>
                                <option value="High School Graduate">High School Graduate</option>
                                <option value="College Undergraduate">College undergraduate</option>
                                <option value="Vocational Graduate">Vocational Graduate</option>
                                <option value="Masteral Unit">Masteral Unit</option>
                                <option value="Doctoral Degree">Doctoral Degree</option>
	                                            	</select>
	                                        	</div>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Name Of Employer</label>
		                                        	<input type="text" class="form-control" id="mother_employer" name="txtbxStudentMotherNameOfEmployer" value="<?php echo $varcharStudentMotherEmployerName?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Age</label>
		                                        	<input type="text" class="form-control" id="mother_age" name="txtbxStudentMotherAge" value="<?php echo $varcharStudentMotherAge ?>">
		                                    	</div>

		                                    	<div class="btn-group btn-group-toggle" data-toggle="buttons">
  												<!--<label class="btn btn-secondary active">
    											<input type="radio" name="options" id="option1" autocomplete="off" checked> Active
  												</label>-->
  												<br>
  												<label class="btn btn-secondary">
    											<input type="radio" name="radioStudentMotherStatus" id="option2" autocomplete="off" value="Living"> Living
  												</label>
  												<label class="btn btn-secondary">
    											<input type="radio" name="radioStudentMotherStatus" id="option3" autocomplete="off" value="Deceased"> Deceased
  												</label>
												</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Occupation</label>
		                                        	<input type="text" class="form-control" id="mother_occupation" name="txtbxStudentMotherOccupation" value="<?php echo $varcharStudentMotherOccupation ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Occupation Type</label>
	                                            	<select name="dropdownStudentMotherOccupationType" class="form-control">
	                                                	<option disabled="" selected=""></option>

                                <optgroup>
                                <option value="Abroad">Abroad</option>
                                </optgroup>
                                <optgroup label="Local">
                                <option value="Government">Government</option>
                                <option value="Private">Private</option>
                            	</optgroup>
	                                            	</select>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Address Of Employer</label>
		                                        	<input type="text" class="form-control" id="mother_employeraddress" name="txtbxStudentMotherAddressOfEmployer" value="<?php echo $varcharStudentMotherEmployerAddress ?>">
		                                    	</div>
		                                	</div>
		                                	<!--Lower Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<h4 class="info-text"> Guardian </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Name</label>
		                                        	<input type="text" class="form-control" id="guardian_name" name="txtbxStudentGuardianName" value="<?php echo $varcharStudentGuardianName ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Educational attainment</label>
	                                            	<select name="txtbxStudentGuardianEducationalAttainment" class="form-control">
	                                                	<option disabled="" selected=""></option>
                                <option value="public">Elementary Undergraduate</option>
                                <option value="public">Elementary graduate</option>
                                <option value="public">High School Undergraduate</option>
                                <option value="public">High School Graduate</option>
                                <option value="public">College undergraduate</option>
                                <option value="public">Vocational Graduate</option>
                                <option value="public">Masteral Unit</option>
                                <option value="public">Doctoral Degree</option>
	                                            	</select>
	                                        	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Name Of Employer</label>
		                                        	<input type="text" class="form-control" id="guardian_employer" name="txtbxStudentGuardianNameOfEmployer" value="<?php echo $varcharStudentGuardianEmployerName ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Age</label>
		                                        	<input type="text" class="form-control" id="guardian_age" name="txtbxStudentGuardianAge" value="<?php echo $varcharStudentGuardianAge ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Relation</label>
		                                        	<input type="text" class="form-control" id="guardian_relation" name="txtbxStudentGuardianRelation" value="<?php echo $varcharStudentGuardianRelation ?>">
		                                    	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Occupation</label>
		                                        	<input type="text" class="form-control" id="guardian_occupation" name="txtbxStudentGuardianOccupation" value="<?php echo $varcharStudentGuardianOccupation ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Occupation Type</label>
	                                            	<select name="dropdownStudentGuardianOccupationType" class="form-control">
	                                                	<option disabled="" selected=""></option>

                                <optgroup>
                                <option value="Abroad">Abroad</option>
                                </optgroup>
                                <optgroup label="Local">
                                <option value="Government">Government</option>
                                <option value="Private">Private</option>
                            	</optgroup>
	                                            	</select>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Address Of Employer</label>
		                                        	<input type="text" class="form-control" id="guardian_employeraddress" name="txtbxStudentGuardianAddressOfEmployer" value="<?php echo $varcharStudentGuardianEmployerAddress ?>">
		                                    	</div>
		                                	</div>
		                                	<!--Lower Right-->
		                                	<div class="col-sm-5">
		                                		<h4 class="info-text"> Your State At Home </h4>
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Parent's Marital Relationship</label>
	                                            	<select name="dropdownStudentParentMaritalRelationship" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Married And Staying Together">Married and staying together</option>
            											<option value="Not Married But Living Together">Not married but living together</option>
            											<option value="Single Parent">Single Parent</option>
            											<option value="Married But Separated">Married but separated</option>
            											<option value="Others">Others</option>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Others</label>
		                                        	<div class="input-group">
		                                            	<input type="text" class="form-control" id="others" name="txtbxStudentParentMaritalRelationshipOthers" >
		                                            	<span class="input-group-addon">If Others Is Selected</span>
		                                        	</div>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Number Of Children In The Family Including Yourself</label>
		                                        	<input type="text" class="form-control" id="numofchildren" name="txtbxStudentNumOfChildren" value="<?php echo $varcharStudentNumOfChildren ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Number Of Brother/s </label>
		                                        	<input type="text" class="form-control" id="numofbrothers" name="txtbxStudentNumOfBrothers" value="<?php echo $varcharStudentNumOfBrother ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Number Of Sister/s </label>
		                                        	<input type="text" class="form-control" id="numofsisters" name="txtbxStudentNumOfSisters" value="<?php echo $varcharStudentNumOfSister ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Number Of siblings gainfully employed </label>
		                                        	<input type="text" class="form-control" id="numofsiblingsemployed" name="txtbxStudentNumOfSiblingsEmployed" value="<?php echo $varcharStudentSiblingsEmployed ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Is He/She providing support to your</label>
	                                            	<select name="dropdownStudentProvidingSupport" class="form-control">
	                                               	<option disabled="" selected=""></option>
	                                                <option value="Family"> Family </option>
	                                                <option value="Your Studies"> Your Studies </option>
	                                                <option value="His/Her Own Family"> His/Her own family </option>
	                                                <span class="input-group-addon">if there are</span>
	                                            </select>
	                                        	</div>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Ordinal Position</label>
	                                            	<select name="dropdownStudentOrdinalPosition" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Only Child">Only Child</option>
            											<option value="1st">1st</option>
            											<option value="2nd">2nd</option>
            											<option value="3rd">3rd</option>
            											<option value="4th">4th</option>
            											<option value="5th">5th</option>
            											<option value="6th">6th</option>
            											<option value="7th">7th</option>
            											<option value="8th">8th</option>
            											<option value="9th">9th</option>
            											<option value="10th">10th</option>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Who finances your schooling?</label>
		                                        	<input type="text" class="form-control" id="financesofschooling" name="txtbxStudentFinanceSchooling" value="<?php echo $varcharStudentSchoolFinancer ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">How Much is your weekly allowance?</label>
		                                        	<input type="text" class="form-control" id="weeklyallowance" name="txtbxStudentWeeklyAllowance" value="<?php echo $varcharStudentWeeklyAllowance ?>">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Parent's Total Monthly Income:</label>
	                                            	<select name="dropdownStudentTotallyMonthlyIncome" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Below 5,000">Below 5,000</option>
            											<option value="5,001 - 10,000">5,001 - 10,000</option>
            											<option value="10,001 - 15,000">10,001 - 15,000</option>
            											<option value="15,001 - 20,000">15,001 - 20,000</option>
            											<option value="20,001 - 25,000">20,001 - 25,000</option>
            											<option value="25,001 - 30,000">25,001 - 30,000</option>
            											<option value="30,001 - 35,000">30,001 - 35,000</option>
            											<option value="35,001 - 40,000">35,001 - 40,000</option>
            											<option value="40,001 - 45,000">40,001 - 45,000</option>
            											<option value="45,001 - 50,000">45,001 - 50,000</option>
            											<option value="Above 50,001">Above 50,001</option>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Do you have a quiet place to study?</label>
	                                            	<select name="dropdownStudentQuietPlace" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Yes">Yes</option>
            											<option value="No">No</option>
            										</select>
            									</div>

            									<div class="form-group label-floating">
		                                            <label class="control-label">Do you share your room with anyone?</label>
	                                            	<select name="dropdownStudentShareRoom" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Yes">Yes</option>
            											<option value="No">No</option>
            										</select>
            									</div>

            									<div class="form-group label-floating">
		                                        	<label class="control-label">With whom</label>
		                                        	<input type="text" class="form-control" id="withwhom" name="txtbxStudentWithWhom">
		                                        	<span class="input-group-addon">If Yes</span>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Nature of residence while attending school</label>
	                                            	<select name="dropdownStudentNatureOfResidence" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Family Home">Family home</option>
	                                                	<option value="Relative's House">Relative's house</option>
            											<option value="Shares Apartment With Friends And Relatives">Shares apartment with friends/relatives</option>
            											<option value="Bed Spacer">Bed spacer</option>
            											<option value="Rented Apartment">Rented apartment</option>
            											<option value="Dorm">Dorm</option>
            										</select>
            									</div>

		                                    	</div>
		                                	</div>
		                            	</div>
		                            

		                            <div class="tab-pane" id="health">
		                            	<h4 class="info-text"> IV. Health </h4>
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                	</div>
		                                	<!--Upper Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                	<h4 class="info-text">A. Physical </h4>
		                                	<h6 class="info-text">Do you have problems with?</h6>

		                                	<div class="form-group label-floating">
		                                	<label class="control-label">Vision</label>
	                                            	<select name="dropdownStudentVision" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Yes">Yes</option>
	                                                	<option value="No"> No </option>
	                                                </select>
	                                         </div>
		                                	<div class="form-group label-floating">
		                                        <label class="control-label">Please Specify</label>
		                                        <input type="text" class="form-control" id="visionyes" name="txtbxStudentVisionSpecify" value="<?php echo $varcharStudentVisionProblem ?>">
		                                        <span class="input-group-addon">If Any</span>
		                                    </div>

		                                    <div class="form-group label-floating">
		                                	<label class="control-label">Hearing</label>
	                                            	<select name="dropdownStudentHearing" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Yes">Yes</option>
	                                                	<option value="No"> No </option>
	                                                </select>
	                                         </div>
		                                	<div class="form-group label-floating">
		                                        <label class="control-label">Please Specify</label>
		                                        <input type="text" class="form-control" id="hearingyes" name="txtbxStudentHearingSpecify" value="<?php echo $varcharStudentHearingProblem ?>">
		                                        <span class="input-group-addon">If Yes</span>
		                                    </div>

		                                    <div class="form-group label-floating">
		                                	<label class="control-label">Speech</label>
	                                            	<select name="dropdownStudentSpeech" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Yes">Yes</option>
	                                                	<option value="No"> No </option>
	                                                </select>
	                                         </div>
		                                	<div class="form-group label-floating">
		                                        <label class="control-label">Please Specify</label>
		                                        <input type="text" class="form-control" id="speechyes" name="txtbxStudentSpeechSpecify" value="<?php echo $varcharStudentSpeechProblem; ?>">
		                                        <span class="input-group-addon">If Yes</span>
		                                    </div>

		                                    <div class="form-group label-floating">
		                                	<label class="control-label">General Health</label>
	                                            	<select name="dropdownStudentGeneralHealth" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Yes">Yes</option>
	                                                	<option value="No"> No </option>
	                                                </select>
	                                         </div>
		                                	<div class="form-group label-floating">
		                                        <label class="control-label">Please Specify</label>
		                                        <input type="text" class="form-control" id="generalhealthyes" name="txtbxStudentGeneralHealthSpecify" value="<?php echo $varcharStudentGeneralHealth ?>">
		                                        <span class="input-group-addon">If Yes</span>
		                                    </div>

		                                	</div>
		                                	<!--Upper Right-->
		                                	<div class="col-sm-5">
		             							<h4 class="info-text">B. Psychological </h4>
		                                		<h6 class="info-text">Previous Consultations</h6>
		                                		<!--Psychiatrist-->
		                                		<div class="form-group label-floating">
		                                		<label class="control-label">Psychiatrist</label>
		                                        <select name="dropdownStudentPsychiatrist" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Yes">Yes</option>
	                                                	<option value="Nes"> No </option>
	                                            </select>
		                                    	</div>


		                                    	<h6 class="info-text"> When? </h6>

		                                    	<div class="form-group label-floating">
		                                           <input type = "date" name="txtbxStudentPsychiatristWhen" value="<?php echo $varcharStudentPsychiatristWhen ?>">
	                                        	</div>

		                                    	<div class="form-group label-floating">
		                                        <label class="control-label">For What?</label>
		                                        <input type="textarea" class="form-control" id="psychiatrist_what" name="txtbxStudentPsychiatristWhat" value="<?php echo $varcharStudentPsychiatristReason ?>">
		                                    	</div>

		                                    	<!--Psychologist-->
		                                    	<div class="form-group label-floating">
		                                		<label class="control-label">Psychologist</label>
		                                        <select name="dropdownStudentPsychologist" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Yes">Yes</option>
	                                                	<option value="No"> No </option>
	                                            </select>
		                                    	</div>


		                                    	<h6 class="info-text"> When? </h6>

		                                    	<div class="form-group label-floating">
		                                           <input type = "date" name="txtbxStudentPsychologistWhen" value="<?php echo $varcharStudentPsychologistWhen ?>">
	                                        	</div>
	                                        	


		                                    	<div class="form-group label-floating">
		                                        <label class="control-label">For What?</label>
		                                        <input type="textarea" class="form-control" id="psychiatrist_what" name="txtbxStudentPsychologistWhat" value="<?php echo $varcharStudentPsychologistReason ?>">
		                                    	</div>

		                                    	<!--Counselor-->
		                                    	<div class="form-group label-floating">
		                                		<label class="control-label">Counselor</label>
		                                        <select name="dropdownStudentCounselor" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Yes">Yes</option>
	                                                	<option value="No"> No </option>
	                                            </select>
		                                    	</div>


		                                    	<h6 class="info-text"> When? </h6>

		                                    	<div class="form-group label-floating">
		                                           <input type = "date" name="txtbxStudentCounselorWhen" value="<?php echo $varcharStudentCounselorWhen ?>">
	                                        	</div>

	                                        	

		                                    	<div class="form-group label-floating">
		                                        <label class="control-label">For What?</label>
		                                        <input type="textarea" class="form-control" id="counselor_what" name="txtbxStudentCounselorWhat" value="<?php echo $varcharStudentCounselor;?>">
		                                    	</div>

		                                	</div>
		                                	<!--Lower Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	
		                                	</div>
		                                	<!--Lower Right-->
		                                	<div class="col-sm-5">

		                                        
		                                  	</div>

		                                </div>
		                            </div>

		                            <div class="tab-pane" id="interestsandhobbies">
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h4 class="info-text"> V. Interests And Hobbies</h4>
		                                	</div>
		                                	<!--Upper Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	
		                                    	<div class="form-group label-floating">
		                                    		<h4 class="info-text"> A. Academic</h4>
		                                    		<!--<input type="text" class="form-control" id="exampleInputEmail1">-->
		                                        	<!--<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="icon">
		                                                <br>
		                                                <br>
		                                                Math Club
		                                                </div>
		                                                <h6>Math Club</h6>
		                                            </div>-->
		                                            <div class="form-group label-floating">
		                                            <label class="control-label">Club Most Likely To Join</label>
	                                            	<select name="dropdownStudentClub" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Math"> Math Club </option>
	                                                	<option value="Science"> Science Cub </option>
	                                                	<option value="Debate"> Debating Club </option>
	                                                	<option value="Quizzer"> Quizzer`s Club </option>
	                                                	<option value="Others"> Others Club </option>
	                                                	</select>
	                                        	</div>
	                                                	
	                                                	
	                                                	<div class="form-group label-floating">
		                                        		<label class="control-label">If Others</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control" name="txtbxStudentClubOthers" value="<?php echo $varcharStudentClubName ?>">
		                                            	<span class="input-group-addon">Please Specify</span>
		                                        	</div>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        		<label class="control-label">What is/are your favorite subjects?</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control" name="txtbxStudentSubjectFavorite" value="<?php echo $varcharStudentFavSubject ?>">
		                                            
		                                        	</div>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        		<label class="control-label">What is/are the subjects you least like?</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control" name="txtbxStudentSubjectLeastLike" value="<?php echo $varcharStudentLeastFavSubject ?>">
		                                        	</div>
		                                    	</div>

	                                            	

		                                    	</div>
		                                    	
		                                	</div>
		                                	<!--Upper Right-->
		                                	<div class="col-sm-5">
		                                    	
		                                    	<div class="form-group label-floating">
		                                    		<h4 class="info-text"> B. Extra Curricular </h4>
		                                    		<div class="form-group label-floating">
													<label class="control-label">What are your hobbies?</label>
		                                    		</div>
		                                            <div class="form-group label-floating">
		                                        		
		                                        		
		                                            	<input type="text" class="form-control" name="txtbxStudentHobbies1" value="<?php echo $varcharStudentHobby1 ?>">
		                                            	<span class="input-group-addon">1. </span>
		                                            
		                                    	</div>
		                                    	<div class="form-group label-floating">
		                                    		
		                                            	<input type="text" class="form-control" name="txtbxStudentHobbies2" value="<?php echo $varcharStudentHobby2 ?>">
		                                            	<span class="input-group-addon">2. </span>
		                                            	
		                                    	</div>

		                                         <div class="form-group label-floating">
		                                    		
		                                            	<input type="text" class="form-control" name="txtbxStudentHobbies3" value="<?php echo $varcharStudentHobby3 ?>">
		                                            	<span class="input-group-addon">3. </span>
		                                            	
		                                    	</div>
		                                         <div class="form-group label-floating">
		                                    		
		                                            	<input type="text" class="form-control" name="txtbxStudentHobbies4" value="<?php echo $varcharStudentHobby4 ?>">
		                                            	<span class="input-group-addon">4. </span>
		                                            	
		                                    	</div>
		                                            	
		                                        	
	                                            	
	                                            	
	                                        	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">

		                                		<div class="form-group label-floating">
		                                            <label class="control-label">Organization most likely to join?</label>
	                                            	<select name="dropdownStudentOrganization" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Athletics"> Athletics </option>
	                                                	<option value="Dramatics"> Dramatics </option>
	                                                	<option value="Religious Organization"> Religious Oranization </option>
	                                                	<option value="Chess"> Chess Club </option>
	                                                	<option value="Glee"> Glee Club </option>
	                                                	<option value="Scouting"> Scouting </option>
	                                                	<option value="Others"> Others </option>
	                                                	</select>
	                                        	</div>

		                                            <div class="form-group label-floating">
		                                        		<label class="control-label">If Others</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control" name="txtbxOrganizationOthers"  value="<?php echo $varcharStudentJoinedOrganization ?>">
		                                            	<span class="input-group-addon">Please Specify</span>
		                                        	</div>

		                                        	<div class="form-group label-floating">
		                                        		<label class="control-label">Position in the said organization</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control" name="txtbxOrganizationPosition" value="<?php echo $varcharStudentOrganizationPosition ?>">
		                                            	<span class="input-group-addon">Please Specify</span>
		                                        	</div>
		                                        </div>

		                                	</div>
		                            	</div>
		                            </div>
		                       </div>

		                            <div class="tab-pane" id="testresult">
		                            	
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h4 class="info-text"> VI. Test Results</h4>
		                                	</div>

		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	
		                                        	<h4 class="info-text"> Date </h4>

		                                    	<input type="date" name="txtbxStudentTestResultDate1">

	                                        	<div class="form-group label-floating">
		                                        		<label class="control-label">Name</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control" name="txtbxStudentTestResultName1" value="<?php echo $varcharStudentTestName ?>">
		                                            	
		                                        	</div>
												</div>

		                                        	<div class="form-group label-floating">
		                                        		<label class="control-label">RS</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control" name="txtbxStudentRS1" value="<?php echo $varcharStudentTestRawScore ?>">
		                                            	
		                                        	</div>
		                                        </div>

		                                        	<div class="form-group label-floating">
		                                        		<label class="control-label">PR</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control" name="txtbxStudentPR1" value="<?php echo $varcharStudentTestPercentile ?>">
		                                            	
		                                        	</div>
		                                        </div>

		                                        	<div class="form-group label-floating">
		                                        		<label class="control-label">Description</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control" name="txtbxStudentTestDescription1" value="<?php echo $varcharStudentTestDescription?>">
		                                            	
		                                        	</div>
		                                        </div>
		                                        </div>
		                                    	</div>

		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	
		                                	</div>
		                            	</div>
		                            </div>

		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
	                                    
	                                    <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd' name='btnAdd' value='Submit'/>
	                                </div>
	                                <?php
                if(isset($_POST['btnAdd'])) 
                {	
                	
                    //including the database connection file
                    include_once("connectionString.php");
                    
                    $message = "Button Is Pressed";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    
                    $VarcharStudentFirstName = mysqli_real_escape_string($connect, $_POST['txtbxStudentFirstName']);
                    
                    $VarcharStudentLastName = mysqli_real_escape_string($connect, $_POST['txtbxStudentLastName']);
                    
                    $VarcharStudentMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxStudentMiddleName']);

                    $VarcharStudentNumber = $VarcharStudentAccountNumber;

                    $VarcharStudentCourse = mysqli_real_escape_string($connect, $_POST['dropdownStudentCourse']);

                    $VarcharStudentYear = mysqli_real_escape_string($connect, $_POST['txtbxStudentYear']);

                    $VarcharStudentSection = mysqli_real_escape_string($connect, $_POST['txtbxStudentSection']);

                    $VarcharStudentCollege = mysqli_real_escape_string($connect, $_POST['dropdownStudentCollege']);

                    $VarcharStudentGender = mysqli_real_escape_string($connect, $_POST['radioGender']);
                    
					$VarcharStudentSexuality = mysqli_real_escape_string($connect, $_POST['dropdownStudentSexuality']);

					$VarcharStudentAge = mysqli_real_escape_string($connect, $_POST['txtbxStudentAge']);

					$VarcharStudentYear = mysqli_real_escape_string($connect, $_POST['txtbxStudentYear']);

					$VarcharStudentSection = mysqli_real_escape_string($connect, $_POST['txtbxStudentSection']);

					$VarcharStudentCivilStatus = mysqli_real_escape_string($connect, $_POST['dropdownStudentCivilStatus']);

					$VarcharStudentBirthdate = mysqli_real_escape_string($connect, $_POST['txtbxStudentBirthdate']);

					$VarcharStudentHeight = mysqli_real_escape_string($connect, $_POST['txtbxStudentHeight']);

					$VarcharStudentWeight = mysqli_real_escape_string($connect, $_POST['txtbxStudentWeight']);

					$VarcharStudentComplexion = mysqli_real_escape_string($connect, $_POST['dropdownStudentComplexion']);

					$VarcharStudentBirthplace = mysqli_real_escape_string($connect, $_POST['txtbxStudentPlaceOfBirth']);

					$VarcharStudentCityHouseNumber = mysqli_real_escape_string($connect, $_POST['txtbxStudentCityHouseNumber']);

					$VarcharStudentCityProvince = mysqli_real_escape_string($connect, $_POST['txtbxStudentCityProvince']);

					$VarcharStudentCityCity = mysqli_real_escape_string($connect, $_POST['txtbxStudentCityCity']);

					$VarcharStudentCityBarangay = mysqli_real_escape_string($connect, $_POST['txtbxStudentCityBarangay']);

					$VarcharStudentProvinceHouseNumber = mysqli_real_escape_string($connect, $_POST['txtbxStudentProvincialHouseNumber']);

					$VarcharStudentProvinceProvince = mysqli_real_escape_string($connect, $_POST['txtbxStudentProvincialProvince']);

					$VarcharStudentProvinceCity = mysqli_real_escape_string($connect, $_POST['txtbxStudentProvincialCity']);

					$VarcharStudentProvinceBarangay = mysqli_real_escape_string($connect, $_POST['txtbxStudentProvincialBarangay']);

					$VarcharStudentTelNum = mysqli_real_escape_string($connect, $_POST['txtbxStudentTelNum']);

					$VarcharStudentMobileNum = mysqli_real_escape_string($connect, $_POST['txtbxStudentMobileNum']);

					$VarcharStudentHSGWA = mysqli_real_escape_string($connect, $_POST['txtbxStudentHSGenAve']);

					$VarcharStudentReligion = mysqli_real_escape_string($connect, $_POST['txtbxStudentReligion']);

					$VarcharStudentNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxStudentNameOfEmployer']);

					$VarcharStudentEmployerAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentFatherEmployerAddress']);

					$VarcharStudentContactPersonName = mysqli_real_escape_string($connect, $_POST['txtbxStudentContactPersonName']);

					$VarcharStudentContactPersonAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentContactPersonAddress']);

					$VarcharStudentContactPersonRelationship = mysqli_real_escape_string($connect, $_POST['txtbxStudentContactPersonRelationship']);

					$VarcharStudentContactPersonContactNumber = mysqli_real_escape_string($connect, $_POST['txtbxStudentContactPersonContactNumber']);
					//End of the first form wizard-->

					//Start of the second form wizard-->
					$VarcharStudentPreSchoolName = mysqli_real_escape_string($connect, $_POST['txtbxStudentPre-ElemGrad']);

					$VarcharStudentPreSchoolAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentPre-ElemAddress']);

					$VarcharStudentPreSchoolType = mysqli_real_escape_string($connect, $_POST['dropdownStudentPre-ElemType']);

					$VarcharStudentPreSchoolYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentPre-ElemNumOfAttendance1']);
					$VarcharStudentPreSchoolYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentPre-ElemNumOfAttendance2']);

					$VarcharStudentPreSchoolYearAttended = $VarcharStudentPreSchoolYearAttended1 . ' - ' . $VarcharStudentPreSchoolYearAttended2;

					$VarcharStudentPreSchoolHonors = mysqli_real_escape_string($connect, $_POST['txtbxStudentPre-ElemHonors']);

					$VarcharStudentElementarySchoolName = mysqli_real_escape_string($connect, $_POST['txtbxStudentElemGrad']);

					$VarcharStudentElementarySchoolAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentElemAddress']);

					$VarcharStudentElementaryType = mysqli_real_escape_string($connect, $_POST['dropdownStudentELemType']);

					$VarcharStudentElementaryYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentElemNumOfAttendance1']);
					$VarcharStudentElementaryYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentElemNumOfAttendance2']);

					$VarcharStudentElementaryYearAttended = $VarcharStudentElementaryYearAttended1 . ' - ' . $VarcharStudentElementaryYearAttended2;


					$VarcharStudentElementaryHonors = mysqli_real_escape_string($connect, $_POST['txtbxStudentElemHonors']);

					$VarcharStudentHSSchoolName = mysqli_real_escape_string($connect, $_POST['txtbxStudentHSGrad']);

					$VarcharStudentHSSchoolAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentHSAddress']);

					$VarcharStudentHSSchoolType = mysqli_real_escape_string($connect, $_POST['dropdownStudentHSType']);

					$VarcharStudentHSSchoolYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentHSNumOfAttendance1']);
					$VarcharStudentHSSchoolYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentHSNumOfAttendance2']);

					$VarcharStudentHSSchoolYearAttended = $VarcharStudentHSSchoolYearAttended1 . ' - ' . $VarcharStudentHSSchoolYearAttended2;


					$VarcharStudentHSSchoolHonors = mysqli_real_escape_string($connect, $_POST['txtbxStudentHSHonors']);

					$VarcharStudentCollegeName = mysqli_real_escape_string($connect, $_POST['txtbxStudentCollegeGrad']);

					$VarcharStudentCollegeAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentCollegeAddress']);

					$VarcharStudentCollegeType = mysqli_real_escape_string($connect, $_POST['dropdownStudentCollegeType']);

					$VarcharStudentCollegeYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentCollegeNumofAttendance1']);
					$VarcharStudentCollegeYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentCollegeNumofAttendance2']);

					$VarcharStudentCollegeYearAttended = $VarcharStudentCollegeYearAttended1 . ' - ' . $VarcharStudentCollegeYearAttended2;

					$VarcharStudentCollegeHonors = mysqli_real_escape_string($connect, $_POST['txtbxStudentCollegeHonors']);

					$VarcharStudentVocationalName = mysqli_real_escape_string($connect, $_POST['txtbxStudentVocationalGrad']);

					$VarcharStudentVocationalAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentVocationalType']);

					$VarcharStudentVocationalType = mysqli_real_escape_string($connect, $_POST['dropdownStudentVocationalType']);

					$VarcharStudentVocationalYearAttended1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentVocationalNumOfAttendance1']);
					$VarcharStudentVocationalYearAttended2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentVocationalNumOfAttendance2']);

					$VarcharStudentVocationalYearAttended = $VarcharStudentVocationalYearAttended1 . ' - ' . $VarcharStudentVocationalYearAttended2;

					$VarcharStudentVocationalHonors = mysqli_real_escape_string($connect, $_POST['txtbxStudentVocationalHonors']);

					$VarcharStudentNatureOfSchooling = mysqli_real_escape_string($connect, $_POST['dropdownStudentNatureOfSchooling']);
					$VarcharStudentInterruptedWhy = mysqli_real_escape_string($connect, $_POST['txtbxStudentInterruptedWhy']);

					//End Of part 2 of form wizard-->

					//Start of part 3 of the form wizard -->

					$VarcharStudentFatherName = mysqli_real_escape_string($connect, $_POST['txtbxStudentFatherName']);

					$VarcharStudentFatherAge = mysqli_real_escape_string($connect, $_POST['txtbxStudentFatherAge']);

					$VarcharStudentFatherStatus = mysqli_real_escape_string($connect, $_POST['radioStudentFatherStatus']);

					$VarcharStudentFatherEducationalAttainment = mysqli_real_escape_string($connect, $_POST['dropdownStudentFatherEducationalAttainment']);

					$VarcharStudentFatherOccupation = mysqli_real_escape_string($connect, $_POST['txtbxStudentFatherOccupation']);

					$VarcharStudentFatherNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxStudentFatherNameOfEmployer']);

					$VarcharStudentFatherEmployerAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentFatherEmployerAddress']);

					$VarcharStudentMotherName = mysqli_real_escape_string($connect, $_POST['txtbxStudentMotherName']);

					$VarcharStudentMotherAge = mysqli_real_escape_string($connect, $_POST['txtbxStudentMotherAge']);

					$VarcharStudentMotherStatus = mysqli_real_escape_string($connect, $_POST['radioStudentMotherStatus']);

					$VarcharStudentMotherEducationalAttainment = mysqli_real_escape_string($connect, $_POST['dropdownStudentMotherEducationalAttainment']);

					$VarcharStudentMotherOccupation = mysqli_real_escape_string($connect, $_POST['txtbxStudentMotherOccupation']);

					$VarcharStudentMotherNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxStudentMotherNameOfEmployer']);

					$VarcharStudentMotherEmployerAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentMotherAddressOfEmployer']);

					$VarcharStudentGuardianName = mysqli_real_escape_string($connect, $_POST['txtbxStudentGuardianName']);

					$VarcharStudentGuardianAge = mysqli_real_escape_string($connect, $_POST['txtbxStudentGuardianAge']);

					$VarcharStudentGuardianRelation = mysqli_real_escape_string($connect, $_POST['txtbxStudentGuardianRelation']);

					$VarcharStudentGuardianEducationAttainment = mysqli_real_escape_string($connect, $_POST['txtbxStudentGuardianEducationalAttainment']);

					$VarcharStudentGuardianOccupation = mysqli_real_escape_string($connect, $_POST['txtbxStudentGuardianOccupation']);

					$VarcharStudentGuardianNameOfEmployer = mysqli_real_escape_string($connect, $_POST['txtbxStudentGuardianNameOfEmployer']);

					$VarcharStudentGuardianEmployerAddress = mysqli_real_escape_string($connect, $_POST['txtbxStudentGuardianAddressOfEmployer']);

					$VarcharStudentParentMaritalRelationship = mysqli_real_escape_string($connect, $_POST['dropdownStudentParentMaritalRelationship']);

					$VarcharStudentNumOfChildren = mysqli_real_escape_string($connect, $_POST['txtbxStudentNumOfChildren']);

					$VarcharStudentNumOfBrothers = mysqli_real_escape_string($connect, $_POST['txtbxStudentNumOfBrothers']);

					$VarcharStudentNumOfSisters = mysqli_real_escape_string($connect, $_POST['txtbxStudentNumOfSisters']);

					$VarcharStudentSiblingsEmployed = mysqli_real_escape_string($connect, $_POST['txtbxStudentNumOfSiblingsEmployed']);

					$VarcharStudentOrdinalPosition = mysqli_real_escape_string($connect, $_POST['dropdownStudentOrdinalPosition']);

					$VarcharStudentSiblingSupporter = mysqli_real_escape_string($connect, $_POST['dropdownStudentProvidingSupport']);
					
					$VarcharStudentFinancer = mysqli_real_escape_string($connect, $_POST['txtbxStudentFinanceSchooling']);

					$VarcharStudentWeeklyAllowance = mysqli_real_escape_string($connect, $_POST['txtbxStudentWeeklyAllowance']);

					$VarcharStudentMonthlyIncome = mysqli_real_escape_string($connect, $_POST['dropdownStudentTotallyMonthlyIncome']);

					$VarcharStudentStudyPlace = mysqli_real_escape_string($connect, $_POST['dropdownStudentQuietPlace']);

					$VarcharStudentRoomSharing = mysqli_real_escape_string($connect, $_POST['dropdownStudentShareRoomm']);

					$VarcharStudentNatureOfResidence = mysqli_real_escape_string($connect, $_POST['dropdownStudentNatureOfResidence']);
					//End of part 3 of the form wizard 

					//Start of par4 of the form wizard

					$VarcharStudentVision = mysqli_real_escape_string($connect, $_POST['txtbxStudentVisionSpecify']);

					$VarcharStudentHearing = mysqli_real_escape_string($connect, $_POST['txtbxStudentHearingSpecify']);

					$VarcharStudentSpeech = mysqli_real_escape_string($connect, $_POST['txtbxStudentSpeechSpecify']);

					$VarcharStudentGeneralHealth = mysqli_real_escape_string($connect, $_POST['txtbxStudentGeneralHealthSpecify']);

					$VarcharStudentPsychiatristConsult = mysqli_real_escape_string($connect, $_POST['dropdownStudentPsychiatrist']);

					$VarcharStudentPsychiatristWhen	= mysqli_real_escape_string($connect, $_POST['txtbxStudentPsychiatristWhen']);

					$VarcharStudentPsychiatristWhat = mysqli_real_escape_string($connect, $_POST['txtbxStudentPsychiatristWhen']);

					$VarcharStudentPsychologistConsult = mysqli_real_escape_string($connect, $_POST['dropdownStudentPsychologist']);

					$VarcharStudentPsychologistWhen = mysqli_real_escape_string($connect, $_POST['txtbxStudentPsychologistWhen']);

					$VarcharStudentPsychologistWhat = mysqli_real_escape_string($connect,$_POST['txtbxStudentPsychologistWhat']);

					$VarcharStudentCounselorConsult = mysqli_real_escape_string($connect, $_POST['dropdownStudentCounselor']);

					$VarcharStudentCounselorWhen = mysqli_real_escape_string($connect, $_POST['txtbxStudentCounselorWhen']);

					$VarcharStudentCounselorWhat = mysqli_real_escape_string($connect, $_POST['txtbxStudentCounselorWhat']);

					//End of Part 4 of the form wizard

					//Start of part 5 of the form wizard 

					$VarcharStudentClub = mysqli_real_escape_string($connect, $_POST['dropdownStudentClub']);

					$VarcharStudentFavoriteSubject = mysqli_real_escape_string($connect, $_POST['txtbxStudentSubjectFavorite']);

					$VarcharStudentLeastFavSubject = mysqli_real_escape_string($connect, $_POST['txtbxStudentSubjectLeastLike']);
					$VarcharStudentHobbies1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentHobbies1']);
					$VarcharStudentHobbies2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentHobbies2']);
					$VarcharStudentHobbies3 = mysqli_real_escape_string($connect, $_POST['txtbxStudentHobbies3']);
					$VarcharStudentHobbies4 = mysqli_real_escape_string($connect, $_POST['txtbxStudentHobbies4']);
					$VarcharStudentOrganization = mysqli_real_escape_string($connect, $_POST['dropdownStudentOrganization']);
					$VarcharStudentOrganizationInterest = mysqli_real_escape_string($connect, $_POST['txtbxOrganizationOthers']);
					$VarcharStudentOrganizationPosition = mysqli_real_escape_string($connect, $_POST['txtbxOrganizationPosition']);
					// end of part 5 form wizard 

					// start of part 6 form wizard
					$VarcharStudentTestDate1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentTestResultDate1']);
					$VarcharStudentTestName1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentTestResultName1']);
					$VarcharStudentTestRS1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentRS1']);
					$VarcharStudentTestPR1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentPR1']);
					$VarcharStudentTestDescription1 = mysqli_real_escape_string($connect, $_POST['txtbxStudentTestDescription1']);
					$VarcharStudentTestDate2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentTestResultDate2']);
					$VarcharStudentTestName2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentTestResultName2']);
					$VarcharStudentRS2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentRS2']);
					$VarcharStudentPR2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentPR2']);
					$VarcharStudentTestDescription2 = mysqli_real_escape_string($connect, $_POST['txtbxStudentTestDescription2']);




					

					                    //first name validation if input is a space 
                    // checking empty fields
                    if(empty($VarcharStudentNumber)) 
                    {
                             
                        if(empty($VarcharStudentNumber)) 
                        {
                            $message = "Enter a valid Student Number";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        }
                        //link to the previous page
                        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                     } 
                    else 
                    { 
                        // if all the fields are filled (not empty) 
                        //insert data to database   
                        $query1PersonalInfo = "UPDATE `tbl_personalinfo` SET `lastName` = '$VarcharStudentLastName', `firstName` = '$VarcharStudentFirstName', `middleName` = '$VarcharStudentMiddleName', `sex` = '$VarcharStudentGender', `sexuality` = '$VarcharStudentSexuality', `age` = '$VarcharStudentAge', `year` = '$VarcharStudentYear', `section` = '$VarcharStudentSection', `civilStatus` = '$VarcharStudentCivilStatus', `birthDate` = '$VarcharStudentBirthdate', `height` = '$VarcharStudentHeight', `weight` = '$VarcharStudentWeight', `complexion` = '$VarcharStudentComplexion', `birthPlace` = '$VarcharStudentBirthplace', `cityHouseNumber` = '$VarcharStudentCityHouseNumber', `cityProvince` = '$VarcharStudentCityProvince', `cityName` = '$VarcharStudentCityCity', `cityBarangay` = '$VarcharStudentCityBarangay', `provinceHouseNumber` = '$VarcharStudentProvinceHouseNumber', `provinceProvincial` = '$VarcharStudentProvinceProvince', `provinceName` = '$VarcharStudentProvinceCity', `provinceBarangay` = '$VarcharStudentProvinceBarangay', `telNumber` = '$VarcharStudentTelNum', `mobileNumber` = '$VarcharStudentMobileNum', `hsGWA` = '$VarcharStudentHSGWA', `religion` = '$VarcharStudentReligion', `employerName` = '$VarcharStudentNameOfEmployer', `employerAddress` = '$VarcharStudentEmployerAddress', `contactPersonName` = '$VarcharStudentContactPersonName', `cpAddress` = '$VarcharStudentContactPersonAddress', `cpRelationship` = '$VarcharStudentContactPersonRelationship', `cpContactNumber` = '$VarcharStudentContactPersonContactNumber', `collegeCode` = '$VarcharStudentCollege', `courseCode` = '$VarcharStudentCourse' WHERE `tbl_personalinfo`.`studentNumber` = '$VarcharStudentNumber'";

                        $query2EducationalBackground = "INSERT INTO `tbl_educationalbackground` (`educationID`, `prepSchoolName`, `prepSchoolAddress`, `prepType`, `prepYearAttended`, `prepAwards`, `prepImage`, `elemSchoolName`, `elemSchooAddress`, `elemType`, `elemYearAttended`, `elemAwards`, `elemImage`, `hsSchoolName`, `hsSchoolAddress`, `hsType`, `hsYearAttended`, `hsAwards`, `hsImage`, `vocSchoolName`, `vocSchoolAddress`, `vocType`, `vocYearAttended`, `vocAwards`, `vocImage`, `collegeSchoolName`, `collegeSchoolAddress`, `collegeType`, `collegeYearAttended`, `collegeAwards`, `collegeImage`, `natureOfSchooling`, `interuptedWhy`, `studentNumber`) VALUES ('', '$VarcharStudentPreSchoolName', '$VarcharStudentPreSchoolAddress', '$VarcharStudentPreSchoolType', '$VarcharStudentPreSchoolYearAttended', '$VarcharStudentPreSchoolHonors', NULL, '$VarcharStudentElementarySchoolName', '$VarcharStudentElementarySchoolAddress', '$VarcharStudentElementaryType', '$VarcharStudentElementaryYearAttended', '$VarcharStudentElementaryHonors', NULL, '$VarcharStudentHSSchoolName', '$VarcharStudentHSSchoolAddress', '$VarcharStudentHSSchoolType', '$VarcharStudentHSSchoolYearAttended', '$VarcharStudentHSSchoolHonors', NULL, '$VarcharStudentVocationalName', '$VarcharStudentVocationalAddress', '$VarcharStudentVocationalType', '$VarcharStudentVocationalYearAttended', '$VarcharStudentVocationalHonors', NULL, '$VarcharStudentCollegeName', '$VarcharStudentCollegeAddress', '$VarcharStudentCollegeType', '$VarcharStudentCollegeYearAttended', '$VarcharStudentCollegeHonors', NULL, '$VarcharStudentNatureOfSchooling', '$VarcharStudentInterruptedWhy', '$VarcharStudentNumber')";

                        $query3FamilyBackground = "INSERT INTO `tbl_familybackground` (`familyID`, `fatherName`, `fatherAge`, `fatherStatus`, `fatherEducation`, `fatherOccupation`, `fatherEmployerName`, `fatherEmployerAdd`, `motherName`, `motherAge`, `motherStatus`, `motherEducation`, `motherOccupation`, `motherEmployerName`, `motheremployerAdd`, `guardianName`, `guardianAge`, `guardianRelation`, `guardianEducation`, `guardianOccupation`, `guardianEmployerName`, `guardianEmployerAdd`, `parentsMaritalRelation`, `noOfChildren`, `noOfBrother`, `noOfSister`, `broSisEmployed`, `ordinalPosition`, `siblingSupporter`, `schoolFinancer`, `weeklyAllowance`, `totalMonthlyIncome`, `studyPlace`, `roomSharing`, `natureOfResidence`, `studentNumber`) VALUES ('', '$VarcharStudentFatherName`', '$VarcharStudentFatherAge', '$VarcharStudentFatherStatus', '$VarcharStudentFatherEducationalAttainment', '$VarcharStudentFatherOccupation', '$VarcharStudentFatherNameOfEmployer', '$VarcharStudentFatherEmployerAddress', '$VarcharStudentMotherName', '$VarcharStudentMotherAge', '$VarcharStudentMotherStatus', '$VarcharStudentMotherEducationalAttainment', '$VarcharStudentMotherOccupation', '$VarcharStudentMotherNameOfEmployer', '$VarcharStudentMotherEmployerAddress', '$VarcharStudentGuardianName', '$VarcharStudentGuardianAge', '$VarcharStudentGuardianRelation', '$VarcharStudentGuardianEducationAttainment', '$VarcharStudentGuardianOccupation', '$VarcharStudentGuardianNameOfEmployer', '$VarcharStudentGuardianEmployerAddress', '$VarcharStudentParentMaritalRelationship', '$VarcharStudentNumOfChildren', '$VarcharStudentNumOfBrothers', '$VarcharStudentNumOfSisters', '$VarcharStudentSiblingsEmployed', '$VarcharStudentOrdinalPosition', '$VarcharStudentSiblingSupporter', '$VarcharStudentFinancer', '$VarcharStudentWeeklyAllowance', '$VarcharStudentMonthlyIncome', '$VarcharStudentStudyPlace', '$VarcharStudentRoomSharing', '$VarcharStudentNatureOfResidence', '$VarcharStudentNumber')";
                        if($VarcharStudentVision == "yes"){
                        	$VarcharStudentVision = $_POST['txtbxStudentVisionSpecify'];
                        }
                        if($VarcharStudentHearing == "yes"){
                        	$VarcharStudentHearing = $_POST['txtbxStudentHearingSpecify'];
                        }
                        if($VarcharStudentSpeech == "yes"){
                        	$VarcharStudentSpeech = $_POST['txtbxStudentSpeechSpecify'];
                        }
                        if($VarcharStudentGeneralHealth == "yes"){
                        	$VarcharStudentGeneralHealth = $_POST['txtbxStudentGeneralHealthSpecify'];
                        }
                        $query4Health = "INSERT INTO `tbl_healthinfo` (`healthID`, `visionProblem`, `hearingProblem`, `speechProblem`, `generalHealth`, `psychiatristConsult`, `psychiatristWhen`, `psychiatristReason`, `psychologistConsult`, `psychologistWhen`, `psychologistReason`, `counselorConsult`, `counselorWhen`, `counselorReason`, `studentNumber`) VALUES ('', '$VarcharStudentVision', '$VarcharStudentHearing', '$VarcharStudentSpeech', '$VarcharStudentGeneralHealth', '$VarcharStudentPsychiatristConsult', '$VarcharStudentPsychiatristWhen', '$VarcharStudentPsychiatristWhat', '$VarcharStudentPsychologistConsult', '$VarcharStudentPsychologistWhen', '$VarcharStudentPsychologistWhat', '$VarcharStudentCounselorConsult', '$VarcharStudentCounselorWhen', '$VarcharStudentCounselorWhat', '$VarcharStudentNumber')";

                        $query5InterestsAndHobbies = "INSERT INTO `tbl_interesthobbies` (`interestID`, `clubName`, `favSubject`, `leastFavSubject`, `hobby1`, `hobby2`, `hobby3`, `hobby4`, `joinedOrganization`, `interestOrganization`, `organizationPosition`, `studentNumber`) VALUES ('', '$VarcharStudentClub', '$VarcharStudentFavoriteSubject', '$VarcharStudentLeastFavSubject', 'VarcharStudentHobbies1', '$VarcharStudentHobbies2', '$VarcharStudentHobbies3', '$VarcharStudentHobbies4', '$VarcharStudentOrganization', '$VarcharStudentOrganizationInterest', '$VarcharStudentOrganizationPosition', '$VarcharStudentNumber')";

                        $query6TestResults1 = "INSERT INTO `tbl_testrecord` (`testID`, `testDate`, `testName`, `testRawScore`, `testPercentile`, `testDescription`, `studentNumber`) VALUES ('', '$VarcharStudentTestDate1', '$VarcharStudentTestName1', '$VarcharStudentTestRS1', '$VarcharStudentTestPR1', '$VarcharStudentTestDescription1', '$VarcharStudentNumber')";	

                        //$query6TestResults2 = "INSERT INTO `tbl_testrecord` (`testID`, `testDate`, `testName`, `testRawScore`, `testPercentile`, `testDescription`, `studentNumber`) VALUES ('', '$VarcharStudentTestDate2', '$VarcharStudentTestName2', '$VarcharStudentTestRS2', '$VarcharStudentTestPR2', '$VarcharStudentTestDescription2', '$VarcharStudentNumber')";



                        //$queryAdd = "INSERT INTO `tbl_studentaccount` (`studentNumber`, `studentFirstName`, `studentMiddleName`, `studentLastName`, `studentPassword`, `aboutStudent`, `studentDisplayPic`, `studentCoverPhoto`) VALUES ('435345643', '43534534', '345345', '3454353', '345345', NULL, NULL, NULL)";
                        if(mysqli_query($connect, $query1PersonalInfo))
                        {   
                            if(mysqli_query($connect, $query2EducationalBackground))
                           	{
                            	if(mysqli_query($connect, $query3FamilyBackground))
                            	{
                            		if(mysqli_query($connect, $query4Health))
                            		{
                            			if(mysqli_query($connect, $query5InterestsAndHobbies))
                            			{	
                            				if(mysqli_query($connect, $query6TestResults1))
                            				{
                            					
                            				}
                            				else
                            				{
                            				$message = "Student Account Query Error#6.1";
                            				echo "<script type='text/javascript'>alert('$message');</script>";
                            				//redirectig to the display page. In our case, it is index.php
                           					echo "<script type='text/javascript'>location.href = 'clientLogin.php';</script>";
                            				}
                            			}
                            			else
                            			{
                            			$message = "Student Account Query Error#5";
                            			echo "<script type='text/javascript'>alert('$message');</script>";
                            			//redirectig to the display page. In our case, it is index.php
                           				echo "<script type='text/javascript'>location.href = 'clientLogin.php';</script>";
                            			}
                            		}
                            		else
                            		{
                            		$message = "Student Account Query Error#4";
                            		echo "<script type='text/javascript'>alert('$message');</script>";
                            		//redirectig to the display page. In our case, it is index.php
                           			echo "<script type='text/javascript'>location.href = 'clientLogin.php';</script>";
                            		}
                            	}
                            	else
                            	{
								$message = "Student Account Query Error#3";
                            	echo "<script type='text/javascript'>alert('$message');</script>";
                            	//redirectig to the display page. In our case, it is index.php
                           		echo "<script type='text/javascript'>location.href = 'clientLogin.php';</script>";
                            	}
                          }
                          else{
                            $message = "Student Account Query Error#2";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
                            echo "<script type='text/javascript'>location.href = 'clientLogin.php';</script>";
                          }
                        }
                        else
                        {
                          	$message = "Student Account Query Error#1";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
                            echo "<script type='text/javascript'>location.href = 'clientLogin.php';</script>";
                        }
                        
                }
            }

                ?>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
	                                </div>
		                            <div class="clearfix"></div>
		                        </div>
			                </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="fb.com/alltypwen">GCTS</a>
	        </div>
	    </div>
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>

</html>
