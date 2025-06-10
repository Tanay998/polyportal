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

        <form action="studinfo1m.php" method="POST">

        <div class="container mt-5 rounded p-3 mb-5" style="box-shadow:4px 9px 25px 4px grey;"><!--- container start --->
        <p class="text-center h2 text-primary">Mechanical Engineering Semester 2</p>            
               <a href="insertrecord2m.php" class="btn btn-danger">BACK</a><br /><br />
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
                            <label for="max11m">Maximum</label>
                            <input type="text" name="max11m" id="max11m" class="form-control" placeholder="Enter Maximum Marks" /><br />    
                        </div><!-- column end---->
                    </div><!-----row end------->

                    <div class="row"><!--- row start------->
                        <div class="col-md-12"><!-- column start---->
                            <label for="obtained11">Obtained</label>
                            <input type="text" name="obtained11m" id="obtained11m" class="form-control" placeholder="Enter Maximum Marks" onkeyup="gettotals1();" /><br /><br />     
                        </div><!-- column end---->
                    </div><!-----row end------->

                    <div class="row"><!--- row start------->
                        <div class="col-md-12"><!-- column start------->
                            <p class="text-center bg-primary p-2 text-white">Practical Marks</p>
                            <label for="max111m">Maximum</label>
                            <input type="text" name="max111m" id="max111m" class="form-control" placeholder="Enter Maximum Marks" /><br /> 
                        </div><!--col end------->
                    </div><!-----row end------->

                    <div class="row"><!--row start------->
                        <div class="col-md-12"><!-- column start------>
                            <label for="obtained111m">Obtained</label>
                            <input type="text" name="obtained111m" id="obtained111m" class="form-control" placeholder="Enter Obtained Marks" onkeyup="gettotals1();" /><br />
                        </div><!------ column end------->
                    </div><!-----row end------->

                    <div class="row"><!--row start------->
                        <div class="col-md-12"><!-- column start------>
                            <label for="total121m">Total</label>
                            <input type="text" name="total121m" id="total121m" class="form-control" onkeyup="gettotals1();" /><br />
                        </div><!------ column end------->
                    </div><!-----row end------->
                </div><!---- Personal Detail I Tab end -------------->

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><!---- Personal Detail II -------------->
                    <div class="row mt-4"><!------ row start ------>
                        <div class="col-md-12"><!-- column start------->
                        <p class="text-center bg-primary p-2 text-white">Theory Marks</p>
                            <label for="max21m" class="text-dark">Maximum</label>
                            <input type="text" class="form-control" name="max21m" id="max21m" placeholder="Enter Maximum Marks" />
                        </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start------>
                        <div class="col-md-12"><!-- column start------->
                                    <label for="obtained21m" class="text-dark">Obtained</label>
                                    <input type="text" name="obtained21m" id="obtained21m" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>
                        </div><!-- column end -->            
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start------>
                                    <div class="col-md-12"><!-- column start------->
                                    <p class="text-center bg-primary p-2 text-white">Practical Marks</p>
                                        <label for="max211m" class="text-dark">Maximum</label>
                                        <input type="text" name="max211m" id="max211m" class="form-control" placeholder="Enter Maximum Marks" /><br />
                                    </div><!-- column end ----->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start -------->
                                    <div class="col-md-12"><!-- column start--------->
                                        <label for="obtained211m" class="text-dark">Obtained</label>
                                        <input type="text" class="form-control" name="obtained211m" id="obtained211m" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>
                                    </div><!-- column end -->
                    </div><!-- row end -->

                    <div class="row mt-4"><!------ row start -->
                                    <div class="col-md-12"><!-- column start -->
                                        <label for="total221m" class="text-dark">Total</label>
                                        <input type="text" class="form-control" name="total221m" id="total221m" onkeyup="gettotals1();" />
                                    </div><!-- column end -->
                    </div><!-- row end -->

                </div><!----- Personal Detail II tab end -------------->

                <div class="tab-pane fade" id="person" role="tabpanel" aria-labelledby="person-tab"><!---- Personal Detail III tab start-------->
                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                    <p class="text-center bg-primary p-2 text-white">Theory Marks</p>
                                        <label for="max31m" class="text-dark">Maximum</label>
                                        <input type="text" id="max31m" name="max31m" class="form-control" placeholder="Enter Maximum Marks"/>
                                    </div><!-- row end ------->
                      </div><!-- row end -->   
                      
                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="obtained31m" class="text-dark">Obtained</label>
                                        <input type="text" name="obtained31m" id="obtained31m" class="form-control"  placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>
                                    </div><!-- row end ------->
                      </div><!-- row end -->   

                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                    <p class="text-center bg-primary p-2 text-white">Practical Marks</p>
                                        <label for="max311m" class="text-dark">Maximum</label>
                                        <input type="text" id="max311m" class="form-control" name="max311" placeholder="Enter Maximum Marks" />
                                    </div><!-- row end ------->
                      </div><!-- row end --> 

                      <div class="row mt-4"><!---- row start-------->
                                    <div class="col-md-12"><!-- column start------->
                                        <label for="obtained321m" class="text-dark">Obtained</label>
                                        <input type="text" name="obtained321m" id="obtained321m" class="form-control"   placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>
                                    </div><!-- row end ------->
                      </div><!-- row end --> 
                      
                      <div class="row mt-4"><!-------------- row start----------->
             <div class="col-md-12">
               <label for="total331m" class="text-dark">Total</label>
               <input type="text" class="form-control" name="total331m" id="total331m" onkeyup="gettotals1();" />
             </div>            
           </div><!------- row end---------->

         </div><!-- Personal Detail III tab end -->

         <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab"><!----- Education and Bank Details Tab Start---------->
              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max41m" class="text-dark">Maximum</label>
                       <input type="text" name="max41m" id="max41m" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained41m" class="text-dark">Obtained</label>
                         <input type="text" name="obtained41m" id="obtained41m" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max411m" class="text-dark">Maximum</label> 
                      <input type="text" id="max411m" name="max411m" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained421m" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained421m" id="obtained421m" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total431m" class="text-dark">Total</label> 
                     <input type="text" name="total431m" id="total431m" class="form-control" onkeyup="gettotals1();" />           
                 </div><!-- column end -->                   
              </div><!-- row end -->

         </div><!-------- Education and Bank Details Tab End---------->

         <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab"><!-------- Document Upload Tab Start----------->
              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                <p class="text-center bg-primary p-2 text-white">Theory Marks</p>
                   <label for="max51m" class="text-dark">Maximum</label>
                   <input type="text" name="max51m" id="max51m" class="form-control" placeholder="Enter Maximum Marks"/>
                   </div><!--col end---------->
              </div><!-- row end -->

              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="Obtained51m" class="text-dark">Obtained</label>
                   <input type="text" name="obtained51m" id="obtained51m" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>
                </div><!--col end -------------------------------->
              </div><!-- row end -->

              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                <p class="text-center bg-primary p-2 text-white">Practical Marks</p>
                   <label for="max511m" class="text-dark">Maximum</label>
                   <input type="text" name="max511m" id="max511m" class="form-control" placeholder="Enter Maximum Marks" />
                </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4" id="inter"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="Obtained521m" class="text-dark">Obtained</label>
                   <input type="text" name="obtained521m"  id="obtained521m" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>
                </div><!-- column end -->
              </div><!-- row end -->

              <div class="row mt-4"><!--------- row start -------------------------------->
                <div class="col-md-12"><!-- column start------->
                   <label for="total531m" class="text-dark">Total</label>
                   <input type="text" name="total531m"  id="total531m" class="form-control" onkeyup="gettotals1();" />
                </div><!-- column end -->
              </div><!-- row end -->
         </div><!-------- Document Upload Tab End----------->

         <div class="tab-pane fade" id="getting" role="tabpanel" aria-labelledby="getting-tab"><!----- Education and Bank Details Tab Start---------->
              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max61m" class="text-dark">Maximum</label>
                       <input type="text" name="max61m" id="max61m" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained61m" class="text-dark">Obtained</label>
                         <input type="text" name="obtained61m" id="obtained61m" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max611m" class="text-dark">Maximum</label> 
                      <input type="text" name="max611m" id="max611m" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained621m" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained621m" id="obtained621m" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total631m" class="text-dark">Total</label> 
                     <input type="text" name="total631m" id="total631m" class="form-control" onkeyup="gettotals1();" />           
                 </div><!-- column end -->                   
              </div><!-- row end -->

         </div><!-------- Education and Bank Details Tab End---------->

         <div class="tab-pane fade" id="otherCurr" role="tabpanel" aria-labelledby="otherCurr-tab"><!----- Education and Bank Details Tab Start---------->
              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                  <p class="text-center bg-danger p-3 text-white">GENERAL WORKSHOP PRACTICE-1</p> 
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max71m" class="text-dark">Maximum</label>
                       <input type="text" name="max71m" id="max71m" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained71m" class="text-dark">Obtained</label>
                         <input type="text" name="obtained71m" id="obtained71m" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max711m" class="text-dark">Maximum</label> 
                      <input type="text" name="max711m" id="max711m" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained721m" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained721m" id="obtained721m" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total731m" class="text-dark">Total</label> 
                     <input type="text" name="total731m" id="total731m" class="form-control" onkeyup="gettotals1();"/> <br/><br />          
                 </div><!-- column end -->                   
              </div><!-- row end -->


              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                  <p class="text-center bg-danger p-3 text-white">GENERAL PROFICIENCY</p> 
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max81m" class="text-dark">Maximum</label>
                       <input type="text" name="max81m" id="max81m" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained81m" class="text-dark">Obtained</label>
                         <input type="text" name="obtained81m" id="obtained81m" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max811m" class="text-dark">Maximum</label> 
                      <input type="text" name="max811m" id="max811m" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained821m" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained821m" id="obtained821m" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total831m" class="text-dark">Total</label> 
                     <input type="text" name="total831m" id="total831m" class="form-control" onkeyup="gettotals1();"/> <br/><br />          
                 </div><!-- column end -->                   
              </div><!-- row end -->


              <div class="row mt-4"><!----------- row start--------------->
                  <div class="col-md-12"><!-- column start------>
                  <p class="text-center bg-danger p-3 text-white">INDUSTRIAL EXPOSURE</p> 
                       <p class="text-center bg-primary p-2 text-white">Theory Marks</p>  
                       <label for="max91m" class="text-dark">Maximum</label>
                       <input type="text" name="max91m" id="max91m" class="form-control" placeholder="Enter Maximum Marks" />           
                  </div><!---- column end -->                  
              </div><!-- row end -->    
              
              <div class="row mt-4"><!----- row start----------->
                   <div class="col-md-12"><!---- column start-------->
                         <label for="Obtained91m" class="text-dark">Obtained</label>
                         <input type="text" name="obtained91m" id="obtained91m" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>                
                   </div><!------ column end-------->                 
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start----------->
                  <div class="col-md-12"><!---- column start----------->
                  <p class="text-center bg-primary p-2 text-white">Practical Marks</p> 
                      <label for="max911m" class="text-dark">Maximum</label> 
                      <input type="text" name="max911m" id="max911m" class="form-control" placeholder="Enter Maximum Marks" />              
                  </div><!------column end---------->                   
              </div><!-- row end --> 

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->
                     <label for="obtained921m" class="text-dark">Obtained</label> 
                     <input type="text" name="obtained921m" id="obtained921m" class="form-control" placeholder="Enter Marks Obtained" onkeyup="gettotals1();"/>           
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="total931m" class="text-dark">Total</label> 
                     <input type="text" name="total931m" id="total931m" class="form-control" onkeyup="gettotals1();"/> <br/>         
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="grandtotal1m" class="text-dark">Grand Total</label> 
                     <input type="text" name="grandtotal1m" id="grandtotal1m" class="form-control" onkeyup="gettotals1();" /> <br/>          
                 </div><!-- column end -->                   
              </div><!-- row end -->
              <div class="row mt-4"><!----- row start---------->
                 <div class="col-md-12"><!-- column start----->  
                     <label for="percentage1121m" class="text-dark">Percentage</label> 
                     <input type="text" name="percentage1121m" id="percentage1121m" class="form-control" onkeyup="gettotals1();" /> <br/>        
                 </div><!-- column end -->                   
              </div><!-- row end -->

              <div class="row mt-4"><!-- row start -->
                <div class="col-md-12 text-center"><!-- column start -->
                    <button type="submit" name="submit" id="submit" class="btn btn-danger">SUBMIT</button>
                </div><!-- start column--->
              </div><!--row end-->
              <?php
                        }
                    }

                        ?>

         </div></div><!-------- Education and Bank Details Tab End----------><br /><br />
         <button type="button" class="prevtab btn btn-primary">Prev</button>
          <button type="button" class="nexttab btn btn-danger" style="float:right;">Next</button>
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
            document.getElementById('total121m').value=parseInt(document.getElementById('obtained11m').value) + parseInt(document.getElementById('obtained111m').value);
            document.getElementById('total221m').value=parseInt(document.getElementById('obtained21m').value) + parseInt(document.getElementById('obtained211m').value);
            document.getElementById('total331m').value=parseInt(document.getElementById('obtained31m').value) + parseInt(document.getElementById('obtained321m').value);
            document.getElementById('total431m').value=parseInt(document.getElementById('obtained41m').value) + parseInt(document.getElementById('obtained421m').value);
            document.getElementById('total531m').value=parseInt(document.getElementById('obtained51m').value) + parseInt(document.getElementById('obtained521m').value);
            document.getElementById('total631m').value=parseInt(document.getElementById('obtained61m').value) + parseInt(document.getElementById('obtained621m').value);
            document.getElementById('total731m').value=parseInt(document.getElementById('obtained71m').value) + parseInt(document.getElementById('obtained721m').value);
            document.getElementById('total831m').value=parseInt(document.getElementById('obtained81m').value) + parseInt(document.getElementById('obtained821m').value);
            document.getElementById('total931m').value=parseInt(document.getElementById('obtained91m').value) + parseInt(document.getElementById('obtained921m').value);
            document.getElementById('grandtotal1m').value = parseInt(document.getElementById('total121m').value) + parseInt(document.getElementById('total221m').value) + parseInt(document.getElementById('total331m').value) + parseInt(document.getElementById('total431m').value) + parseInt(document.getElementById('total531m').value) + parseInt(document.getElementById('total631m').value) + parseInt(document.getElementById('total731m').value) + parseInt(document.getElementById('total831m').value) + parseInt(document.getElementById('total931m').value);
            document.getElementById('percentage1121m').value=parseInt((document.getElementById('grandtotal1m').value*100)/900);

        }
    </script>
  </body>
</html>