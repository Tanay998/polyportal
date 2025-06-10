<?php

include('conn.php');
	
	if(isset($_POST['submit']))
	{
		$fromYear = $_POST['t11'];
		$toYear = $_POST['t21'];
		$admissionDate = $_POST['dateadd'];
		$AdDateone = $_POST['brn'];
		$regNo=$_POST['regNo'];
		$Rank = $_POST['jeep'];
		$Roll = $_POST['RollNo'];
		$Courses = $_POST['course1'];
		$semester = $_POST['semester1'];
		$Entry = $_POST['entry1'];
		$TFW = $_POST['tfw1'];
		$firstName = $_POST['firstname'];
		$middleName = $_POST['middlename'];
		$lastName = $_POST['lastname'];
		$NameinHindi = $_POST['hindiname'];
		$fathername = $_POST['fathername'];
		$fathernameinHindi = $_POST['hindiname1'];
		$mothername = $_POST['mothername'];
		$mothernameinHindi = $_POST['hindiname2'];
		$parentsMobile = $_POST['phone'];
		$DOB= $_POST['dateone'];
		$Email= $_POST['Email'];
		$LandLineNumber = $_POST['phone1'];
		$gender= $_POST['gender1'];
		$category= $_POST['category1'];
		$maritalStatus= $_POST['marital1'];
		$bloodGroup= $_POST['blood1'];
		$typeofAddress= $_POST['add11'];
		$PhysicalDisability= $_POST['diva11'];
		$PhysicalDisability1= $_POST['div1'];
		$Identification= $_POST['rec'];
		$employmentDetail= $_POST['emp'];
		$familyAnnualIncome= $_POST['salary'];
		$UIDnumber= $_POST['aadhaar'];
		$Correspondencecity= $_POST['ccity'];
		$Correspondencestreet = $_POST['cstreet'];
		$Correspondencestate = $_POST['cstate1'];
 		$Correspondencedistrict= $_POST['cdistrict'];
		$Correspondencepincode= $_POST['cpincode'];
		$Permanentcity = $_POST['pcity'];
		$Permanentstreet= $_POST['pstreet'];
		$Permanentstate = $_POST['pstate1'];
		$Permanentdistrict= $_POST['pdistrict'];
		$Permanentpincode= $_POST['ppincode'];
		$AccountNumber= $_POST['bankacc'];
		$IfscCode= $_POST['IFSC'];
		$Bankname= $_POST['BANKNAME'];
		$Education= $_POST['edu'];
		$schoolname= $_POST['schoolName'];
		$Boardname= $_POST['Board'];
		$subject= $_POST['subject'];
		$YearOfPassing= $_POST['yop1'];
		$TypeOfMarks = $_POST['typeofmarks11'];
		$Totalmarks= $_POST['totalmarks'];
		$Obtainmarks= $_POST['obtainmarks'];
		$PercentageOfObtainmarks= $_POST['percentage'];
		$declarationDate= $_POST['decdate'];
		$usernameone = $_POST['usern'];

		$ProfilePicture= $_FILES['file'];
		$AadhaarCard= $_FILES['file1'];
		$HighSchoolMarksheet = $_FILES['file2251'];
		$HighSchoolCertificate= $_FILES['file2'];
		$IntermediateMarksheet = $_FILES['file3351'];
		$IntermediateCertificate= $_FILES['file3'];
		$CastCertificate= $_FILES['file4'];
		$DomicileCertificate= $_FILES['file4451'];
		$TransferCertificate= $_FILES['file5551'];
		$PHYDCertificate= $_FILES['file5'];
		$IncomeCertificate=$_FILES['file6'];
		$CandidateSignature= $_FILES['file7'];

		$filename = $ProfilePicture['name'];
		$filename1 = $AadhaarCard['name'];
		$filename2 = $HighSchoolMarksheet['name'];
		$filename3 = $HighSchoolCertificate['name'];
		$filename4 = $IntermediateMarksheet['name'];
		$filename5 = $IntermediateCertificate['name'];
		$filename6 = $CastCertificate['name'];
		$filename7 = $DomicileCertificate['name'];
		$filename8 = $TransferCertificate['name'];
		$filename9 = $PHYDCertificate['name'];
		$filename10 = $IncomeCertificate['name'];
		$filename11 = $CandidateSignature['name'];

		$fileerror = $ProfilePicture['error'];
		$fileerror1 = $AadhaarCard['error'];
		$fileerror2 = $HighSchoolMarksheet['error'];
		$fileerror3 = $HighSchoolCertificate['error'];
		$fileerror4 = $IntermediateMarksheet['error'];
		$fileerror5 = $IntermediateCertificate['error'];
		$fileerror6 = $CastCertificate['error'];
		$fileerror7 = $DomicileCertificate['error'];
		$filerrror8 = $TransferCertificate['error'];
		$fileerror9 = $PHYDCertificate['error'];
		$fileerror10 = $IncomeCertificate['error'];
		$fileerror11 = $CandidateSignature['error'];

		$filetmp = $ProfilePicture['tmp_name'];
		$filetmp1 = $AadhaarCard['tmp_name'];
		$filetmp2 = $HighSchoolMarksheet['tmp_name'];
		$filetmp3 = $HighSchoolCertificate['tmp_name'];
		$filetmp4 = $IntermediateMarksheet['tmp_name'];
		$filetmp5 = $IntermediateCertificate['tmp_name'];
		$filetmp6 = $CastCertificate['tmp_name'];
		$filetmp7 = $DomicileCertificate['tmp_name'];
		$filetmp8 = $TransferCertificate['tmp_name'];
		$filetmp9 = $PHYDCertificate['tmp_name'];
		$filetmp10 = $IncomeCertificate['tmp_name'];
		$filetmp11 = $CandidateSignature['tmp_name'];

		$fileext = explode('.',$filename);
		$fileext1 = explode('.',$filename1);
		$fileext2 = explode('.',$filename2);
		$fileext3 = explode('.',$filename3);
		$fileext4 = explode('.',$filename4);
		$fileext5 = explode('.',$filename5);
		$fileext6 = explode('.',$filename6);
		$fileext7 = explode('.',$filename7);
		$fileext8 = explode('.',$filename8);
		$fileext9 = explode('.',$filename9);
		$fileext10 = explode('.',$filename10);
		$fileext11 = explode('.',$filename11);

		$filecheck = strtolower(end($fileext));
		$filecheck1 = strtolower(end($fileext1));
		$filecheck2 = strtolower(end($fileext2));
		$filecheck3 = strtolower(end($fileext3));
		$filecheck4 = strtolower(end($fileext4));
		$filecheck5 = strtolower(end($fileext5));
		$filecheck6 = strtolower(end($fileext6));
		$filecheck7 = strtolower(end($fileext7));
		$filecheck8 = strtolower(end($fileext8));
		$filecheck9 = strtolower(end($fileext9));
		$filecheck10 = strtolower(end($fileext10));
		$filecheck11 = strtolower(end($fileext11));

		$fileextstored = array('png','jpg','jpeg');
		$fileextstored1 = array('png','jpg','jpeg');
		$fileextstored2 = array('png','jpg','jpeg');
		$fileextstored3 = array('png','jpg','jpeg');
		$fileextstored4 = array('png','jpg','jpeg');
		$fileextstored5 = array('png','jpg','jpeg');
		$fileextstored6 = array('png','jpg','jpeg');
		$fileextstored7 = array('png','jpg','jpeg');
		$fileextstored8 = array('png','jpg','jpeg');
		$fileextstored9 = array('png','jpg','jpeg');
		$fileextstored10 = array('png','jpg','jpeg');
		$fileextstored11 = array('png','jpg','jpeg');
			$destinationfile = 'upload/ProfilePicture/'.$filename;
			$destinationfile1 = 'upload/AadhaarCard/'.$filename1;
			$destinationfile2 = 'upload/HighSchoolMarksheet/'.$filename2;
			$destinationfile3 = 'upload/HighSchoolCertificate/'.$filename3;
			$destinationfile4 = 'upload/IntermediateMarksheet/'.$filename4;
			$destinationfile5 = 'upload/IntermediateCertificate/'.$filename5;
			$destinationfile6 = 'upload/CastCertificate/'.$filename6;
			$destinationfile7 = 'upload/DomicileCertificate/'.$filename7;
			$destinationfile8 = 'upload/TransferCertificate/'.$filename8;
			$destinationfile9 = 'upload/PhysicalDisabilityCertificate/'.$filename9;
			$destinationfile10 = 'upload/IncomeCertificate/'.$filename10;
			$destinationfile11 = 'upload/CandidateSignature/'.$filename11;
			
			move_uploaded_file($filetmp,$destinationfile);
			move_uploaded_file($filetmp1,$destinationfile1);
			move_uploaded_file($filetmp2,$destinationfile2);
			move_uploaded_file($filetmp3,$destinationfile3);
			move_uploaded_file($filetmp4,$destinationfile4);
			move_uploaded_file($filetmp5,$destinationfile5);
			move_uploaded_file($filetmp6,$destinationfile6);
			move_uploaded_file($filetmp7,$destinationfile7);
			move_uploaded_file($filetmp8,$destinationfile8);
			move_uploaded_file($filetmp9,$destinationfile9);
			move_uploaded_file($filetmp10,$destinationfile10);
			move_uploaded_file($filetmp11,$destinationfile11);
			echo $TypeOfMarks;
			$Query= "INSERT INTO `record`(`FromYear`, `ToYear`, `AdmissionNo1`, `AdmissionNo2`, `RegNo`, `JeepRank`, `JeepRollNo`, `Course`, `Semester`, `TypeofEntry`, `First Name`, `Middle Name`, `Last Name`, `Name in Hindi`, `Father Name`, `Father Name in Hindi`, `Mother Name`, `Mother Name in Hindi`, `Parents Mobile No`, `Date Of Birth`, `Email`, `Land Line No`, `Gender`, `Category`, `Marital Status`, `Blood Group`, `Type of Address`, `Physical Handicapped`, `Physical Handicapped Type`, `Identification Mark`, `Employment Detail`, `Family Annual Income`, `Aadhaar No`, `Correspondence City`, `Correspondence Street`, `Correspondence State`, `Correspondence District`, `Correspondence pincode`, `Permanent City`, `Permanent Street`, `Permanent State`, `Permanent District`, `Permanent Pincode`, `Bank Account Number`, `IFSC Code`, `Bank Name`, `Education`, `School Name`, `Board`, `Subject`, `Year of Passing`, `Type of Mark`, `Total Marks`, `Obtain Marks or CGPA`, `Percentage`, `DeclarationDate`, `username`,`Profile Picture`, `Aadhaar Card Picture`, `HighSchoolMarksheetPicture`, `High School Certificate Picture`, `IntermediateMarksheetPicture`, `Intermediate Certificate Picture`, `Cast or EWS Certificate Picture`, `DomicileCertificate`, `TransferCertificate`, `Physical Disability Certificate Picture`, `Income Certificate Picture`, `CandidateSignature`) VALUES ('$fromYear','$toYear','$admissionDate','$AdDateone','$regNo','$Rank','$Roll','$Courses','$semester','$Entry','$firstName','$middleName','$lastName','$NameinHindi','$fathername','$fathernameinHindi','$mothername','$mothernameinHindi','$parentsMobile','$DOB','$Email','$LandLineNumber','$gender','$category','$maritalStatus','$bloodGroup','$typeofAddress','$PhysicalDisability','$PhysicalDisability1','$Identification','$employmentDetail','$familyAnnualIncome','$UIDnumber','$Correspondencecity','$Correspondencestreet','$Correspondencestate','$Correspondencedistrict','$Correspondencepincode','$Permanentcity','$Permanentstreet','$Permanentstate','$Permanentdistrict','$Permanentpincode','$AccountNumber','$IfscCode','$Bankname','$Education','$schoolname','$Boardname','$subject','$YearOfPassing','$TypeOfMarks','$Totalmarks','$Obtainmarks','$PercentageOfObtainmarks','$declarationDate','$usernameone','$destinationfile','$destinationfile1','$destinationfile2','$destinationfile3','$destinationfile4','$destinationfile5','$destinationfile6','$destinationfile7','$destinationfile8','$destinationfile9','$destinationfile10','$destinationfile11')"; 
		 	
            if(mysqli_query($db,$Query)) ////////// if block start //////////
		 	{
				//header('location:form.php');
				echo "<script>
					if(confirm('Your data submitted successfully')){
						location.replace('form1.php');
					}	
				</script>";
				//echo $firstname."<script type='text/javascript>alert('Your information has been successfully saved')</script>'";
		 	}
		 	else
		 	{
				 echo "Error: " . mysqli_error($db);
		 	}
		 	mysqli_close($db);

	}
?>
