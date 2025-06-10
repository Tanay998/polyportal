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
    <title>Hello, world!</title>
  </head>
  <body>
  <?php include('header.php') ?>
   <div class="container"> 
  <div class="dropdown" style="margin-top:10%;margin-left:15%;">
  <a href="feeEntry.php" class="btn btn-danger">BACK</a><br /><br />
  <div class="btn-group">
      <button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="#dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        FIRST YEAR
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="firstInstallement.php">FIRST INSTALLEMENT</a>
        <a class="dropdown-item" href="secondInstallement.php">SECOND INSTALLEMENT</a>
      </div>
  </div>
  <div class="btn-group">
    <button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="#dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      SECOND YEAR
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      <a class="dropdown-item" href="thirdInstallement.php">THIRD INSTALLEMENT</a>
      <a class="dropdown-item" href="fourthInstallemet.php">FOURTH INSTALLEMENT</a>
    </div>
  </div>

  <div class="btn-group">
    <button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="#dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      THIRD YEAR
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      <a class="dropdown-item" href="fifthInstallement.php">FIFTH INSTALLEMENT</a>
      <a class="dropdown-item" href="sixthInstallement.php">SIXTH INSTALLEMENT</a>
    </div>
  </div>
</div>
</div><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php include('footer.php');  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>