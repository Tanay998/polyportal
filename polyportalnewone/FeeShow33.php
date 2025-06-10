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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  <body style="background-color:#F8F9EC;">
   
 <!-----------------------------------------------------------------------------------------------------------------------------------------------------
 -------------------------------------------------------------------------------------------------------------------------------------------------------
 ------------------------------------------- CONTAINER FLUID ONE ---------------------------------------------------------------------------------------> 
 <form action="showdata.php" method="POST">
   

<!-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------- CONTAINER START ------------------------------------------------------------------------------------------------------------->
<?php include('header.php') ?>
     
  <div class="container mt-5 rounded p-3 mb-5"> <!-------- container start ----------->
    <div class="row">
     <div class="col-md-12">
     <a href="FeeShow3.php" class="btn btn-primary" id="back4">BACK</a><br /><br />
     <a href="#" onclick="printpage()" style="text-decoration:none;" id="print4"><i class="fas fa-print" style="float:right;"></i></a>
      <hr />
      <?php 
        if(isset($_POST['submit']))
        {
          $name = $_POST['StudentName'];
          $FatherName=$_POST['FatherName'];
          $RegistrationNo = $_POST['RegistrationNo'];
          $query = "SELECT * FROM `feeinformation3` WHERE `StudentName`='$name' AND `FatherName`='$FatherName' AND `RegistrationNo`='$RegistrationNo'";
          $q=mysqli_query($db,$query) or die(mysqli_error($db));
          while($result = mysqli_fetch_array($q)){
      ?>
      <table class="table-borderless table-sm table-responsive">
        <tbody class="table-borderless">
          <tr>
            <td style="font-weight:bold;font-size:14px;">STUDENT NAME:</td>
            <td style="font-size:14px;"><?php echo $result['StudentName']; ?></td>
            <td style="font-weight:bold;font-size:14px;">FATHER NAME:</td>
            <td style="font-size:14px;"><?php echo $result['FatherName'] ?></td>
          </tr>
          <tr style="background-color:#F8F9EC;">
            <td style="font-weight:bold;font-size:14px;">REGISTRATION NUMBER:</td>
            <td style="font-size:14px;"><?php echo $result['RegistrationNo']; ?></td>
          </tr>
          <tr>
            <td style="font-weight:bold;font-size:14px;">Branch</td>
            <td style="font-size:14px;"><?php echo $result['Branch']; ?></td>
            <td style="font-weight:bold;font-size:14px;">Semester:</td>
            <td style="font-size:14px;"><?php echo $result['Semester']; ?></td>
          </tr>
        </tbody>
      </table>
      <hr />
    </div>
</div>
<div class="row" >
  <div class="col-md-12">
  <a href="update13.php?studname=<?php echo $result['StudentName']; ?>" style="float:right;color:white;font-weight:bold;" class="btn btn-danger" id="update4">UPDATE RECORD</a><br/><br/>
    <table class="table  table-sm table-responsive" style="padding:20px;background-color:#F8F9EC;margin-left:0.5%;">
      <tbody class="table-bordered-success">
        <tr style="width:105%;" class="table-bordered border-top-0 bg-success">
          <td colspan="3" style="font-size:14px;font-weight:bold;">Second Year</td>
        </tr>
        <tr class="table-bordered bg-info">
          <td rowspan="7" style="font-size:14px;font-weight:bold;">Third Installement</td>
        </tr>
        <tr class="table-bordered bg-primary">
          <td style="font-size:14px;">Installement</td>
          <td><?php echo $result['ThirdInstallement']; ?></td>
        </tr>
        <tr class="table-bordered bg-primary">
          <td style="font-size:14px;">Amount Payable By Student</td>
          <td><?php echo $result['AmountStu3']; ?></td>
        </tr>
        <tr class="table-bordered bg-primary">
          <td style="font-size:14px;">Date</td>
          <td><?php echo $result['AmDate3']; ?></td>
        </tr>
        <tr class="table-bordered bg-primary">
          <td style="font-size:14px;">Due Date</td>
          <td><?php echo $result['DueDate31']; ?></td>
        </tr>
        <tr class="table-bordered bg-primary">
          <td style="font-size:14px;">Remaining Amount</td>
          <td><?php echo $result['RemainingAmount31']; ?></td>
        </tr>
        <tr class="table-bordered bg-primary">
          <td style="font-size:14px;">Total Payable Amount</td>
          <td><?php echo $result['TotalAmount13']; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  
    <?php
                                    }
                                    }
                                ?>
</div>
        </form> 
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
    </div> <!----------------- container end -----------------><br /><br /><br /><br />
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
        var BackButton = document.getElementById("back4");
        var PrintOne = document.getElementById("print4");
        var UpdateOne = document.getElementById("update4");
        BackButton.style.visibility="hidden";
        PrintOne.style.visibility="hidden";
        UpdateOne.style.visibility="hidden";
        window.print();
        BackButton.style.visibility="visible";
        PrintOne.style.visibility="visible";
      }
      </script>
  </body>
</html>