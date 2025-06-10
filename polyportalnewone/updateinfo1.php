<?php
 include('conn.php');
  if(isset($_POST['submit']))
    {
        $studname = $_POST['StudentName'];
        $fathername = $_POST['FatherName'];
        $regno = $_POST['RegistrationNo'];
        $course = $_POST['Branch'];
        $semester = $_POST['Semester'];
        $finstallement = $_POST['FirstInstallement'];
        $amount1= $_POST['AmountStu1'];
        $date1 = $_POST['AmDate1'];
        $dueDate1 = $_POST['DueDate1'];
        $remainingAmount1 = $_POST['RemainingAmount1'];
        $totalamount1 = $_POST['TotalAmount1'];
        $query1="UPDATE `feeinformation1` SET `RegistrationNo`='$regno',`Branch`='$course',`Semester`='$semester',`FirstInstallement`='$finstallement',`AmountStu1`='$amount1',`AmDate1`='$date1',`DueDate1`='$dueDate1',`RemainingAmount1`='$remainingAmount1',`TotalAmount1`='$totalamount1' WHERE `StudentName`='$studname' AND `FatherName`='$fathername'";
        if(mysqli_query($db,$query1))
        {
           //header('location:form.php');
           echo "<script>
           
           if(confirm('Your information has been updated'))
           {
               location.replace('FeeShow1.php');
           }
           else
           {
                alert('Data not updated Successfully');
           }
       </script>";
           //echo $firstname."<script type='text/javascript>alert('Your information has been successfully saved')</script>'";
        }
        mysqli_close($db);
    }
?>