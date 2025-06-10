<?php
 include('conn.php');
  if(isset($_POST['submit']))
    {
        $studname = $_POST['StudentName'];
        $fathername = $_POST['FatherName'];
        $regno = $_POST['RegistrationNo'];
        $course = $_POST['Branch'];
        $semester = $_POST['Semester'];
        $finstallement = $_POST['FifthInstallement'];
        $amount5= $_POST['AmountStu5'];
        $date5 = $_POST['AmDate5'];
        $dueDate51 = $_POST['DueDate51'];
        $remainingAmount51 = $_POST['RemainingAmount51'];
        $totalamount15 = $_POST['TotalAmount15'];
        $query1="INSERT INTO `feeinformation5`(`StudentName`, `FatherName`, `RegistrationNo`, `Branch`, `Semester`, `FifthInstallement`, `AmountStu5`, `AmDate5`, `DueDate51`, `RemainingAmount51`, `TotalAmount15`) VALUES ('$studname','$fathername','$regno','$course','$semester','$finstallement','$amount5','$date5','$dueDate51','$remainingAmount51','$totalamount15')";
        if(mysqli_query($db,$query1))
        {
           //header('location:form.php');
           echo "<script>
           
               if(confirm('Your information has been submitted'))
               {
                   location.replace('fifthInstallement.php');
               }
           </script>";
           //echo $firstname."<script type='text/javascript>alert('Your information has been successfully saved')</script>'";
        }
        mysqli_close($db);
    }
?>