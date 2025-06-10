<?php
    include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ESTC Polytechnic</title>
    <link rel="stylesheet" href="css/tabstyle.css" />
    <link rel="stylesheet" href="css/boxstyle.css" />
    <style type="text/css">
        #myBtn {
	display: none;
	position: fixed;
	bottom: 20px;
	right: 30px;
	z-index: 99;
	font-size: 18px;
	border: none;
	outline: none;
	background-color: red;
	color: white;
	cursor: pointer;
	padding: 15px;
	border-radius: 4px;
  }
  #text{
      display:block;
      color:#000;
      font-weight:300;
      font-style: italic;
      padding:5px;
  }
    </style>
  </head>
  <body>
    
    </div><!----- container fluid end --->

   <?php include('header.php') ?>
        <div class="container-fluid"><!--- container fluid start --->
        <form action="otrinfo.php" name="form" id="form" method="post" enctype="multipart/form-data">
            
        </div><!--- container fluid end --->

        <div class="container mt-4 rounded p-3 mb-5" style="box-shadow:4px 9px 25px 10px grey;"><!--- container start --->
        
               <a href="index.php" class="btn btn-danger">BACK</a>     
              <div class="mt-2"></div>

               <div class="tab"><!-- tab menu start -->
                    <button type="button" class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Admission Details</button>
                    <button type="button" class="tablinks" onclick="openCity(event, 'Paris')">Personal Details I</button>
                    <button type="button" class="tablinks" onclick="openCity(event, 'Tokyo')">Personal Details II</button>
                    <button type="button" class="tablinks" onclick="openCity(event, 'America')">Personal Details III</button>
                    <button type="button" class="tablinks" onclick="openCity(event, 'Russia')">Education and Bank Details</button>
                    <button type="button" class="tablinks" onclick="openCity(event, 'India')">Upload Documents</button>
                </div><!-- tab menu end -->
                
                <div id="London" class="tabcontent"><!-- Admission Details Tab Start -->
                <div class="mt-2">
                <p class="h5 text-center">प्रवेश हेतु आवेदन पत्र 20
                        <select name="t1" id="t1" style="width:45px;border:none;border-radius:4px;">
                            <?php 
                                $sql = "select * from information";
                                $query = mysqli_query($db,$sql);
                                while($result=mysqli_fetch_array($query)){
                            ?>
                            <option><?php echo $result['Year']?></option>
                            <?php
                                }
                            ?>
                        </select>    से 20 
                        <select name="t2" id="t2" style="width:45px;border:none;border-radius:4px;">
                                <?php 
                                    $sql1="select * from information";
                                    $query1=mysqli_query($db,$sql1);
                                    while($result1=mysqli_fetch_array($query1)){
                                ?>
                                <option><?php echo $result1['Year']?></option>
                                <?php
                                    }
                                ?>
                        </select>
                    </p><br/>
                    <p class="text-center h4 text-danger">Before going next tab/section please SAVE the data</p></br>
                </div>
                       <div class="row mt-2"><!-- row start -->
                            <div class="col-md-12"><!-- column start -->
                                    <label for="Admission" class="text-dark">Admission No - ESTC / POLY /</label> 
                                    <input type="text" style="width:20%;padding:5px;border-radius:5px;border:1px solid #ccc;" name="dateadd" id="dateadd" Placeholder="YYY-YY" onkeyup="addHyphen(this)" /><label for="ses" class="ml-2">/</label>
                                    <input type="text" style="width:3%;padding:5px;border-radius:5px;border:1px solid #ccc;text-transform:uppercase;" class="ml-1" placeholder="" name="brn" id="brn" /><label for="ses" class="ml-2">/</label>
                                    <input type="text" style="width:20%;padding:5px;border-radius:5px;border:1px solid #ccc;" class="ml-1" name="regNo" id="regNo" maxlength="4" onkeyup="num1()"/> 
                            </div><!-- column end -->        
                       </div><!-- row end-->
                       

                       <div class="row mt-4"><!------ row start---->
                                    <div class="col-md-12"><!--column start----->
                                        <label for="entry" class="mt-2 text-dark">प्रवेश का प्रकार</label>
                                        <select name="entry" id="entry" class="form-control" onchange="showt();">
                                            <option selected>************ Type of admission ************</option>
                                            <option value="Direct Entry">Direct Entry</option>
                                            <option value="Lateral Entry">Lateral Entry</option>
                                            <option value="Jeep Entry">Jeep Entry</option>
                                        </select>
                                    </div><!-- row end -->
                       </div><!-- row end -->

                       
                       <div class="row mt-4" id="jeep1"><!--- row start -->
                            <div class="col-md-12"><!-- column start--->
                                    <div class="form-group">
                                        <label for="Jeep" class="mt-2 text-dark">जीप रैंक (प्रथम वर्ष  के छात्र / छात्रा हेतु )<br/>JEEP RANK (FIRST YEAR / FOR  CANDIDATE)</label>
                                        <input type="text" class="form-control" name="jeep" id="jeep" placeholder="Enter JEEP RANK" onchange="displaying();" />
                                    </div>
                            </div><!-- column end--->            
                       </div><!-- row end -->

                       <div class="row mt-4" id="RollNo"><!---- row start---> 
                                    <div class="col-md-12"><!--- column start---> 
                                        <div class="form-group">
                                            <label for="Roll" class="mt-2 text-dark">जीप अनुक्रमांक  (प्रथम वर्ष  के छात्र / छात्रा हेतु )<br/>JEEP ROLL (FIRST YEAR / FOR  CANDIDATE)</label>
                                            <input type="text" class="form-control" name="RollNo" id="RollNo1" placeholder="Enter JEEP Roll No" onchange="displaying();" />
                                        </div>
                                    </div><!-- column end-->
                       </div><!-- row end -->


                       <div class="row mt-4"><!------- row start ------>
                                    <div class="col-md-12"><!--column start-->
                                        <label for="course" class="mt-2 text-dark">पाठ्यक्रम जिसमे प्रवेश लेना है</label>
                                        <select name="course" id="course" class="form-control">
                                            <option value="Course" selected>************ Select Course ************</option>
                                            <option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>
                                            <option value="Diploma in Electrical Engineering">Diploma in Electrical Engineering</option>
                                        </select>
                                    </div><!---- column end -->
                       </div><!-- row end -->

                       <div class="row mt-4"><!------ row start---->
                                    <div class="col-md-12"><!--column start-->
                                        <label for="semester" class="mt-2 text-dark">सेमेस्टर (SEMESTER) / वर्ष (YEAR)</label>
                                        <select class="form-control" name="semester" id="semester">
                                            <option value="Semer" selected>*********** select Semester</option>
                                            <option value="Sem1">Sem1</option>
                                            <option value="Sem2">Sem2</option>
                                            <option value="Sem3">Sem3</option>
                                            <option value="Sem4">Sem4</option>
                                            <option value="Sem5">Sem5</option>
                                            <option value="Sem6">Sem6</option>
                                        </select>
                                    </div><!-----column end ------->
                       </div><!-- row end -->

                       <div class="row mt-4" id="tfw1"><!------ row start---->
                                    <div class="col-md-12"><!--column start----->
                                        <label for="entry" class="mt-2 text-dark">TFW</label>
                                        <select name="tfw" id="tfw" class="form-control" onchange="showt();">
                                            <option selected>************ Type of TFW ************</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div><!-- row end -->
                       </div><!-- row end -->
                       <div class="row mt-4"><!------ row start ------>
                                    <div class="col-md-12"><!-- column start-->
                                        <button type="button" name="freeze" id="freeze" onclick="lock();" class="btn btn-danger">SAVE</button>
                                        <input type="button" name="edit" id="edit" onclick="release();" class="btn btn-success" value="EDIT">
                                    </div><!-- column end -->
                       </div><!-- row end -->
                </div><!-- Admission Details Tab End -->

                <div id="Paris" class="tabcontent"><!---- Personal Detail I Tab ---------->

                    <div class="row mt-4"><!--------- row start--------->
                                    <div class="col-md-12"><!-- column start-->
                                        <p class="h5 text-dark">NOTE: PLEASE FILL UP THE ADMISSION FORM IN CAPITAL LETTER, FILL THE NAME AS PER 10<sup>th</sup> CERTIFICATE</p></br>
                                    </div><!------- column end-------------->
                    </div><!-- row end -->  
                    
                    <div class="row mt-4"><!--------- row start--------->
                                    <div class="col-md-12"><!-- column start-->
                                        <label for="firstname">First Name</label>
                                        <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" id="firstname" style="text-transform: uppercase;" onchange="displayone();" />
                                    </div><!------ column end------>
                    </div><!-- row end -->

                    <div class="row mt-4"><!--------- row start--------->
                                    <div class="col-md-12"><!-- column start-->
                                        <label for="middlename">Middle Name</label>
                                        <input type="text" name="middlename" class="form-control" placeholder="Enter middle Name" id="middlename" style="text-transform: uppercase;" onchange="displayone();"/>
                                    </div><!------ column end------>
                    </div><!-- row end -->

                    <div class="row mt-4"><!--------- row start--------->
                                    <div class="col-md-12"><!-- column start-->
                                        <label for="lastname">Last Name</label>
                                        <input type="text" name="lastname" class="form-control" placeholder="Enter last Name" id="lastname" style="text-transform: uppercase;" onchange="displayone();"/>
                                    </div><!------ column end------>
                    </div><!-- row end -->

                    <div class="row mt-4"><!--------- row start--------->
                                    <div class="col-md-12"><!-- column start------>
                                        <label for="hindiname" class="text-dark">नाम हिंदी में</label>
                                        <input type="text" class="form-control" placeholder="Enter name in hindi" name="hindiname" id="hindiname" style="text-transform:uppercase;" onchange="displayone();"/>
                                    </div><!-- row end -->
                    </div><!-- row end------>

                    <div class="row mt-4"><!------- row start------>
                                    <div class="col-md-12"><!-- column start---->
                                        <label for="fathername" class="text-dark">Father's Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Father Name" name="fathername" id="fathername" style="text-transform:uppercase;" onchange="displayone();" />
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!-------- row start---->
                                    <div class="col-md-12"><!-- column start---->
                                        <label for="hindiname1" class="text-dark">पिता का नाम (हिंदी में)</label>
                                        <input type="text" class="form-control" name="hindiname1" id="hindiname1" placeholder="Enter Father Name in Hindi" style="text-transform:uppercase;" onchange="displayone();" />
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start---->
                                    <div class="col-md-12"><!--column start------->
                                        <label for="mothername" class="text-dark">Mother's Name</label>
                                        <input type="text" class="form-control" name="mothername" id="mothername" placeholder="Enter Mother's Name" style="text-transform:uppercase;" />
                                    </div><!-- row end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start------>
                                    <div class="col-md-12"><!--column start------->
                                        <label for="hindiname2" class="text-dark">माता का नाम (हिंदी में )</label>
                                        <input type="text" class="form-control" name="hindiname2" id="hindiname2" placeholder="Enter Mother Name in Hindi" style="text-transform:uppercase;" />
                                    </div><!---- column end------>
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start ------>
                        <div class="col-md-12"><!-- column start------->
                            <label for="phone" class="text-dark">माता / पिता का मोबाइल नंबर  (PARENTS MOBILE NUMBER)</label>
                            <input type="tel" class="form-control" maxlength="10" name="phone" id="phone" placeholder="Enter 10 digit Mobile Number" onkeyup="tele1();" />
                            <span id="phone12"></span>
                        </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start----->
                                    <div class="col-md-12"><!-- column start-->
                                        <label for="DOB" class="text-dark">जन्मतिथि (DOB)</label>
                                        <input type="date" class="form-control" name="dateone" id="dateone" placeholder="Enter Date Of Birth" style="text-transform:uppercase;" />
                                    </div><!--- column end ------>
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start----->
                                    <div class="col-md-12"><!-- column start-->
                                        <label for="email" class="text-dark">ई-मेल (E-mail)</label>
                                        <input type="text" class="form-control" name="Email" id="Email" placeholder="Enter E-Mail" onkeyup="validation()" />
                                        <span id="text"></span>
                                    </div><!--- column end ------>
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start ------>
                                    <div class="col-md-12"><!-- column start-->
                                        <button type="button" name="freeze" id="freeze" onclick="lock1();" class="btn btn-danger">SAVE</button>
                                        <input type="button" name="edit" id="edit" onclick="release1();" class="btn btn-success" value="EDIT">
                                    </div><!-- column end -->
                       </div><!-- row end -->
                </div><!---- Personal Detail I Tab end -------------->

                <div id="Tokyo" class="tabcontent"><!---- Personal Detail II -------------->

                    <div class="row mt-4"><!------ row start------>
                        <div class="col-md-12"><!-- column start------->
                                    <label for="phone1" class="text-dark">छात्र / छात्रा का मोबाइल नंबर  (CANDIDATE'S MOBILE NUMBER)</label>
                                    <input type="tel" id="phone1" name="phone1" maxlength="10" placeholder="Enter Landline phone number" class="form-control" onkeyup="tele2()" />
                                    <span id="phone11"></span>
                        </div><!-- row end -->            
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start------>
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="gender" class="text-dark">लिंग (GENDER)</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option selected>******** select Gender **********</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div><!-- column end ----->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start------>
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="category" class="text-dark">जाती (CATEGORY)</label>
                                        <select class="form-control" name="category" id="category">
                                            <option selected>*********** select category *************</option>
                                            <option value="GENERAL">सामान्य (GENERAL)</option>
                                            <option value="SC">अनुसूचित जाति (SC)</option>
                                            <option value="ST">अनुसूचित जनजाति (ST)</option>
                                            <option value="OBC">अन्य पिछड़ा वर्ग (OBC)</option>
                                            <option value="EWS">आर्थिक रूप से कमजोर वर्ग (EWS)</option>
                                            <option value="MINORITY">अल्पसंख्यक (MINORITY)</option>
                                            <option value="EX-SERVICEMEN DEPENDENT">भूतपूर्व सैनिक EX-SERVICEMEN DEPENDENT</option>
                                            <option value="DEPENDENT OF FREEDOM FIGHTER">DEPENDENT OF FREEDOM FIGHTER</option>
                                        </select>
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start -------->
                                    <div class="col-md-12"><!-- column start--------->
                                        <label for="marital" class="text-dark">वैवाहिक स्थिति (MARITAL STATUS)</label>
                                        <select class="form-control" name="marital" id="marital">
                                            <option selected>*********** select marital status **********</option>
                                            <option value="Married">विवाहित (MARRIED)</option>
                                            <option value="Unmarried">अविवाहित (UNMARRIED)</option>
                                        </select>
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start -->
                                    <div class="col-md-12"><!-- column start -->
                                        <label for="blood" class="text-dark">ब्लड ग्रुप (BLOOD GROUP)</label>
                                        <select class="form-control" name="blood" id="blood">
                                            <option selected>************* select blood status ***************</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start -->
                                    <div class="col-md-12"><!-- column start ------->
                                        <label for="add1" class="text-dark">पता का प्रकार (ADDRESS TYPE)</label>
                                        <select class="form-control" name="add1" id="add1">
                                            <option selected>*********** select Address Type ****************</option>
                                            <option value="URBAN">शहरी (URBAN)</option>
                                            <option value="RURAL">ग्रामीण (RURAL)</option>
                                        </select>
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start -->
                                    <div class="col-md-12"><!-------- column start------>
                                        <label for="diva" class="text-dark">क्या आप दिव्यांग हैं (ARE YOU PHYSICAL HANDICAPED)</label>
                                        <select class="form-control" name="diva" id="diva" onchange="showing();">
                                            <option selected>*************** select status of physical handicapped *************</option>
                                            <option value="YES">YES</option>
                                            <option value="NO">NO</option>
                                        </select>
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!-------- row start------>
                                    <div class="col-md-12" id="div2" onchange="showing();"><!-- column start------>
                                        <label for="div1" class="text-dark">यदि हाँ तो दिव्यांगता का प्रकार (IF YES PLEASE SPECIFY)</label>
                                        <input type="text=" id="div1" name="div1" class="form-control" style="text-transform:uppercase;" />
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!-------- - row start--------->
                                    <div class="col-md-12"><!-- column start--------->
                                        <label for="IDE" class="text-dark">पहचान चिन्ह (IDENTIFICATION MARK)</label>
                                        <input type="text" class="form-control" name="rec" id="rec" placeholder="Enter Identification Mark" style="text-transform:uppercase;" .>
                                    </div><!-- column end -------->
                    </div><!-- row end --------->

                    <div class="row mt-4"><!------ row start ------>
                                    <div class="col-md-12"><!-- column start-->
                                        <button type="button" name="freeze" id="freeze" onclick="lock2();" class="btn btn-danger">SAVE</button>
                                        <input type="button" name="edit" id="edit" onclick="release2();" class="btn btn-success" value="EDIT">
                                    </div><!-- column end -->
                       </div><!-- row end -->
                </div><!----- Personal Detail II tab end -------------->

                <div id="America" class="tabcontent"><!---- Personal Detail III tab start-------->
                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="emp" class="text-dark">परिवार के रोजगार का विवरण  (FAMILY EMPLOYMENT DETAIL)</label>
                                        <input type="text" id="emp" name="emp" class="form-control" placeholder="Enter Family Employment Type" style="text-transform:uppercase;" />
                                    </div><!-- row end ------->
                      </div><!-- row end -->   
                      
                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="salary" class="text-dark">परिवार की  वार्षिक आय (FAMILY ANNUAL INCOME)</label>
                                        <input type="text" id="salary" class="form-control" name="salary" placeholder="Enter Family Annual Income" style="text-transform:uppercase;" />
                                    </div><!-- row end ------->
                      </div><!-- row end -->   

                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="aadhaar" class="text-dark">आधार संख्या (UID (AADHAAR) NO.)</label>
                                        <input type="text" id="aadhaar" class="form-control" name="aadhaar" maxlength="12" placeholder="Enter Aadhaar Number" onkeyup="tele3();" style="text-transform:uppercase;" />
                                    </div><!-- row end ------->
                      </div><!-- row end -->   

                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <p class="text-center bg-dark text-white p-2 rounded">पत्र व्यवहार का पता  (CORRESPONDENCE ADDRESS)</p>
                                        <label for="ccity" class="text-dark">शहर (CITY) / गांव (VILLAGE)</label>
                                        <input type="text" id="ccity" class="form-control" name="ccity" placeholder="Enter City Name" style="text-transform:uppercase;" />
                                    </div><!-- row end ------->
                      </div><!-- row end --> 

                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="cstreet" class="text-dark">गली (STREET)</label>
                                        <input type="text" id="cstreet" class="form-control" name="cstreet" placeholder="Enter Street Name" style="text-transform:uppercase;" />
                                    </div><!-- row end ------->
                      </div><!-- row end --> 
                      
                      <div class="row mt-4"><!-------------- row start----------->
             <div class="col-md-12">
               <label for="cstate" class="text-dark">राज्य (STATE)</label>
               <select class="form-control" id="cstate" name="cstate">
                        <option selected>********* Select State **********</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                      </select>
             </div>            
           </div><!------- row end---------->

           <div class="row mt-4"><!------ row start---------->
                <div class="col-md-12"><!-- column start----->
                      <label for="cdistrict">District</label>
                      <input type="text" id="cdistrict" name="cdistrict" class="form-control" placeholder="Enter Distric Name" style="text-transform: uppercase;"  />              
                </div><!-- column end -->
           </div><!-- row end -->

           <div class="row mt-4"><!------ row start---------->
                <div class="col-md-12"><!-- column start----->
                      <label for="cpincode">Pincode</label>
                      <input type="text" id="cpincode" name="cpincode" class="form-control" placeholder="Enter Pincode" style="text-transform: uppercase;" />              
                </div><!-- column end -->
           </div><!-- row end -->

           <div class="row mt-4"><!-------------- row start----------->
                <div class="col-md-12">
                    <div class="p-3"></div>           
                </div>                
            </div><!--- row end----------->

            <div class="row mt-4"><!------row start---------->
                          <div class="col-md-12">
                            <label for="Same As">Same As</label>
                            <input type="checkbox" name="same As" id="sameAs" onchange="sameth();"/>
                          </div>
            </div><!------row end----------> 

            <div class="row mt-4"><!------row start----------->
                <div class="col-md-12"><!-- column start-->
                     <p class="text-center bg-dark text-white p-2 rounded">पूर्ण स्थाई पता (PERMANENT ADDRESS)</p>  
                     <label for="pcity">शहर (CITY) / गांव (VILLAGE)</label>
                     <input type="text" name="pcity" class="form-control" id="pcity" placeholder="Enter City Name" style="text-transform: uppercase;" /> 
                </div><!-- column end -->
            </div><!-- row end -->

            <div class="row mt-4"><!------row start----------->
                <div class="col-md-12"><!-- column start--> 
                     <label for="pstreet">गली (STREET)</label>
                     <input type="text" name="pstreet" class="form-control" id="pstreet" placeholder="Enter Street Name" style="text-transform: uppercase;"  /> 
                </div><!-- column end -->
            </div><!-- row end -->

            <div class="row mt-4"><!-------------- row start----------->
             <div class="col-md-12">
               <label for="pstate" class="text-dark">राज्य (STATE)</label>
               <select class="form-control" id="pstate" name="pstate" >
                        <option selected>********* Select State ***********</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                      </select>
             </div>            
          </div><!------- row end---------->

          <div class="row mt-4"><!------row start----------->
                <div class="col-md-12"><!-- column start--> 
                     <label for="pdistrict">District</label>
                     <input type="text" name="pdistrict" class="form-control" id="pdistrict" placeholder="Enter Distric Name" style="text-transform: uppercase;" /> 
                </div><!-- column end -->
            </div><!-- row end -->

            <div class="row mt-4"><!------row start----------->
                <div class="col-md-12"><!-- column start--> 
                     <label for="ppincode">Pincode</label>
                     <input type="text" name="ppincode" class="form-control" id="ppincode" placeholder="Enter Pincode" style="text-transform: uppercase;" /> 
                </div><!-- column end -->
            </div><!-- row end -->

            <div class="row mt-4"><!------ row start ------>
                                    <div class="col-md-12"><!-- column start-->
                                        <button type="button" name="freeze" id="freeze" onclick="lock3();" class="btn btn-danger">SAVE</button>
                                        <input type="button" name="edit" id="edit" onclick="release3();" class="btn btn-success" value="EDIT">
                                    </div><!-- column end -->
            </div><!-- row end -->

         </div><!-- Personal Detail II tab end -->

         <div id="Russia" class="tabcontent"><!----- Education and Bank Details Tab Start---------->
              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                       <p class="text-center bg-dark text-white p-2 rounded">बैंक खाते की जानकारी</p>  
                       <label for="bankacc" class="text-dark">खाता संख्या (ACCOUNT NUMBER)</label>
                       <input type="text" name="bankacc" id="bankacc" class="form-control" maxlength="11" placeholder="Enter Account Number" style="text-transform:uppercase;" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="IFSC" class="text-dark">आई0 एफ0 एस0 सी0 कोड (IFSC CODE)</label>
                         <input type="text" id="IFSC" name="IFSC" class="form-control" maxlength="11" placeholder="Enter IFSC Code" style="text-transform: uppercase;" />                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                      <label for="BankName" class="text-dark">बैंक का नाम (BANK NAME)</label> 
                      <input type="text" id="BANKNAME" name="BANKNAME" class="form-control" placeholder="Enter Bank Name" style="text-transform: uppercase;" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <p class="text-center bg-dark text-white p-2 rounded">शैक्षिक योग्यता (EDUCATIONAL QUALIFICATIONS)</p>   
                     <p name="para1" id="para1" onchange="showt();"></p>            
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="schoolName" class="text-dark">स्कूल का नाम  (NAME OF SCHOOL)</label> 
                     <input type="text" name="schoolName" id="schoolName" class="form-control" placeholder="Enter School Name" style="text-transform: uppercase;"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="Board" class="text-dark">बोर्ड (BOARD)</label> 
                     <input type="text" name="Board" id="Board" class="form-control" placeholder="Enter Board Name" style="text-transform: uppercase;"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                  <div class="col-md-12"><!-- column start-----> 
                        <label for="Board" class="text-dark">विषय (SUBJECT)</label>    
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter Subjects Name" style="text-transform: uppercase;" />        
                  </div><!-- column end -->                  
              </div><!-- row end-------->

              <div class="row mt-4"><!------ row start------>
                 <div class="col-md-12"><!-- column start------->
                     <label for="yop" class="text-dark">उत्तीर्ण वर्ष  (YEAR OF PASSING)</label> 
                     <select class="form-control" name="yop" id="yop">
                         <option selected>*********** Select year of passing ****************</option>
                         <?php
                            $sql="select * from year";
                            $query=mysqli_query($db,$sql);
                            while ($result=mysqli_fetch_array($query)) {
                        ?>
                        <option><?php echo $result['Year']; ?></option>
                        <?php
                          }
                        ?>
                      </select>
                 </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4"><!------- row start ------>
                 <div class="col-md-12"><!-- column start----->
                    <label for="typeofmarks" class="text-dark">अंक के प्रकार (TYPE OF MARKS)</label>
                    <select name="typeofmarks" id="typeofmarks" class="form-control" onchange="calculate();">
                          <option value="selectp">*********** Select Type of Percentage ***********</option>
                          <option value="percent">Percentage</option>
                          <option value="cgpa">CGPA</option>
                    </select>
                 </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4" id="tbt"><!------ row start ----->
                   <div class="col-md-12"><!-- column start------>
                          <label for="totalmarks" class="text-dark">कुल अंक  (TOTAL MARKS)</label>
                          <input type="text" name="totalmarks" id="totalmarks" placeholder="Enter Total Marks" class="form-control" onchange="calculate();" />
                   </div><!-- column end -->       
              </div><!------ row end ----->

              <div class="row mt-4"><!------ row start ----->
                 <div class="col-md-12"><!-- column start----->
                    <label for="obtainmarks" class="text-dark">कुल प्राप्त अंक / सी. जी. पी. ए  (OBTAIN MARKS/CGPA)</label>
                    <input type="text" name="obtainmarks" id="obtainmarks" class="form-control" placeholder="Enter CGPA" onchange="calculate();" />
                 </div><!-- column end -->
              </div><!-- row end ----->

              <div class="row mt-4"><!----row start----->
                <div class="col-md-12"><!-- column start-->
                   <label for="percentage" class="text-dark">प्रतिशत(PERCENTAGE/CGPA)</label>
                   <input type="text" name="percentage" id="percentage" class="form-control" placeholder="Enter Percentage" onchange="calculate();" />
                </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4"><!------ row start ------>
                                    <div class="col-md-12"><!-- column start-->
                                        <button type="button" name="freeze" id="freeze" onclick="lock4();" class="btn btn-danger">SAVE</button>
                                        <input type="button" name="edit" id="edit" onclick="release4();" class="btn btn-success" value="EDIT">
                                    </div><!-- column end -->
            </div><!-- row end -->
         </div><!-------- Education and Bank Details Tab End---------->

         <div id="India" class="tabcontent"><!-------- Document Upload Tab Start----------->
              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="profilepic" class="text-dark">प्रोफाइल पिक्चर (profile Picture)</label>
                   <input type="file" name="file" accept="image/*" id="file" class="form-control" onchange="loadFile(event);" />
                   <br />
                   <div><img id="output" name="output" width="150px" height="150px" /></div>
                   <script type="text/javascript">
                     var loadFile = function(event) {
                         var output = document.getElementById('output');
                         output.src = URL.createObjectURL(event.target.files[0]);
                         output.onload = function() {
                             URL.revokeObjectURL(output.src);
                         }
                     };
                   </script>
                </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="aadhaarCard" class="text-dark">आधार कार्ड (Aadhaar Card)</label>
                   <input type="file" name="file1" accept="image/*" id="file1" class="form-control" onchange="loadFile1(event);" />
                   <br />
                   <div><img id="output1" name="output1" width="150px" height="150px" /></div>
                   <script type="text/javascript">
                     var loadFile1 = function(event) {
                         var output = document.getElementById('output1');
                         output.src = URL.createObjectURL(event.target.files[0]);
                         output.onload = function() {
                             URL.revokeObjectURL(output.src);
                         }
                     };
                   </script>
                </div><!-- column end -->
              </div><!-- row end -->

                
              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="HighSchool" class="text-dark">हाईस्कूल  मार्कशीट  (HighSchool Marksheet)</label>
                   <input type="file" name="file2251" accept="image/*" id="file2251" class="form-control" onchange="loadFile2251(event);" />
                   <br />
                   <div><img id="output2251" name="output2251" width="150px" height="150px" /></div>
                   <script type="text/javascript">
                     var loadFile2251 = function(event) {
                         var output = document.getElementById('output2251');
                         output.src = URL.createObjectURL(event.target.files[0]);
                         output.onload = function() {
                             URL.revokeObjectURL(output.src);
                         }
                     };
                   </script>
                </div><!-- column end -->
              </div><!-- row end -->


              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="HighSchool" class="text-dark">हाईस्कूल प्रमाण पत्र (HighSchool Certificate)</label>
                   <input type="file" name="file2" accept="image/*" id="file2" class="form-control" onchange="loadFile2(event);" />
                   <br />
                   <div><img id="output2" name="output2" width="150px" height="150px" /></div>
                   <script type="text/javascript">
                     var loadFile2 = function(event) {
                         var output = document.getElementById('output2');
                         output.src = URL.createObjectURL(event.target.files[0]);
                         output.onload = function() {
                             URL.revokeObjectURL(output.src);
                         }
                     };
                   </script>
                </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4" id="inter1"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="Intermediate" class="text-dark">इंटरमीडिएट मार्कशीट (Intermediate Marksheet)</label>
                   <input type="file" name="file3351" accept="image/*" id="file3351" class="form-control" onchange="loadFile3351(event);" />
                   <br />
                   <div><img id="output3351" name="output3351" width="150px" height="150px" /></div>
                   <script type="text/javascript">
                     var loadFile3351 = function(event) {
                         var output = document.getElementById('output3351');
                         output.src = URL.createObjectURL(event.target.files[0]);
                         output.onload = function() {
                             URL.revokeObjectURL(output.src);
                         }
                     };
                   </script>
                </div><!-- column end -->
              </div><!-- row end -->
              

              <div class="row mt-4" id="inter"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="HighSchool" class="text-dark">इंटरमीडिएट प्रमाण पत्र (Intermediate Certificate)</label>
                   <input type="file" name="file3" accept="image/*" id="file3" class="form-control" onchange="loadFile3(event);" />
                   <br />
                   <div><img id="output3" name="output3" width="150px" height="150px" /></div>
                   <script type="text/javascript">
                     var loadFile3 = function(event) {
                         var output = document.getElementById('output3');
                         output.src = URL.createObjectURL(event.target.files[0]);
                         output.onload = function() {
                             URL.revokeObjectURL(output.src);
                         }
                     };
                   </script>
                </div><!-- column end -->
              </div><!-- row end -->


              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="HighSchool" class="text-dark">जाति / ई0 डब्ल्यू0 एस0  प्रमाण पत्र(यदि लागू हो ) <br/>(CASTE/EWS CERTIFICATE (IF APPLICABLE))</label>
                   <input type="file" name="file4" accept="image/*" id="file4" class="form-control" onchange="loadFile4(event);" />
                   <br />
                   <div><img id="output4" name="output4" width="150px" height="150px" /></div>
                   <script type="text/javascript">
                     var loadFile4 = function(event) {
                         var output = document.getElementById('output4');
                         output.src = URL.createObjectURL(event.target.files[0]);
                         output.onload = function() {
                             URL.revokeObjectURL(output.src);
                         }
                     };
                   </script>
                </div><!-- column end -->
              </div><!-- row end -->        


              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="HighSchool" class="text-dark">स्थायी निवास प्रमाणपत्र  (यदि लागू हो  तो) <br/>(Domicile Certificate (IF APPLICABLE))</label>
                   <input type="file" name="file4451" accept="image/*" id="file4451" class="form-control" onchange="loadFile4451(event);" />
                   <br />
                   <div><img id="output4451" name="output4451" width="150px" height="150px" /></div>
                   <script type="text/javascript">
                     var loadFile4451 = function(event) {
                         var output = document.getElementById('output4451');
                         output.src = URL.createObjectURL(event.target.files[0]);
                         output.onload = function() {
                             URL.revokeObjectURL(output.src);
                         }
                     };
                   </script>
                </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="HighSchool" class="text-dark">स्थानांतरण प्रमाणपत्र <br/>Transfer Certificate</label>
                   <input type="file" name="file5551" accept="image/*" id="file5551" class="form-control" onchange="loadFile5551(event);" />
                   <br />
                   <div><img id="output5551" name="output5551" width="150px" height="150px" /></div>
                   <script type="text/javascript">
                     var loadFile5551 = function(event) {
                         var output = document.getElementById('output5551');
                         output.src = URL.createObjectURL(event.target.files[0]);
                         output.onload = function() {
                             URL.revokeObjectURL(output.src);
                         }
                     };
                   </script>
                </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="HighSchool" class="text-dark">दिव्यांगता प्रमाण पत्र (यदि कोई) <br/>(PHYSICAL DISABILITY CERTIFICATE (IF ANY))</label>
                   <input type="file" name="file5" accept="image/*" id="file5" class="form-control" onchange="loadFile5(event);" />
                   <br />
                   <div><img id="output5" name="output5" width="150px" height="150px" /></div>
                   <script type="text/javascript">
                     var loadFile5 = function(event) {
                         var output = document.getElementById('output5');
                         output.src = URL.createObjectURL(event.target.files[0]);
                         output.onload = function() {
                             URL.revokeObjectURL(output.src);
                         }
                     };
                   </script>
                </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4" id="incone"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="HighSchool" class="text-dark">आय प्रमाण पत्र  <br/>INCOME CERTIFICATE</label>
                   <input type="file" name="file6" accept="image/*" id="file6" class="form-control" onchange="loadFile6(event);" />
                   <br />
                   <div><img id="output6" name="output6" width="150px" height="150px" /></div>
                   <script type="text/javascript">
                     var loadFile6 = function(event) {
                         var output = document.getElementById('output6');
                         output.src = URL.createObjectURL(event.target.files[0]);
                         output.onload = function() {
                             URL.revokeObjectURL(output.src);
                         }
                     };
                   </script>
                </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4"><!-----row start -->
                     <div class="col-md-12"><!-- column start---->
                       <fieldset>
                           <legend class="h5 text-center">छात्र / छात्रा का घोषणा पत्र (CANDIDATE'S DECLARATION LETTER)</legend><br />
                           <label for="declaration" class="text-center h6" style="text-align:justify;font-size:14px;">मैं घोषणा करता / करती हूँ  कि संस्था में पूर्ण अनुशासनबद्ध होकर एवं गुरुजनों का समुचित आदर करते हुए अध्ययन करूँगा / करुँगी। अनुशासनहीनता के किसी  भी क्रिया - कलाप में सम्मिलित होने पर संस्था द्वारा मुझे दण्डित किया जा सकता है। आवेदन पत्र में मेरे द्वारा भरा गया विवरण सत्य है, असत्य पाये जाने पर मेरा प्रवेश निरस्त्र कर दिया जाये। <br />
                            I declare that, I will study in the Institution with complete discipline closed and due to respect to the teachers. I can be punished by the Institution for being awarded in any activity of indiscipline. The details filled by me in the application form are true, if found to be untrue, my entry should be canceled.
                           </label>
                       </fieldset>
                     </div><!-- column end -->
              </div><!-- row end -->
              
              <div class="row mt-4"><!---- row start -->
                     <div class="col-md-12"><!-- column start ----->
                        <label for="date" style="float:left;">दिनाँक (DATE):</label><input type="date" name="decdate" id="decdate" class="form-control" style="width:15%;" />
                        <label for="signature" style="margin-left:50%;margin-top:-5%;">छात्र / छात्रा के हस्ताक्षर <br/> (CANDIDATE'S SIGNATURE)</label><br/>
                     </div> <!--- column end -->
              </div><!---- row end -->

              <div class="row mt-4" style="offset-x:auto;offset-y:auto;"><!---- row start -->
                    <div class="col-md-12"><!-- column start---->
                        <input type="file" name="file7" accept="image/*" id="file7" class="form-control" onchange="loadFile7(event);" style="width:25%;margin-left:50%;" />
                        <br /><br />
                        <div style="float:right;"><img id="output7" name="output7" width="150px" height="60px" style="margin-left:-250%;" /></div>
                        <script type="text/javascript">
                        var loadFile7 = function(event) {
                         var output = document.getElementById('output7');
                         output.src = URL.createObjectURL(event.target.files[0]);
                         output.onload = function() {
                             URL.revokeObjectURL(output.src);
                         }
                     };
                   </script>
                     </div><!-- column end ---->
              </div><!-- row end -->
              <div class="mt-4"></div> 
              <div class="row"><!---- row start -->
                     <div class="col-md-12"><!-- column start ----->
                        <fieldset>
                            <label for="decone">छात्र / छात्रा </label><label class="ml-2" id="para2" onchange="displayone();"></label> 
                            <label for="dectwo"> पुत्र / पुत्री श्री  </label><label class="ml-2" id="para3" onchange="displayone();"></label>  
                            <label for="decthree">को  प्रथम / द्वितीय / अंतिम वर्ष  </label><label class="ml-2" id="para4" onchange="displayone();"></label>
                            <label for="decfour" class="ml-2">में प्रवेश की अनुमति  हेतु  संस्तुति प्रदान की जाती है। </label>
                        </fieldset>
                     </div> <!--- column end -->
              </div><!---- row end -->

              <div class="row mt-4"><!---- row start -->
                     <div class="col-md-12"><!-- column start---->
                       <label for="dec1">Candidate</label><label class="ml-2" id="para5" onchange="displayone();"></label>
                       <label for="dec2">Son/Daughter Shri</label><label class="ml-2" id="para6" onchange="displayone();"></label>
                       <label for="dec3">of First / Second / Final Year</label><label class="ml-2" id="para7" onchange="displayone();"></label>
                       <label for="dec4">Recommendation for permission to enter.</label>
                     </div><!-- column end -->
              </div><!-- row end -->


              <div class="row mt-4"><!------ row start ------>
                                    <div class="col-md-12"><!-- column start-->
                                        <button type="button" name="freeze" id="freeze" onclick="lock5();" class="btn btn-danger">SAVE</button>
                                        <input type="button" name="edit" id="edit" onclick="release5();" class="btn btn-success" value="EDIT">
                                    </div><!-- column end -->
            </div><!-- row end -->
              
              <div class="row mt-4"><!-------- row start-------->
                 <div class="col-md-12 text-center"><!-- column start------>
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">submit</button>
                 </div><!-- column end ------->
              </div><!-- row end ------>
         </div><!-------- Document Upload Tab End----------->
         <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Top <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
<div class="row mt-4"><!------ row start -->
                     <div class="col-md-12">
                         <button type="button" id="next" class="btn btn-danger btnNext" onclick="showTab()">NEXT</button>
                         <button type="button" id="prev" class="btn btn-primary btnPrevious">PREVIOUS</button>
                     </div>
        </div><!-- row end -->
        </div><!-----container end -->
    </form>
    <?php include('footer.php') ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--<script src="js/tabscript.js"></script>-->
    <script src="js/displaydata.js"></script>
    <script type="text/javascript" src="js/gtransapi.js"></script>  
    <script type="text/javascript" src="js/translator.js"></script>
    <script type="text/javascript">
        function validation(){
            var form=document.getElementById("form");
            var email=document.getElementById("Email").value;
            var text=document.getElementById("text");
            var pattern=/^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if(email.match(pattern))
            {
                form.classList.add("valid");
                form.classList.remove("invalid");
                text.innerHTML="Your Email Address is valid.";
                text.style.color="black";
            }
            else
            {
                form.classList.remove("valid");
                form.classList.add("invalid");
                text.innerHTML="Please Enter valid email address";
                text.style.color="#ff0000";
            }
            if(email=="")
            {
                form.classList.remove("valid");
                form.classList.remove("invalid");
                text.innerHTML="";
                text.style.color="#00ff00";
            }
        }

        function tele1()
        {
            var n=document.getElementById("phone").value;
            if(isNaN(n)){
                alert("Please enter 10 digit Mobile Number");
            }
            else{
                n;
            }
        }
        function tele2(){
            var n1=document.getElementById("phone1").value;
            if(isNaN(n1)){
                alert("Please enter 10 digit Mobile Number");
            }
            else{
                n1;
            }
        }

        function tele3(){
            var n2=document.getElementById("aadhaar").value;
            if(isNaN(n2)){
                alert("Please Enter 12 digit Aadhaar Number");
            }
            else{
                n2;
            }
        }
    </script>
    <script>
	function addHyphen (element) {
    	let ele = document.getElementById(element.id);
        ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.

        let finalVal = ele.match(/.{1,4}/g).join('-');
        document.getElementById(element.id).value = finalVal;
    }
    function num1(){
      var n = document.getElementById('regNo').value;
      if(isNaN(n)){
        alert("Please enter a number");
      }
      else{
        n;
      }
    }
</script>
<script>
    function showt(){
    if(document.getElementById('entry').value=="Jeep Entry")
    {
      document.getElementById('para1').innerHTML = "Enter Your Highschool Details";
      document.getElementById('inter').style.display="none";
      document.getElementById('inter1').style.display="none";
      document.getElementById('jeep1').style.display="block";
      document.getElementById('RollNo').style.display="block";
      document.getElementById('tfw1').style.display="block";
    }
    else if(document.getElementById('entry').value=="Lateral Entry")
    {
      document.getElementById('para1').innerHTML = "Enter Your Intermediate Details";
      document.getElementById('inter').style.display="block";
      document.getElementById('jeep1').style.display="block";
      document.getElementById('RollNo').style.display="block";
      document.getElementById('tfw1').style.display="none";
    }
    else if(document.getElementById('entry').value=="Direct Entry"){
      document.getElementById('jeep1').style.display="none";
      document.getElementById('RollNo').style.display="none";
      document.getElementById('tfw1').style.display="none";
    }

  }
</script>

<script>
    function lock(){
       document.getElementById('t1').disabled = true;
       document.getElementById('t2').disabled = true;
       document.getElementById('dateadd').readOnly=true;
       document.getElementById('brn').readOnly=true;
       document.getElementById('regNo').readOnly=true;
       document.getElementById('jeep').readOnly = true;
       document.getElementById('RollNo1').readOnly=true;
       document.getElementById('course').disabled = true;
       document.getElementById('semester').disabled = true;
       document.getElementById('entry').disabled=true;
       document.getElementById('tfw').disabled=true;

    }
    function release(){
        document.getElementById('t1').disabled=false;
        document.getElementById('t2').disabled=false;
        document.getElementById('dateadd').readOnly=false;
        document.getElementById('brn').readOnly=false;
       document.getElementById('regNo').readOnly=false;
       document.getElementById('jeep').readOnly=false;
       document.getElementById('RollNo1').readOnly=false;
       document.getElementById('course').disabled=false;
       document.getElementById('semester').disabled=false;
       document.getElementById('entry').disabled=false;
       document.getElementById('tfw').disabled=false;
    }
    

    function lock1(){
       document.getElementById('firstname').readOnly=true;
       document.getElementById('middlename').readOnly=true;
       document.getElementById('lastname').readOnly=true;
       document.getElementById('hindiname').readOnly=true;
       document.getElementById('fathername').readOnly=true;
       document.getElementById('hindiname1').readOnly=true;
       document.getElementById('mothername').readOnly=true;
       document.getElementById('hindiname2').readOnly=true;
       document.getElementById('phone').readOnly=true;
       document.getElementById('dateone').readOnly=true;
       document.getElementById('Email').readOnly=true;

    }
    function release1(){
        document.getElementById('firstname').readOnly=false;
        document.getElementById('middlename').readOnly=false;
        document.getElementById('lastname').readOnly=false;
        document.getElementById('hindiname').readOnly=false;
       document.getElementById('fathername').readOnly=false;
       document.getElementById('hindiname1').readOnly=false;
       document.getElementById('mothername').readOnly=false;
       document.getElementById('hindiname2').readOnly=false;
       document.getElementById('phone').readOnly=false;
       document.getElementById('dateone').readOnly=false;
       document.getElementById('Email').readOnly=false;
    }





    function lock2(){
       document.getElementById('phone1').readOnly=true;
       document.getElementById('gender').disabled=true;
       document.getElementById('category').disabled=true;
       document.getElementById('marital').disabled=true;
       document.getElementById('blood').disabled=true;
       document.getElementById('add1').disabled=true;
       document.getElementById('diva').disabled=true;
       document.getElementById('div1').readOnly=true;
       document.getElementById('rec').readOnly=true;

    }
    function release2(){
        document.getElementById('phone1').readOnly=false;
       document.getElementById('gender').disabled=false;
       document.getElementById('category').disabled=false;
       document.getElementById('marital').disabled=false;
       document.getElementById('blood').disabled=false;
       document.getElementById('add1').disabled=false;
       document.getElementById('diva').disabled=false;
       document.getElementById('div1').readOnly=false;
       document.getElementById('rec').readOnly=false;
    }






    function lock3(){
       document.getElementById('emp').readOnly=true;
       document.getElementById('salary').readOnly=true;
       document.getElementById('aadhaar').readOnly=true;
       document.getElementById('ccity').readOnly=true;
       document.getElementById('cstreet').readOnly=true;
       document.getElementById('cstate').disabled=true;
       document.getElementById('cdistrict').readOnly=true;
       document.getElementById('cpincode').readOnly=true;
       document.getElementById('sameAs').readOnly=true;
       document.getElementById('pcity').readOnly=true;
       document.getElementById('pstreet').readOnly=true;
       document.getElementById('pstate').disabled=true;
       document.getElementById('pdistrict').readOnly=true;
       document.getElementById('ppincode').readOnly=true;

    }
    function release3(){
        document.getElementById('emp').readOnly=false;
       document.getElementById('salary').readOnly=false;
       document.getElementById('aadhaar').readOnly=false;
       document.getElementById('ccity').readOnly=false;
       document.getElementById('cstreet').readOnly=false;
       document.getElementById('cstate').disabled=false;
       document.getElementById('cdistrict').readOnly=false;
       document.getElementById('cpincode').readOnly=false;
       document.getElementById('sameAs').readOnly=false;
       document.getElementById('pcity').readOnly=false;
       document.getElementById('pstreet').readOnly=false;
       document.getElementById('pstate').disabled=false;
       document.getElementById('pdistrict').readOnly=false;
       document.getElementById('ppincode').readOnly=false;
    }




    function lock4(){
       document.getElementById('bankacc').readOnly=true;
       document.getElementById('IFSC').readOnly=true;
       document.getElementById('BANKNAME').readOnly=true;
       document.getElementById('schoolName').readOnly=true;
       document.getElementById('Board').readOnly=true;
       document.getElementById('subject').readOnly=true;
       document.getElementById('yop').disabled=true;
       document.getElementById('typeofmarks').disabled=true;
       document.getElementById('totalmarks').readOnly=true;
       document.getElementById('obtainmarks').readOnly=true;
       document.getElementById('percentage').readOnly=true;

    }
    function release4(){
        document.getElementById('bankacc').readOnly=false;
       document.getElementById('IFSC').readOnly=false;
       document.getElementById('BANKNAME').readOnly=false;
       document.getElementById('schoolName').readOnly=false;
       document.getElementById('Board').readOnly=false;
       document.getElementById('subject').readOnly=false;
       document.getElementById('yop').disabled=false;
       document.getElementById('typeofmarks').disabled=false;
       document.getElementById('totalmarks').readOnly=false;
       document.getElementById('obtainmarks').readOnly=false;
       document.getElementById('percentage').readOnly=false;
    }






    function lock5(){
       document.getElementById('file').readOnly=true;
       document.getElementById('output').readOnly=true;
       document.getElementById('file1').readOnly=true;
       document.getElementById('output1').readOnly=true;
       document.getElementById('file2251').readOnly=true;
       document.getElementById('output2251').readOnly=true;
       document.getElementById('file2').readOnly=true;
       document.getElementById('output2').readOnly=true;
       document.getElementById('file3351').readOnly=true;
       document.getElementById('output3351').readOnly=true;
       document.getElementById('file3').readOnly=true;
       document.getElementById('output3').readOnly=true;
       document.getElementById('file4').readOnly=true;
       document.getElementById('output4').readOnly=true;
       document.getElementById('file4451').readOnly=true;
       document.getElementById('output4451').readOnly=true;
       document.getElementById('file5551').readOnly=true;
       document.getElementById('output5551').readOnly=true;
       document.getElementById('file5').readOnly=true;
       document.getElementById('output5').readOnly=true;
       document.getElementById('file6').readOnly=true;
       document.getElementById('output6').readOnly=true;
       document.getElementById('decdate').readOnly=true;
       document.getElementById('file7').readOnly=true;
       document.getElementById('output7').readOnly=true;

    }
    function release5(){
        document.getElementById('file').readOnly=false;
       document.getElementById('output').readOnly=false;
       document.getElementById('file1').readOnly=false;
       document.getElementById('output1').readOnly=false;
       document.getElementById('file2251').readOnly=false;
       document.getElementById('output2251').readOnly=false;
       document.getElementById('file2').readOnly=false;
       document.getElementById('output2').readOnly=false;
       document.getElementById('file3351').readOnly=false;
       document.getElementById('output3351').readOnly=false;
       document.getElementById('file3').readOnly=false;
       document.getElementById('output3').readOnly=false;
       document.getElementById('file4').readOnly=false;
       document.getElementById('output4').readOnly=false;
       document.getElementById('file4451').readOnly=false;
       document.getElementById('output4451').readOnly=false;
       document.getElementById('file5551').readOnly=false;
       document.getElementById('output5551').readOnly=false;
       document.getElementById('file5').readOnly=false;
       document.getElementById('output5').readOnly=false;
       document.getElementById('file6').readOnly=false;
       document.getElementById('output6').readOnly=false;
       document.getElementById('decdate').readOnly=false;
       document.getElementById('file7').readOnly=false;
       document.getElementById('output7').readOnly=false;
    }
    
</script>
<script>
    function showTab(){
      document.getElementById('Paris').style.display="block";
      document.getElementById('London').style.display="none";
      
    }
</script>
  </body>
</html>