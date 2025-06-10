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
  <body>
  <?php include('header.php') ?>

        <form action="studinfo1.php" method="POST">

        <div class="container mt-5 rounded p-3 mb-5" style="box-shadow:4px 9px 25px 4px grey;"><!--- container start --->
        <p class="text-center h2 text-primary">Electrical Engineering Semester 2</p>
               <a href="insertrecord2.php" class="btn btn-danger">BACK</a></a><br /><br />
               <button type="button" class="prevtab btn btn-primary">Prev</button>
               <button type="button" class="nexttab btn btn-danger" style="float:right;">Next</button>      
               <div class="mt-2"></div>

               <ul class="nav nav-tabs" id="myTab" role="tablist"><!-- tab menu start -->
               <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student Details</a></li>
               <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">English-II</a></li>
               <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Mathematics-II</a></li>
               <li class="nav-item"><a class="nav-link" id="person-tab" data-toggle="tab" href="#person" role="tab" aria-controls="person" aria-selected="false">Physics-II</a></li>
               <li class="nav-item"><a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">Chemistry-II</a></li>
               <li class="nav-item"><a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">Environment Sc.</a></li>
               <li class="nav-item"><a class="nav-link" id="getting-tab" data-toggle="tab" href="#getting" role="tab" aria-controls="getting" aria-selected="false">Eng. Graphics-I.</a></li>
               <li class="nav-item"><a class="nav-link" id="otherCurr-tab" data-toggle="tab" href="#otherCurr" role="tab" aria-controls="otherCurr" aria-selected="false">Other Curriculum</a></li>
               </ul><!-- tab menu end -->
                
                <?php 
                        if(isset($_POST['submit']))
                        {
                            $dateadd1=$_POST['dateadd1'];
                            $brn1=$_POST['brn1'];
                            $regNo1=$_POST['regNo1'];
                            $sql1 = "SELECT * FROM `record` WHERE `AdmissionNo1`='$dateadd1' AND `AdmissionNo2`='$brn1' AND `RegNo`='$regNo1'";
                            $query1 = mysqli_query($db,$sql1);
                            while($result1=mysqli_fetch_array($query1)){
                        

                ?>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><!-- Admission Details Tab Start -->
                       <div class="row mt-2"><!-- row start -->
                            <div class="col-md-12"><!-- column start -->
                                    <label for="Admission" class="text-dark">STUDENT NAME</label><input type="text"  class="form-control" placeholder="Enter student Name" name="studname" id="studname" value="<?php echo $result1['First Name'].' '.$result1['Middle Name'].' '.$result1['Last Name']; ?>" style="text-transform:uppercase;" required />
                            </div><!-- column end -->        
                       </div><!-- row end-->


                       <div class="row mt-4"><!------ row start---->
                                    <div class="col-md-12"><!--column start----->
                                        <label for="entry" class="mt-2 text-dark">FatherName</label>
                                        <input type="text" name="fathername" class="form-control" id="fathername" value="<?php echo $result1['Father Name']; ?>" placeholder="Enter Father Name" style="text-transform: uppercase;" />
                                    </div><!-- row end -->
                       </div><!-- row end -->

                       <div class="row mt-4"><!------ row start---->
                                    <div class="col-md-12"><!--column start-->
                                        <label for="reg_no" class="mt-2 text-dark">Registration No</label>
                                        <input type="text" name="regno" id="regno" value="<?php echo $result1['AdmissionNo1'].' '.$result1['AdmissionNo2'].' '.$result1['RegNo']; ?>" placeholder="Enter Registration No" class="form-control" />
                                    </div><!-----column end ------->
                       </div><!-- row end -->

                       <div class="row mt-4"><!------ row start---->
                                    <div class="col-md-12"><!--column start-->
                                        <label for="rollno" class="mt-2 text-dark">Roll No</label>
                                        <input type="text" name="rollno" id="rollno" placeholder="Enter Roll No" class="form-control" />
                                    </div><!-----column end ------->
                       </div><!-- row end -->

                       <div class="row mt-4"><!------ row start---->
                                    <div class="col-md-12"><!--column start-->
                                        <label for="date" class="mt-2 text-dark">Date</label>
                                        <input type="date" name="dateent" id="dateent" class="form-control" />
                                    </div><!-----column end ------->
                       </div><!-- row end -->


                       <div class="row mt-4"><!------ row start------>
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="category" class="text-dark">जाती (CATEGORY)</label>
                                        <select class="form-control" name="category" id="category">
                                        <option><?php echo $result1['Category']; ?></option>
                                        </select><br />
                                    </div><!-- column end -->
                    </div><!-- row end -->
                </div><!-- Admission Details Tab End -->

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><!---- Personal Detail I Tab ---------->
                    <div class="row"><!--- row start------->
                        <div class="col-md-12"><!-- column start----><br/>
                        <p class="text-center bg-primary p-2 text-white">Theory Marks</p>
                            <label for="max11">Maximum</label>
                            <input type="text" name="max11" id="max11" class="form-control" placeholder="Enter Maximum Marks" /><br />    
                        </div><!-- column end---->
                    </div><!-----row end------->

                    <div class="row"><!--- row start------->
                        <div class="col-md-12"><!-- column start---->
                            <label for="obtained11">Obtained</label>
                            <input type="text" name="obtained11" id="obtained11" class="form-control" placeholder="Enter Maximum Marks" onkeyup="gettotals1();" /><br /><br />     
                        </div><!-- column end---->
                    </div><!-----row end------->

                    <div class="row"><!--- row start------->
                        <div class="col-md-12"><!-- column start------->
                            <p class="text-center bg-primary p-2 text-white">Practical Marks</p>
                            <label for="max111">Maximum</label>
                            <input type="text" name="max111" id="max111" class="form-control" placeholder="Enter Maximum Marks" /><br /> 
                        </div><!--col end------->
                    </div><!-----row end------->

                    <div class="row"><!--row start------->
                        <div class="col-md-12"><!-- column start------>
                            <label for="obtained111">Obtained</label>
                            <input type="text" name="obtained111" id="obtained111" class="form-control" placeholder="Enter Obtained Marks" onkeyup="gettotals1();" /><br />
                        </div><!------ column end------->
                    </div><!-----row end------->

                    <div class="row"><!--row start------->
                        <div class="col-md-12"><!-- column start------>
                            <label for="total121">Total</label>
                            <input type="text" name="total121" id="total121" class="form-control" onkeyup="gettotals1();" /><br />
                        </div><!------ column end------->
                    </div><!-----row end------->
                </div><!---- Personal Detail I Tab end -------------->

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><!---- Personal Detail II -------------->
                    <div class="row mt-4"><!------ row start ------>
                        <div class="col-md-12"><!-- column start------->
                        <p class="text-center bg-primary p-2 text-white">Theory Marks</p>
                            <label for="max21" class="text-dark">Maximum</label>
                            <input type="text" class="form-control" name="max21" id="max21" placeholder="Enter Maximum Marks" />
                        </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start------>
                        <div class="col-md-12"><!-- column start------->
                                    <label for="obtained21" class="text-dark">Obtained</label>
                                    <input type="text" name="obtained21" id="obtained21" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>
                        </div><!-- column end -->            
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start------>
                                    <div class="col-md-12"><!-- column start------->
                                    <p class="text-center bg-primary p-2 text-white">Practical Marks</p>
                                        <label for="max211" class="text-dark">Maximum</label>
                                        <input type="text" name="max211" id="max211" class="form-control" placeholder="Enter Maximum Marks" /><br />
                                    </div><!-- column end ----->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start -------->
                                    <div class="col-md-12"><!-- column start--------->
                                        <label for="obtained211" class="text-dark">Obtained</label>
                                        <input type="text" class="form-control" name="obtained211" id="obtained211" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start -->
                                    <div class="col-md-12"><!-- column start -->
                                        <label for="total221" class="text-dark">Total</label>
                                        <input type="text" class="form-control" name="total221" id="total221" onkeyup="gettotals1();" />
                                    </div><!-- column end -->
                    </div><!-- row end -->

                </div><!----- Personal Detail II tab end -------------->

                <div class="tab-pane fade" id="person" role="tabpanel" aria-labelledby="person-tab"><!---- Personal Detail III tab start-------->
                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                    <p class="text-center bg-primary p-2 text-white">Theory Marks</p>
                                        <label for="max31" class="text-dark">Maximum</label>
                                        <input type="text" id="max31" name="max31" class="form-control" placeholder="Enter Maximum Marks"/>
                                    </div><!-- row end ------->
                      </div><!-- row end -->   
                      
                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="obtained31" class="text-dark">Obtained</label>
                                        <input type="text" name="obtained31" id="obtained31" class="form-control"  placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>
                                    </div><!-- row end ------->
                      </div><!-- row end -->   

                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                    <p class="text-center bg-primary p-2 text-white">Practical Marks</p>
                                        <label for="max311" class="text-dark">Maximum</label>
                                        <input type="text" id="max311" class="form-control" name="max311" placeholder="Enter Maximum Marks" />
                                    </div><!-- row end ------->
                      </div><!-- row end --> 

                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="obtained321" class="text-dark">Obtained</label>
                                        <input type="text" name="obtained321" id="obtained321" class="form-control"   placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>
                                    </div><!-- row end ------->
                      </div><!-- row end --> 
                      
                      <div class="row mt-4"><!-------------- row start----------->
             <div class="col-md-12">
               <label for="total331" class="text-dark">Total</label>
               <input type="text" class="form-control" name="total331" id="total331" onkeyup="gettotals1();" />
             </div>            
           </div><!------- row end---------->

         </div><!-- Personal Detail III tab end -->

         <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab"><!----- Education and Bank Details Tab Start---------->
              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max41" class="text-dark">Maximum</label>
                       <input type="text" name="max41" id="max41" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained41" class="text-dark">Obtained</label>
                         <input type="text" name="obtained41" id="obtained41" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max411" class="text-dark">Maximum</label> 
                      <input type="text" id="max411" name="max411" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained421" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained421" id="obtained421" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total431" class="text-dark">Total</label> 
                     <input type="text" name="total431" id="total431" class="form-control" onkeyup="gettotals1();" />           
                 </div><!-- column end -->                   
              </div><!-- row end -->

         </div><!-------- Education and Bank Details Tab End---------->

         <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab"><!-------- Document Upload Tab Start----------->
              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                <p class="text-center bg-primary p-2 text-white">Theory Marks</p>
                   <label for="max51" class="text-dark">Maximum</label>
                   <input type="text" name="max51" id="max51" class="form-control" placeholder="Enter Maximum Marks"/>
                   </div><!--col end---------->
              </div><!-- row end -->

              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="Obtained51" class="text-dark">Obtained</label>
                   <input type="text" name="obtained51" id="obtained51" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>
                </div><!--col end -------------------------------->
              </div><!-- row end -->

              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                <p class="text-center bg-primary p-2 text-white">Practical Marks</p>
                   <label for="max511" class="text-dark">Maximum</label>
                   <input type="text" name="max511" id="max511" class="form-control" placeholder="Enter Maximum Marks" />
                </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4" id="inter"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="Obtained521" class="text-dark">Obtained</label>
                   <input type="text" name="obtained521"  id="obtained521" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>
                </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="total531" class="text-dark">Total</label>
                   <input type="text" name="total531"  id="total531" class="form-control" onkeyup="gettotals1();" />
                </div><!-- column end -->
              </div><!-- row end -->
         </div><!-------- Document Upload Tab End----------->

         <div class="tab-pane fade" id="getting" role="tabpanel" aria-labelledby="getting-tab"><!----- Education and Bank Details Tab Start---------->
              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max61" class="text-dark">Maximum</label>
                       <input type="text" name="max61" id="max61" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained61" class="text-dark">Obtained</label>
                         <input type="text" name="obtained61" id="obtained61" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max611" class="text-dark">Maximum</label> 
                      <input type="text" name="max611" id="max611" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained621" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained621" id="obtained621" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total631" class="text-dark">Total</label> 
                     <input type="text" name="total631" id="total631" class="form-control" onkeyup="gettotals1();" />           
                 </div><!-- column end -->                   
              </div><!-- row end -->

         </div><!-------- Education and Bank Details Tab End---------->

         <div class="tab-pane fade" id="otherCurr" role="tabpanel" aria-labelledby="otherCurr-tab"><!----- Education and Bank Details Tab Start---------->
              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                  <p class="text-center bg-danger p-3 text-white">GENERAL WORKSHOP PRACTICE-1</p> 
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max71" class="text-dark">Maximum</label>
                       <input type="text" name="max71" id="max71" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained71" class="text-dark">Obtained</label>
                         <input type="text" name="obtained71" id="obtained71" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max711" class="text-dark">Maximum</label> 
                      <input type="text" name="max711" id="max711" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained721" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained721" id="obtained721" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total731" class="text-dark">Total</label> 
                     <input type="text" name="total731" id="total731" class="form-control" onkeyup="gettotals1();"/> <br/><br />          
                 </div><!-- column end -->                   
              </div><!-- row end -->


              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                  <p class="text-center bg-danger p-3 text-white">GENERAL PROFICIENCY</p> 
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max81" class="text-dark">Maximum</label>
                       <input type="text" name="max81" id="max81" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained81" class="text-dark">Obtained</label>
                         <input type="text" name="obtained81" id="obtained81" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max811" class="text-dark">Maximum</label> 
                      <input type="text" name="max811" id="max811" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained821" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained821" id="obtained821" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total831" class="text-dark">Total</label> 
                     <input type="text" name="total831" id="total831" class="form-control" onkeyup="gettotals1();"/> <br/><br />          
                 </div><!-- column end -->                   
              </div><!-- row end -->


              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                  <p class="text-center bg-danger p-3 text-white">INDUSTRIAL EXPOSURE</p> 
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max91" class="text-dark">Maximum</label>
                       <input type="text" name="max91" id="max91" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained91" class="text-dark">Obtained</label>
                         <input type="text" name="obtained91" id="obtained91" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max911" class="text-dark">Maximum</label> 
                      <input type="text" name="max911" id="max911" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained921" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained921" id="obtained921" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total931" class="text-dark">Total</label> 
                     <input type="text" name="total931" id="total931" class="form-control" onkeyup="gettotals1();"/> <br/>         
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="grandtotal1" class="text-dark">Grand Total</label> 
                     <input type="text" name="grandtotal1" id="grandtotal1" class="form-control" onkeyup="gettotals1();" /> <br/>          
                 </div><!-- column end -->                   
              </div><!-- row end -->
              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="percentage1121" class="text-dark">Percentage</label> 
                     <input type="text" name="percentage1121" id="percentage1121" class="form-control" onkeyup="gettotals1();" /> <br/>        
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!-- row start -->
                <div class="col-md-12 text-center"><!-- column start -->
                    <button type="submit" name="submit" id="submit" class="btn btn-danger">SUBMIT</button>
                </div><!-- start column--->
              </div><!--row end-->

         </div></div><!-------- Education and Bank Details Tab End----------><br /><br />
         <button type="button" class="prevtab btn btn-primary">Prev</button>
          <button type="button" class="nexttab btn btn-danger" style="float:right;">Next</button>
         <?php
                        }
                    }

                        ?>
         <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Top <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
        </div><!-----container end --><br /><br /><br /><br />
        <?php include('footer.php'); ?>
    </form>
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
    <script type="text/javascript">
        function gettotals1() {
            document.getElementById('total121').value=parseInt(document.getElementById('obtained11').value) + parseInt(document.getElementById('obtained111').value);
            document.getElementById('total221').value=parseInt(document.getElementById('obtained21').value) + parseInt(document.getElementById('obtained211').value);
            document.getElementById('total331').value=parseInt(document.getElementById('obtained31').value) + parseInt(document.getElementById('obtained321').value);
            document.getElementById('total431').value=parseInt(document.getElementById('obtained41').value) + parseInt(document.getElementById('obtained421').value);
            document.getElementById('total531').value=parseInt(document.getElementById('obtained51').value) + parseInt(document.getElementById('obtained521').value);
            document.getElementById('total631').value=parseInt(document.getElementById('obtained61').value) + parseInt(document.getElementById('obtained621').value);
            document.getElementById('total731').value=parseInt(document.getElementById('obtained71').value) + parseInt(document.getElementById('obtained721').value);
            document.getElementById('total831').value=parseInt(document.getElementById('obtained81').value) + parseInt(document.getElementById('obtained821').value);
            document.getElementById('total931').value=parseInt(document.getElementById('obtained91').value) + parseInt(document.getElementById('obtained921').value);
            document.getElementById('grandtotal1').value = parseInt(document.getElementById('total121').value) + parseInt(document.getElementById('total221').value) + parseInt(document.getElementById('total331').value) + parseInt(document.getElementById('total431').value) + parseInt(document.getElementById('total531').value) + parseInt(document.getElementById('total631').value) + parseInt(document.getElementById('total731').value) + parseInt(document.getElementById('total831').value) + parseInt(document.getElementById('total931').value);
            document.getElementById('percentage1121').value=parseInt((document.getElementById('grandtotal1').value*100)/900);

        }
    </script>
  </body>
</html>