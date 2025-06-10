<!--- database connection file included --->
<?php       
  include('conn.php');
?>
<!doctype html>
<html lang="en">
  <head> <!--- Head Start -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tabing.css">
    <link rel="stylesheet" href="css/num.css">
    <title>ESTC Polytechnic</title>  
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
.table td{
  border:1px solid black;
}
</style>
  </head><!--- head end -->
  <body style="background-color:#F9FBE6;">
   
 <!-----------------------------------------------------------------------------------------------------------------------------------------------------
 -------------------------------------------------------------------------------------------------------------------------------------------------------
 ------------------------------------------- CONTAINER FLUID ONE ---------------------------------------------------------------------------------------> 
 <form action="showdata.php" method="POST">
   

<!-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------- CONTAINER START ------------------------------------------------------------------------------------------------------------->
<?php include('header.php') ?>
     
  <div class="container mt-4 rounded p-3 mb-5"> <!-------- container start ----------->
    <div class="row">
     <div class="col-md-12">
     <a href="marksheet_electrical_sem21_report.php" class="btn btn-primary">BACK</a><br /><br />
      <hr />
      <?php 
        if(isset($_POST['submit']))
        {
          $name = $_POST['name'];
          $FatherName=$_POST['FatherName'];
          $rollno = $_POST['rollno'];
          $query = "SELECT * FROM `sem2` WHERE `StudentName`='$name' AND `FatherName`='$FatherName' AND `RollNo`='$rollno'";
          $q=mysqli_query($db,$query) or die(mysqli_error($db));
          while($result = mysqli_fetch_array($q)){
      ?>
      <table class="table-borderless table-sm table-responsive">
        <tbody class="table-borderless">
          <tr style="background-color:#ffffff;">
            <td style="font-weight:bold;font-size:14px;">INSTITUTE NAME:</td>
            <td style="font-size:14px;">164 - ELECTRONIC SERVICE AND TRAINING CENTRE, KANIYA RAMNAGAR (NAINITAL)</td>
          </tr>
          <tr style="background-color:#ffffff;">
            <td style="font-weight:bold;font-size:14px;background-color:#ffffff;">BRANCH NAME:</td>
            <td style="font-size:14px;">08 - Electrical Engineering</td>
          </tr>
          <tr>
            <td style="font-weight:bold;font-size:14px;">STUDENT NAME:</td>
            <td style="font-size:14px;"><?php echo $result['StudentName']; ?></td>
            <td style="font-weight:bold;font-size:14px;">FATHER NAME:</td>
            <td style="font-size:14px;"><?php echo $result['FatherName'] ?></td>
          </tr>
          <tr>
            <td style="font-weight:bold;font-size:14px;">REGISTRATION NUMBER:</td>
            <td style="font-size:14px;"><?php echo $result['RegistrationNo']; ?></td>
            <td style="font-weight:bold;font-size:14px;">ROLL NUMBER:</td>
            <td style="font-size:14px;"><?php echo $result['RollNo']; ?></td>
          </tr>
          <tr>
            <td style="font-weight:bold;font-size:14px;">DATE:</td>
            <td style="font-size:14px;"><?php echo $result['Date']; ?></td>
            <td style="font-weight:bold;font-size:14px;">CATEGORY:</td>
            <td style="font-size:14px;"><?php echo $result['Category']; ?></td>
          </tr>
        </tbody>
      </table>
      <hr />
    </div>
</div>
<div class="row" >
  <div class="col-md-12">
    <table class="table table-borderless table-sm table-responsive" style="padding:20px;background-color:#F8F9EC;margin-left:25%;border:none;">
      <tbody class="table-bordered-success">
        <tr style="width:105%;" class="table-bordered border-top-0">
          <td colspan="6" style="font-size:14px;font-weight:bold;">SEMESTER -02</td>
        </tr>
        <tr class="table-bordered">
          <td rowspan="2" style="font-size:14px;font-weight:bold;">SUBJECTS</td>
          <td colspan="2" style="font-size:14px;font-weight:bold;padding:10px 15px 20px;text-align:center;">THEORY</td>
          <td colspan="2" style="font-size:14px;font-weight:bold;padding:10px 15px 20px;text-align:center;">PRACTICAL</td>
          <td rowspan="2" style="font-size:14px;font-weight:bold;padding:10px 15px 20px;text-align:center;">TOTAL</td>
        </tr>
        <tr class="table-bordered">
          <td style="font-weight:bold;font-size:12px;padding:5px;">MAX</td>
          <td style="font-weight:bold;font-size:12px;padding:5px;">OBT</td>
          <td style="font-weight:bold;font-size:12px;padding:5px;">MAX</td>
          <td style="font-weight:bold;font-size:12px;padding:5px;">OBT</td>
        </tr>
        <tr class="table-bordered">
          <td style="font-size:12px;">991001 - ENGLISH AND COMMUNICATION SKILLS - I</td>
          <td><?php echo $result['max11']; ?></td>
          <td><?php echo $result['obtained11']; ?></td>
          <td><?php echo $result['max111']; ?></td>
          <td><?php echo $result['obtained111']; ?></td>
          <td><?php echo $result['total121']; ?></td>
        </tr>
        <tr class="table-bordered">
          <td style="font-size:12px;">991002 - APPLIED MATHEMATICS - I</td>
          <td><?php echo $result['max21']; ?></td>
          <td><?php echo $result['obtained21']; ?></td>
          <td><?php echo $result['max211']; ?></td>
          <td><?php echo $result['obtained211']; ?></td>
          <td><?php echo $result['total221']; ?></td>
        </tr>
        <tr class="table-bordered">
          <td style="font-size:12px;">991003 - APPLIED PHYSICS - I</td>
          <td><?php echo $result['max31']; ?></td>
          <td><?php echo $result['obtained31']; ?></td>
          <td><?php echo $result['max311']; ?></td>
          <td><?php echo $result['obtained321']; ?></td>
          <td><?php echo $result['total331']; ?></td>
        </tr>
        <tr class="table-bordered">
          <td style="font-size:12px;">991004 - APPLIED CHEMISTRY - I</td>
          <td><?php echo $result['max41']; ?></td>
          <td><?php echo $result['obtained41']; ?></td>
          <td><?php echo $result['max411']; ?></td>
          <td><?php echo $result['obtained421']; ?></td>
          <td><?php echo $result['total431']; ?></td>
        </tr>
        <tr class="table-bordered">
          <td style="font-size:12px;">991005 - COMPUTER FUNDAMENTALS</td>
          <td><?php echo $result['max51']; ?></td>
          <td><?php echo $result['obtained51']; ?></td>
          <td><?php echo $result['max511']; ?></td>
          <td><?php echo $result['obtained521']; ?></td>
          <td><?php echo $result['total531']; ?></td>
        </tr>
        <tr class="table-bordered">
          <td style="font-size:12px;">991006 - ENGINEERING GRAPHICS - I</td>
          <td><?php echo $result['max61']; ?></td>
          <td><?php echo $result['obtained61']; ?></td>
          <td><?php echo $result['max611']; ?></td>
          <td><?php echo $result['obtained621']; ?></td>
          <td><?php echo $result['total631']; ?></td>
        </tr>
        <tr class="table-bordered">
          <td style="font-size:12px;">991007 - GENERAL WORKSHOP PRACTICE - I</td>
          <td><?php echo $result['max71']; ?></td>
          <td><?php echo $result['obtained71']; ?></td>
          <td><?php echo $result['max711']; ?></td>
          <td><?php echo $result['obtained721']; ?></td>
          <td><?php echo $result['total731']; ?></td>
        </tr>
        <tr class="table-bordered">
          <td style="font-size:12px;">991051 - GENERAL PROFICIENCY</td>
          <td><?php echo $result['max81']; ?></td>
          <td><?php echo $result['obtained81']; ?></td>
          <td><?php echo $result['max811']; ?></td>
          <td><?php echo $result['obtained821']; ?></td>
          <td><?php echo $result['total831']; ?></td>
        </tr>
        <tr class="table-bordered">
          <td style="font-size:12px;">991052 - INDUSTRIAL EXPOSURE</td>
          <td><?php echo $result['max91']; ?></td>
          <td><?php echo $result['obtained91']; ?></td>
          <td><?php echo $result['max911']; ?></td>
          <td><?php echo $result['obtained921']; ?></td>
          <td><?php echo $result['total931']; ?></td>
        </tr>
        <tr class="table-bordered">
          <td style="font-size:12px;" colspan="16"><span style="font-weight:bold;">TOTAL:</span> <span class="ml-1" style="font-size:14px;"><?php echo $result['grandtotal1']; ?></span></td>
        </tr>

        <tr class="table-bordered">
          <td style="font-size:12px;" colspan="16"><span style="font-weight:bold;">PERCENTAGE:</span><span class="ml-1" style="font-size:14px;"><?php echo $result['percentage1121']; ?></span></td>
        </tr>
      </tbody>
    </table>
    <?php
                                    }
                                    }
                                ?>
  </div>
</div>
        </form> 
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
    </div> <!----------------- container end ----------------->

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------- OPTIONAL AND NEEDED JAVASCRIPT FILE ------------------------------------------------------------------------------------>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/district.js"></script>
    <script type="text/javascript" src="js/district1.js"></script>
  </body>
</html>