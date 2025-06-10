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
    </style>
  </head>
  <body onload="myFunction()">
    
    </div><!----- container fluid end --->

   <?php include('header.php') ?>
        <div class="container-fluid"><!--- container fluid start --->
        <form action="getinfo.php" method="post" enctype="multipart/form-data">
            
        </div><!--- container fluid end --->

        <div class="container mt-4 rounded p-3 mb-5" style="box-shadow:4px 9px 25px 10px grey;"><!--- container start --->
               <a href="add1.php" class="btn btn-danger">BACK</a><br /><br />     
              <div class="mt-2"></div>

              <ul class="nav nav-tabs" id="myTab" role="tablist"><!-- tab menu start -->
                <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Admission Details</a></li>
                <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Personal Details I</a></li>
                <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Personal Details II</a></li>
                <li class="nav-item"><a class="nav-link" id="person-tab" data-toggle="tab" href="#person" role="tab" aria-controls="person" aria-selected="false">Personal Details III<a/></li>
                <li class="nav-item"><a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">Education and Bank Details</a></li>
                <li class="nav-item"><a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">Upload Documents</a></li>
              </ul><!-- tab menu end -->
                <?php 
                    if(isset($_POST['submit'])){
                    $dateadd1=$_POST['dateadd1'];
                    $brn1=$_POST['brn1'];
                    $regNo1=$_POST['regNo1'];
                    $sql1 = "SELECT * FROM `record` WHERE `AdmissionNo1`='$dateadd1' AND `AdmissionNo2`='$brn1' AND `RegNo`='$regNo1'";
                    $query1 = mysqli_query($db,$sql1);
                    while($result1=mysqli_fetch_array($query1)){
                ?>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><!-- Admission Details Tab Start -->
                <div class="mt-2">
                <p class="h5 text-center">प्रवेश हेतु आवेदन पत्र 20
                        <select name="t1" id="t1" style="width:45px;border:none;border-radius:4px;" onchange="transfer()">
                            <option value="<?php echo $result1['FromYear']; ?>"><?php echo $result1['FromYear']; ?></option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                        </select><input type="hidden" name="t11" id="t11" value="" />    से 20 
                        <select name="t2" id="t2" style="width:45px;border:none;border-radius:4px;" onchange="transfer()">
                        <option value="<?php echo $result1['ToYear']; ?>"><?php echo $result1['ToYear']; ?></option>
                        <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                        </select><input type="hidden" name="t21" id="t21" value="" />
                    </p><br/>
                    <button type="button" class="btn btn-success" name="edit" id="edit" onclick="release()">EDIT</button></br>
                </div>

                <div class="row mt-2"><!-- row start -->
                        <div class="col-md-12"><!-- column start -->
                                    <label for="Admission" class="text-dark">Admission No - ESTC / POLY /</label> 
                                    <input type="text" style="width:20%;padding:5px;border-radius:5px;border:1px solid #ccc;;" name="dateadd" id="dateadd" Placeholder="YYY-YY" value="<?php echo $result1['AdmissionNo1']; ?>" /><label for="ses" class="ml-2">/</label>
                                    <input type="text" style="width:3%;padding:5px;border-radius:5px;border:1px solid #ccc;text-transform:uppercase;" class="ml-1" name="brn" id="brn" value="<?php echo $result1['AdmissionNo2']; ?>" /><label for="ses" class="ml-2">/</label>
                                    <input type="text" style="width:20%;padding:5px;border-radius:5px;border:1px solid #ccc;;" class="ml-1" name="regNo" id="regNo" value="<?php echo $result1['RegNo']; ?>"/> 
                            </div><!-- column end -->        
                </div><!-- row end-->

                <div class="row mt-4"><!--- row start -->
                            <div class="col-md-12"><!-- column start--->
                                    <div class="form-group">
                                        <label for="AdmissionSession" class="mt-2 text-dark">प्रवेश सत्र (ADMISSION SESSION)</label>
                                        <select class="form-control" name="AdmissionSession" id="AdmissionSession" onchange="transfer()">
                                            <option value="" selected>************* Select Admission Session **********</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select><input type="hidden" name="admin11" id="admin11" value="" />
                                    </div>
                            </div><!-- column end--->            
                       </div><!-- row end -->

                <div class="row mt-4"><!--- row start -->
                            <div class="col-md-12"><!-- column start--->
                                    <div class="form-group">
                                        <label for="Jeep" class="mt-2 text-dark">जीप रैंक (प्रथम वर्ष  के छात्र / छात्रा हेतु )<br/>JEEP RANK (FIRST YEAR / FOR  CANDIDATE)</label>
                                        <input type="text" class="form-control" name="jeep" id="jeep" placeholder="Enter JEEP RANK" value="<?php echo $result1['JeepRank']; ?>" onchange="displaying();" />
                                    </div>
                            </div><!-- column end--->            
                       </div><!-- row end -->
                       <div class="row mt-4"><!---- row start---> 
                                    <div class="col-md-12"><!--- column start---> 
                                        <div class="form-group">
                                            <label for="Roll" class="mt-2 text-dark">जीप अनुक्रमांक  (प्रथम वर्ष  के छात्र / छात्रा हेतु )<br/>JEEP ROLL (FIRST YEAR / FOR  CANDIDATE)</label>
                                            <input type="text" class="form-control" name="RollNo" id="RollNo1" placeholder="Enter JEEP Roll No" value="<?php echo $result1['JeepRollNo'] ?>" onchange="displaying();" />
                                        </div>
                                    </div><!-- column end-->
                       </div><!-- row end -->
                       <div class="row mt-4"><!------- row start ------>
                                    <div class="col-md-12"><!--column start-->
                                        <label for="course" class="mt-2 text-dark">पाठ्यक्रम जिसमे प्रवेश लेना है</label>
                                        <select class="form-control" name="course" id="course" onchange="transfer()">
                                            <option value="<?php echo $result1['Course']; ?>"><?php echo $result1['Course']; ?></option>
                                            <option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>
                                            <option value="Diploma in Electrical Engineering">Diploma in Electrical Engineering</option>
                                        </select><input type="hidden" name="course11" id="course11" value="" />
                                    </div><!---- column end -->
                       </div><!-- row end -->

                       <div class="row mt-4"><!------ row start---->
                                    <div class="col-md-12"><!--column start-->
                                        <label for="semester" class="mt-2 text-dark">सेमेस्टर (SEMESTER) / वर्ष (YEAR)</label>
                                        <select class="form-control" name="semester" id="semester" onchange="transfer()">
                                            <option value="<?php echo $result1['Semester']; ?>"><?php echo $result1['Semester']; ?></option>
                                            <option value="Sem1">Sem1</option>
                                            <option value="Sem2">Sem2</option>
                                            <option value="Sem3">Sem3</option>
                                            <option value="Sem4">Sem4</option>
                                            <option value="Sem5">Sem5</option>
                                            <option value="Sem6">Sem6</option>
                                        </select><input type="hidden" name="semester11" id="semester11" value="" />
                                    </div><!-----column end ------->
                       </div><!-- row end -->
                       <div class="row mt-4"><!------ row start---->
                                    <div class="col-md-12"><!--column start----->
                                        <label for="entry" class="mt-2 text-dark">प्रवेश का प्रकार</label>
                                        <input type="text" class="form-control" name="entry" id="entry" value="<?php echo $result1['TypeofEntry']; ?>" />
                                    </div><!-- row end -->
                       </div><!-- row end -->
                       <div class="row mt-4" id="tfw1"><!------ row start---->
                                    <div class="col-md-12"><!--column start----->
                                        <label for="entry" class="mt-2 text-dark">TFW</label>
                                        <input type="text" class="form-control" name="tfw" id="tfw" value="<?php echo $result1['TFW']; ?>" />
                                    </div><!-- row end -->
                       </div><!-- row end -->
                </div><!-- Admission Details Tab End -->

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><!---- Personal Detail I Tab ---------->

                    <div class="row mt-4"><!--------- row start--------->
                                    <div class="col-md-12"><!-- column start-->
                                        <p class="h5 text-dark">NOTE: PLEASE FILL UP THE ADMISSION FORM IN CAPITAL LETTER, FILL THE NAME AS PER 10<sup>th</sup> CERTIFICATE</p>
                                    </div><!------- column end-------------->
                    </div><!-- row end --> 
                    <button type="button" class="btn btn-success" name="edit" id="edit" onclick="release1()">EDIT</button></br>
                    <div class="row mt-4"><!--------- row start--------->
                                    <div class="col-md-12"><!-- column start-->
                                        <label for="firstname1">First Name</label>
                                        <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" id="firstname" value="<?php echo $result1['First Name']; ?>" style="text-transform: uppercase;" onchange="displayone();" />
                                    </div><!------ column end------>
                    </div><!-- row end -->

                    <div class="row mt-4"><!--------- row start--------->
                                    <div class="col-md-12"><!-- column start-->
                                        <label for="middlename">Middle Name</label>
                                        <input type="text" name="middlename" class="form-control" placeholder="Enter middle Name" id="middlename" value="<?php echo $result1['Middle Name']; ?>" style="text-transform: uppercase;" onchange="displayone();"/>
                                    </div><!------ column end------>
                    </div><!-- row end -->

                    <div class="row mt-4"><!--------- row start--------->
                                    <div class="col-md-12"><!-- column start-->
                                        <label for="lastname">Last Name</label>
                                        <input type="text" name="lastname" class="form-control" placeholder="Enter last Name" id="lastname" value="<?php echo $result1['Last Name']; ?>" style="text-transform: uppercase;" onchange="displayone();"/>
                                    </div><!------ column end------>
                    </div><!-- row end -->

                    <div class="row mt-4"><!--------- row start--------->
                                    <div class="col-md-12"><!-- column start------>
                                        <label for="hindiname" class="text-dark">नाम हिंदी में</label>
                                        <input type="text" class="form-control" placeholder="Enter name in hindi" name="hindiname" id="hindiname" value="<?php echo $result1['Name in Hindi']; ?>" style="text-transform:uppercase;" onchange="displayone();"/>
                                    </div><!-- row end -->
                    </div><!-- row end------>

                    <div class="row mt-4"><!------- row start------>
                                    <div class="col-md-12"><!-- column start---->
                                        <label for="fathername" class="text-dark">Father's Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Father Name" name="fathername" id="fathername" value="<?php echo $result1['Father Name']; ?>" style="text-transform:uppercase;" onchange="displayone();" />
                                    </div><!-- column end -->
                    </div><!-- row end -->
                    <div class="row mt-4"><!-------- row start---->
                                    <div class="col-md-12"><!-- column start---->
                                        <label for="hindiname1" class="text-dark">पिता का नाम (हिंदी में)</label>
                                        <input type="text" class="form-control" name="hindiname1" id="hindiname1" value="<?php echo $result1['Father Name in Hindi']; ?>" placeholder="Enter Father Name in Hindi" style="text-transform:uppercase;" onchange="displayone();" />
                                    </div><!-- column end -->
                    </div><!-- row end -->
                    <div class="row mt-4"><!------ row start---->
                                    <div class="col-md-12"><!--column start------->
                                        <label for="mothername" class="text-dark">Mother's Name</label>
                                        <input type="text" class="form-control" name="mothername" id="mothername" value="<?php echo $result1['Mother Name']; ?>" placeholder="Enter Mother's Name" style="text-transform:uppercase;" />
                                    </div><!-- row end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start------>
                                    <div class="col-md-12"><!--column start------->
                                        <label for="hindiname2" class="text-dark">माता का नाम (हिंदी में )</label>
                                        <input type="text" class="form-control" name="hindiname2" id="hindiname2" value="<?php echo $result1['Mother Name in Hindi']; ?>" placeholder="Enter Mother Name in Hindi" style="text-transform:uppercase;" />
                                    </div><!---- column end------>
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start ------>
                        <div class="col-md-12"><!-- column start------->
                            <label for="phone" class="text-dark">माता / पिता का मोबाइल नंबर  (PARENTS MOBILE NUMBER)</label>
                            <input type="tel" class="form-control" maxlength="10" name="phone" id="phone" value="<?php echo $result1['Parents Mobile No']; ?>" placeholder="Enter 10 digit Mobile Number" />
                        </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start----->
                                    <div class="col-md-12"><!-- column start-->
                                        <label for="DOB" class="text-dark">जन्मतिथि (DOB)</label>
                                        <input type="date" class="form-control" name="dateone" id="dateone" value="<?php echo $result1['Date Of Birth']; ?>" placeholder="Enter Date Of Birth" style="text-transform:uppercase;" />
                                    </div><!--- column end ------>
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start----->
                                    <div class="col-md-12"><!-- column start-->
                                        <label for="email" class="text-dark">ई-मेल (E-mail)</label>
                                        <input type="email" class="form-control" name="Email" id="Email" value="<?php echo $result1['Email']; ?>" placeholder="Enter E-Mail" style="text-transform:uppercase;" />
                                    </div><!--- column end ------>
                    </div><!-- row end -->
                </div><!---- Personal Detail I Tab end -------------->

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><!---- Personal Detail II -------------->
                <br /><button type="button" class="btn btn-success" name="edit" id="edit" onclick="release2()">EDIT</button></br>
                    <div class="row mt-4"><!------ row start------>
                        <div class="col-md-12"><!-- column start------->
                                    <label for="phone1" class="text-dark">छात्र / छात्रा का मोबाइल नंबर  (CANDIDATE'S MOBILE NUMBER)</label>
                                    <input type="tel" id="phone1" value="<?php echo $result1['Land Line No']; ?>" name="phone1" maxlength="10" placeholder="Enter student mobile phone number" class="form-control" />
                        </div><!-- row end -->            
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start------>
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="gender" class="text-dark">लिंग (GENDER)</label>
                                        <select class="form-control" name="gender" id="gender" onchange="transfer()">
                                            <option value="<?php echo $result1['Gender']; ?>"><?php echo $result1['Gender']; ?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select><input type="hidden" name="gender11" id="gender11" value="" />
                                    </div><!-- column end ----->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start------>
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="category" class="text-dark">जाती (CATEGORY)</label>
                                        <select class="form-control" name="category" id="category" onchange="transfer();">
                                            <option value="<?php echo $result1['Category']; ?>"><?php echo $result1['Category']; ?></option>
                                            <option value="GENERAL">सामान्य (GENERAL)</option>
                                            <option value="SC">अनुसूचित जाति (SC)</option>
                                            <option value="ST">अनुसूचित जनजाति (ST)</option>
                                            <option value="OBC">अन्य पिछड़ा वर्ग (OBC)</option>
                                            <option value="EWS">आर्थिक रूप से कमजोर वर्ग (EWS)</option>
                                            <option value="MINORITY">अल्पसंख्यक (MINORITY)</option>
                                            <option value="EX-SERVICEMEN DEPENDENT">भूतपूर्व सैनिक EX-SERVICEMEN DEPENDENT</option>
                                            <option value="DEPENDENT OF FREEDOM FIGHTER">DEPENDENT OF FREEDOM FIGHTER</option>
                                        </select><input type="hidden" name="category11" id="category11" value="" />
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start -------->
                                    <div class="col-md-12"><!-- column start--------->
                                        <label for="marital" class="text-dark">वैवाहिक स्थिति (MARITAL STATUS)</label>
                                        <select class="form-control" name="marital" id="marital" onchange="transfer();">
                                            <option value="<?php echo $result1['Marital Status']; ?>"><?php echo $result1['Marital Status']; ?></option>
                                            <option value="Married">विवाहित (MARRIED)</option>
                                            <option value="Unmarried">अविवाहित (UNMARRIED)</option>
                                        </select><input type="hidden" name="marital11" id="marital11" value="" />
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start -->
                                    <div class="col-md-12"><!-- column start -->
                                        <label for="blood" class="text-dark">ब्लड ग्रुप (BLOOD GROUP)</label>
                                        <select class="form-control" name="blood" id="blood" onchange="transfer();">
                                            <option value="<?php echo $result1['Blood Group']; ?>"><?php echo $result1['Blood Group']; ?></option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select><input type="hidden" name="blood11" id="blood11" value="" />
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start -->
                                    <div class="col-md-12"><!-- column start ------->
                                        <label for="add1" class="text-dark">पता का प्रकार (ADDRESS TYPE)</label>
                                        <select class="form-control" name="add1" id="add1" onchange="transfer();">
                                            <option value="<?php echo $result1['Type of Address']; ?>"><?php echo $result1['Type of Address']; ?></option>
                                            <option value="URBAN">URBAN</option>
                                            <option value="RURAL">RURAL</option>
                                        </select><input type="hidden" name="add111" id="add111" value="" />
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start -->
                                    <div class="col-md-12"><!-------- column start------>
                                        <label for="diva" class="text-dark">क्या आप दिव्यांग हैं (ARE YOU PHYSICAL HANDICAPED)</label>
                                        <select class="form-control" name="diva" id="diva" onchange="transfer();">
                                            <option value="<?php echo $result1['Physical Handicapped']; ?>"><?php echo $result1['Physical Handicapped']; ?></option>
                                            <option value="URBAN">शहरी (URBAN)</option>
                                            <option value="RURAL">ग्रामीण (RURAL)</option>
                                        </select><input type="hidden" name="diva11" id="diva11" value="" />
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!-------- row start------>
                                    <div class="col-md-12" id="div2" onchange="showing();"><!-- column start------>
                                        <label for="div1" class="text-dark">यदि हाँ तो दिव्यांगता का प्रकार (IF YES PLEASE SPECIFY)</label>
                                        <input type="text=" id="div1" name="div1" value="<?php echo $result1['Physical Handicapped Type']; ?>" class="form-control" style="text-transform:uppercase;" />
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!-------- - row start--------->
                                    <div class="col-md-12"><!-- column start--------->
                                        <label for="IDE" class="text-dark">पहचान चिन्ह (IDENTIFICATION MARK)</label>
                                        <input type="text" class="form-control" name="rec" id="rec" value="<?php echo $result1['Identification Mark']; ?>" placeholder="Enter Identification Mark" style="text-transform:uppercase;" .>
                                    </div><!-- column end -------->
                    </div><!-- row end --------->
                </div><!----- Personal Detail II tab end -------------->

                <div class="tab-pane fade" id="person" role="tabpanel" aria-labelledby="person-tab"><!---- Personal Detail III tab start-------->
                <br /><button type="button" class="btn btn-success" name="edit" id="edit" onclick="release3()">EDIT</button></br>
                        <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="emp" class="text-dark">परिवार के रोजगार का विवरण  (FAMILY EMPLOYMENT DETAIL)</label>
                                        <input type="text" id="emp" name="emp" value="<?php echo $result1['Employment Detail']; ?>" class="form-control" placeholder="Enter Family Employment Type" style="text-transform:uppercase;" />
                                    </div><!-- row end ------->
                      </div><!-- row end -->   
                      
                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="salary" class="text-dark">परिवार की  वार्षिक आय (FAMILY ANNUAL INCOME)</label>
                                        <input type="text" id="salary" class="form-control" name="salary" value="<?php echo $result1['Family Annual Income']; ?>" placeholder="Enter Family Annual Income" style="text-transform:uppercase;" />
                                    </div><!-- row end ------->
                      </div><!-- row end -->   

                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="aadhaar" class="text-dark">आधार संख्या (UID (AADHAAR) NO.)</label>
                                        <input type="text" id="aadhaar" class="form-control" name="aadhaar" value="<?php echo $result1['Aadhaar No']; ?>" maxlength="12" placeholder="Enter Aadhaar Number" style="text-transform:uppercase;" />
                                    </div><!-- row end ------->
                      </div><!-- row end -->   

                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <p class="text-center bg-dark text-white p-2 rounded">पत्र व्यवहार का पता  (CORRESPONDENCE ADDRESS)</p>
                                        <label for="ccity" class="text-dark">शहर (CITY) / गांव (VILLAGE)</label>
                                        <input type="text" id="ccity" class="form-control" name="ccity" value="<?php echo $result1['Correspondence City'];?>" placeholder="Enter City Name" style="text-transform:uppercase;" />
                                    </div><!-- row end ------->
                      </div><!-- row end --> 

                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="cstreet" class="text-dark">गली (STREET)</label>
                                        <input type="text" id="cstreet" class="form-control" name="cstreet" value="<?php echo $result1['Correspondence Street'];?>"placeholder="Enter Street Name" style="text-transform:uppercase;" />
                                    </div><!-- row end ------->
                      </div><!-- row end --> 
                      
                      <div class="row mt-4"><!-------------- row start----------->
             <div class="col-md-12">
               <label for="cstate" class="text-dark">राज्य (STATE)</label>
               <select class="form-control" id="cstate" name="cstate" onchange="transfer();">
                        <option value="<?php echo $result1['Correspondence State']; ?>"><?php echo $result1['Correspondence State']; ?></option>
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
                      </select><input type="hidden" name="cstate11" id="cstate11" value="" />
             </div>            
           </div><!------- row end---------->

           <div class="row mt-4"><!------ row start---------->
                <div class="col-md-12"><!-- column start----->
                      <label for="cdistrict">District</label>
                      <input type="text" id="cdistrict" name="cdistrict" value="<?php echo $result1['Correspondence District']; ?>" class="form-control" placeholder="Enter Distric Name" style="text-transform: uppercase;"  />              
                </div><!-- column end -->
           </div><!-- row end -->

           <div class="row mt-4"><!------ row start---------->
                <div class="col-md-12"><!-- column start----->
                      <label for="cpincode">Pincode</label>
                      <input type="text" id="cpincode" name="cpincode" value="<?php echo $result1['Correspondence pincode']; ?>" class="form-control" placeholder="Enter Pincode" style="text-transform: uppercase;" />              
                </div><!-- column end -->
           </div><!-- row end -->

           <div class="row mt-4"><!-------------- row start----------->
                <div class="col-md-12">
                    <div class="p-3"></div>           
                </div>                
            </div><!--- row end----------->

            <div class="row mt-4"><!------row start----------->
                <div class="col-md-12"><!-- column start-->
                     <p class="text-center bg-dark text-white p-2 rounded">पूर्ण स्थाई पता (PERMANENT ADDRESS)</p>  
                     <label for="pcity">शहर (CITY) / गांव (VILLAGE)</label>
                     <input type="text" name="pcity" class="form-control" id="pcity" value="<?php echo $result1['Permanent City']; ?>" placeholder="Enter City Name" style="text-transform: uppercase;" /> 
                </div><!-- column end -->
            </div><!-- row end -->

            <div class="row mt-4"><!------row start----------->
                <div class="col-md-12"><!-- column start--> 
                     <label for="pstreet">गली (STREET)</label>
                     <input type="text" name="pstreet" class="form-control" id="pstreet" value="<?php echo $result1['Permanent Street']; ?>" placeholder="Enter Street Name" style="text-transform: uppercase;"  /> 
                </div><!-- column end -->
            </div><!-- row end -->

            <div class="row mt-4"><!-------------- row start----------->
             <div class="col-md-12">
               <label for="pstate" class="text-dark">राज्य (STATE)</label>
               <select class="form-control" id="pstate" name="pstate" onchange="transfer();">
                        <option value="<?php echo $result1['Permanent State']; ?>"><?php echo $result1['Permanent State']; ?></option>
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
                      </select><input type="hidden" name="pstate11" id="pstate11" value=""/>
             </div>            
          </div><!------- row end---------->

          <div class="row mt-4"><!------row start----------->
                <div class="col-md-12"><!-- column start--> 
                     <label for="pdistrict">District</label>
                     <input type="text" name="pdistrict" class="form-control" id="pdistrict" value="<?php echo $result1['Permanent District']; ?>" placeholder="Enter Distric Name" style="text-transform: uppercase;" /> 
                </div><!-- column end -->
            </div><!-- row end -->

            <div class="row mt-4"><!------row start----------->
                <div class="col-md-12"><!-- column start--> 
                     <label for="ppincode">Pincode</label>
                     <input type="text" name="ppincode" class="form-control" id="ppincode" value="<?php echo $result1['Permanent Pincode']; ?>" placeholder="Enter Pincode" style="text-transform: uppercase;" /> 
                </div><!-- column end -->
            </div><!-- row end -->

         </div><!-- Personal Detail III tab end -->

         <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab"><!----- Education and Bank Details Tab Start---------->
              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                        <br /><button type="button" class="btn btn-success" name="edit" id="edit" onclick="release4()">EDIT</button></br><br />
                       <p class="text-center bg-dark text-white p-2 rounded">बैंक खाते की जानकारी</p>  
                       <label for="bankacc" class="text-dark">खाता संख्या (ACCOUNT NUMBER)</label>
                       <input type="text" name="bankacc" id="bankacc" value="<?php echo $result1['Bank Account Number']; ?>" class="form-control" maxlength="11" placeholder="Enter Account Number" style="text-transform:uppercase;" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="IFSC" class="text-dark">आई0 एफ0 एस0 सी0 कोड (IFSC CODE)</label>
                         <input type="text" id="IFSC" name="IFSC" value="<?php echo $result1['IFSC Code']; ?>" class="form-control" maxlength="11" placeholder="Enter IFSC Code" style="text-transform: uppercase;" />                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                      <label for="BankName" class="text-dark">बैंक का नाम (BANK NAME)</label> 
                      <input type="text" id="BANKNAME" name="BANKNAME" value="<?php echo $result1['Bank Name']; ?>" class="form-control" placeholder="Enter Bank Name" style="text-transform: uppercase;" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <p class="text-center bg-dark text-white p-2 rounded">शैक्षिक योग्यता (EDUCATIONAL QUALIFICATIONS)</p>            
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!---- row start -->
                        <div class="col-md-12"><!-- column start ---->
                            <label for="edu">Education Qualifications</label>
                            <select name="edu" id="edu" class="form-control" onchange="transfer();">
                                <option value="<?php echo $result1['Education']; ?>"><?php echo $result1['Education']; ?></option>
                                <option value="HighSchool">HighSchool / ITI</option>
                                <option value="Intermediate">Intermediate</option>
                            </select><input type="hidden" name="edu11" id="edu11" value="" />
                        </div><!-- column end---->
            </div>

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="schoolName" class="text-dark">स्कूल का नाम  (NAME OF SCHOOL)</label> 
                     <input type="text" name="schoolName" id="schoolName" value="<?php echo $result1['School Name']; ?>" class="form-control" placeholder="Enter School Name" style="text-transform: uppercase;"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="Board" class="text-dark">बोर्ड (BOARD)</label> 
                     <input type="text" name="Board" id="Board" value="<?php echo $result1['Board'];  ?>" class="form-control" placeholder="Enter Board Name" style="text-transform: uppercase;"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                  <div class="col-md-12"><!-- column start-----> 
                        <label for="Board" class="text-dark">विषय (SUBJECT)</label>    
                        <input type="text" id="subject" name="subject" value="<?php echo $result1['Subject']; ?>" class="form-control" placeholder="Enter Subjects Name" style="text-transform: uppercase;" />        
                  </div><!-- column end -->                  
              </div><!-- row end-------->

              <div class="row mt-4"><!------ row start------>
                 <div class="col-md-12"><!-- column start------->
                     <label for="yop" class="text-dark">उत्तीर्ण वर्ष  (YEAR OF PASSING)</label> 
                     <select class="form-control" name="yop" id="yop" onchange="transfer();">
                         <option value="<?php echo $result1['Year of Passing']; ?>"><?php echo $result1['Year of Passing']; ?></option>
                         <?php 
                                $sql = "select * from year";
                                $query = mysqli_query($db,$sql);
                                while($result=mysqli_fetch_array($query)){
                            ?>
                            <option><?php echo $result['Year']?></option>
                            <?php
                                }
                            ?>
                     </select><input type="hidden" name="yop11" id="yop11" value="" />
                 </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4"><!------- row start ------>
                 <div class="col-md-12"><!-- column start----->
                    <label for="typeofmarks" class="text-dark">अंक के प्रकार (TYPE OF MARKS)</label>
                    <input type="text" name="typeofmarks" class="form-control" id="typeofmarks" value="<?php echo $result1['Type of Mark']; ?>" />
                 </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4" id="tbt"><!------ row start ----->
                   <div class="col-md-12"><!-- column start------>
                          <label for="totalmarks" class="text-dark">कुल अंक  (TOTAL MARKS)</label>
                          <input type="text" name="totalmarks" id="totalmarks" value="<?php echo $result1['Total Marks']; ?>" placeholder="Enter Total Marks" class="form-control" onchange="calculate();" />
                   </div><!-- column end -->       
              </div><!------ row end ----->

              <div class="row mt-4"><!------ row start ----->
                 <div class="col-md-12"><!-- column start----->
                    <label for="obtainmarks" class="text-dark">कुल प्राप्त अंक / सी. जी. पी. ए  (OBTAIN MARKS/CGPA)</label>
                    <input type="text" name="obtainmarks" id="obtainmarks" value="<?php echo $result1['Obtain Marks or CGPA']; ?>" class="form-control" placeholder="Enter CGPA" onchange="calculate();" />
                 </div><!-- column end -->
              </div><!-- row end ----->

              <div class="row mt-4"><!----row start----->
                <div class="col-md-12"><!-- column start-->
                   <label for="percentage" class="text-dark">प्रतिशत(PERCENTAGE/CGPA)</label>
                   <input type="text" name="percentage" id="percentage" value="<?php echo $result1['Percentage']; ?>" class="form-control" placeholder="Enter Percentage" onchange="calculate();" />
                </div><!-- column end -->
              </div><!-- row end -->
         </div><!-------- Education and Bank Details Tab End---------->

         <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab"><!-------- Document Upload Tab Start----------->
              <!--<div class="row mt-4"> row start 
                <div class="col-md-12"> column start
                <button type="button" class="btn btn-success" name="edit" id="edit" onclick="release5()">EDIT</button></br><br />
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
                </div>column end
              </div> row end -->

              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="aadhaarCard" class="text-dark">प्रवेश पत्र  (Admit Card)</label>
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
                   <label for="HighSchool" class="text-dark">आवंटन पत्र  (Allotment Letter)</label>
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
                   <label for="HighSchool" class="text-dark">अन्य योग्यताएं (Other Qualifications)</label>
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
                   <label for="Intermediate" class="text-dark">गैप हलफनामा (Gap Affidavit)</label>
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
                   <label for="HighSchool" class="text-dark">चिकित्सा प्रमाण पत्र (Medical Certificate)</label>
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
              
              <!--<div class="row mt-4">row start 
                     <div class="col-md-12"> column start 
                        <label for="date" style="float:left;">दिनाँक (DATE):</label><input type="date" name="decdate" id="decdate" value="<?php echo $result1['DeclarationDate']; ?>" class="form-control" style="width:15%;" />
                        <label for="signature" style="margin-left:50%;margin-top:-5%;">छात्र / छात्रा के हस्ताक्षर <br/> (CANDIDATE'S SIGNATURE)</label><br/>
                     </div>  column end
              </div> row end -->

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
                            <label for="decone">छात्र / छात्रा </label><label class="ml-3" id="para2" onchange="displayone();"><b><?php echo $result1['Name in Hindi']; ?></b></label> 
                            <label for="dectwo" class="ml-3"> पुत्र / पुत्री श्री  </label><label class="ml-2" id="para3" onchange="displayone();"><b><?php echo $result1['Father Name in Hindi']; ?></b></label>  
                            <label for="decthree" class="ml-3">को  प्रथम / द्वितीय / अंतिम वर्ष  </label><label class="ml-3" id="para4" onchange="displayone();"><b><?php echo $result1['Course']; ?></b></label>
                            <label for="decfour" class="ml-2">में प्रवेश की अनुमति  हेतु  संस्तुति प्रदान की जाती है। </label>
                        </fieldset>
                     </div> <!--- column end -->
              </div><!---- row end -->

              <div class="row mt-4"><!---- row start -->
                     <div class="col-md-12"><!-- column start---->
                       <label for="dec1">Candidate</label><label class="ml-2" id="para5" onchange="displayone();"><span class="ml-3"><b><?php echo $result1['First Name']; ?></b></span><span class="ml-3"><b><?php echo $result1['Middle Name']; ?></b></span><span class="ml-3"><b><?php echo $result1['Last Name']; ?></b></span></label>
                       <label for="dec2">Son/Daughter Shri</label><label class="ml-2" id="para6" onchange="displayone();"><b><span class="ml-3"><?php echo $result1['Father Name'];?></b></span></label>
                       <label for="dec3" class="ml-3">of First / Second / Final Year</label><label class="ml-2" id="para7" onchange="displayone();"><span><b><?php echo $result1['Course']; ?></b></span></label>
                       <label for="dec4">Recommendation for permission to enter.</label>
                     </div><!-- column end -->
              </div><!-- row end -->
              
              <div class="row mt-4"><!-------- row start-------->
                 <div class="col-md-12 text-center"><!-- column start------>
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">submit</button>
                 </div><!-- column end ------->
              </div><!-- row end ------>
         </div><!-------- Document Upload Tab End-----------><br /><br />
         <button type="button" class="prevtab btn btn-primary">Prev</button>
          <button type="button" class="nexttab btn btn-danger" style="float:right;">Next</button>
                    </div>
                       
        <?php
                    }
                }
             
             ?>
    <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Top <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
        </div><!-----container end -->
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
      /* -------------------------------------------------------------
            bootstrapTabControl
        ------------------------------------------------------------- */
        function bootstrapTabControl(){
            var i, items = $('.nav-link'), pane = $('.tab-pane');
            // next
            $('.nexttab').on('click', function(){
                for(i = 0; i < items.length; i++){
                    if($(items[i]).hasClass('active') == true){
                        break;
                    }
                }
                if(i < items.length - 1){
                    // for tab
                    $(items[i]).removeClass('active');
                    $(items[i+1]).addClass('active');
                    // for pane
                    $(pane[i]).removeClass('show active');
                    $(pane[i+1]).addClass('show active');
                }

            });
            // Prev
            $('.prevtab').on('click', function(){
                for(i = 0; i < items.length; i++){
                    if($(items[i]).hasClass('active') == true){
                        break;
                    }
                }
                if(i != 0){
                    // for tab
                    $(items[i]).removeClass('active');
                    $(items[i-1]).addClass('active');
                    // for pane
                    $(pane[i]).removeClass('show active');
                    $(pane[i-1]).addClass('show active');
                }
            });
        }
        bootstrapTabControl();
    </script>
    <script>
        function transfer(){
            document.getElementById('t11').value = document.getElementById('t1').value;
            document.getElementById('t21').value = document.getElementById('t2').value;
            document.getElementById('admin11').value = document.getElementById('AdmissionSession').value;
            document.getElementById('semester11').value = document.getElementById('semester').value;
            document.getElementById('gender11').value = document.getElementById('gender').value;
            document.getElementById('category11').value = document.getElementById('category').value;
            document.getElementById('marital11').value = document.getElementById('marital').value;
            document.getElementById('blood11').value = document.getElementById('blood').value;
            document.getElementById('add111').value = document.getElementById('add1').value;
            document.getElementById('diva11').value = document.getElementById('diva').value;
            document.getElementById('cstate11').value = document.getElementById('cstate').value;
            document.getElementById('pstate11').value = document.getElementById('pstate').value;
            document.getElementById('edu11').value = document.getElementById('edu').value; 
            document.getElementById('yop11').value = document.getElementById('yop').value;
            document.getElementById('course11').value = document.getElementById('course').value;
        }
    </script>
    <script>
        function myFunction(){
            document.getElementById('t1').disabled=true;
       document.getElementById('t2').disabled=true;
       document.getElementById('dateadd').readOnly = true;
       document.getElementById('brn').readOnly = true;
       document.getElementById('regNo').readOnly = true;
       document.getElementById('AdmissionSession').disabled=true;
       document.getElementById('jeep').readOnly = true;
       document.getElementById('RollNo1').readOnly = true;
       document.getElementById('course').disabled=true;
       document.getElementById('semester').disabled=true;
       document.getElementById('entry').readOnly = true;
       document.getElementById('tfw').readOnly = true;
       document.getElementById('firstname').readOnly = true;
       document.getElementById('middlename').readOnly = true;
       document.getElementById('lastname').readOnly = true;
       document.getElementById('hindiname').readOnly = true;
       document.getElementById('fathername').readOnly = true;
       document.getElementById('hindiname1').readOnly = true;
       document.getElementById('mothername').readOnly = true;
       document.getElementById('hindiname2').readOnly = true;
       document.getElementById('phone').readOnly = true;
       document.getElementById('dateone').readOnly = true;
       document.getElementById('Email').readOnly = true;
       document.getElementById('phone1').readOnly = true;
       document.getElementById('gender').disabled = true;
       document.getElementById('category').disabled = true;
       document.getElementById('marital').disabled = true;
       document.getElementById('blood').disabled = true;
       document.getElementById('add1').disabled = true;
       document.getElementById('diva').disabled = true;
       document.getElementById('div1').readOnly = true;
       document.getElementById('rec').readOnly = true;
       document.getElementById('emp').readOnly = true;
       document.getElementById('salary').readOnly = true;
       document.getElementById('aadhaar').readOnly = true;
       document.getElementById('ccity').readOnly = true;
       document.getElementById('cstreet').readOnly = true;
       document.getElementById('cstate').disabled = true;
       document.getElementById('cdistrict').readOnly = true;
       document.getElementById('cpincode').readOnly = true;
       //document.getElementById('sameAs').readOnly = true;
       document.getElementById('pcity').readOnly = true;
       document.getElementById('pstreet').readOnly = true;
       document.getElementById('pstate').disabled = true;
       document.getElementById('pdistrict').readOnly = true;
       document.getElementById('ppincode').readOnly = true;
       document.getElementById('bankacc').readOnly = true;
       document.getElementById('IFSC').readOnly = true;
       document.getElementById('BANKNAME').readOnly = true;
       document.getElementById('edu').disabled = true;
       document.getElementById('schoolName').readOnly = true;
       document.getElementById('Board').readOnly = true;
       document.getElementById('subject').readOnly = true;
       document.getElementById('yop').disabled = true;
       document.getElementById('typeofmarks').readOnly = true;
       document.getElementById('totalmarks').readOnly = true;
       document.getElementById('obtainmarks').readOnly = true;
       document.getElementById('percentage').readOnly = true;
       document.getElementById('file').readOnly = true;
       document.getElementById('output').readOnly = true;
       document.getElementById('file1').readOnly = true;
       document.getElementById('output1').readOnly = true;
       document.getElementById('file2251').readOnly = true;
       document.getElementById('output2251').readOnly = true;
       document.getElementById('file2').readOnly = true;
       document.getElementById('output2').readOnly = true;
       document.getElementById('file3351').readOnly = true;
       document.getElementById('output3351').readOnly = true;
       document.getElementById('file3').readOnly = true;
       document.getElementById('output3').readOnly = true;
       document.getElementById('file4').readOnly = true;
       document.getElementById('output4').readOnly = true;
       document.getElementById('file4451').readOnly = true;
       document.getElementById('output4451').readOnly = true;
       document.getElementById('file5551').readOnly = true;
       document.getElementById('output5551').readOnly = true;
       document.getElementById('file5').readOnly = true;
       document.getElementById('output5').readOnly = true;
       document.getElementById('file6').readOnly = true;
       document.getElementById('output6').readOnly = true;
       document.getElementById('decdate').readOnly = true;
       document.getElementById('file7').readOnly = true;
       document.getElementById('output7').readOnly = true;
        }
        function release(){
            var show = prompt("Enter password to unlock data: ");
            if(show=="estc@123"){
            document.getElementById('t1').disabled=false;
       document.getElementById('t2').disabled=false;
       document.getElementById('dateadd').readOnly=false;
       document.getElementById('brn').readOnly=false;
       document.getElementById('regNo').readOnly=false;
       document.getElementById('AdmissionSession').disabled=false;
       document.getElementById('jeep').readOnly=false;
       document.getElementById('RollNo1').readOnly=false;
       document.getElementById('course').disabled=false;
       document.getElementById('semester').disabled=false;
       document.getElementById('entry').readOnly=false;
       document.getElementById('tfw').readOnly=false;
            }
            else{
                alert("wrong password");
            }
        }

        function release1(){
            var show = prompt("Enter password to unlock data: ");
            if(show=="estc@123"){
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
            else{
                alert("wrong password");
            }
        }

        function release2(){
            var show = prompt("Enter password to unlock data: ");
            if(show=="estc@123"){
                document.getElementById('phone1').readOnly = false;
       document.getElementById('gender').disabled=false;
       document.getElementById('category').disabled=false;
       document.getElementById('marital').disabled=false;
       document.getElementById('blood').disabled=false;
       document.getElementById('add1').disabled = false;
       document.getElementById('diva').disabled=false;
       document.getElementById('div1').readOnly = false;
       document.getElementById('rec').readOnly = false;
            }
            else{
                alert("wrong password");
            }
        }

        function release3(){
            var show = prompt("Enter password to unlock data: ");
            if(show=="estc@123"){
                document.getElementById('emp').readOnly=false;
       document.getElementById('salary').readOnly=false;
       document.getElementById('aadhaar').readOnly=false;
       document.getElementById('ccity').readOnly=false;
       document.getElementById('cstreet').readOnly=false;
       document.getElementById('cstate').disabled = false;
       document.getElementById('cdistrict').readOnly=false;
       document.getElementById('cpincode').readOnly=false;
       //document.getElementById('sameAs').readOnly=false;
       document.getElementById('pcity').readOnly=false;
       document.getElementById('pstreet').readOnly=false;
       document.getElementById('pstate').disabled = false;
       document.getElementById('pdistrict').readOnly=false;
       document.getElementById('ppincode').readOnly=false;
            }
            else{
                alert("wrong password");
            }
        }


        function release4(){
            var show = prompt("Enter password to unlock data: ");
            if(show=="estc@123"){
                document.getElementById('bankacc').readOnly=false;
       document.getElementById('IFSC').readOnly=false;
       document.getElementById('BANKNAME').readOnly=false;
       document.getElementById('edu').disabled= false;
       document.getElementById('schoolName').readOnly=false;
       document.getElementById('Board').readOnly=false;
       document.getElementById('subject').readOnly=false;
       document.getElementById('yop').disabled=false;
       document.getElementById('typeofmarks').readOnly=false;
       document.getElementById('totalmarks').readOnly=false;
       document.getElementById('obtainmarks').readOnly=false;
       document.getElementById('percentage').readOnly=false;
            }
            else{
                alert("wrong password");
            }
        }


        function release5(){
            var show = prompt("Enter password to unlock data: ");
            if(show=="estc@123"){
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
            else{
                alert("wrong password");
            }
        }
    </script>
  </body>
</html>