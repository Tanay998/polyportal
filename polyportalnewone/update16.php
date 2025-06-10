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
        <form action="updateinfo6.php" method="POST">

        <div class="container mt-4 rounded p-3 mb-5" style="background-color:#BEF9E5;box-shadow:4px 9px 25px 4px green;"><!--- container start --->
        <p class="text-center h2 text-primary">Fee Details</p>
               <!--<a href="feereport.php" class="btn btn-danger">BACK</a>-->    
               <a href="images/feestructure.PNG" target="_blank">click here to download fee structure</a> 
               <div class="mt-2"></div>
               <div class="tab"><!-- tab menu start -->
                    <button type="button" class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Student Details</button>
                    <button type="button" class="tablinks" onclick="openCity(event, 'Paris')">Tution Fee</button>
                    <!----<button type="button" class="tablinks" onclick="openCity(event, 'Tokyo')">Student Fund Fee</button>
                    <button type="button" class="tablinks" onclick="openCity(event, 'America')">Security Amount (Refundable)</button>
                    <button type="button" class="tablinks" onclick="openCity(event, 'Russia')">P.D Charges</button>
                    <button type="button" class="tablinks" onclick="openCity(event, 'India')">Hostel Charges Yearly</button>-->
                </div><!-- tab menu end -->
                <?php
                        $stdname=$_GET['studname'];
                        $qu="SELECT *FROM `feeinformation6` WHERE `StudentName`='$stdname'";
                        $sh=mysqli_query($db,$qu) or die(mysqli_error($db));
                        while($res=mysqli_fetch_array($sh)){
                ?>
                <div id="London" class="tabcontent"><!-- Admission Details Tab Start -->
                       <div class="row mt-2"><!-- row start -->
                            <div class="col-md-12"><!-- column start -->
                                    <label for="Admission" class="text-dark">STUDENT NAME</label><input type="text"  class="form-control" placeholder="Enter student Name" name="StudentName" id="StudentName" value="<?php echo $res['StudentName']; ?>" style="text-transform:uppercase;" />
                            </div><!-- column end -->        
                       </div><!-- row end-->


                       <div class="row mt-4"><!------ row start---->
                                    <div class="col-md-12"><!--column start----->
                                        <label for="entry" class="mt-2 text-dark">FatherName</label>
                                        <input type="text" name="FatherName" class="form-control" id="FatherName" value="<?php echo $res['FatherName']; ?>" style="text-transform: uppercase;" />
                                    </div><!-- row end -->
                       </div><!-- row end -->

                       <div class="row mt-4"><!------ row start---->
                                    <div class="col-md-12"><!--column start-->
                                        <label for="reg_no" class="mt-2 text-dark">Registration No</label>
                                        <input type="text" name="RegistrationNo" id="RegistrationNo" value="<?php echo $res['RegistrationNo']; ?>" class="form-control" />
                                    </div><!-----column end ------->
                       </div><!-- row end -->

                       <div class="row mt-4"><!------ row start---->
                                    <div class="col-md-12"><!--column start-->
                                        <label for="branch" class="mt-2 text-dark">Course</label>
                                        <select name="Branch" id="Branch" class="form-control">
                                            <option><?php echo $res['Branch']; ?></option>
                                        </select>
                                    </div><!-----column end ------->
                       </div><!-- row end -->

                       <div class="row mt-4"><!------ row start---->
                                    <div class="col-md-12"><!--column start-->
                                        <label for="semester" class="mt-2 text-dark">Semester</label>
                                        <select name="Semester" id="semester" class="form-control">
                                            <option><?php echo $res['Semester'] ?></option>
                                        </select>
                                    </div><!-----column end ------->
                       </div><!-- row end -->
                </div><!-- Admission Details Tab End -->

                <div id="Paris" class="tabcontent"><!---- Personal Detail I Tab ---------->
                    <div class="row"><!--- row start------->
                        <div class="col-md-12"><!-- column start---->
                        <p class="text-center bg-primary p-2 text-white">VI<sup>th</sup> Installement</p>
                            <label for="amt200">Sixth Installement</label>
                            <input type="text" name="SixthInstallement" id="amt200" class="form-control" placeholder="Enter VIth Installement" value="<?php echo $res['SixthInstallement']; ?>"onkeyup="feetotals();" /><br />
                            <label for="amt1">Payable Amount By Student</label>
                            <input type="text" name="AmountStu6" id="amt1" class="form-control" placeholder="Enter Sixth Installement" value="<?php echo $res['AmountStu6']; ?>" onkeyup="feetotals();" /><br />    
                        </div><!-- column end---->
                    </div><!-----row end------->

                    <div class="row"><!--- row start------->
                        <div class="col-md-12"><!-- column start---->
                            <label for="date6">Date</label>
                            <input type="date" name="AmDate6" id="date1" class="form-control" value="<?php echo $res['AmDate6']; ?>" placeholder="Enter date" /><br /><br />     
                        </div><!-- column end---->
                    </div><!-----row end------->

                    <div class="row"><!--- row start------->
                        <div class="col-md-12"><!-- column start---->
                            <label for="date6">Due Date</label>
                            <input type="date" name="DueDate61" id="date2" class="form-control" value="<?php echo $res['DueDate61'] ?>" placeholder="Enter date" /><br /><br />     
                        </div><!-- column end---->
                    </div><!-----row end------->
                    <div class="row"><!--- row start------->
                        <div class="col-md-12"><!-- column start---->
                            <label for="amt111">Remaining Amount</label>
                            <input type="text" name="RemainingAmount61" id="amt111" class="form-control" value="<?php echo $res['RemainingAmount61']; ?>" placeholder="Enter Remaining Amount" onkeyup="feetotals();" /><br />    
                        </div><!-- column end---->
                    </div><!-----row end------->

                    <div class="row"><!--- row start------->
                        <div class="col-md-12"><!-- column start---->
                            <label for="amt1000">Total Payable Amount</label>
                            <input type="text" name="TotalAmount16" id="amt1000" class="form-control" value="<?php echo $res['TotalAmount16']; ?>"placeholder="Enter Remaining Amount" onkeyup="feetotals();" /><br />    
                        </div><!-- column end---->
                        <?php   
                                }
                        ?>
                    </div><!-----row end------->
                    
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" name="submit" class="btn btn-danger">SUBMIT</button>    
                        </div>
                    </div>


                </div><!---- Personal Detail I Tab end -------------->

         <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Top <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
        </div><!-----container end -->
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
        function feetotals() {
            document.getElementById('amt111').value =parseInt(document.getElementById('amt200').value)-parseInt(document.getElementById('amt1').value);
            document.getElementById('amt1000').value =parseInt(document.getElementById('amt200').value)-parseInt(document.getElementById('amt111').value);
            document.getElementById('amt21').value =parseInt(document.getElementById('amt220').value)-parseInt(document.getElementById('amt2').value);
            document.getElementById('amt2000').value =parseInt(document.getElementById('amt220').value)-parseInt(document.getElementById('amt21').value);
            document.getElementById('amtgrant').value=parseInt(document.getElementById('amt1000').value)+parseInt(document.getElementById('amt2000').value);
        }
    </script>
  </body>
</html>