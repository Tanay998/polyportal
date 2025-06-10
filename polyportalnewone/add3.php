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
</style>
  </head><!--- head end -->
  <body>
   
 <!-----------------------------------------------------------------------------------------------------------------------------------------------------
 -------------------------------------------------------------------------------------------------------------------------------------------------------
 ------------------------------------------- CONTAINER FLUID ONE ---------------------------------------------------------------------------------------> 
 <form action="form226.php" method="POST" enctype="multipart/form-data">
 <?php include('header.php') ?>

<!-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------- CONTAINER START ------------------------------------------------------------------------------------------------------------->
<div class="container mt-5">
           <!--<button type="button" class="btn btn-success mt-4" id="bottom1" style="float:right;">Bottom</button>-->
     </div> 
     
  <div class="container mt-1 rounded p-3 mb-5" style="box-shadow:4px 9px 25px 4px skyblue;"> <!-------- container start ----------->
  
    <div class="col-md-12">
    <a href="record11.php" class="btn btn-primary">BACK</a><br /><br />
    <p class="text-center h2 text-success">UPDATE ADMISSION SESSION INFORMATION</p><br>
    <label for="Admission" class="text-dark">Admission No - ESTC / POLY /</label> 
    <input type="text" style="width:20%;padding:5px;border-radius:5px;border:1px solid #ccc;;" name="dateadd1" id="dateadd1" Placeholder="YYY-YY" onkeyup="addHyphen(this)" /><label for="ses" class="ml-2">/</label>
    <input type="text" style="width:3%;padding:5px;border-radius:5px;border:1px solid #ccc;;text-transform:uppercase;" class="ml-1" name="brn1" id="brn1" /><label for="ses" class="ml-2">/</label>
    <input type="text" style="width:20%;padding:5px;border-radius:5px;border:1px solid #ccc;;" class="ml-1" name="regNo1" id="regNo1" maxlength="4" onkeyup="num1()"/> 
      <br/><br/> 
    </div>
    <div class="form-group">
    <select name="Year" id="Year" class="form-control">
        <option value="" selected>*********** select Admission Session Year **********</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
</div>
    <div class="col-md-12 text-center">
      <input type="submit" class="btn btn-primary" name="submit" value="submit" id="submit" />      
    </div>  
        </form> 
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
    </div> <!----------------- container end -----------------><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <?php include('footer.php');   ?>

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
	function addHyphen (element) {
    	let ele = document.getElementById(element.id);
        ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.

        let finalVal = ele.match(/.{1,4}/g).join('-');
        document.getElementById(element.id).value = finalVal;
    }

    function num1(){
      var n = document.getElementById('regNo1').value;
      if(isNaN(n)){
        alert("Please enter a number");
      }
      else{
        n;
      }
    }
</script>
  </body>
</html>