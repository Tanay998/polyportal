<?php
 include('conn.php');
  if(isset($_POST['submit']))
    {
        $studname = $_POST['StudentName'];
        $fathername = $_POST['FatherName'];
        $regno = $_POST['RegistrationNo'];
        $course = $_POST['Branch'];
        $semester = $_POST['Semester'];
        $finstallement = $_POST['ThirdInstallement'];
        $amount3= $_POST['AmountStu3'];
        $date3 = $_POST['AmDate3'];
        $dueDate31 = $_POST['DueDate31'];
        $remainingAmount31 = $_POST['RemainingAmount31'];
        $totalamount13 = $_POST['TotalAmount13'];
        $query1="INSERT INTO `feeinformation3`(`StudentName`, `FatherName`, `RegistrationNo`, `Branch`, `Semester`, `ThirdInstallement`, `AmountStu3`, `AmDate3`, `DueDate31`, `RemainingAmount31`, `TotalAmount13`) VALUES ('$studname','$fathername','$regno','$course','$semester','$finstallement','$amount3','$date3','$dueDate31','$remainingAmount31','$totalamount13')";
        if(mysqli_query($db,$query1))
        {
           //header('location:form.php');
           echo "<script>
           
               if(confirm('Your information has been submitted'))
               {
                   location.replace('thirdInstallement.php');
               }
           </script>";
           //echo $firstname."<script type='text/javascript>alert('Your information has been successfully saved')</script>'";
        }
        mysqli_close($db);
    }
?>