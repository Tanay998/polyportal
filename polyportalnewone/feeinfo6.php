<?php
 include('conn.php');
  if(isset($_POST['submit']))
    {
        $studname = $_POST['StudentName'];
        $fathername = $_POST['FatherName'];
        $regno = $_POST['RegistrationNo'];
        $course = $_POST['Branch'];
        $semester = $_POST['Semester'];
        $finstallement = $_POST['SixthInstallement'];
        $amount6= $_POST['AmountStu6'];
        $date6 = $_POST['AmDate6'];
        $dueDate61 = $_POST['DueDate61'];
        $remainingAmount61 = $_POST['RemainingAmount61'];
        $totalamount16 = $_POST['TotalAmount16'];
        $query1="INSERT INTO `feeinformation6`(`StudentName`, `FatherName`, `RegistrationNo`, `Branch`, `Semester`, `SixthInstallement`, `AmountStu6`, `AmDate6`, `DueDate61`, `RemainingAmount61`, `TotalAmount16`) VALUES ('$studname','$fathername','$regno','$course','$semester','$finstallement','$amount6','$date6','$dueDate61','$remainingAmount61','$totalamount16')";
        if(mysqli_query($db,$query1))
        {
           //header('location:form.php');
           echo "<script>
           
               if(confirm('Your information has been submitted'))
               {
                   location.replace('sixthInstallement.php');
               }
           </script>";
           //echo $firstname."<script type='text/javascript>alert('Your information has been successfully saved')</script>'";
        }
        mysqli_close($db);
    }
?>