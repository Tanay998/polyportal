<?php
 include('conn.php');
  if(isset($_POST['submit']))
    {
        $studname = $_POST['StudentName'];
        $fathername = $_POST['FatherName'];
        $regno = $_POST['RegistrationNo'];
        $course = $_POST['Branch'];
        $semester = $_POST['Semester'];
        $finstallement = $_POST['FourthInstallement'];
        $amount4= $_POST['AmountStu4'];
        $date4 = $_POST['AmDate4'];
        $dueDate41 = $_POST['DueDate41'];
        $remainingAmount41 = $_POST['RemainingAmount41'];
        $totalamount14 = $_POST['TotalAmount14'];
        $query1="INSERT INTO `feeinformation4`(`StudentName`, `FatherName`, `RegistrationNo`, `Branch`, `Semester`, `FourthInstallement`, `AmountStu4`, `AmDate4`, `DueDate41`, `RemainingAmount41`, `TotalAmount14`) VALUES ('$studname','$fathername','$regno','$course','$semester','$finstallement','$amount4','$date4','$dueDate41','$remainingAmount41','$totalamount14')";
        if(mysqli_query($db,$query1))
        {
           //header('location:form.php');
           echo "<script>
           
               if(confirm('Your information has been submitted'))
               {
                   location.replace('fourthInstallemet.php');
               }
           </script>";
           //echo $firstname."<script type='text/javascript>alert('Your information has been successfully saved')</script>'";
        }
        mysqli_close($db);
    }
?>