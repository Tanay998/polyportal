<?php
 include('conn.php');
  if(isset($_POST['submit']))
    {
        $studname = $_POST['StudentName'];
        $fathername = $_POST['FatherName'];
        $regno = $_POST['RegistrationNo'];
        $course = $_POST['Branch'];
        $semester = $_POST['Semester'];
        $finstallement = $_POST['SecondInstallement'];
        $amount2= $_POST['AmountStu2'];
        $date2 = $_POST['AmDate2'];
        $dueDate21 = $_POST['DueDate21'];
        $remainingAmount21 = $_POST['RemainingAmount21'];
        $totalamount11 = $_POST['TotalAmount11'];
        $query1="INSERT INTO `feeinformation2`(`StudentName`, `FatherName`, `RegistrationNo`, `Branch`, `Semester`, `SecondInstallement`, `AmountStu2`, `AmDate2`, `DueDate21`, `RemainingAmount21`, `TotalAmount11`) VALUES ('$studname','$fathername','$regno','$course','$semester','$finstallement','$amount2','$date2','$dueDate21','$remainingAmount21','$totalamount11')";
        if(mysqli_query($db,$query1))
        {
           //header('location:form.php');
           echo "<script>
           
               if(confirm('Your information has been submitted'))
               {
                   location.replace('secondInstallement.php');
               }
           </script>";
           //echo $firstname."<script type='text/javascript>alert('Your information has been successfully saved')</script>'";
        }
        mysqli_close($db);
    }
?>