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
        $max1= $_POST['max11m'];
        $obtained1 = $_POST['obtained11m'];
        $max11 = $_POST['max111m'];
        $obtained11 = $_POST['obtained111m'];
        $total12 = $_POST['total121m'];
        $max2 = $_POST['max21m'];
        $obtained2 = $_POST['obtained21m'];
        $max21 = $_POST['max211m'];
        $obtained21 = $_POST['obtained211m'];
        $total22 = $_POST['total221m'];
        $max3 = $_POST['max31m'];
        $obtained3 = $_POST['obtained31m'];
        $max31 = $_POST['max311m'];
        $obtained32= $_POST['obtained321m'];
        $total33 = $_POST['total331m'];
        $max4 = $_POST['max41m'];
        $obtained4 = $_POST['obtained41m'];
        $max41 = $_POST['max411m'];
        $obtained42 = $_POST['obtained421m'];
        $total43 = $_POST['total431m'];
        $max5 = $_POST['max51m'];
        $obtained5 = $_POST['obtained51m'];
        $max51= $_POST['max511m'];
        $obtained52 = $_POST['obtained521m'];
        $total53 = $_POST['total531m'];
        $max6 = $_POST['max61m'];
        $obtained6 = $_POST['obtained61m'];
        $max61 = $_POST['max611m'];
        $obtained62 = $_POST['obtained621m'];
        $total63 = $_POST['total631m'];
        $max7 = $_POST['max71m'];
        $obtained7 = $_POST['obtained71m'];
        $max71 = $_POST['max711m'];
        $obtained72 = $_POST['obtained721m'];
        $total73 = $_POST['total731m'];
        $max8 = $_POST['max81m'];
        $obtained8 = $_POST['obtained81m'];
        $max81= $_POST['max811m'];
        $obtained82 = $_POST['obtained821m'];
        $total83 = $_POST['total831m'];
        $max9 = $_POST['max91m'];
        $obtained9 = $_POST['obtained91m'];
        $max91= $_POST['max911m'];
        $obtained92 = $_POST['obtained921m'];
        $total93 = $_POST['total931m'];
        $grandtotal = $_POST['grandtotal1m'];
        $percentage112=$_POST['percentage1121m'];
        $query1="INSERT INTO `sem2m`(`StudentName`, `FatherName`, `RegistrationNo`, `RollNo`, `Date`, `Category`, `max11m`, `obtained11m`, `max111m`, `obtained111m`, `total121m`, `max21m`, `obtained21m`, `max211m`, `obtained211m`, `total221m`, `max31m`, `obtained31m`, `max311m`, `obtained321m`, `total331m`, `max41m`, `obtained41m`, `max411m`, `obtained421m`, `total431m`, `max51m`, `obtained51m`, `max511m`, `obtained521m`, `total531m`, `max61m`, `obtained61m`, `max611m`, `obtained621m`, `total631m`, `max71m`, `obtained71m`, `max711m`, `obtained721m`, `total731m`, `max81m`, `obtained81m`, `max811m`, `obtained821m`, `total831m`, `max91m`, `obtained91m`, `max911m`, `obtained921m`, `total931m`, `grandtotal1m`, `percentage1121m`) VALUES ('$studname','$fathername','$regno','$rollno','$dateent','$category','$max1','$obtained1','$max11','$obtained11','$total12','$max2','$obtained2','$max21','$obtained21','$total22','$max3','$obtained3','$max31','$obtained32','$total33','$max4','$obtained4','$max41','$obtained42','$total43','$max5','$obtained5','$max51','$obtained52','$total53','$max6','$obtained6','$max61','$obtained62','$total63','$max7','$obtained7','$max71','$obtained72','$total73','$max8','$obtained8','$max81','$obtained82','$total83','$max9','$obtained9','$max91','$obtained92','$total93','$grandtotal','$percentage112')";
        if(mysqli_query($db,$query1))
        {
           //header('location:form.php');
           echo "<script>
           
               if(confirm('Your information has been submitted'))
               {
                   location.replace('Insert_Marks_Mechanical_sem2.php');
               }
           </script>";
           //echo $firstname."<script type='text/javascript>alert('Your information has been successfully saved')</script>'";
        }
        mysqli_close($db);
    }
?>