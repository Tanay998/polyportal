<?php
    include('conn.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ESTC POLYTECHNIC</title>
    <link rel="stylesheet" href="css/tabstyle.css" />
    <link rel="stylesheet" href="css/boxstyle.css" />
    <style>
         tr:nth-of-type(even) {
background-color: transparent!important;
}
table
{
    border-collapse: collapse;
    border-spacing: 1em;
    
}
    </style>
  </head>
  <body>
  <?php include('header.php') ?>

    
        <div class="container-fluid"><!--- container fluid start --->
        <form method="get">
        </div><!--- container fluid end --->

        <div class="container mt-4 rounded p-3 mb-5" style="box-shadow:4px 9px 25px 4px grey;"><!--- container start --->
               <a href="yearshow.php" class="btn btn-primary" id="back2">BACK</a> <a href="#" onclick="printpage2()" style="text-decoration:none;"><i class="fas fa-print" style="float:right;"></i></a><br/> <br/>
               <p class="h5 text-center">प्रवेश हेतु आवेदन पत्र 20
                        <input type="text" name="t1" id="t1" style="width:45px;border:none;border-radius:4px;" disabled
                            <?php 
                                
                                $pname=$_GET['pname'];
                                echo $pname;
                                $pyear=$_GET['pyear'];
                                echo $pyear;
                                if($pyear=="1"){
                                $query = "SELECT * FROM `record1` WHERE `First Name`='$pname' AND `Year`='$pyear'";
                                $q=mysqli_query($db,$query) or die(mysqli_error($db));
                                while($result=mysqli_fetch_array($q)){
                            ?>
                            value="<?php echo $result['FromYear']?>">
                           से <span class="ml-3">20 </span>
                        <input type="text" name="t2" id="t2" style="width:45px;border:none;border-radius:4px;" disabled
                                value="<?php echo $result['ToYear']?>">
                    </p>
               <table class="table-borderless table-sm table-responsive">
                   <tbody class="table-borderless">
                       <tr class="table-bordered" style="border:2px solid #060606;">
                        <td style="width:15%;border:2px solid #060606;"><label for="Jeep" class="mt-2 text-dark" style="font-size:14px;">जीप रैंक (प्रथम वर्ष  के छात्र / छात्रा हेतु )<br/>JEEP RANK (FIRST YEAR / FOR  CANDIDATE)</label></td>
                        <td style="width:10%;border:2px solid #060606;"><?php echo $result['JeepRank'];    ?></td>
                        <td style="width:18%;border:2px solid #060606;"> <label for="Admission" class="text-dark">Admission No - ESTC / POLY /</label><?php echo $result['AdmissionNo1']; ?>/ <?php echo $result['AdmissionNo2']; ?> / <?php echo $result['RegNo']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td style="width:15%;border:2px solid #060606;"><label for="Roll" class="mt-2 text-dark" style="font-size:14px;">जीप अनुक्रमांक  (प्रथम वर्ष  के छात्र / छात्रा हेतु )<br/>JEEP ROLL (FIRST YEAR / FOR  CANDIDATE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['JeepRollNo']; ?></td>
                           <?php 
                            $pname=$_GET['pname'];
                            $query1="SELECT * FROM `record` WHERE `First Name`='$pname'";
                            $q1=mysqli_query($db,$query1) or die(mysqli_error($db));
                            while($result2=mysqli_fetch_array($q1)){
                           ?>
                           <td rowspan="3"style="text-align:left;border:2px solid #060606;"><img class="img-responsive ml-5" src="<?php echo $result2['Profile Picture'] ?>" width="150px" height="150px" alt="image not display"/></td>
                           <?php 
                            }
                           ?>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td style="width:15%;border:2px solid #060606;"><label for="course" class="mt-2 text-dark" style="font-size:14px;">पाठ्यक्रम जिसमे प्रवेश लेना है</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Course']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td style="width:15%;border:2px solid #060606;"><label for="semester" style="font-size:14px;" class="mt-2 text-dark">सेमेस्टर (SEMESTER) / वर्ष (YEAR)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Semester']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="typeadd" style="font-size:14px;" class="mt-2 text-dark">प्रवेश का प्रकार (Direct/Lateral)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['TypeofEntry']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="tfw" style="font-size:14px;" class="mt-2 text-dark">TFW</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['TFW']; ?></td>
                       </tr>

                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="typeadd" style="font-size:14px;" class="mt-2 text-dark">प्रवेश सत्र (ADMISSION SESSION)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Year']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="firstname" style="font-size:14px;">First Name</label></td>
                           <td style="text-transform:uppercase;border:2px solid #060606;"><?php echo $result['First Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="middlename" style="font-size:14px;">Middle Name</label></td>
                           <td style="text-transform:uppercase;border:2px solid #060606;"><?php echo $result['Middle Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="lastname" style="font-size:14px;">Last Name</label></td>
                           <td style="text-transfomr:uppercase;border:2px solid #060606;"><?php echo $result['Last Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="hindiname" style="font-size:14px;" class="text-dark">नाम हिंदी में</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Name in Hindi']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="fathername" style="font-size:14px;" class="text-dark">Father's Name</label></td>
                           <td style="text-transform:uppercase;border:2px solid #060606;"><?php echo $result['Father Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="hindiname1" style="font-size:14px;" class="text-dark">पिता का नाम (हिंदी में)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Father Name in Hindi']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="mothername" style="font-size:14px;" class="text-dark">Mother's Name</label></td>
                           <td sty="text-transform:uppercase;"><?php echo $result['Mother Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="hindiname2" style="font-size:14px;" class="text-dark">माता का नाम (हिंदी में )</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Mother Name in Hindi']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="ParentsMobileNo" style="font-size:14px;" class="text-dark">माता / पिता का मोबाइल नंबर  (PARENTS MOBILE NUMBER)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Parents Mobile No']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="DOB" style="font-size:14px;" class="text-dark">जन्मतिथि (DOB)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Date Of Birth']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="email" style="font-size:14px;" class="text-dark">ई-मेल (E-mail)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Email']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="phone" style="font-size:14px;" class="text-dark">छात्र / छात्रा का मोबाइल नंबर  (CANDIDATE'S MOBILE NUMBER)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Land Line No']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="gender" style="font-size:14px;" class="text-dark">लिंग (GENDER)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Gender']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="category" style="font-size:14px;" class="text-dark">जाती (CATEGORY)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Category']; ?></td>
                       </tr>
                       <tr class="table-bordered"style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="marital" style="font-size:14px;" class="text-dark">वैवाहिक स्थिति (MARITAL STATUS)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Marital Status']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="blood" class="text-dark">ब्लड ग्रुप (BLOOD GROUP)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Blood Group']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="add1" style="font-size:14px;" class="text-dark">पता का प्रकार (ADDRESS TYPE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Type of Address']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="diva" style="font-size:14px;" class="text-dark">क्या आप दिव्यांग हैं (ARE YOU PHYSICAL HANDICAPED)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Physical Handicapped']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="div1" style="font-size:14px;" class="text-dark">यदि हाँ तो दिव्यांगता का प्रकार (IF YES PLEASE SPECIFY)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Physical Handicapped Type']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="IDE" style="font-size:14px;" class="text-dark">पहचान चिन्ह (IDENTIFICATION MARK)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Identification Mark']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="emp" style="font-size:14px;" class="text-dark">रोजगार का विवरण (EMPLOYMENT DETAIL)</label></td>
                           <td><?php echo $result['Employment Detail']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="salary" style="font-size:14px;" class="text-dark">परिवार की  वार्षिक आय (FAMILY ANNUAL INCOME)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Family Annual Income']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="aadhaar" style="font-size:14px;" class="text-dark">आधार संख्या (UID (AADHAAR) NO.)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Aadhaar No']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                       <td colspan="3" style="padding:10px 5px 10px;border:2px solid #060606;"><p style="font-size:16px;" class="text-center bg-primary p-2 rounded text-white">पत्राचार का पता (CORRESPONDENCE ADDRESS)</p></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="ccity" style="font-size:14px;" class="text-dark">शहर (CITY) / गांव (VILLAGE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence City']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="cstreet" style="font-size:14px;" class="text-dark">गली (STREET)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence Street']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="cstate" style="font-size:14px;" class="text-dark">राज्य (STATE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence State']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="cdistrict" style="font-size:14px;" class="text-dark">जिला (District)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence District']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="cpincode" style="font-size:14px;" class="text-dark">पिनकोड (Pincode)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence pincode']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                         <td colspan="3" style="padding:10px 5px 10px;border:2px solid #060606;"><p style="font-size:16px;" class="text-center bg-primary p-2 rounded text-white">पूर्ण स्थाई पता (PERMANENT ADDRESS)</p></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="pcity" style="font-size:14px;" class="text-dark">शहर (CITY) / गांव (VILLAGE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent City']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="pstreet" style="font-size:14px;" class="text-dark">गली (STREET)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent Street']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="pstate" style="font-size:14px;" class="text-dark">राज्य (STATE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent State']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="cdistrict" style="font-size:14px;" class="text-dark">जिला (District)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent District']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="cpincode" style="font-size:14px;" class="text-dark">पिनकोड (Pincode)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent Pincode']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                         <td colspan="3" style="padding:10px 5px 10px;border:2px solid #060606;"> <p style="font-size:16px;" class="text-center bg-primary p-2 rounded text-white">बैंक खाते की जानकारी</p></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="bankacc" style="font-size:14px;" class="text-dark">खाता संख्या (ACCOUNT NUMBER)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Bank Account Number']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="IFSC" style="font-size:14px;" class="text-dark">आई0 एफ0 एस0 सी0 कोड (IFSC CODE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['IFSC Code']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="BankName" style="font-size:14px;" class="text-dark">बैंक का नाम (BANK NAME)</label> </td>
                           <td style="border:2px solid #060606;"><?php echo $result['Bank Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                         <td colspan="3" style="padding:10px 5px 10px;border:2px solid #060606;"><p style="font-size:16px;" class="text-center bg-primary p-2 rounded text-white">शैक्षिक योग्यता (EDUCATIONAL QUALIFICATIONS)</p></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="schoolName" style="font-size:14px;" class="text-dark">स्कूल का नाम  (NAME OF SCHOOL)</label> </td>
                           <td style="border:2px solid #060606;"><?php echo $result['School Name']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="Board" style="font-size:14px;" class="text-dark">बोर्ड (BOARD)</label>  </td>
                           <td style="border:2px solid #060606;"><?php echo $result['Board']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="Board" style="font-size:14px;" class="text-dark">विषय (SUBJECT)</label>   </td>
                           <td style="border:2px solid #060606;"><?php echo $result['Subject']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="yop" style="font-size:14px;" class="text-dark">उत्तीर्ण वर्ष  (YEAR OF PASSING)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Year of Passing']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="totalmarks" style="font-size:14px;"class="text-dark">कुल अंक  (TOTAL MARKS)</label></td>
                           <td><?php echo $result['Total Marks']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="obtainmarks" style="font-size:14px;"class="text-dark">कुल प्राप्त अंक / सी. जी. पी. ए  (OBTAIN MARKS/CGPA)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Obtain Marks or CGPA']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="percentage" style="font-size:14px;" class="text-dark">प्रतिशत(PERCENTAGE/CGPA)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Percentage']; ?></td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td colspan="3" style="border:2px solid #060606;"><p style="font-size:16px;text-align:center;font-weight:bold;" class="text-dark">छात्र / छात्रा का घोषणा पत्र (CANDIDATE'S DECLARATION LETTER)</p><br/>
                            <label for="declaration" class="h6" style="text-align:justify;font-size:14px;">मैं घोषणा करता / करती हूँ  कि संस्था में पूर्ण अनुशासनबद्ध होकर एवं गुरुजनों का समुचित आदर करते हुए अध्ययन करूँगा / करुँगी। अनुशासनहीनता के किसी  भी क्रिया - कलाप में सम्मिलित होने पर संस्था द्वारा मुझे दण्डित किया जा सकता है। आवेदन पत्र में मेरे द्वारा भरा गया विवरण सत्य है, असत्य पाये जाने पर मेरा प्रवेश निरस्त्र कर दिया जाये। <br />
                            I declare that, I will study in the Institution with complete discipline closed and due to respect to the teachers. I can be punished by the Institution for being awarded in any activity of indiscipline. The details filled by me in the application form are true, if found to be untrue, my entry should be canceled.
                           </label></td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td colspan="1" style="border:2px solid #060606;"><label for="date" style="font-size:14px;">दिनाँक (DATE):</label> <?php echo $result['DeclarationDate'];  ?></td>
                            <?php 
                            $pname=$_GET['pname'];
                            $query1="SELECT * FROM `record` WHERE `First Name`='$pname'";
                            $q1=mysqli_query($db,$query1) or die(mysqli_error($db));
                            while($result2=mysqli_fetch_array($q1)){
                           ?>
                            <td colspan="2" style="border:2px solid #060606;"><label for="signature" style="font-size:14px;">छात्र / छात्रा के हस्ताक्षर <br/> (CANDIDATE'S SIGNATURE)</label>
                            <img class="img-responsive ml-3" src="<?php echo $result2['CandidateSignature'] ?>" width="150px" height="80px" alt="image not display"/>
                            <?php 
                            }
                            ?>
                            </td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td colspan="3" style="border:2px solid #060606;">
                            <fieldset>
                            <label for="decone" style="font-size:14px;">छात्र / छात्रा </label><label id="para2" style="font-size:14px;font-weight:bold;" class="ml-2"><?php echo $result['Name in Hindi'] ?></label> 
                            <label for="dectwo" style="font-size:14px;" class="ml-2"> पुत्र / पुत्री श्री  </label><label id="para3" style="font-size:14px;font-weight:bold;" class="ml-2"><?php echo $result['Father Name in Hindi'] ?></label>  
                            <label for="decthree" style="font-size:14px;">की प्रथम / द्वितीय / अंतिम वर्ष  </label><label id="para4" style="font-size:14px;font-weight:bold;" class="ml-2"><span class="ml-2" style="font-size:14px;font-weight:bold;"><?php echo $result['Course'] ?></span> </label>
                            <label for="decfour" style="font-size:14px;">में प्रवेश की अनुमति  हेतु  संस्तुति प्रदान की जाती है। </label>
                            </fieldset>
                            </td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td colspan="3" style="border:2px solid #060606;">
                                <filedset>
                                <label for="dec1" style="font-size:14px;">Candidate</label><label id="para5" class="ml-2" style="font-size:14px;font-weight:bold;"><?php echo $result['First Name'] ?><span class="ml-1" style="font-size:14px;font-weight:bold;"><?php echo $result['Middle Name'] ?></span><span class="ml-1" style="font-size:14px;font-weight:bold;"><?php echo $result['Last Name'] ?></span></label>
                                <label for="dec2">Son/Daughter Shri</label><label id="para6" style="font-size:14px;font-weight:bold;" class="ml-2"><?php echo $result['Father Name'] ?></label>
                                <label for="dec3">of First / Second / Final Year</label><label id="para7" class="ml-2" style="font-size:14px;font-weight:bold;"><span class="ml-2" style="font-size:14px;font-weight:bold;"><?php echo $result['Course'] ?></span></label>
                                <label for="dec4" style="font-size:14px;">Recommendation for permission to enter.</label>
                                </fieldset>    	    
                            </td>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                            <td width="15%" style="border:2px solid #060606;"><label for="approval" class="mt-4" style="font-size:14px;">संस्तुति के आधार पर स्वीकृत <br />(APPROVED ON RECOMMENDATION)</label></td>
                            <td style="border:2px solid #060606;"><label for="principal" class="mt-4" style="font-size:14px;">प्रधानाचार्य  <br />(PRINCIPAL)</label></td>
                            <td style="border:2px solid #060606;"><label for="HOD" class="mt-4" style="font-size:14px;">विभागाध्यक्ष  <br />(HEAD OF DEPARTMENT)</label></td>
                        </tr>
                   </tbody>
               </table>   
               <?php

                                    }
                                    }  ////// if block end /////////////////
                                    else if($pyear=="2")
                                    {

                                        $query = "SELECT * FROM `record2` WHERE `First Name`='$pname' AND `Year`='$pyear'";
                                $q=mysqli_query($db,$query) or die(mysqli_error($db));
                                while($result=mysqli_fetch_array($q)){
                                ?>







        

value="<?php echo $result['FromYear']?>">
                           से 20 
                        <input type="text" name="t2" id="t2" style="width:45px;border:none;border-radius:4px;"
                                value="<?php echo $result['ToYear']?>">
                    </p>
               <table class="table-borderless table-sm table-responsive">
                   <tbody class="table-borderless">
                       <tr class="table-bordered" style="border:2px solid #060606;">
                        <td style="width:15%;border:2px solid #060606;"><label for="Jeep" class="mt-2 text-dark" style="font-size:14px;">जीप रैंक (प्रथम वर्ष  के छात्र / छात्रा हेतु )<br/>JEEP RANK (FIRST YEAR / FOR  CANDIDATE)</label></td>
                        <td style="width:10%;border:2px solid #060606;"><?php echo $result['JeepRank'];    ?></td>
                        <td style="width:18%;border:2px solid #060606;"> <label for="Admission" class="text-dark">Admission No - ESTC / POLY /</label><?php echo $result['AdmissionNo1']; ?>/ <?php echo $result['AdmissionNo2']; ?> / <?php echo $result['RegNo']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td style="width:15%;border:2px solid #060606;"><label for="Roll" class="mt-2 text-dark" style="font-size:14px;">जीप अनुक्रमांक  (प्रथम वर्ष  के छात्र / छात्रा हेतु )<br/>JEEP ROLL (FIRST YEAR / FOR  CANDIDATE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['JeepRollNo']; ?></td>
                           <?php 
                            $pname=$_GET['pname'];
                            $query1="SELECT * FROM `record` WHERE `First Name`='$pname'";
                            $q1=mysqli_query($db,$query1) or die(mysqli_error($db));
                            while($result2=mysqli_fetch_array($q1)){
                           ?>
                           <td rowspan="3"style="text-align:left;border:2px solid #060606;"><img class="img-responsive ml-5" src="<?php echo $result2['Profile Picture'] ?>" width="150px" height="150px" alt="image not display"/></td>
                           <?php 
                            }
                           ?>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td style="width:15%;border:2px solid #060606;"><label for="course" class="mt-2 text-dark" style="font-size:14px;">पाठ्यक्रम जिसमे प्रवेश लेना है</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Course']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td style="width:15%;border:2px solid #060606;"><label for="semester" style="font-size:14px;" class="mt-2 text-dark">सेमेस्टर (SEMESTER) / वर्ष (YEAR)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Semester']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="typeadd" style="font-size:14px;" class="mt-2 text-dark">प्रवेश का प्रकार (Direct/Lateral)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['TypeofEntry']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="tfw" style="font-size:14px;" class="mt-2 text-dark">TFW</label></td>
                           <td><?php echo $result['TFW']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="typeadd" style="font-size:14px;" class="mt-2 text-dark">प्रवेश सत्र (ADMISSION SESSION)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Year']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="firstname" style="font-size:14px;">First Name</label></td>
                           <td style="text-transform:uppercase;border:2px solid #060606;"><?php echo $result['First Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="middlename" style="font-size:14px;">Middle Name</label></td>
                           <td style="text-transform:uppercase;border:2px solid #060606;"><?php echo $result['Middle Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="lastname" style="font-size:14px;">Last Name</label></td>
                           <td style="text-transform:uppercase;border:2px solid #060606;"><?php echo $result['Last Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="hindiname" style="font-size:14px;" class="text-dark">नाम हिंदी में</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Name in Hindi']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="fathername" style="font-size:14px;" class="text-dark">Father's Name</label></td>
                           <td style="text-transform:uppercase;border:2px solid #060606;"><?php echo $result['Father Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="hindiname1" style="font-size:14px;" class="text-dark">पिता का नाम (हिंदी में)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Father Name in Hindi']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="mothername" style="font-size:14px;" class="text-dark">Mother's Name</label></td>
                           <td style="text-transform:uppercase;border:2px solid #060606;"><?php echo $result['Mother Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="hindiname2" style="font-size:14px;" class="text-dark">माता का नाम (हिंदी में )</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Mother Name in Hindi']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="ParentsMobileNo" style="font-size:14px;" class="text-dark">माता / पिता का मोबाइल नंबर  (PARENTS MOBILE NUMBER)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Parents Mobile No']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="DOB" style="font-size:14px;" class="text-dark">जन्मतिथि (DOB)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Date Of Birth']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="email" style="font-size:14px;" class="text-dark">ई-मेल (E-mail)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Email']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="phone" style="font-size:14px;" class="text-dark">छात्र / छात्रा का मोबाइल नंबर  (CANDIDATE'S MOBILE NUMBER)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Land Line No']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="gender" style="font-size:14px;" class="text-dark">लिंग (GENDER)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Gender']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="category" style="font-size:14px;" class="text-dark">जाती (CATEGORY)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Category']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="marital" style="font-size:14px;" class="text-dark">वैवाहिक स्थिति (MARITAL STATUS)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Marital Status']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="blood" class="text-dark">ब्लड ग्रुप (BLOOD GROUP)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Blood Group']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="add1" style="font-size:14px;" class="text-dark">पता का प्रकार (ADDRESS TYPE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Type of Address']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="diva" style="font-size:14px;" class="text-dark">क्या आप दिव्यांग हैं (ARE YOU PHYSICAL HANDICAPED)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Physical Handicapped']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="div1" style="font-size:14px;" class="text-dark">यदि हाँ तो दिव्यांगता का प्रकार (IF YES PLEASE SPECIFY)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Physical Handicapped Type']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="IDE" style="font-size:14px;" class="text-dark">पहचान चिन्ह (IDENTIFICATION MARK)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Identification Mark']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="emp" style="font-size:14px;" class="text-dark">रोजगार का विवरण (EMPLOYMENT DETAIL)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Employment Detail']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="salary" style="font-size:14px;" class="text-dark">परिवार की  वार्षिक आय (FAMILY ANNUAL INCOME)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Family Annual Income']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="aadhaar" style="font-size:14px;" class="text-dark">आधार संख्या (UID (AADHAAR) NO.)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Aadhaar No']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                       <td colspan="3" style="padding:10px 5px 10px;border:2px solid #060606;"><p style="font-size:16px;" class="text-center bg-primary p-2 rounded text-white">पत्राचार का पता (CORRESPONDENCE ADDRESS)</p></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="ccity" style="font-size:14px;" class="text-dark">शहर (CITY) / गांव (VILLAGE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence City']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="cstreet" style="font-size:14px;" class="text-dark">गली (STREET)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence Street']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="cstate" style="font-size:14px;" class="text-dark">राज्य (STATE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence State']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="cdistrict" style="font-size:14px;" class="text-dark">जिला (District)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence District']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="cpincode" style="font-size:14px;" class="text-dark">पिनकोड (Pincode)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence pincode']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                         <td colspan="3" style="padding:10px 5px 10px;border:2px solid #060606;"><p style="font-size:16px;" class="text-center bg-primary p-2 rounded text-white">पूर्ण स्थाई पता (PERMANENT ADDRESS)</p></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="pcity" style="font-size:14px;" class="text-dark">शहर (CITY) / गांव (VILLAGE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent City']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="pstreet" style="font-size:14px;" class="text-dark">गली (STREET)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent Street']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="pstate" style="font-size:14px;" class="text-dark">राज्य (STATE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent State']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="cdistrict" style="font-size:14px;" class="text-dark">जिला (District)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent District']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="cpincode" style="font-size:14px;" class="text-dark">पिनकोड (Pincode)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent Pincode']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                         <td colspan="3" style="padding:10px 5px 10px;border:2px solid #060606;"> <p style="font-size:16px;" class="text-center bg-primary p-2 rounded text-white">बैंक खाते की जानकारी</p></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="bankacc" style="font-size:14px;" class="text-dark">खाता संख्या (ACCOUNT NUMBER)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Bank Account Number']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="IFSC" style="font-size:14px;" class="text-dark">आई0 एफ0 एस0 सी0 कोड (IFSC CODE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['IFSC Code']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="BankName" style="font-size:14px;" class="text-dark">बैंक का नाम (BANK NAME)</label> </td>
                           <td style="border:2px solid #060606;"><?php echo $result['Bank Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                         <td colspan="3" style="padding:10px 5px 10px;border:2px solid #060606;"><p style="font-size:16px;" class="text-center bg-primary p-2 rounded text-white">शैक्षिक योग्यता (EDUCATIONAL QUALIFICATIONS)</p></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="schoolName" style="font-size:14px;" class="text-dark">स्कूल का नाम  (NAME OF SCHOOL)</label> </td>
                           <td style="border:2px solid #060606;"><?php echo $result['School Name']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="Board" style="font-size:14px;" class="text-dark">बोर्ड (BOARD)</label>  </td>
                           <td style="border:2px solid #060606;"><?php echo $result['Board']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="Board" style="font-size:14px;" class="text-dark">विषय (SUBJECT)</label>   </td>
                           <td style="border:2px solid #060606;"><?php echo $result['Subject']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="yop" style="font-size:14px;" class="text-dark">उत्तीर्ण वर्ष  (YEAR OF PASSING)</label></td>
                           <td><?php echo $result['Year of Passing']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="totalmarks" style="font-size:14px;"class="text-dark">कुल अंक  (TOTAL MARKS)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Total Marks']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="obtainmarks" style="font-size:14px;"class="text-dark">कुल प्राप्त अंक / सी. जी. पी. ए  (OBTAIN MARKS/CGPA)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Obtain Marks or CGPA']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="percentage" style="font-size:14px;" class="text-dark">प्रतिशत(PERCENTAGE/CGPA)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Percentage']; ?></td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td colspan="3" style="border:2px solid #060606;"><p style="font-size:16px;text-align:center;font-weight:bold;" class="text-dark">छात्र / छात्रा का घोषणा पत्र (CANDIDATE'S DECLARATION LETTER)</p><br/>
                            <label for="declaration" class="h6" style="text-align:justify;font-size:14px;">मैं घोषणा करता / करती हूँ  कि संस्था में पूर्ण अनुशासनबद्ध होकर एवं गुरुजनों का समुचित आदर करते हुए अध्ययन करूँगा / करुँगी। अनुशासनहीनता के किसी  भी क्रिया - कलाप में सम्मिलित होने पर संस्था द्वारा मुझे दण्डित किया जा सकता है। आवेदन पत्र में मेरे द्वारा भरा गया विवरण सत्य है, असत्य पाये जाने पर मेरा प्रवेश निरस्त्र कर दिया जाये। <br />
                            I declare that, I will study in the Institution with complete discipline closed and due to respect to the teachers. I can be punished by the Institution for being awarded in any activity of indiscipline. The details filled by me in the application form are true, if found to be untrue, my entry should be canceled.
                           </label></td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td colspan="1" style="border:2px solid #060606;"><label for="date" style="font-size:14px;">दिनाँक (DATE):</label> <?php echo $result['DeclarationDate'];  ?></td>
                            
                            <td colspan="2" style="border:2px solid #060606;"><label for="signature" style="font-size:14px;">छात्र / छात्रा के हस्ताक्षर <br/> (CANDIDATE'S SIGNATURE)</label>
                            <?php 
                            $pname=$_GET['pname'];
                            $query1="SELECT * FROM `record` WHERE `First Name`='$pname'";
                            $q1=mysqli_query($db,$query1) or die(mysqli_error($db));
                            while($result2=mysqli_fetch_array($q1)){
                           ?>
                            <img class="img-responsive ml-3" src="<?php echo $result2['CandidateSignature'] ?>" width="150px" height="80px" alt="image not display"/>
                            <?php
                            }
                            ?>
                            </td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td colspan="3" style="border:2px solid #060606;">
                            <fieldset>
                            <label for="decone" style="font-size:14px;">छात्र / छात्रा </label><label id="para2" style="font-size:14px;font-weight:bold;" class="ml-2"><?php echo $result['Name in Hindi'] ?></label> 
                            <label for="dectwo" style="font-size:14px;" class="ml-2"> पुत्र / पुत्री श्री  </label><label id="para3" style="font-size:14px;font-weight:bold;" class="ml-2"><?php echo $result['Father Name in Hindi'] ?></label>  
                            <label for="decthree" style="font-size:14px;">की प्रथम / द्वितीय / अंतिम वर्ष  </label><label id="para4" style="font-size:14px;font-weight:bold;" class="ml-2"><span class="ml-2" style="font-size:14px;font-weight:bold;"><?php echo $result['Course'] ?></span> </label>
                            <label for="decfour" style="font-size:14px;">में प्रवेश की अनुमति  हेतु  संस्तुति प्रदान की जाती है। </label>
                            </fieldset>
                            </td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td colspan="3">
                                <filedset>
                                <label for="dec1" style="font-size:14px;">Candidate</label><label id="para5" class="ml-2" style="font-size:14px;font-weight:bold;"><?php echo $result['First Name'] ?><span class="ml-1" style="font-size:14px;font-weight:bold;"><?php echo $result['Middle Name'] ?></span><span class="ml-1" style="font-size:14px;font-weight:bold;"><?php echo $result['Last Name'] ?></span></label>
                                <label for="dec2">Son/Daughter Shri</label><label id="para6" style="font-size:14px;font-weight:bold;" class="ml-2"><?php echo $result['Father Name'] ?></label>
                                <label for="dec3">of First / Second / Final Year</label><label id="para7" class="ml-2" style="font-size:14px;font-weight:bold;"><span class="ml-2" style="font-size:14px;font-weight:bold;"><?php echo $result['Course'] ?></span></label>
                                <label for="dec4" style="font-size:14px;">Recommendation for permission to enter.</label>
                                </fieldset>    	    
                            </td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                            <td width="15%" style="border:2px solid #060606;"><label for="approval" class="mt-4" style="font-size:14px;">संस्तुति के आधार पर स्वीकृत <br />(APPROVED ON RECOMMENDATION)</label></td>
                            <td style="border:2px solid #060606;"><label for="principal" class="mt-4" style="font-size:14px;">प्रधानाचार्य  <br />(PRINCIPAL)</label></td>
                            <td style="border:2px solid #060606;"><label for="HOD" class="mt-4" style="font-size:14px;">विभागाध्यक्ष  <br />(HEAD OF DEPARTMENT)</label></td>
                        </tr>
                   </tbody>
               </table>   
               <?php

                                    }
                                    }  ////// if block end /////////////////
                                    else if($pyear=="3")
                                    {

                                        $query = "SELECT * FROM `record3` WHERE `First Name`='$pname' AND `Year`='$pyear'";
                                $q=mysqli_query($db,$query) or die(mysqli_error($db));
                                while($result=mysqli_fetch_array($q)){

                ?>









value="<?php echo $result['FromYear']?>">
                           से 20 
                        <input type="text" name="t2" id="t2" style="width:45px;border:none;border-radius:4px;"
                                value="<?php echo $result['ToYear']?>">
                    </p>
               <table class="table-borderless table-sm table-responsive">
                   <tbody class="table-borderless">
                       <tr class="table-bordered" style="border:2px solid #060606;">
                        <td style="width:15%;border:2px solid #060606;"><label for="Jeep" class="mt-2 text-dark" style="font-size:14px;">जीप रैंक (प्रथम वर्ष  के छात्र / छात्रा हेतु )<br/>JEEP RANK (FIRST YEAR / FOR  CANDIDATE)</label></td>
                        <td style="width:10%;border:2px solid #060606;"><?php echo $result['JeepRank'];    ?></td>
                        <td style="width:18%;border:2px solid #060606;"> <label for="Admission" class="text-dark">Admission No - ESTC / POLY /</label><?php echo $result['AdmissionNo1']; ?>/ <?php echo $result['AdmissionNo2']; ?> / <?php echo $result['RegNo']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td style="width:15%;border:2px solid #060606;"><label for="Roll" class="mt-2 text-dark" style="font-size:14px;">जीप अनुक्रमांक  (प्रथम वर्ष  के छात्र / छात्रा हेतु )<br/>JEEP ROLL (FIRST YEAR / FOR  CANDIDATE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['JeepRollNo']; ?></td>
                           <?php 
                            $pname=$_GET['pname'];
                            $query1="SELECT * FROM `record` WHERE `First Name`='$pname'";
                            $q1=mysqli_query($db,$query1) or die(mysqli_error($db));
                            while($result2=mysqli_fetch_array($q1)){
                           ?>
                           <td rowspan="3"style="text-align:left;border:2px solid #060606;"><img class="img-responsive ml-5" src="<?php echo $result2['Profile Picture'] ?>" width="150px" height="150px" alt="image not display"/></td>
                           <?php 
                            }
                           ?>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td style="width:15%;border:2px solid #060606;"><label for="course" class="mt-2 text-dark" style="font-size:14px;">पाठ्यक्रम जिसमे प्रवेश लेना है</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Course']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td style="width:15%;border:2px solid #060606;"><label for="semester" style="font-size:14px;" class="mt-2 text-dark">सेमेस्टर (SEMESTER) / वर्ष (YEAR)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Semester']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="typeadd" style="font-size:14px;" class="mt-2 text-dark">प्रवेश का प्रकार (Direct/Lateral)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['TypeofEntry']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="tfw" style="font-size:14px;" class="mt-2 text-dark">TFW</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['TFW']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="typeadd" style="font-size:14px;" class="mt-2 text-dark">प्रवेश सत्र (ADMISSION SESSION)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Year']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="firstname" style="font-size:14px;">First Name</label></td>
                           <td style="text-transform:uppercase;border:2px solid #060606;"><?php echo $result['First Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="middlename" style="font-size:14px;">Middle Name</label></td>
                           <td style="text-transform:uppercase;border:2px solid #060606;"><?php echo $result['Middle Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="lastname" style="font-size:14px;">Last Name</label></td>
                           <td style="text-transform:uppercase;border:2px solid #060606;"><?php echo $result['Last Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="hindiname" style="font-size:14px;" class="text-dark">नाम हिंदी में</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Name in Hindi']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="fathername" style="font-size:14px;" class="text-dark">Father's Name</label></td>
                           <td style="text-transform:uppercase;border:2px solid #060606;"><?php echo $result['Father Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="hindiname1" style="font-size:14px;" class="text-dark">पिता का नाम (हिंदी में)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Father Name in Hindi']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="mothername" style="font-size:14px;" class="text-dark">Mother's Name</label></td>
                           <td style="text-transform:uppercase;border:2px solid #060606;"><?php echo $result['Mother Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="hindiname2" style="font-size:14px;" class="text-dark">माता का नाम (हिंदी में )</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Mother Name in Hindi']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="ParentsMobileNo" style="font-size:14px;" class="text-dark">माता / पिता का मोबाइल नंबर  (PARENTS MOBILE NUMBER)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Parents Mobile No']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="DOB" style="font-size:14px;" class="text-dark">जन्मतिथि (DOB)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Date Of Birth']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="email" style="font-size:14px;" class="text-dark">ई-मेल (E-mail)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Email']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="phone" style="font-size:14px;" class="text-dark">छात्र / छात्रा का मोबाइल नंबर  (CANDIDATE'S MOBILE NUMBER)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Land Line No']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="gender" style="font-size:14px;" class="text-dark">लिंग (GENDER)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Gender']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="category" style="font-size:14px;" class="text-dark">जाती (CATEGORY)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Category']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="marital" style="font-size:14px;" class="text-dark">वैवाहिक स्थिति (MARITAL STATUS)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Marital Status']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="blood" class="text-dark">ब्लड ग्रुप (BLOOD GROUP)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Blood Group']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="add1" style="font-size:14px;" class="text-dark">पता का प्रकार (ADDRESS TYPE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Type of Address']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="diva" style="font-size:14px;" class="text-dark">क्या आप दिव्यांग हैं (ARE YOU PHYSICAL HANDICAPED)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Physical Handicapped']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="div1" style="font-size:14px;" class="text-dark">यदि हाँ तो दिव्यांगता का प्रकार (IF YES PLEASE SPECIFY)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Physical Handicapped Type']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="IDE" style="font-size:14px;" class="text-dark">पहचान चिन्ह (IDENTIFICATION MARK)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Identification Mark']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="emp" style="font-size:14px;" class="text-dark">रोजगार का विवरण (EMPLOYMENT DETAIL)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Employment Detail']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="salary" style="font-size:14px;" class="text-dark">परिवार की  वार्षिक आय (FAMILY ANNUAL INCOME)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Family Annual Income']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="aadhaar" style="font-size:14px;" class="text-dark">आधार संख्या (UID (AADHAAR) NO.)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Aadhaar No']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                       <td colspan="3" style="padding:10px 5px 10px;border:2px solid #060606;"><p style="font-size:16px;" class="text-center bg-primary p-2 rounded text-white">पत्राचार का पता (CORRESPONDENCE ADDRESS)</p></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="ccity" style="font-size:14px;" class="text-dark">शहर (CITY) / गांव (VILLAGE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence City']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="cstreet" style="font-size:14px;" class="text-dark">गली (STREET)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence Street']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;">  <label for="cstate" style="font-size:14px;" class="text-dark">राज्य (STATE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence State']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="cdistrict" style="font-size:14px;" class="text-dark">जिला (District)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence District']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="cpincode" style="font-size:14px;" class="text-dark">पिनकोड (Pincode)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Correspondence pincode']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                         <td colspan="3" style="padding:10px 5px 10px;border:2px solid #060606;"><p style="font-size:16px;" class="text-center bg-primary p-2 rounded text-white">पूर्ण स्थाई पता (PERMANENT ADDRESS)</p></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="pcity" style="font-size:14px;" class="text-dark">शहर (CITY) / गांव (VILLAGE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent City']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="pstreet" style="font-size:14px;" class="text-dark">गली (STREET)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent Street']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="pstate" style="font-size:14px;" class="text-dark">राज्य (STATE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent State']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="cdistrict" style="font-size:14px;" class="text-dark">जिला (District)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent District']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="cpincode" style="font-size:14px;" class="text-dark">पिनकोड (Pincode)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Permanent Pincode']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                         <td colspan="3" style="padding:10px 5px 10px;border:2px solid #060606;"> <p style="font-size:16px;" class="text-center bg-primary p-2 rounded text-white">बैंक खाते की जानकारी</p></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="bankacc" style="font-size:14px;" class="text-dark">खाता संख्या (ACCOUNT NUMBER)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Bank Account Number']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="IFSC" style="font-size:14px;" class="text-dark">आई0 एफ0 एस0 सी0 कोड (IFSC CODE)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['IFSC Code']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"> <label for="BankName" style="font-size:14px;" class="text-dark">बैंक का नाम (BANK NAME)</label> </td>
                           <td style="border:2px solid #060606;"><?php echo $result['Bank Name']; ?></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                         <td colspan="3" style="padding:10px 5px 10px;border:2px solid #060606;"><p style="font-size:16px;" class="text-center bg-primary p-2 rounded text-white">शैक्षिक योग्यता (EDUCATIONAL QUALIFICATIONS)</p></td>
                       </tr>
                       <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="schoolName" style="font-size:14px;" class="text-dark">स्कूल का नाम  (NAME OF SCHOOL)</label> </td>
                           <td style="border:2px solid #060606;"><?php echo $result['School Name']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="Board" style="font-size:14px;" class="text-dark">बोर्ड (BOARD)</label>  </td>
                           <td style="border:2px solid #060606;"><?php echo $result['Board']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="Board" style="font-size:14px;" class="text-dark">विषय (SUBJECT)</label>   </td>
                           <td style="border:2px solid #060606;"><?php echo $result['Subject']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="yop" style="font-size:14px;" class="text-dark">उत्तीर्ण वर्ष  (YEAR OF PASSING)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Year of Passing']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="totalmarks" style="font-size:14px;"class="text-dark">कुल अंक  (TOTAL MARKS)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Total Marks']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="obtainmarks" style="font-size:14px;"class="text-dark">कुल प्राप्त अंक / सी. जी. पी. ए  (OBTAIN MARKS/CGPA)</label></td>
                           <td><?php echo $result['Obtain Marks or CGPA']; ?></td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                           <td colspan="2" style="border:2px solid #060606;"><label for="percentage" style="font-size:14px;" class="text-dark">प्रतिशत(PERCENTAGE/CGPA)</label></td>
                           <td style="border:2px solid #060606;"><?php echo $result['Percentage']; ?></td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td colspan="3" style="border:2px solid #060606;"><p style="font-size:16px;text-align:center;font-weight:bold;" class="text-dark">छात्र / छात्रा का घोषणा पत्र (CANDIDATE'S DECLARATION LETTER)</p><br/>
                            <label for="declaration" class="h6" style="text-align:justify;font-size:14px;">मैं घोषणा करता / करती हूँ  कि संस्था में पूर्ण अनुशासनबद्ध होकर एवं गुरुजनों का समुचित आदर करते हुए अध्ययन करूँगा / करुँगी। अनुशासनहीनता के किसी  भी क्रिया - कलाप में सम्मिलित होने पर संस्था द्वारा मुझे दण्डित किया जा सकता है। आवेदन पत्र में मेरे द्वारा भरा गया विवरण सत्य है, असत्य पाये जाने पर मेरा प्रवेश निरस्त्र कर दिया जाये। <br />
                            I declare that, I will study in the Institution with complete discipline closed and due to respect to the teachers. I can be punished by the Institution for being awarded in any activity of indiscipline. The details filled by me in the application form are true, if found to be untrue, my entry should be canceled.
                           </label></td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td colspan="1" style="border:2px solid #060606;"><label for="date" style="font-size:14px;">दिनाँक (DATE):</label> <?php echo $result['DeclarationDate'];  ?></td>
                            
                            <td colspan="2" style="border:2px solid #060606;"><label for="signature" style="font-size:14px;">छात्र / छात्रा के हस्ताक्षर <br/> (CANDIDATE'S SIGNATURE)</label>
                            <?php 
                            $pname=$_GET['pname'];
                            $query1="SELECT * FROM `record` WHERE `First Name`='$pname'";
                            $q1=mysqli_query($db,$query1) or die(mysqli_error($db));
                            while($result2=mysqli_fetch_array($q1)){
                           ?>
                            <img class="img-responsive ml-3" src="<?php echo $result2['CandidateSignature'] ?>" width="150px" height="80px" alt="image not display"/>
                            <?php 
                            }
                            ?>
                            </td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td colspan="3" style="border:2px solid #060606;">
                            <fieldset>
                            <label for="decone" style="font-size:14px;">छात्र / छात्रा </label><label id="para2" style="font-size:14px;font-weight:bold;" class="ml-2"><?php echo $result['Name in Hindi'] ?></label> 
                            <label for="dectwo" style="font-size:14px;" class="ml-2"> पुत्र / पुत्री श्री  </label><label id="para3" style="font-size:14px;font-weight:bold;" class="ml-2"><?php echo $result['Father Name in Hindi'] ?></label>  
                            <label for="decthree" style="font-size:14px;">की प्रथम / द्वितीय / अंतिम वर्ष  </label><label id="para4" style="font-size:14px;font-weight:bold;" class="ml-2"><span class="ml-2" style="font-size:14px;font-weight:bold;"><?php echo $result['Course'] ?></span> </label>
                            <label for="decfour" style="font-size:14px;">में प्रवेश की अनुमति  हेतु  संस्तुति प्रदान की जाती है। </label>
                            </fieldset>
                            </td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td colspan="3" style="border:2px solid #060606;">
                                <filedset>
                                <label for="dec1" style="font-size:14px;">Candidate</label><label id="para5" class="ml-2" style="font-size:14px;font-weight:bold;"><?php echo $result['First Name'] ?><span class="ml-1" style="font-size:14px;font-weight:bold;"><?php echo $result['Middle Name'] ?></span><span class="ml-1" style="font-size:14px;font-weight:bold;"><?php echo $result['Last Name'] ?></span></label>
                                <label for="dec2">Son/Daughter Shri</label><label id="para6" style="font-size:14px;font-weight:bold;" class="ml-2"><?php echo $result['Father Name'] ?></label>
                                <label for="dec3">of First / Second / Final Year</label><label id="para7" class="ml-2" style="font-size:14px;font-weight:bold;"><span class="ml-2" style="font-size:14px;font-weight:bold;"><?php echo $result['Course'] ?></span></label>
                                <label for="dec4" style="font-size:14px;">Recommendation for permission to enter.</label>
                                </fieldset>    	    
                            </td>
                        </tr>
                        <tr class="table-bordered" style="border:2px solid #060606;">
                            <td width="15%" style="border:2px solid #060606;"><label for="approval" class="mt-4" style="font-size:14px;">संस्तुति के आधार पर स्वीकृत <br />(APPROVED ON RECOMMENDATION)</label></td>
                            <td style="border:2px solid #060606;"><label for="principal" class="mt-4" style="font-size:14px;">प्रधानाचार्य  <br />(PRINCIPAL)</label></td>
                            <td style="border:2px solid #060606;"><label for="HOD" class="mt-4" style="font-size:14px;">विभागाध्यक्ष  <br />(HEAD OF DEPARTMENT)</label></td>
                        </tr>
                   </tbody>
               </table>   
               <?php

                                    }
                                    }  ////// if block end /////////////////
                ?>
        </div><!-----container end -->
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--<script src="js/tabscript.js"></script>-->
    <!--<script src="js/displaydata.js"></script>-->
    <script type="text/javascript" src="js/gtransapi.js"></script>  
    <script type="text/javascript" src="js/translator.js"></script>
    <script>
        function printpage2()
      {
        var BackButton = document.getElementById("back2");
        BackButton.style.visibility="hidden";
        window.print();
        BackButton.style.visibility="visible";
      }
    </script>
    <script>
        function open(){
            window.open(document.location);
        }
    </script>
  </body>

  <?php include('footer.php'); ?>
</html>