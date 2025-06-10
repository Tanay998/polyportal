<?php
    include('conn.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
    <?php include('header.php') ?>
    <form action="updatehighSchool.php" method="post" enctype="multipart/form-data">
        <div class="container mt-4 rounded p-3 mb-5" style="box-shadow:4px 9px 25px 4px green;"><!--- container start --->
               <a href="highSchool.php" class="btn btn-danger">BACK</a> <br /> <br />
               <?php 
                    if(isset($_POST['submit'])){
                    $Course=$_POST['Course'];
                    $RegNo=$_POST['RegNo'];
                    $sql1 = "SELECT * FROM `record` WHERE `Course`='$Course' AND `RegNo`='$RegNo'";
                    $query1 = mysqli_query($db,$sql1);
                    while($result1=mysqli_fetch_array($query1)){
                ?>
               <div class="row"><!--- row start --->
                <div class="col-md-6"><!--- column start --->
                <label for="HighSchool" class="text-dark">हाईस्कूल  मार्कशीट  (HighSchool Marksheet)</label>
                   <input type="file" name="file2251" accept="image/*" id="file2251" class="form-control" onchange="loadFile2251(event);" />
                   <br />
                   <div><img id="output2251" name="output2251" width="150px" height="150px" src="<?php echo $result1['HighSchoolMarksheetPicture']; ?>" /></div>
                   <script type="text/javascript">
                     var loadFile2251 = function(event) {
                         var output = document.getElementById('output2251');
                         output.src = URL.createObjectURL(event.target.files[0]);
                         output.onload = function() {
                             URL.revokeObjectURL(output.src);
                         }
                     };
                   </script>
                </div><!--- column end --->
                <div class="col-md-6"><!---- column start------>
                <div class="form-group"><!------ form group start ---->
                    <select name="Course" id="Course" class="form-control">
                        <option value="<?php echo $result1['Course']; ?>"><?php echo $result1['Course']; ?></option>
                        <option value="Diploma in Electrical Engineering">Diploma in Electrical Engineering</option>
                        <option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>
                    </select>
                </div><!---- form group end ---->
                <div class="form-group"><!---- form group start ---->
                    <input type="text" name="RegNo" id="RegNo" class="form-control" placeholder="Enter 4 or 5 digit registration no" value="<?php echo $result1['RegNo'] ?>" />
                </div><!---- form group end ----> 
                </div><!---- column end------>
               </div><!--- row end --->
               <div class="row"><!----- row start --->
                   <div class="col-md-12 text-center"><!---- column start --->
                     <button type="submit" name="submit" id="submit" class="btn btn-primary">UPDATE</button>
                    </div><!-- column end --->
               </div><!----- row end --->
               <?php
                    }
                }
             
             ?>
             
    <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Top <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
        </div></div><!-----container end -->
    <?php include('footer.php') ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--<script src="js/tabscript.js"></script>-->
    <script src="js/displaydata.js"></script>
    <script type="text/javascript" src="js/gtransapi.js"></script>  
    <script type="text/javascript" src="js/translator.js"></script>
    </form>
</body>
</html>