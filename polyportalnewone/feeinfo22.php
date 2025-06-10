<?php 
    include('conn.php');
    extract($_POST);
    if(isset($_POST['readrecord']) && isset($_POST['course']) && isset($_POST['myInput']) && isset($_POST['fyear'])){
        $data = '<table class="table table-bordered table-striped table-responsive">
            <tr>
                <th>S.No</th>
                <th>Year</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Parents Mobile No.</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Gender</th>
            </tr>';
        if(($course=="Diploma in Electrical Engineering" && $myInput==1) || ($course=="Diploma in Mechanical Engineering" && $myInput==1))////////////////// Main If Start//////
        {    
        $displayquery = "SELECT * FROM `record1` WHERE `Course`='$course' AND `Year`='$myInput' AND `AdmissionNo1`='$fyear'";
        //$addquery ="SELECT SUM(GrandTotal) FROM `feeinformation1`";
        //$result1 = mysqli_query($db,$addquery);
        $result = mysqli_query($db, $displayquery);
        $rowcount=mysqli_num_rows($result);
        if(mysqli_num_rows($result) > 0){ ///// If Start //////
            $number = 1;
            while($row = mysqli_fetch_array($result)){
                $data .='<tr>
                    <td>'.$number.'</td>
                    <td>'.$row['Year'].'</td>
                    <td>'.'<a class="btn btn-warning" target="_blank" href="showdata111.php?pname='.$row['First Name'].' && pyear='.$row['Year'].'">'.$row['First Name'].'</a>'.'</td>
                    <td>'.$row['Middle Name'].'</td>
                    <td>'.$row['Last Name'].'</td>
                    <td>'.$row['Father Name'].'</td>
                    <td>'.$row['Mother Name'].'</td>
                    <td>'.$row['Parents Mobile No'].'</td>
                    <td>'.$row['Date Of Birth'].'</td>
                    <td>'.$row['Email'].'</td>
                    <td>'.$row['Gender'].'</td>
                    </tr>';
                $number++;
            }
                echo "<h2>Total Number of Students: ".$rowcount."</h2>";

        }///////// if End //////////////
    }////// main if End //////////////

    else if(($course=="Diploma in Electrical Engineering" && $myInput==2) || ($course=="Diploma in Mechanical Engineering" && $myInput==2)){     //////////// Main Else Start ////////////////

        $displayquery = "SELECT * FROM `record2` WHERE `Course`='$course' AND `Year`='$myInput' AND `AdmissionNo1`='$fyear'";
        //$addquery ="SELECT SUM(GrandTotal) FROM `feeinformation1` WHERE `Branch`='$myInput' AND `Year`='$finy' AND `Semester`='$sem'";
        //$result1 = mysqli_query($db,$addquery);
        $result = mysqli_query($db, $displayquery);
        $rowcount1=mysqli_num_rows($result);
        if(mysqli_num_rows($result) > 0){ ///// If Start //////
            $number = 1;
            while($row = mysqli_fetch_array($result)){
                $data .='<tr>
                <td>'.$number.'</td>
                <td>'.$row['Year'].'</td>
                <td>'.'<a class="btn btn-warning" target="_blank" href="showdata111.php?pname='.$row['First Name'].' && pyear='.$row['Year'].'">'.$row['First Name'].'</a>'.'</td>
                <td>'.$row['Middle Name'].'</td>
                <td>'.$row['Last Name'].'</td>
                <td>'.$row['Father Name'].'</td>
                <td>'.$row['Mother Name'].'</td>
                <td>'.$row['Parents Mobile No'].'</td>
                <td>'.$row['Date Of Birth'].'</td>
                <td>'.$row['Email'].'</td>
                <td>'.$row['Gender'].'</td>
                    </tr>';
                $number++;
            }
                echo "<h2>Total Number of Students "." ".$rowcount1."</h2>";

        }///////// if End //////////////


    }/////////////////// Main Else End/////////////

    else if(($course=="Diploma in Electrical Engineering" && $myInput==3) || ($course=="Diploma in Mechanical Engineering" && $myInput==3)){     //////////// Main Else Start ////////////////

        $displayquery = "SELECT * FROM `record3` WHERE `Course`='$course' AND `Year`='$myInput' AND `AdmissionNo1`='$fyear'";
        //$addquery ="SELECT SUM(GrandTotal) FROM `feeinformation1` WHERE `Branch`='$myInput' AND `Year`='$finy' AND `Semester`='$sem'";
        //$result1 = mysqli_query($db,$addquery);
        $result = mysqli_query($db, $displayquery);
        $rowcount1=mysqli_num_rows($result);
        if(mysqli_num_rows($result) > 0){ ///// If Start //////
            $number = 1;
            while($row = mysqli_fetch_array($result)){
                $data .='<tr>
                <td>'.$number.'</td>
                <td>'.$row['Year'].'</td>
                <td>'.'<a class="btn btn-warning" target="_blank" href="showdata111.php?pname='.$row['First Name'].' && pyear='.$row['Year'].'">'.$row['First Name'].'</a>'.'</td>
                <td>'.$row['Middle Name'].'</td>
                <td>'.$row['Last Name'].'</td>
                <td>'.$row['Father Name'].'</td>
                <td>'.$row['Mother Name'].'</td>
                <td>'.$row['Parents Mobile No'].'</td>
                <td>'.$row['Date Of Birth'].'</td>
                <td>'.$row['Email'].'</td>
                <td>'.$row['Gender'].'</td>
                    </tr>';
                $number++;
            }
                echo "<h2>Total Number of Students "." ".$rowcount1."</h2>";

        }///////// if End //////////////


    }/////////////////// Main Else End/////////////
        $data .='</table>';
            echo $data;
    } 

    // if(isset($_POST['Year']) && isset($_POST['StudentName']) && isset($_POST['FatherName']) && isset($_POST['RegistrationNo']) && isset($_POST['Branch']) && isset($_POST['Semester']) && isset($_POST['FirstInstallement']) && isset($_POST['Date1']) && isset($_POST['SecondInstallement']) && isset($_POST['Date2']) && isset($_POST['TotalAmount1']) && isset($_POST['ThirdInstallement']) && isset($_POST['Date3']) && isset($_POST['FourthInstallement']) && isset($_POST['Date4']) && isset($_POST['TotalAmount2']) && isset($_POST['FifthInstallement']) && isset($_POST['Date5']) && isset($_POST['SixthInstallement']) && isset($_POST['Date6']) && isset($_POST['TotalAmount3']) && isset($_POST['GrandTotal']))
    // {
    //     $query = "INSERT INTO `feeinformation1`(`Year`,`StudentName`, `FatherName`, `RegistrationNo`, `Branch`, `Semester`, `FirstInstallement`, `Date1`, `SecondInstallement`, `Date2`, `TotalAmount1`, `ThirdInstallement`, `Date3`, `FourthInstallement`, `Date4`, `TotalAmount2`, `FifthInstallement`, `Date5`, `SixthInstallement`, `Date6`, `TotalAmount3`, `GrandTotal`) VALUES('$Year','$StudentName', '$FatherName','$RegistrationNo','$Branch','$Semester','$FirstInstallement','$Date1','$SecondInstallement','$Date2','$TotalAmount1','$ThirdInstallement','$Date3','$FourthInstallement','$Date4','$TotalAmount2','$FifthInstallement','$Date5','$SixthInstallement','$Date6','$TotalAmount3','$GrandTotal')";
    //     mysqli_query($db,$query);
    // }

    /////// delete user record ///////////

    if(isset($_POST['deleteid'])){
        $userid = $_POST['deleteid'];
        $deletequery = " DELETE FROM `feeinformation1` WHERE `feeinformation1`.`id`='$userid' ";
        mysqli_query($db,$deletequery);
    }

    /////// get user id for update ///////////

    if(isset($_POST['id']) && isset($_POST['id'])!=""){
        $user_id = $_POST['id'];
        $query = "SELECT * FROM `feeinformation1` WHERE `id`='$user_id'";
        if(!$result = mysqli_query($db,$query)){
            exit(mysqli_error());
        }
        
        $response = array();

        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $response = $row;
            }
        }
        else
        {
            $response['status'] = 200;
            $response['message'] = "Data not found";
        }

        // PHP has built in function to handle JSON
        // Object in PHP can be converted into JSON by using the PHP function JSON_encode();
        echo json_encode($response);
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Invalid Request";
    }

    /////// Update Table ///////

    if(isset($_POST['hidden_user_idupd'])){
        $hidden_user_idupd = $_POST['hidden_user_idupd'];
        $Yearupd = $_POST['Yearupd'];
        $StudentNameupd = $_POST['StudentNameupd'];
        $FatherNameupd = $_POST['FatherNameupd'];
        $RegistrationNoupd = $_POST['RegistrationNoupd'];
        $Branchupd = $_POST['Branchupd'];
        $Semesterupd = $_POST['Semesterupd'];
        $FirstInstallementupd = $_POST['FirstInstallementupd'];
        $Date1upd = $_POST['Date1upd'];
        $SecondInstallementupd = $_POST['SecondInstallementupd'];
        $Date2upd = $_POST['Date2upd'];
        $TotalAmount1upd = $_POST['TotalAmount1upd'];
        $ThirdInstallementupd = $_POST['ThirdInstallementupd'];
        $Date3upd = $_POST['Date3upd'];
        $FourthInstallementupd = $_POST['FourthInstallementupd'];
        $Date4upd = $_POST['Date4upd'];
        $TotalAmount2upd = $_POST['TotalAmount2upd'];
        $FifthInstallementupd = $_POST['FifthInstallementupd'];
        $Date5upd = $_POST['Date5upd'];
        $SixthInstallementupd = $_POST['SixthInstallementupd'];
        $Date6upd = $_POST['Date6upd'];
        $TotalAmount3upd = $_POST['TotalAmount3upd'];
        $GrandTotalupd = $_POST['GrandTotalupd'];

        $query = " UPDATE `feeinformation1` SET `Year` = '$Yearupd', `StudentName`='$StudentNameupd',`FatherName`='$FatherNameupd',`RegistrationNo`='$RegistrationNoupd',`Branch`='$Branchupd',`Semester`='$Semesterupd',`FirstInstallement`='$FirstInstallementupd',`Date1` = '$Date1upd',`SecondInstallement`='$SecondInstallementupd',`Date2`='$Date2upd',`TotalAmount1`='$TotalAmount1upd',`ThirdInstallement`='$ThirdInstallementupd',`Date3`='$Date3upd',`FourthInstallement`='$FourthInstallementupd',`Date4`='$Date4upd',`TotalAmount2`='$TotalAmount2upd',`FifthInstallement`='$FifthInstallementupd',`Date5`='$Date5upd',`SixthInstallement`='$SixthInstallementupd',`Date6`='$Date6upd',`TotalAmount3`='$TotalAmount3upd',`GrandTotal`='$GrandTotalupd' WHERE `id`='$hidden_user_idupd'";
        mysqli_query($db,$query);
    }
?>