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
        $max1= $_POST['max11'];
        $obtained1 = $_POST['obtained11'];
        $max11 = $_POST['max111'];
        $obtained11 = $_POST['obtained111'];
        $total12 = $_POST['total121'];
        $max2 = $_POST['max21'];
        $obtained2 = $_POST['obtained21'];
        $max21 = $_POST['max211'];
        $obtained21 = $_POST['obtained211'];
        $total22 = $_POST['total221'];
        $max3 = $_POST['max31'];
        $obtained3 = $_POST['obtained31'];
        $max31 = $_POST['max311'];
        $obtained32= $_POST['obtained321'];
        $total33 = $_POST['total331'];
        $max4 = $_POST['max41'];
        $obtained4 = $_POST['obtained41'];
        $max41 = $_POST['max411'];
        $obtained42 = $_POST['obtained421'];
        $total43 = $_POST['total431'];
        $max5 = $_POST['max51'];
        $obtained5 = $_POST['obtained51'];
        $max51= $_POST['max511'];
        $obtained52 = $_POST['obtained521'];
        $total53 = $_POST['total531'];
        $max6 = $_POST['max61'];
        $obtained6 = $_POST['obtained61'];
        $max61 = $_POST['max611'];
        $obtained62 = $_POST['obtained621'];
        $total63 = $_POST['total631'];
        $max7 = $_POST['max71'];
        $obtained7 = $_POST['obtained71'];
        $max71 = $_POST['max711'];
        $obtained72 = $_POST['obtained721'];
        $total73 = $_POST['total731'];
        $max9 = $_POST['max91'];
        $obtained9 = $_POST['obtained91'];
        $max91= $_POST['max911'];
        $obtained92 = $_POST['obtained921'];
        $total93 = $_POST['total931'];
        $grandtotal = $_POST['grandtotal1'];
        $percentage112=$_POST['percentage1121'];
        $query1="INSERT INTO `sem3`(`StudentName`, `FatherName`, `RegistrationNo`, `RollNo`, `Date`, `Category`, `max11`, `obtained11`, `max111`, `obtained111`, `total121`, `max21`, `obtained21`, `max211`, `obtained211`, `total221`, `max31`, `obtained31`, `max311`, `obtained321`, `total331`, `max41`, `obtained41`, `max411`, `obtained421`, `total431`, `max51`, `obtained51`, `max511`, `obtained521`, `total531`, `max61`, `obtained61`, `max611`, `obtained621`, `total631`, `max71`, `obtained71`, `max711`, `obtained721`, `total731`, `max91`, `obtained91`, `max911`, `obtained921`, `total931`, `grandtotal1`, `percentage1121`) VALUES ('$studname','$fathername','$regno','$rollno','$dateent','$category','$max1','$obtained1','$max11','$obtained11','$total12','$max2','$obtained2','$max21','$obtained21','$total22','$max3','$obtained3','$max31','$obtained32','$total33','$max4','$obtained4','$max41','$obtained42','$total43','$max5','$obtained5','$max51','$obtained52','$total53','$max6','$obtained6','$max61','$obtained62','$total63','$max7','$obtained7','$max71','$obtained72','$total73','$max9','$obtained9','$max91','$obtained92','$total93','$grandtotal','$percentage112')";
        if(mysqli_query($db,$query1))
        {
           //header('location:form.php');
           echo "<script>
           
               if(confirm('Your information has been submitted'))
               {
                   location.replace('insertrecord3.php');
               }
           </script>";
           //echo $firstname."<script type='text/javascript>alert('Your information has been successfully saved')</script>'";
        }
        mysqli_close($db);
    }
?>