<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>ESTC POLYTECHNIC</title>
  </head>
  <body>
  <?php include('header.php') ?>
   <div class="container p-3 mt-5 border bg-light" style="box-shadow:2px 4px 10px grey;"> 
   <a href="index1.php" class="btn btn-primary">BACK</a><br /><br /><br />
   <p class="bg-dark text-white p-2">REPORT SECTION</p>
  <div class="dropdown" style="margin-top:5%;">
  <div class="row">
    <div class="col-md-6">
  <div class="form-group p-2 bg-warning">
      <div><button type="button" class="btn btn-warning" onclick="location.href='report1.php'">VIEW OTR INFO</button></div>
  </div>
  <div class="form-group p-2 bg-success">
      <button type="button" class="btn btn-success" onclick="location.href='report.php'"> VIEW ADMISSION SESSION INFO</button>
  </div>
  <div class="form-group bg-danger">
  <button type="button"  class="btn btn-danger" onclick="otr();" style="margin-top:2%;margin-left:2%;">UPDATE OTR INFORMATION</button><br /><br />
  </div>
  <div class="form-group bg-warning">
  <button type="button"  class="btn btn-warning" onclick="admin1();" style="margin-top:2%;margin-left:2%;">UPDATE ADMISSION SESSION  INFORMATION</button><br /><br />
  </div></div>
  <div class="col-md-6">
  <div class="form-group p-2 bg-info">
      <div><button type="button" class="btn btn-info" onclick="location.href='yearshow.php'">YEAR WISE INFORMATION</button></div>
  </div>
  <div class="form-group p-2 bg-secondary">
      <button type="button" class="btn btn-secondary" onclick="location.href='semestershow.php'">SEMESTER WISE INFORMATION</button>
  </div>
  <div class="form-group p-2 bg-dark">
      <button type="button" class="btn btn-dark" onclick="location.href='docupdate.php'">UPDATE DOCUMENTS</button>
  </div>
  </div>
  </div>
  </div></div></div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php include('footer.php'); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      function otr(){
        var ot=prompt('Enter password for update OTR information');
        if(ot=="estc@123"){
          location.replace('add2.php');
        }
      }

      function admin1(){
        var ad=prompt('Enter password for update ADMISSION SESSION information');
        if(ad=="estc@1234"){
          location.replace('add3.php');
        }
      }
    </script>
  </body>
</html>