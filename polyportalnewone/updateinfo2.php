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
        $amount1= $_POST['AmountStu2'];
        $date1 = $_POST['AmDate2'];
        $dueDate1 = $_POST['DueDate21'];
        $remainingAmount1 = $_POST['RemainingAmount21'];
        $totalamount1 = $_POST['TotalAmount11'];
       // $query1="UPDATE `feeinformation2` SET `RegistrationNo`='$regno',`Branch`='$course',`Semester`='$semester',`FirstInstallement`='$finstallement',`AmountStu1`='$amount1',`AmDate1`='$date1',`DueDate1`='$dueDate1',`RemainingAmount1`='$remainingAmount1',`TotalAmount1`='$totalamount1' WHERE `StudentName`='$studname' AND `FatherName`='$fathername'";
        
         $query1= "UPDATE `feeinformation2` SET `StudentName`='$studname',`FatherName`='$fathername',`RegistrationNo`='$regno',`Branch`='$course',`Semester`='$semester',`SecondInstallement`='$finstallement',`AmountStu2`='$amount1',`AmDate2`='$date1',`DueDate21`='$dueDate1',`RemainingAmount21`='$remainingAmount1',`TotalAmount11`='$totalamount1' WHERE `StudentName`='$studname' AND `FatherName`='$fathername'";
        if(mysqli_query($db,$query1))
        {
           //header('location:form.php');
           echo "<script>
           
           if(confirm('Your information has been updated'))
           {
               location.replace('FeeShow2.php');
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