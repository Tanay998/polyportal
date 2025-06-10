<?php

include('conn.php');
	
	if(isset($_POST['submit']))
	{
		$fromYear = $_POST['t1'];
		echo $fromYear;
		$toYear = $_POST['t2'];
		$admissionDate = $_POST['dateadd'];
		echo $admissionDate;
		$AdDateone = $_POST['brn'];
		echo $AdDateone;
		$regNo=$_POST['regNo'];
		echo $regNo;
		$Rank = $_POST['jeep'];
		$Roll = $_POST['RollNo'];
		$Courses = $_POST['course'];
		$semester = $_POST['semester'];
		$Entry = $_POST['TypeofEntry'];
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
		$DOB= $_POST['dateone'];
		$Email= $_POST['Email'];
		$LandLineNumber = $_POST['phone1'];
		$gender= $_POST['gender'];
		$category= $_POST['category'];
		$maritalStatus= $_POST['marital'];
		$bloodGroup= $_POST['blood'];
		$typeofAddress= $_POST['add1'];
		$PhysicalDisability= $_POST['diva'];
		$PhysicalDisability1= $_POST['div1'];
		$Identification= $_POST['rec'];
		$employmentDetail= $_POST['emp'];
		$familyAnnualIncome= $_POST['salary'];
		$UIDnumber= $_POST['aadhaar'];
		$Correspondencecity= $_POST['ccity'];
		$Correspondencestreet = $_POST['cstreet'];
		$Correspondencestate = $_POST['cstate'];
 		$Correspondencedistrict= $_POST['cdistrict'];
		$Correspondencepincode= $_POST['cpincode'];
		$Permanentcity = $_POST['pcity'];
		$Permanentstreet= $_POST['pstreet'];
		$Permanentstate = $_POST['pstate'];
		$Permanentdistrict= $_POST['pdistrict'];
		$Permanentpincode= $_POST['ppincode'];
		$AccountNumber= $_POST['bankacc'];
		$IfscCode= $_POST['IFSC'];
		$Bankname= $_POST['BANKNAME'];
		$schoolname= $_POST['schoolName'];
		$Boardname= $_POST['Board'];
		$subject= $_POST['subject'];
		$YearOfPassing= $_POST['yop'];
		$TypeOfMarks = $_POST['typeofmarks'];
		$Totalmarks= $_POST['totalmarks'];
		$Obtainmarks= $_POST['obtainmarks'];
		$PercentageOfObtainmarks= $_POST['percentage'];


		

			$Query= "UPDATE `record` SET `FromYear`='$fromYear',`ToYear`='$toYear',`AdmissionNo1`='$admissionDate',`AdmissionNo2`='$AdDateone',`RegNo`='$regNo',`JeepRank`='$Rank',`JeepRollNo`='$Roll',`Course`='$Courses',`Semester`='$semester',`TypeofEntry`='$Entry',`TFW`='$TFW',`First Name`='$firstName',`Middle Name`='$middleName',`Last Name`='$lastName',`Name in Hindi`='$NameinHindi',`Father Name`='$fathername',`Father Name in Hindi`='$fathernameinHindi',`Mother Name`='$mothername',`Mother Name in Hindi`='$mothernameinHindi',`Parents Mobile No`='$parentsMobile',`Date Of Birth`='$DOB',`Email`='$Email',`Land Line No`='$LandLineNumber',`Gender`='$gender',`Category`='$category',`Marital Status`='$maritalStatus',`Blood Group`='$bloodGroup',`Type of Address`='$typeofAddress',`Physical Handicapped`='$PhysicalDisability',`Physical Handicapped Type`='$PhysicalDisability1',`Identification Mark`='$Identification',`Employment Detail`='$employmentDetail',`Family Annual Income`='$familyAnnualIncome',`Aadhaar No`='$UIDnumber',`Correspondence City`='$Correspondencecity',`Correspondence Street`='$Correspondencestreet',`Correspondence State`='$Correspondencestate',`Correspondence District`='$Correspondencedistrict',`Correspondence pincode`='$Correspondencepincode',`Permanent City`='$Permanentcity',`Permanent Street`='$Permanentstreet',`Permanent State`='$Permanentstate',`Permanent District`='$Permanentdistrict',`Permanent Pincode`='$Permanentpincode',`Bank Account Number`='$AccountNumber',`IFSC Code`='$IfscCode',`Bank Name`='$Bankname',`School Name`='$schoolname',`Board`='$Boardname',`Subject`='$subject',`Year of Passing`='$YearOfPassing',`Type of Mark`='$TypeOfMarks',`Total Marks`='$Totalmarks',`Obtain Marks or CGPA`='$Obtainmarks',`Percentage`='$PercentageOfObtainmarks' WHERE `AdmissionNo1`='$admissionDate' AND `AdmissionNo2`='$AdDateone' AND `RegNo`='$regNo'"; 
			if(mysqli_query($db,$Query))
		 	{
				//header('location:form.php');
				echo "<script>
				
					if(confirm('Your information is updated')){
						location.replace('add2.php');
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
