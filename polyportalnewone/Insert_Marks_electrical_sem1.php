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

        <form action="studinfo.php" method="POST">

        <div class="container mt-5 rounded p-3 mb-5" style="box-shadow:4px 9px 25px 4px grey;"><!--- container start --->
        <p class="text-center h2 text-primary">Electrical Engineering Semester 1</p>
               <a href="insertrecord1.php" class="btn btn-danger">BACK</a><br /><br />
               <button type="button" class="prevtab btn btn-primary">Prev</button>
               <button type="button" class="nexttab btn btn-danger" style="float:right;">Next</button>     
               <div class="mt-2"></div>

               <ul class="nav nav-tabs" id="myTab" role="tablist"><!-- tab menu start -->
               <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student Details</a></li>
               <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">English - I</a></li>
               <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Mathematics -I</a></li>
               <li class="nav-item"><a class="nav-link" id="person-tab" data-toggle="tab" href="#person" role="tab" aria-controls="person" aria-selected="false">Physics - I</a></li>
               <li class="nav-item"><a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">Chemistry - I</a></li>
               <li class="nav-item"><a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">Computer Fund.</a></li>
               <li class="nav-item"><a class="nav-link" id="getting-tab" data-toggle="tab" href="#getting" role="tab" aria-controls="getting" aria-selected="false">Eng. Graphics -I.</a></li>
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
                                        <input type="text" name="regno" id="regno" value="<?php echo $result1['AdmissionNo1'].' '.$result1['AdmissionNo2'].' '.$result1['RegNo']; ?>" class="form-control" placeholder="Enter Registration No" />
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
                        <div class="col-md-12"><!-- column start----><br />
                        <p class="text-center bg-primary p-2 text-white">Theory Marks</p>
                            <label for="max1">Maximum</label>
                            <input type="text" name="max1" id="max1" class="form-control" placeholder="Enter Maximum Marks" /><br />    
                        </div><!-- column end---->
                    </div><!-----row end------->

                    <div class="row"><!--- row start------->
                        <div class="col-md-12"><!-- column start---->
                            <label for="obtained1">Obtained</label>
                            <input type="text" name="obtained1" id="obtained1" class="form-control" placeholder="Enter Maximum Marks" onkeyup="gettotals();" /><br /><br />     
                        </div><!-- column end---->
                    </div><!-----row end------->

                    <div class="row"><!--- row start------->
                        <div class="col-md-12"><!-- column start------->
                            <p class="text-center bg-primary p-2 text-white">Practical Marks</p>
                            <label for="max11">Maximum</label>
                            <input type="text" name="max11" id="max11" class="form-control" placeholder="Enter Maximum Marks" /><br /> 
                        </div><!--col end------->
                    </div><!-----row end------->

                    <div class="row"><!--row start------->
                        <div class="col-md-12"><!-- column start------>
                            <label for="obtained11">Obtained</label>
                            <input type="text" name="obtained11" id="obtained11" class="form-control" placeholder="Enter Obtained Marks" onkeyup="gettotals();" /><br />
                        </div><!------ column end------->
                    </div><!-----row end------->

                    <div class="row"><!--row start------->
                        <div class="col-md-12"><!-- column start------>
                            <label for="total12">Total</label>
                            <input type="text" name="total12" id="total12" class="form-control" onkeyup="gettotals();" /><br />
                        </div><!------ column end------->
                    </div><!-----row end------->
                </div><!---- Personal Detail I Tab end -------------->

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><!---- Personal Detail II -------------->
                    <div class="row mt-4"><!------ row start ------>
                        <div class="col-md-12"><!-- column start------->
                        <p class="text-center bg-primary p-2 text-white">Theory Marks</p>
                            <label for="max2" class="text-dark">Maximum</label>
                            <input type="text" class="form-control" name="max2" id="max2" placeholder="Enter Maximum Marks" />
                        </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start------>
                        <div class="col-md-12"><!-- column start------->
                                    <label for="obtained2" class="text-dark">Obtained</label>
                                    <input type="text" name="obtained2" id="obtained2" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>
                        </div><!-- column end -->            
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start------>
                                    <div class="col-md-12"><!-- column start------->
                                    <p class="text-center bg-primary p-2 text-white">Practical Marks</p>
                                        <label for="max21" class="text-dark">Maximum</label>
                                        <input type="text" name="max21" id="max21" class="form-control" placeholder="Enter Maximum Marks" /><br />
                                    </div><!-- column end ----->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start -------->
                                    <div class="col-md-12"><!-- column start--------->
                                        <label for="obtained21" class="text-dark">Obtained</label>
                                        <input type="text" class="form-control" name="obtained21" id="obtained21" placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start -->
                                    <div class="col-md-12"><!-- column start -->
                                        <label for="total22" class="text-dark">Total</label>
                                        <input type="text" class="form-control" name="total22" id="total22" onkeyup="gettotals();" />
                                    </div><!-- column end -->
                    </div><!-- row end -->

                </div><!----- Personal Detail II tab end -------------->

                <div class="tab-pane fade" id="person" role="tabpanel" aria-labelledby="person-tab"><!---- Personal Detail III tab start-------->
                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                    <p class="text-center bg-primary p-2 text-white">Theory Marks</p>
                                        <label for="max3" class="text-dark">Maximum</label>
                                        <input type="text" id="max3" name="max3" class="form-control" placeholder="Enter Maximum Marks"/>
                                    </div><!-- row end ------->
                      </div><!-- row end -->   
                      
                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="obtained3" class="text-dark">Obtained</label>
                                        <input type="text" name="obtained3" id="obtained3" class="form-control"  placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>
                                    </div><!-- row end ------->
                      </div><!-- row end -->   

                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                    <p class="text-center bg-primary p-2 text-white">Practical Marks</p>
                                        <label for="max31" class="text-dark">Maximum</label>
                                        <input type="text" id="max31" class="form-control" name="max31" placeholder="Enter Maximum Marks" />
                                    </div><!-- row end ------->
                      </div><!-- row end --> 

                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="obtained32" class="text-dark">Obtained</label>
                                        <input type="text" name="obtained32" id="obtained32" class="form-control"   placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>
                                    </div><!-- row end ------->
                      </div><!-- row end --> 
                      
                      <div class="row mt-4"><!-------------- row start----------->
             <div class="col-md-12">
               <label for="total33" class="text-dark">Total</label>
               <input type="text" class="form-control" name="total33" id="total33" onkeyup="gettotals();" />
             </div>            
           </div><!------- row end---------->

         </div><!-- Personal Detail III tab end -->

         <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab"><!----- Education and Bank Details Tab Start---------->
              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max4" class="text-dark">Maximum</label>
                       <input type="text" name="max4" id="max4" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained4" class="text-dark">Obtained</label>
                         <input type="text" name="obtained4" id="obtained4" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max41" class="text-dark">Maximum</label> 
                      <input type="text" id="max41" name="max41" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained42" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained42" id="obtained42" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total43" class="text-dark">Total</label> 
                     <input type="text" name="total43" id="total43" class="form-control" onkeyup="gettotals();" />           
                 </div><!-- column end -->                   
              </div><!-- row end -->

         </div><!-------- Education and Bank Details Tab End---------->

         <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab"><!-------- Document Upload Tab Start----------->
              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                <p class="text-center bg-primary p-2 text-white">Theory Marks</p>
                   <label for="max5" class="text-dark">Maximum</label>
                   <input type="text" name="max5" id="max5" class="form-control" placeholder="Enter Maximum Marks"/>
                   </div><!--col end---------->
              </div><!-- row end -->

              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="Obtained5" class="text-dark">Obtained</label>
                   <input type="text" name="obtained5" id="obtained5" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>
                </div><!--col end -------------------------------->
              </div><!-- row end -->

              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                <p class="text-center bg-primary p-2 text-white">Practical Marks</p>
                   <label for="max51" class="text-dark">Maximum</label>
                   <input type="text" name="max51" id="max51" class="form-control" placeholder="Enter Maximum Marks" />
                </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4" id="inter"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="Obtained52" class="text-dark">Obtained</label>
                   <input type="text" name="obtained52"  id="obtained52" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>
                </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="total53" class="text-dark">Total</label>
                   <input type="text" name="total53"  id="total53" class="form-control" onkeyup="gettotals();" />
                </div><!-- column end -->
              </div><!-- row end -->
         </div><!-------- Document Upload Tab End----------->

         <div class="tab-pane fade" id="getting" role="tabpanel" aria-labelledby="getting-tab"><!----- Education and Bank Details Tab Start---------->
              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max6" class="text-dark">Maximum</label>
                       <input type="text" name="max6" id="max6" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained6" class="text-dark">Obtained</label>
                         <input type="text" name="obtained6" id="obtained6" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max61" class="text-dark">Maximum</label> 
                      <input type="text" name="max61" id="max61" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained42" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained62" id="obtained62" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total63" class="text-dark">Total</label> 
                     <input type="text" name="total63" id="total63" class="form-control" onkeyup="gettotals();" />           
                 </div><!-- column end -->                   
              </div><!-- row end -->

         </div><!-------- Education and Bank Details Tab End---------->

         <div class="tab-pane fade" id="otherCurr" role="tabpanel" aria-labelledby="otherCurr-tab"><!----- Education and Bank Details Tab Start---------->
              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                  <p class="text-center bg-danger p-3 text-white">GENERAL WORKSHOP PRACTICE-1</p> 
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max7" class="text-dark">Maximum</label>
                       <input type="text" name="max7" id="max7" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained7" class="text-dark">Obtained</label>
                         <input type="text" name="obtained7" id="obtained7" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max71" class="text-dark">Maximum</label> 
                      <input type="text" name="max71" id="max71" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained72" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained72" id="obtained72" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total73" class="text-dark">Total</label> 
                     <input type="text" name="total73" id="total73" class="form-control" onkeyup="gettotals();"/> <br/><br />          
                 </div><!-- column end -->                   
              </div><!-- row end -->


              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                  <p class="text-center bg-danger p-3 text-white">GENERAL PROFICIENCY</p> 
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max8" class="text-dark">Maximum</label>
                       <input type="text" name="max8" id="max8" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained8" class="text-dark">Obtained</label>
                         <input type="text" name="obtained8" id="obtained8" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max81" class="text-dark">Maximum</label> 
                      <input type="text" name="max81" id="max81" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained82" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained82" id="obtained82" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total83" class="text-dark">Total</label> 
                     <input type="text" name="total83" id="total83" class="form-control" onkeyup="gettotals();"/> <br/><br />          
                 </div><!-- column end -->                   
              </div><!-- row end -->


              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                  <p class="text-center bg-danger p-3 text-white">INDUSTRIAL EXPOSURE</p> 
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max9" class="text-dark">Maximum</label>
                       <input type="text" name="max9" id="max9" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained9" class="text-dark">Obtained</label>
                         <input type="text" name="obtained9" id="obtained9" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max91" class="text-dark">Maximum</label> 
                      <input type="text" name="max91" id="max91" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained92" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained92" id="obtained92" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total93" class="text-dark">Total</label> 
                     <input type="text" name="total93" id="total93" class="form-control" onkeyup="gettotals();"/> <br/>         
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="grandtotal" class="text-dark">Grand Total</label> 
                     <input type="text" name="grandtotal" id="grandtotal" class="form-control" onkeyup="gettotals();" /> <br/>          
                 </div><!-- column end -->                   
              </div><!-- row end -->
              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="percentage112" class="text-dark">Percentage</label> 
                     <input type="text" name="percentage112" id="percentage112" class="form-control" onkeyup="gettotals();" /> <br/>        
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
        function gettotals() {
            document.getElementById('total12').value=parseInt(document.getElementById('obtained1').value) + parseInt(document.getElementById('obtained11').value);
            document.getElementById('total22').value=parseInt(document.getElementById('obtained2').value) + parseInt(document.getElementById('obtained21').value);
            document.getElementById('total33').value=parseInt(document.getElementById('obtained3').value) + parseInt(document.getElementById('obtained32').value);
            document.getElementById('total43').value=parseInt(document.getElementById('obtained4').value) + parseInt(document.getElementById('obtained42').value);
            document.getElementById('total53').value=parseInt(document.getElementById('obtained5').value) + parseInt(document.getElementById('obtained52').value);
            document.getElementById('total63').value=parseInt(document.getElementById('obtained6').value) + parseInt(document.getElementById('obtained62').value);
            document.getElementById('total73').value=parseInt(document.getElementById('obtained7').value) + parseInt(document.getElementById('obtained72').value);
            document.getElementById('total83').value=parseInt(document.getElementById('obtained8').value) + parseInt(document.getElementById('obtained82').value);
            document.getElementById('total93').value=parseInt(document.getElementById('obtained9').value) + parseInt(document.getElementById('obtained92').value);
            document.getElementById('grandtotal').value = parseInt(document.getElementById('total12').value) + parseInt(document.getElementById('total22').value) + parseInt(document.getElementById('total33').value) + parseInt(document.getElementById('total43').value) + parseInt(document.getElementById('total53').value) + parseInt(document.getElementById('total63').value) + parseInt(document.getElementById('total73').value) + parseInt(document.getElementById('total83').value) + parseInt(document.getElementById('total93').value);
            document.getElementById('percentage112').value=parseInt((document.getElementById('grandtotal').value*100)/900);

        }
    </script>
  </body>
</html>