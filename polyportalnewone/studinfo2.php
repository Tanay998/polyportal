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
        $max1= $_POST['max1m'];
        $obtained1 = $_POST['obtained1m'];
        $max11 = $_POST['max11m'];
        $obtained11 = $_POST['obtained11m'];
        $total12 = $_POST['total12m'];
        $max2 = $_POST['max2m'];
        $obtained2 = $_POST['obtained2m'];
        $max21 = $_POST['max21m'];
        $obtained21 = $_POST['obtained21m'];
        $total22 = $_POST['total22m'];
        $max3 = $_POST['max3m'];
        $obtained3 = $_POST['obtained3m'];
        $max31 = $_POST['max31m'];
        $obtained32= $_POST['obtained32m'];
        $total33 = $_POST['total33m'];
        $max4 = $_POST['max4m'];
        $obtained4 = $_POST['obtained4m'];
        $max41 = $_POST['max41m'];
        $obtained42 = $_POST['obtained42m'];
        $total43 = $_POST['total43m'];
        $max5 = $_POST['max5m'];
        $obtained5 = $_POST['obtained5m'];
        $max51= $_POST['max51m'];
        $obtained52 = $_POST['obtained52m'];
        $total53 = $_POST['total53m'];
        $max6 = $_POST['max6m'];
        $obtained6 = $_POST['obtained6m'];
        $max61 = $_POST['max61m'];
        $obtained62 = $_POST['obtained62m'];
        $total63 = $_POST['total63m'];
        $max7 = $_POST['max7m'];
        $obtained7 = $_POST['obtained7m'];
        $max71 = $_POST['max71m'];
        $obtained72 = $_POST['obtained72m'];
        $total73 = $_POST['total73m'];
        $max8 = $_POST['max8m'];
        $obtained8 = $_POST['obtained8m'];
        $max81= $_POST['max81m'];
        $obtained82 = $_POST['obtained82m'];
        $total83 = $_POST['total83m'];
        $max9 = $_POST['max9m'];
        $obtained9 = $_POST['obtained9m'];
        $max91= $_POST['max91m'];
        $obtained92 = $_POST['obtained92m'];
        $total93 = $_POST['total93m'];
        $grandtotal = $_POST['grandtotalm'];
        $percentage112=$_POST['percentage112m'];
        $query1="INSERT INTO `sem1m`(`StudentName`, `FatherName`, `RegistrationNo`, `RollNo`, `Date`, `Category`, `max1m`, `obtained1m`, `max11m`, `obtained11m`, `total12m`, `max2m`, `obtained2m`, `max21m`, `obtained21m`, `total22m`, `max3m`, `obtained3m`, `max31m`, `obtained32m`, `total33m`, `max4m`, `obtained4m`, `max41m`, `obtained42m`, `total43m`, `max5m`, `obtained5m`, `max51m`, `obtained52m`, `total53m`, `max6m`, `obtained6m`, `max61m`, `obtained62m`, `total63m`, `max7m`, `obtained7m`, `max71m`, `obtained72m`, `total73m`, `max8m`, `obtained8m`, `max81m`, `obtained82m`, `total83m`, `max9m`, `obtained9m`, `max91m`, `obtained92m`, `total93m`, `grandtotalm`, `percentage112m`) VALUES ('$studname','$fathername','$regno','$rollno','$dateent','$category','$max1','$obtained1','$max11','$obtained11','$total12','$max2','$obtained2','$max21','$obtained21','$total22','$max3','$obtained3','$max31','$obtained32','$total33','$max4','$obtained4','$max41','$obtained42','$total43','$max5','$obtained5','$max51','$obtained52','$total53','$max6','$obtained6','$max61','$obtained62','$total63','$max7','$obtained7','$max71','$obtained72','$total73','$max8','$obtained8','$max81','$obtained82','$total83','$max9','$obtained9','$max91','$obtained92','$total93','$grandtotal','$percentage112')";
        if(mysqli_query($db,$query1))
        {
           //header('location:form.php');
           echo "<script>
           
               if(confirm('Your information has been submitted'))
               {
                   location.replace('Insert_Marks_Mechanical_sem1.php');
               }
           </script>";
           //echo $firstname."<script type='text/javascript>alert('Your information has been successfully saved')</script>'";
        }
        mysqli_close($db);
    }
?>