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
        $amount1= $_POST['AmountStu6'];
        $date1 = $_POST['AmDate6'];
        $dueDate1 = $_POST['DueDate61'];
        $remainingAmount1 = $_POST['RemainingAmount61'];
        $totalamount1 = $_POST['TotalAmount16'];
       // $query1="UPDATE `feeinformation2` SET `RegistrationNo`='$regno',`Branch`='$course',`Semester`='$semester',`FirstInstallement`='$finstallement',`AmountStu1`='$amount1',`AmDate1`='$date1',`DueDate1`='$dueDate1',`RemainingAmount1`='$remainingAmount1',`TotalAmount1`='$totalamount1' WHERE `StudentName`='$studname' AND `FatherName`='$fathername'";
        
         $query1= "UPDATE `feeinformation6` SET `StudentName`='$studname',`FatherName`='$fathername',`RegistrationNo`='$regno',`Branch`='$course',`Semester`='$semester',`SixthInstallement`='$finstallement',`AmountStu6`='$amount1',`AmDate6`='$date1',`DueDate61`='$dueDate1',`RemainingAmount61`='$remainingAmount1',`TotalAmount16`='$totalamount1' WHERE `StudentName`='$studname' AND `FatherName`='$fathername'";
        if(mysqli_query($db,$query1))
        {
           //header('location:form.php');
           echo "<script>
           
           if(confirm('Your information has been updated'))
           {
               location.replace('FeeShow6.php');
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