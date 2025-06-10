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
        $amount1= $_POST['AmountStu3'];
        $date1 = $_POST['AmDate3'];
        $dueDate1 = $_POST['DueDate31'];
        $remainingAmount1 = $_POST['RemainingAmount31'];
        $totalamount1 = $_POST['TotalAmount13'];
       // $query1="UPDATE `feeinformation2` SET `RegistrationNo`='$regno',`Branch`='$course',`Semester`='$semester',`FirstInstallement`='$finstallement',`AmountStu1`='$amount1',`AmDate1`='$date1',`DueDate1`='$dueDate1',`RemainingAmount1`='$remainingAmount1',`TotalAmount1`='$totalamount1' WHERE `StudentName`='$studname' AND `FatherName`='$fathername'";
        
         $query1= "UPDATE `feeinformation3` SET `StudentName`='$studname',`FatherName`='$fathername',`RegistrationNo`='$regno',`Branch`='$course',`Semester`='$semester',`ThirdInstallement`='$finstallement',`AmountStu3`='$amount1',`AmDate3`='$date1',`DueDate31`='$dueDate1',`RemainingAmount31`='$remainingAmount1',`TotalAmount13`='$totalamount1' WHERE `StudentName`='$studname' AND `FatherName`='$fathername'";
        if(mysqli_query($db,$query1))
        {
           //header('location:form.php');
           echo "<script>
           
           if(confirm('Your information has been updated'))
           {
               location.replace('FeeShow3.php');
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