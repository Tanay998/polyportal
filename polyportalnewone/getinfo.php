<?php
include('conn.php');
	if(isset($_POST['submit']))
	{
		$fromYear = $_POST['t11'];
		$toYear = $_POST['t21'];
		$admissionDate = $_POST['dateadd'];
		$AdDateone = $_POST['brn'];
		$regNo=$_POST['regNo'];
		$year=$_POST['admin11'];
		$Rank = $_POST['jeep'];
		$Roll = $_POST['RollNo'];
		$Courses = $_POST['course11'];
		$semester = $_POST['semester11'];
		$Entry = $_POST['entry'];
		$TFW = $_POST['tfw'];
		$firstName = $_POST['firstname'];
		$middleName = $_POST['middlename'];
		$lastName = $_POST['lastname'];
		$NameinHindi = $_POST['hindiname'];
		$fathername = $_POST['fathername'];
		$fathernameinHindi = $_POST['hindiname1'];
		$mothername = $_POST['mothername'];
		$mothernameinHindi = $_POST['hindiname2'];
		$parentsMobile = $_POST['phone'];
		echo $parentsMobile."<br/>";
		$DOB= $_POST['dateone'];
		echo $DOB."<br/>";
		$Email= $_POST['Email'];
		$LandLineNumber = $_POST['phone1'];
		echo $LandLineNumber;
		$gender= $_POST['gender11'];
		$category= $_POST['category11'];
		$maritalStatus= $_POST['marital11'];
		$bloodGroup= $_POST['blood11'];
		$typeofAddress= $_POST['add111'];
		$PhysicalDisability= $_POST['diva11'];
		$PhysicalDisability1= $_POST['div1'];
		$Identification= $_POST['rec'];
		$employmentDetail= $_POST['emp'];
		$familyAnnualIncome= $_POST['salary'];
		$UIDnumber= $_POST['aadhaar'];
		$Correspondencecity= $_POST['ccity'];
		$Correspondencestreet = $_POST['cstreet'];
		$Correspondencestate = $_POST['cstate11'];
 		$Correspondencedistrict= $_POST['cdistrict'];
		$Correspondencepincode= $_POST['cpincode'];
		$Permanentcity = $_POST['pcity'];
		$Permanentstreet= $_POST['pstreet'];
		$Permanentstate = $_POST['pstate11'];
		$Permanentdistrict= $_POST['pdistrict'];
		$Permanentpincode= $_POST['ppincode'];
		$AccountNumber= $_POST['bankacc'];
		$IfscCode= $_POST['IFSC'];
		$Bankname= $_POST['BANKNAME'];
		$Education = $_POST['edu11'];
		$schoolname= $_POST['schoolName'];
		$Boardname= $_POST['Board'];
		$subject= $_POST['subject'];
		$YearOfPassing= $_POST['yop11'];
		$TypeOfMarks = $_POST['typeofmarks'];
		$Totalmarks= $_POST['totalmarks'];
		$Obtainmarks= $_POST['obtainmarks'];
		$PercentageOfObtainmarks= $_POST['percentage'];
		$declarationDate= $_POST['decdate'];

		$AdmitCard= $_FILES['file1'];
		$AllotmentLetter = $_FILES['file2251'];
		$OtherQualification= $_FILES['file2'];
		$GapAffidavit = $_FILES['file3351'];
		$MedicalCertificate= $_FILES['file3'];

		$filename1 = $AdmitCard['name'];
		$filename2 = $AllotmentLetter['name'];
		$filename3 = $OtherQualification['name'];
		$filename4 = $GapAffidavit['name'];
		$filename5 = $MedicalCertificate['name'];

		$fileerror1 = $AdmitCard['error'];
		$fileerror2 = $AllotmentLetter['error'];
		$fileerror3 = $OtherQualification['error'];
		$fileerror4 = $GapAffidavit['error'];
		$fileerror5 = $MedicalCertificate['error'];

		$filetmp1 = $AdmitCard['tmp_name'];
		$filetmp2 = $AllotmentLetter['tmp_name'];
		$filetmp3 = $OtherQualification['tmp_name'];
		$filetmp4 = $GapAffidavit['tmp_name'];
		$filetmp5 = $MedicalCertificate['tmp_name'];

		
		$fileext1 = explode('.',$filename1);
		$fileext2 = explode('.',$filename2);
		$fileext3 = explode('.',$filename3);
		$fileext4 = explode('.',$filename4);
		$fileext5 = explode('.',$filename5);
		

		
		$filecheck1 = strtolower(end($fileext1));
		$filecheck2 = strtolower(end($fileext2));
		$filecheck3 = strtolower(end($fileext3));
		$filecheck4 = strtolower(end($fileext4));
		$filecheck5 = strtolower(end($fileext5));
		

		
		$fileextstored1 = array('png','jpg','jpeg');
		$fileextstored2 = array('png','jpg','jpeg');
		$fileextstored3 = array('png','jpg','jpeg');
		$fileextstored4 = array('png','jpg','jpeg');
		$fileextstored5 = array('png','jpg','jpeg');
		

			
			$destinationfile1 = 'upload/AdmitCard/'.$filename1;
			$destinationfile2 = 'upload/AllotmentLetter/'.$filename2;
			$destinationfile3 = 'upload/OtherQualification/'.$filename3;
			$destinationfile4 = 'upload/GapAffidavit/'.$filename4;
			$destinationfile5 = 'upload/MedicalCertificate/'.$filename5;
			
			
			
			move_uploaded_file($filetmp1,$destinationfile1);
			move_uploaded_file($filetmp2,$destinationfile2);
			move_uploaded_file($filetmp3,$destinationfile3);
			move_uploaded_file($filetmp4,$destinationfile4);
			move_uploaded_file($filetmp5,$destinationfile5);
			
			
			if($year=="1") ///////// if block start ///////////////
			{
			$Query= "INSERT INTO `record1`(`FromYear`, `ToYear`, `AdmissionNo1`, `AdmissionNo2`, `RegNo`, `Year`, `JeepRank`, `JeepRollNo`, `Course`, `Semester`, `TypeofEntry`, `TFW`, `First Name`, `Middle Name`, `Last Name`, `Name in Hindi`, `Father Name`, `Father Name in Hindi`, `Mother Name`, `Mother Name in Hindi`, `Parents Mobile No`, `Date Of Birth`, `Email`, `Land Line No`, `Gender`, `Category`, `Marital Status`, `Blood Group`, `Type of Address`, `Physical Handicapped`, `Physical Handicapped Type`, `Identification Mark`, `Employment Detail`, `Family Annual Income`, `Aadhaar No`, `Correspondence City`, `Correspondence Street`, `Correspondence State`, `Correspondence District`, `Correspondence pincode`, `Permanent City`, `Permanent Street`, `Permanent State`, `Permanent District`, `Permanent Pincode`, `Bank Account Number`, `IFSC Code`, `Bank Name`, `Education`, `School Name`, `Board`, `Subject`, `Year of Passing`, `Type of Mark`, `Total Marks`, `Obtain Marks or CGPA`, `Percentage`, `DeclarationDate`, `Admit Card Picture`, `AllotmentLetterPicture`, `Other Qualification Picture`, `Gap Affidavit Picture`, `Medical Certificate Picture`) VALUES ('$fromYear','$toYear','$admissionDate','$AdDateone','$regNo','$year','$Rank','$Roll','$Courses','$semester','$Entry','$TFW','$firstName','$middleName','$lastName','$NameinHindi','$fathername','$fathernameinHindi','$mothername','$mothernameinHindi','$parentsMobile','$DOB','$Email','$LandLineNumber','$gender','$category','$maritalStatus','$bloodGroup','$typeofAddress','$PhysicalDisability','$PhysicalDisability1','$Identification','$employmentDetail','$familyAnnualIncome','$UIDnumber','$Correspondencecity','$Correspondencestreet','$Correspondencestate','$Correspondencedistrict','$Correspondencepincode','$Permanentcity','$Permanentstreet','$Permanentstate','$Permanentdistrict','$Permanentpincode','$AccountNumber','$IfscCode','$Bankname','$Education','$schoolname','$Boardname','$subject','$YearOfPassing','$TypeOfMarks','$Totalmarks','$Obtainmarks','$PercentageOfObtainmarks','$declarationDate','$destinationfile1','$destinationfile2','$destinationfile3','$destinationfile4','$destinationfile5')"; 
		 	if(mysqli_query($db,$Query))
		 	{
				//header('location:form.php');
				echo "<script>
				if(confirm('Your information has been submitted'))
					{
						location.replace('add1.php');
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
		  ///////// if block end /////////////
		  
		  else if($year=="2") //////////// else if block start /////////////
		  {

				$Query= "INSERT INTO `record2`(`FromYear`, `ToYear`, `AdmissionNo1`, `AdmissionNo2`, `RegNo`, `Year`, `JeepRank`, `JeepRollNo`, `Course`, `Semester`, `TypeofEntry`, `TFW`, `First Name`, `Middle Name`, `Last Name`, `Name in Hindi`, `Father Name`, `Father Name in Hindi`, `Mother Name`, `Mother Name in Hindi`, `Parents Mobile No`, `Date Of Birth`, `Email`, `Land Line No`, `Gender`, `Category`, `Marital Status`, `Blood Group`, `Type of Address`, `Physical Handicapped`, `Physical Handicapped Type`, `Identification Mark`, `Employment Detail`, `Family Annual Income`, `Aadhaar No`, `Correspondence City`, `Correspondence Street`, `Correspondence State`, `Correspondence District`, `Correspondence pincode`, `Permanent City`, `Permanent Street`, `Permanent State`, `Permanent District`, `Permanent Pincode`, `Bank Account Number`, `IFSC Code`, `Bank Name`, `Education`, `School Name`, `Board`, `Subject`, `Year of Passing`, `Type of Mark`, `Total Marks`, `Obtain Marks or CGPA`, `Percentage`, `DeclarationDate`, `Admit Card Picture`, `Allotment Letter Picture`, `Other Qualification Picture`, `Gap Affidavit Picture`, `Medical Certificate Picture`) VALUES ('$fromYear','$toYear','$admissionDate','$AdDateone','$regNo','$year','$Rank','$Roll','$Courses','$semester','$Entry','$TFW','$firstName','$middleName','$lastName','$NameinHindi','$fathername','$fathernameinHindi','$mothername','$mothernameinHindi','$parentsMobile','$DOB','$Email','$LandLineNumber','$gender','$category','$maritalStatus','$bloodGroup','$typeofAddress','$PhysicalDisability','$PhysicalDisability1','$Identification','$employmentDetail','$familyAnnualIncome','$UIDnumber','$Correspondencecity','$Correspondencestreet','$Correspondencestate','$Correspondencedistrict','$Correspondencepincode','$Permanentcity','$Permanentstreet','$Permanentstate','$Permanentdistrict','$Permanentpincode','$AccountNumber','$IfscCode','$Bankname','$Education','$schoolname','$Boardname','$subject','$YearOfPassing','$TypeOfMarks','$Totalmarks','$Obtainmarks','$PercentageOfObtainmarks','$declarationDate','$destinationfile1','$destinationfile2','$destinationfile3','$destinationfile4','$destinationfile5')";   
		 	if(mysqli_query($db,$Query))
		 	{
				//header('location:form.php');
				echo "<script>
				
					if(confirm('Your information has been submitted'))
					{
						location.replace('add1.php');
					}
				</script>";
				//echo $firstname."<script type='text/javascript>alert('Your information has been successfully saved')</script>'";
		 	}
		 	else
		 	{
				 echo "Error: " . mysqli_error($db);
		 	}
		 	mysqli_close($db);
		  } ///////////// else if block end ////////////////////

		  else ///////////////////// else block start ///////////
		  {

				$Query= "INSERT INTO `record3`(`FromYear`, `ToYear`, `AdmissionNo1`, `AdmissionNo2`, `RegNo`, `Year`, `JeepRank`, `JeepRollNo`, `Course`, `Semester`, `TypeofEntry`, `TFW`, `First Name`, `Middle Name`, `Last Name`, `Name in Hindi`, `Father Name`, `Father Name in Hindi`, `Mother Name`, `Mother Name in Hindi`, `Parents Mobile No`, `Date Of Birth`, `Email`, `Land Line No`, `Gender`, `Category`, `Marital Status`, `Blood Group`, `Type of Address`, `Physical Handicapped`, `Physical Handicapped Type`, `Identification Mark`, `Employment Detail`, `Family Annual Income`, `Aadhaar No`, `Correspondence City`, `Correspondence Street`, `Correspondence State`, `Correspondence District`, `Correspondence pincode`, `Permanent City`, `Permanent Street`, `Permanent State`, `Permanent District`, `Permanent Pincode`, `Bank Account Number`, `IFSC Code`, `Bank Name`, `Education`, `School Name`, `Board`, `Subject`, `Year of Passing`, `Type of Mark`, `Total Marks`, `Obtain Marks or CGPA`, `Percentage`, `DeclarationDate`, `Admit Card Picture`, `Allotment Letter Picture`, `Other Qualification Picture`, `Gap Affidavit Picture`, `Medical Certificate Picture`) VALUES ('$fromYear','$toYear','$admissionDate','$AdDateone','$regNo','$year','$Rank','$Roll','$Courses','$semester','$Entry','$TFW','$firstName','$middleName','$lastName','$NameinHindi','$fathername','$fathernameinHindi','$mothername','$mothernameinHindi','$parentsMobile','$DOB','$Email','$LandLineNumber','$gender','$category','$maritalStatus','$bloodGroup','$typeofAddress','$PhysicalDisability','$PhysicalDisability1','$Identification','$employmentDetail','$familyAnnualIncome','$UIDnumber','$Correspondencecity','$Correspondencestreet','$Correspondencestate','$Correspondencedistrict','$Correspondencepincode','$Permanentcity','$Permanentstreet','$Permanentstate','$Permanentdistrict','$Permanentpincode','$AccountNumber','$IfscCode','$Bankname','$Education','$schoolname','$Boardname','$subject','$YearOfPassing','$TypeOfMarks','$Totalmarks','$Obtainmarks','$PercentageOfObtainmarks','$declarationDate','$destinationfile1','$destinationfile2','$destinationfile3','$destinationfile4','$destinationfile5')";   
		 	if(mysqli_query($db,$Query))
		 	{
				//header('location:form.php');
				echo "<script>
				
					if(confirm('Your information has been submitted'))
					{
						location.replace('add1.php');
					}
				</script>";
				//echo $firstname."<script type='text/javascript>alert('Your information has been successfully saved')</script>'";
		 	}
		 	else
		 	{
				 echo "Error: " . mysqli_error($db);
		 	}
		 	mysqli_close($db);

		  } //////////////////// else block end ///////////////////

	}
?>
