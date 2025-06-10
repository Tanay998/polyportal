<?php
 include('conn.php');
  if(isset($_POST['submit']))
    {
        $studname = $_POST['studname'];
        $fathername = $_POST['fathername'];
        $regno = $_POST['regno'];
        $rollno = $_POST['rollno'];
        $dateent = $_POST['dateent'];
        $category = $_POST['category'];
        $max1= $_POST['max1'];
        $obtained1 = $_POST['obtained1'];
        $max11 = $_POST['max11'];
        $obtained11 = $_POST['obtained11'];
        $total12 = $_POST['total12'];
        $max2 = $_POST['max2'];
        $obtained2 = $_POST['obtained2'];
        $max21 = $_POST['max21'];
        $obtained21 = $_POST['obtained21'];
        $total22 = $_POST['total22'];
        $max3 = $_POST['max3'];
        $obtained3 = $_POST['obtained3'];
        $max31 = $_POST['max31'];
        $obtained32= $_POST['obtained32'];
        $total33 = $_POST['total33'];
        $max4 = $_POST['max4'];
        $obtained4 = $_POST['obtained4'];
        $max41 = $_POST['max41'];
        $obtained42 = $_POST['obtained42'];
        $total43 = $_POST['total43'];
        $max5 = $_POST['max5'];
        $obtained5 = $_POST['obtained5'];
        $max51= $_POST['max51'];
        $obtained52 = $_POST['obtained52'];
        $total53 = $_POST['total53'];
        $max6 = $_POST['max6'];
        $obtained6 = $_POST['obtained6'];
        $max61 = $_POST['max61'];
        $obtained62 = $_POST['obtained62'];
        $total63 = $_POST['total63'];
        $max7 = $_POST['max7'];
        $obtained7 = $_POST['obtained7'];
        $max71 = $_POST['max71'];
        $obtained72 = $_POST['obtained72'];
        $total73 = $_POST['total73'];
        $max8 = $_POST['max8'];
        $obtained8 = $_POST['obtained8'];
        $max81= $_POST['max81'];
        $obtained82 = $_POST['obtained82'];
        $total83 = $_POST['total83'];
        $max9 = $_POST['max9'];
        $obtained9 = $_POST['obtained9'];
        $max91= $_POST['max91'];
        $obtained92 = $_POST['obtained92'];
        $total93 = $_POST['total93'];
        $grandtotal = $_POST['grandtotal'];
        $percentage112=$_POST['percentage112'];
        $query1="INSERT INTO `sem1`(`StudentName`, `FatherName`, `RegistrationNo`, `RollNo`, `Date`, `Category`, `max1`, `obtained1`, `max11`, `obtained11`, `total12`, `max2`, `obtained2`, `max21`, `obtained21`, `total22`, `max3`, `obtained3`, `max31`, `obtained32`, `total33`, `max4`, `obtained4`, `max41`, `obtained42`, `total43`, `max5`, `obtained5`, `max51`, `obtained52`, `total53`, `max6`, `obtained6`, `max61`, `obtained62`, `total63`, `max7`, `obtained7`, `max71`, `obtained72`, `total73`, `max8`, `obtained8`, `max81`, `obtained82`, `total83`, `max9`, `obtained9`, `max91`, `obtained92`, `total93`, `grandtotal`, `percentage112`) VALUES ('$studname','$fathername','$regno','$rollno','$dateent','$category','$max1','$obtained1','$max11','$obtained11','$total12','$max2','$obtained2','$max21','$obtained21','$total22','$max3','$obtained3','$max31','$obtained32','$total33','$max4','$obtained4','$max41','$obtained42','$total43','$max5','$obtained5','$max51','$obtained52','$total53','$max6','$obtained6','$max61','$obtained62','$total63','$max7','$obtained7','$max71','$obtained72','$total73','$max8','$obtained8','$max81','$obtained82','$total83','$max9','$obtained9','$max91','$obtained92','$total93','$grandtotal','$percentage112')";
        if(mysqli_query($db,$query1))
        {
           //header('location:form.php');
           echo "<script>
           
               if(confirm('Your information has been submitted'))
               {
                   location.replace('insertrecord1.php');
               }
           </script>";
           //echo $firstname."<script type='text/javascript>alert('Your information has been successfully saved')</script>'";
        }
        mysqli_close($db);
    }
?>