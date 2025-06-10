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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/tabing.css">
    <link rel="stylesheet" href="css/num.css">
    <title>ESTC POLYTECHNIC</title>  
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
  <body>
   
 <!-----------------------------------------------------------------------------------------------------------------------------------------------------
 -------------------------------------------------------------------------------------------------------------------------------------------------------
 ------------------------------------------- CONTAINER FLUID ONE ---------------------------------------------------------------------------------------> 
 <form>
   

<!-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------- CONTAINER START ------------------------------------------------------------------------------------------------------------->
<?php include('header.php') ?>
     
  <div class="container mt-1 rounded p-3 mb-5"> <!-------- container start ----------->
    <div class="row">
     <div class="col-md-12">
     <a href="marksheet_electrical_sem1_report.php" class="btn btn-primary" id="back11">BACK</a><br /><br />
     <a href="#" onclick="printpage()" style="text-decoration:none;" id="print11"><i class="fas fa-print" style="float:right;"></i></a>
      <hr />
      <?php 
        if(isset($_POST['submit']))
        {
          $rollno = $_POST['rollno'];
          $query = "SELECT * FROM `sem1` WHERE `RollNo`='$rollno'";
          $q=mysqli_query($db,$query) or die(mysqli_error($db));
          while($result = mysqli_fetch_array($q)){
      ?>
      <table class="table-borderless table-sm table-responsive p-2" style="border:2px solid black;">
        <tbody class="table-borderless">
          <tr>
            <td style="font-weight:bold;font-size:14px;">INSTITUTE NAME:</td>
            <td style="font-size:14px;">164 - ELECTRONIC SERVICE AND TRAINING CENTRE, KANIYA RAMNAGAR (NAINITAL)</td>
          </tr>
          <tr style="background-color:#FFFFFF;">
            <td style="font-weight:bold;font-size:14px;">BRANCH NAME:</td>
            <td style="font-size:14px;">08 - Electrical Engineering</td>
          </tr>
          <tr>
            <td style="font-weight:bold;font-size:14px;">STUDENT NAME:</td>
            <td style="font-size:14px;"><?php echo $result['StudentName']; ?></td>
            <td style="font-weight:bold;font-size:14px;">FATHER NAME:</td>
            <td style="font-size:14px;"><?php echo $result['FatherName'] ?></td>
          </tr>
          <tr style="background-color:#FFFFFF;">
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
    <table class="table table-borderless table-sm table-responsive" style="padding:20px;margin-left:25%;border:none;">
      <tbody class="table-bordered-success" style="border:2px solid black;">
        <tr style="width:105%;border:2px solid black;" class="table-bordered border-top-0">
          <td colspan="6" style="font-size:14px;font-weight:bold;border:2px solid black;">SEMESTER -01</td>
        </tr>
        <tr class="table-bordered" style="border:2px solid black;background-color:#FFFFFF;">
          <td rowspan="2" style="font-size:14px;font-weight:bold;border:2px solid black;">SUBJECTS</td>
          <td colspan="2" style="font-size:14px;font-weight:bold;padding:10px 15px 20px;text-align:center;border:2px solid black;">THEORY</td>
          <td colspan="2" style="font-size:14px;font-weight:bold;padding:10px 15px 20px;text-align:center;border:2px solid black;">PRACTICAL</td>
          <td rowspan="2" style="font-size:14px;font-weight:bold;padding:10px 15px 20px;text-align:center;border:2px solid black;">TOTAL</td>
        </tr>
        <tr class="table-bordered" style="border:2px solid black;background-color:#FFFFFF;">
          <td style="font-weight:bold;font-size:12px;padding:5px;border:2px solid black;">MAX</td>
          <td style="font-weight:bold;font-size:12px;padding:5px;border:2px solid black;">OBT</td>
          <td style="font-weight:bold;font-size:12px;padding:5px;border:2px solid black;">MAX</td>
          <td style="font-weight:bold;font-size:12px;padding:5px;border:2px solid black;">OBT</td>
        </tr>
        <tr class="table-bordered" style="border:2px solid black;background-color:#FFFFFF;">
          <td style="font-size:12px;border:2px solid black;">991001 - ENGLISH AND COMMUNICATION SKILLS - I</td>
          <td style="border:2px solid black;"><?php echo $result['max1']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained1']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['max11']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained11']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['total12']; ?></td>
        </tr>
        <tr class="table-bordered" style="border:2px solid black;background-color:#FFFFFF;">
          <td style="font-size:12px;border:2px solid black;">991002 - APPLIED MATHEMATICS - I</td>
          <td style="border:2px solid black;"><?php echo $result['max2']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained2']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['max21']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained21']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['total22']; ?></td>
        </tr>
        <tr class="table-bordered" style="border:2px solid black;background-color:#FFFFFF;">
          <td style="font-size:12px;border:2px solid black;">991003 - APPLIED PHYSICS - I</td>
          <td style="border:2px solid black;"><?php echo $result['max3']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained3']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['max31']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained32']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['total33']; ?></td>
        </tr>
        <tr class="table-bordered" style="border:2px solid black;background-color:#FFFFFF;">
          <td style="font-size:12px;border:2px solid black;">991004 - APPLIED CHEMISTRY - I</td>
          <td style="border:2px solid black;"><?php echo $result['max4']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained4']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['max41']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained42']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['total43']; ?></td>
        </tr>
        <tr class="table-bordered" style="border:2px solid black;background-color:#FFFFFF;">
          <td style="font-size:12px;border:2px solid black;">991005 - COMPUTER FUNDAMENTALS</td>
          <td style="border:2px solid black;"><?php echo $result['max5']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained5']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['max51']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained52']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['total53']; ?></td>
        </tr>
        <tr class="table-bordered" style="border:2px solid black;background-color:#FFFFFF;">
          <td style="font-size:12px;border:2px solid black;">991006 - ENGINEERING GRAPHICS - I</td>
          <td style="border:2px solid black;"><?php echo $result['max6']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained6']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['max61']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained62']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['total63']; ?></td>
        </tr>
        <tr class="table-bordered" style="border:2px solid black;background-color:#FFFFFF;">
          <td style="font-size:12px;border:2px solid black;">991007 - GENERAL WORKSHOP PRACTICE - I</td>
          <td style="border:2px solid black;"><?php echo $result['max7']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained7']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['max71']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained72']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['total73']; ?></td>
        </tr>
        <tr class="table-bordered" style="border:2px solid black;background-color:#FFFFFF;">
          <td style="font-size:12px;border:2px solid black;">991051 - GENERAL PROFICIENCY</td>
          <td style="border:2px solid black;"><?php echo $result['max8']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained8']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['max81']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained82']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['total83']; ?></td>
        </tr>
        <tr class="table-bordered" style="border:2px solid black;background-color:#FFFFFF;">
          <td style="font-size:12px;border:2px solid black;">991052 - INDUSTRIAL EXPOSURE</td>
          <td style="border:2px solid black;"><?php echo $result['max9']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained9']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['max91']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['obtained92']; ?></td>
          <td style="border:2px solid black;"><?php echo $result['total93']; ?></td>
        </tr>
        <tr class="table-bordered" style="border:2px solid black;background-color:#FFFFFF;">
          <td style="font-size:12px;border:2px solid black;" colspan="16"><span style="font-weight:bold;">TOTAL:</span> <span class="ml-1" style="font-size:14px;"><?php echo $result['grandtotal']; ?></span></td>
        </tr>

        <tr class="table-bordered" style="border:2px solid black;background-color:#FFFFFF;">
          <td style="font-size:12px;border:2px solid black;" colspan="16"><span style="font-weight:bold;">PERCENTAGE:</span><span class="ml-1" style="font-size:14px;"><?php echo $result['percentage112']; ?></span></td>
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
    </div> <!----------------- container end -----------------><br /><br /><br />
    <?php include('footer.php'); ?>

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
    <script>
      function printpage()
      {
        var BackButton = document.getElementById("back11");
        var PrintOne = document.getElementById("print11")
        BackButton.style.visibility="hidden";
        PrintOne.style.visibility="hidden";
        window.print();
        BackButton.style.visibility="visible";
        PrintOne.style.visibility="visible";
      }
    </script>
  </body>
</html>