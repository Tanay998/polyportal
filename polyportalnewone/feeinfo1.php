<?php 
    include('conn.php');
    extract($_POST);
    if(isset($_POST['readrecord']) && isset($_POST['myInput']) && isset($_POST['finy'] )){
        $data = '<table class="table table-bordered table-striped table-sm table-responsive">
            <tr style="border:2px solid #060606;">
                <th rowspan="3" style="border:2px solid #060606;">S.No</th>
                <th rowspan="3" style="border:2px solid #060606;">Year</th>
                <th rowspan="3" style="border:2px solid #060606;">Student<br />Name</th>
                <th rowspan="3" style="border:2px solid #060606;">Father<br />Name</th>
                <th rowspan="3" style="border:2px solid #060606;">Registration<br />No</th>
                <th rowspan="3" style="border:2px solid #060606;">Branch</th>
                <th colspan="13" class="text-center" style="border:2px solid #060606;">First Year</th>
                <th colspan="11" class="text-center" style="border:2px solid #060606;">Second Year</th>
                <th colspan="11" class="text-center" style="border:2px solid #060606;">Third Year</th>
                <th rowspan="3" class="text-center" style="border:2px solid #060606;">Grand Total</th>
                <th rowspan="3" style="border:2px solid #060606;">Edit Action</th>
                <th rowspan="3" style="border:2px solid #060606;">Delete Action</th>
            </tr>
            <tr style="border:2px solid #060606;">
                <th colspan="8" class="text-center" style="border:2px solid #060606;">First Installement</th>
                <th colspan="4" class="text-center" style="border:2px solid #060606;">Second Installment</th>
                <th rowspan="2" style="border:2px solid #060606;">Total Amount(First Installment + Second Installement)</th>
                <th colspan="6" class="text-center" style="border:2px solid #060606;">First Installement</th>
                <th colspan="4" class="text-center" style="border:2px solid #060606;">Second Installement</th>
                <th rowspan="2" style="border:2px solid #060606;">Total Amount<br />(First Installment + Second Installement)</th>
                <th colspan="6" class="text-center" style="border:2px solid #060606;">First Installement</th>
                <th colspan="4" class="text-center" style="border:2px solid #060606;">Second Installement</th>
                <th rowspan="2" style="border:2px solid #060606;">Total Amount<br />(First Installment + Second Installement)</th>
            </tr>
            <tr style="border:2px solid #060606;">
                <th style="border:2px solid #060606;">Receipt No</th>
                <th style="border:2px solid #060606;">Date</th>
                <th style="border:2px solid #060606;">Tution Fee (I<sup>st</sup>Installement)</th>
                <th style="border:2px solid #060606;">Student Fund Fee</th>
                <th style="border:2px solid #060606;">Security Amount</th>
                <th style="border:2px solid #060606;">Personality Development <br />Charges</th>
                <th style="border:2px solid #060606;">Hostel Charges</th>
                <th style="border:2px solid #060606;">Sem1:Total Amount (First Installement)</th>
                <th style="border:2px solid #060606;">Receipt No</th>
                <th style="border:2px solid #060606;">Date</th>
                <th style="border:2px solid #060606;">Tution Fee (II<sup>nd</sup>Installement)</th>
                <th style="border:2px solid #060606;">Sem2:Total Amount (Second Installement)</th>
                <th style="border:2px solid #060606;">Receipt No</th>
                <th style="border:2px solid #060606;">Date</th>
                <th style="border:2px solid #060606;">Tution Fee (I<sup>st</sup>Installement)</th>
                <th style="border:2px solid #060606;">Student Fund Fee</th>
                <th style="border:2px solid #060606;">Hostel Charges</th>
                <th style="border:2px solid #060606;">Sem3:Total Amount(First Installement)</th>
                <th style="border:2px solid #060606;">Receipt No</th>
                <th style="border:2px solid #060606;">Date</th>
                <th style="border:2px solid #060606;">Tution Fee (II<sup>nd</sup>Installement)</th>
                <th style="border:2px solid #060606;">Sem4:Total Amount (second Installement)</th>
                <th style="border:2px solid #060606;">Receipt No</th>
                <th style="border:2px solid #060606;">Date</th>
                <th style="border:2px solid #060606;">Tution Fee (First Installement)</th>
                <th style="border:2px solid #060606;">Student Fund Fee</th>
                <th style="border:2px solid #060606;">Hostel Charges</th>
                <th style="border:2px solid #060606;">Sem5:Total Amount(First Installement)</th>
                <th style="border:2px solid #060606;">Receipt No</th>
                <th style="border:2px solid #060606;">Date</th>
                <th style="border:2px solid #060606;">Tution Fee (II<sup>nd</sup>Installement)</th>
                <th style="border:2px solid #060606;">Sem6:TotalAmount (Second Installement)</th>
            </tr>';
        if($myInput=="" || $finy=="")////////////////// Main If Start//////
        {    
        $displayquery = "SELECT * FROM `feeinformation1`";
        $addquery ="SELECT SUM(grand) FROM `feeinformation1`";
        $result1 = mysqli_query($db,$addquery);
        $result = mysqli_query($db, $displayquery);
        if(mysqli_num_rows($result) > 0){ ///// If Start //////
            $number = 1;
            while($row = mysqli_fetch_array($result)){
                $data .='<tr style="border:2px solid #060606;">
                    <td style="border:2px solid #060606;">'.$number.'</td>
                    <td style="border:2px solid #060606;">'.$row['Year'].'</td>
                    <td style="border:2px solid #060606;"><a class="btn btn-success" target="_blank" href="ShowFee.php?pname='.$row['StudentName'].' && preg='.$row['RegistrationNo'].'">'.$row['StudentName'].'</a></td>
                    <td style="border:2px solid #060606;">'.$row['FatherName'].'</td>
                    <td style="border:2px solid #060606;">'.$row['RegistrationNo'].'</td>
                    <td style="border:2px solid #060606;">'.$row['Branch'].'</td>
                    <td style="border:2px solid #060606;">'.$row['receiptNo1'].'</td>
                    <td style="border:2px solid #060606;">'.$row['Date2'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TutionFee1'].'</td>
                    <td style="border:2px solid #060606;">'.$row['StudentFund1'].'</td>
                    <td style="border:2px solid #060606;">'.$row['SecurityAmount'].'</td>
                    <td style="border:2px solid #060606;">'.$row['PDc'].'</td>
                    <td style="border:2px solid #060606;">'.$row['HostelCharges1'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount19'].'</td>
                    <td style="border:2px solid #060606;">'.$row['receiptNo2'].'</td>
                    <td style="border:2px solid #060606;">'.$row['Date29'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TutionFee'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount234'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount1'].'</td>
                    <td style="border:2px solid #060606;">'.$row['receiptNo3'].'</td>
                    <td style="border:2px solid #060606;">'.$row['Date21'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TutionFee11'].'</td>
                    <td style="border:2px solid #060606;">'.$row['StudentFund11'].'</td>
                    <td style="border:2px solid #060606;">'.$row['HostelCharges11'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount25'].'</td>
                    <td style="border:2px solid #060606;">'.$row['receiptNo4'].'</td>
                    <td style="border:2px solid #060606;">'.$row['Date28'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TutionFee2'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount890'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount11'].'</td>
                    <td style="border:2px solid #060606;">'.$row['receiptNo5'].'</td>
                    <td style="border:2px solid #060606;">'.$row['Date31'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TutionFee31'].'</td>
                    <td style="border:2px solid #060606;">'.$row['StudentFund31'].'</td>
                    <td style="border:2px solid #060606;">'.$row['HostelCharges31'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount31'].'</td>
                    <td style="border:2px solid #060606;">'.$row['receiptNo6'].'</td>
                    <td style="border:2px solid #060606;">'.$row['Date32'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TutionFee3'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount120'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount345'].'</td>
                    <td style="border:2px solid #060606;">'.$row['grand'].'</td>
                    <td style="border:2px solid #060606;">
                        <button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning" title="'.$row['StudentName'].'">Edit</button>
                    </td>
                    <td style="border:2px solid #060606;">
                        <button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
                    </td>
                    </tr>';
                $number++;
            }
            while($row1 = mysqli_fetch_array($result1))
            {
                echo "<h4>Total Fee: ".$row1['SUM(grand)']."</h4>";
            }

        }///////// if End //////////////
    }////// main if End //////////////

    else{     //////////// Main Else Start ////////////////

        $displayquery = "SELECT * FROM `feeinformation1` WHERE `Branch`='$myInput' AND `Year`='$finy'";
        $addquery ="SELECT SUM(grand) FROM `feeinformation1` WHERE `Branch`='$myInput' AND `Year`='$finy'";
        $addquery1="SELECT SUM(TotalAmount19) FROM `feeinformation1` WHERE `Branch`='$myInput' AND `Year`='$finy'";
        $addquery2="SELECT SUM(TotalAmount234) FROM `feeinformation1` WHERE `Branch`='$myInput' AND `Year`='$finy'";
        $addquery3 ="SELECT SUM(TotalAmount25) FROM `feeinformation1` WHERE `Branch`='$myInput' AND `Year`='$finy'";
        $addquery4 ="SELECT SUM(TotalAmount890) FROM `feeinformation1` WHERE `Branch`='$myInput' AND `Year`='$finy'";
        $addquery5 ="SELECT SUM(TotalAmount31) FROM `feeinformation1` WHERE `Branch`='$myInput' AND `Year`='$finy'";
        $addquery6 ="SELECT SUM(TotalAmount120) FROM `feeinformation1` WHERE `Branch`='$myInput' AND `Year`='$finy'";
        $result1 = mysqli_query($db,$addquery);
        $result2 = mysqli_query($db,$addquery1);
        $result3 = mysqli_query($db,$addquery2);
        $result4 = mysqli_query($db,$addquery3);
        $result5 = mysqli_query($db,$addquery4);
        $result6 = mysqli_query($db,$addquery5);
        $result7 = mysqli_query($db,$addquery6);
        $result = mysqli_query($db, $displayquery);
        if(mysqli_num_rows($result) > 0){ ///// If Start //////
            $number = 1;
            while($row = mysqli_fetch_array($result)){
                $data .='<tr style="border:2px solid #060606;">
                    <td style="border:2px solid #060606;">'.$number.'</td>
                    <td style="border:2px solid #060606;">'.$row['Year'].'</td>
                    <td style="border:2px solid #060606;"><a class="btn btn-success" target="_blank" href="ShowFee.php?pname='.$row['StudentName'].' && preg='.$row['RegistrationNo'].'">'.$row['StudentName'].'</a></td>
                    <td style="border:2px solid #060606;">'.$row['FatherName'].'</td>
                    <td style="border:2px solid #060606;">'.$row['RegistrationNo'].'</td>
                    <td style="border:2px solid #060606;">'.$row['Branch'].'</td>
                    <td style="border:2px solid #060606;">'.$row['receiptNo1'].'</td>
                    <td style="border:2px solid #060606;">'.$row['Date2'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TutionFee1'].'</td>
                    <td style="border:2px solid #060606;">'.$row['StudentFund1'].'</td>
                    <td style="border:2px solid #060606;">'.$row['SecurityAmount'].'</td>
                    <td style="border:2px solid #060606;">'.$row['PDc'].'</td>
                    <td style="border:2px solid #060606;">'.$row['HostelCharges1'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount19'].'</td>
                    <td style="border:2px solid #060606;">'.$row['receiptNo2'].'</td>
                    <td style="border:2px solid #060606;">'.$row['Date29'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TutionFee'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount234'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount1'].'</td>
                    <td style="border:2px solid #060606;">'.$row['receiptNo3'].'</td>
                    <td style="border:2px solid #060606;">'.$row['Date21'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TutionFee11'].'</td>
                    <td style="border:2px solid #060606;">'.$row['StudentFund11'].'</td>
                    <td style="border:2px solid #060606;">'.$row['HostelCharges11'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount25'].'</td>
                    <td style="border:2px solid #060606;">'.$row['receiptNo4'].'</td>
                    <td style="border:2px solid #060606;">'.$row['Date28'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TutionFee2'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount890'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount11'].'</td>
                    <td style="border:2px solid #060606;">'.$row['receiptNo5'].'</td>
                    <td style="border:2px solid #060606;">'.$row['Date31'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TutionFee31'].'</td>
                    <td style="border:2px solid #060606;">'.$row['StudentFund31'].'</td>
                    <td style="border:2px solid #060606;">'.$row['HostelCharges31'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount31'].'</td>
                    <td style="border:2px solid #060606;">'.$row['receiptNo6'].'</td>
                    <td style="border:2px solid #060606;">'.$row['Date32'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TutionFee3'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount120'].'</td>
                    <td style="border:2px solid #060606;">'.$row['TotalAmount345'].'</td>
                    <td style="border:2px solid #060606;">'.$row['grand'].'</td>
                    <td style="border:2px solid #060606;">
                        <button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning" title="'.$row['StudentName'].'">Edit</button>
                    </td>
                    <td style="border:2px solid #060606;">
                        <button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
                    </td>
                    </tr>';
                $number++;
            }
            while($row1 = mysqli_fetch_array($result1))
            {
                echo "<h4>Total Fee Collection of "." ".$myInput." "." "."of Financial Year  ".$finy."  "."is: "." ".$row1['SUM(grand)']."</h4>";
            }
            while($row2 = mysqli_fetch_array($result2)){
                echo "<h4>Total Fee Collection of "." ".$myInput." "." "."of sem 1 is: ".$row2['SUM(TotalAmount19)']."</h4>";
            }
            while($row3 = mysqli_fetch_array($result3)){
                echo "<h4>Total Fee Collection of "." ".$myInput." "." "."of sem 2 is: ".$row3['SUM(TotalAmount234)']."</h4>";
            }
            while($row4 = mysqli_fetch_array($result4)){
                echo "<h4>Total Fee Collection of "." ".$myInput." "." "."of sem 3 is: ".$row4['SUM(TotalAmount25)']."</h4>";
            }
            while($row5 = mysqli_fetch_array($result5)){
                echo "<h4>Total Fee Collection of "." ".$myInput." "." "."of sem 4 is: ".$row5['SUM(TotalAmount890)']."</h4>";
            }
            while($row6 = mysqli_fetch_array($result6)){
                echo "<h4>Total Fee Collection of "." ".$myInput." "." "."of sem 5 is: ".$row6['SUM(TotalAmount31)']."</h4>";
            }
            while($row7 = mysqli_fetch_array($result7)){
                echo "<h4>Total Fee Collection of "." ".$myInput." "." "."of sem 6 is: ".$row7['SUM(TotalAmount120)']."</h4>";
            }

        }///////// if End //////////////


    }/////////////////// Main Else End/////////////
        $data .='</table>';
            echo $data;
    } 

    if(isset($_POST['Year']) && isset($_POST['StudentName']) && isset($_POST['FatherName']) && isset($_POST['RegistrationNo']) && isset($_POST['Branch']) && isset($_POST['receiptNo1']) && isset($_POST['Date2']) && isset($_POST['TutionFee1']) && isset($_POST['StudentFund1']) && isset($_POST['SecurityAmount']) && isset($_POST['PDc']) && isset($_POST['HostelCharges1']) && isset($_POST['TotalAmount19']) && isset($_POST['receiptNo2']) && isset($_POST['Date29']) && isset($_POST['TutionFee']) && isset($_POST['TotalAmount234']) && isset($_POST['TotalAmount1']) && isset($_POST['receiptNo3']) && isset($_POST['Date21']) && isset($_POST['TutionFee11']) && isset($_POST['StudentFund11']) && isset($_POST['HostelCharges11']) && isset($_POST['TotalAmount25']) && isset($_POST['receiptNo4']) && isset($_POST['Date28']) && isset($_POST['TutionFee2']) && isset($_POST['TotalAmount890']) && isset($_POST['TotalAmount11']) && isset($_POST['receiptNo5']) && isset($_POST['Date31']) && isset($_POST['TutionFee31']) && isset($_POST['StudentFund31']) && isset($_POST['HostelCharges31']) && isset($_POST['TotalAmount31']) && isset($_POST['receiptNo6']) && isset($_POST['Date32']) && isset($_POST['TutionFee3']) && isset($_POST['TotalAmount120']) && isset($_POST['TotalAmount345']) && isset($_POST['grand']))
    {
        $query = "INSERT INTO `feeinformation1`(`Year`,`StudentName`, `FatherName`, `RegistrationNo`, `Branch`, `receiptNo1`, `Date2`, `TutionFee1`, `StudentFund1`, `SecurityAmount`, `PDc`, `HostelCharges1`, `TotalAmount19`, `receiptNo2`, `Date29`, `TutionFee`, `TotalAmount234`, `TotalAmount1`, `receiptNo3`, `Date21`, `TutionFee11`, `StudentFund11`,`HostelCharges11`,`TotalAmount25`,`receiptNo4`,`Date28`,`TutionFee2`,`TotalAmount890`,`TotalAmount11`,`receiptNo5`,`Date31`,`TutionFee31`,`StudentFund31`,`HostelCharges31`,`TotalAmount31`,`receiptNo6`,`Date32`,`TutionFee3`,`TotalAmount120`,`TotalAmount345`,`grand`) VALUES('$Year','$StudentName', '$FatherName','$RegistrationNo','$Branch','$receiptNo1','$Date2','$TutionFee1','$StudentFund1','$SecurityAmount','$PDc','$HostelCharges1','$TotalAmount19','$receiptNo2','$Date29','$TutionFee','$TotalAmount234','$TotalAmount1','$receiptNo3','$Date21','$TutionFee11','$StudentFund11','$HostelCharges11','$TotalAmount25','$receiptNo4','$Date28','$TutionFee2','$TotalAmount890','$TotalAmount11','$receiptNo5','$Date31','$TutionFee31','$StudentFund31','$HostelCharges31','$TotalAmount31','$receiptNo6','$Date32','$TutionFee3','$TotalAmount120','$TotalAmount345','$grand')";
        mysqli_query($db,$query);
    }

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
        //$Yearupd = $_POST['Yearupd'];
        $StudentNameupd = $_POST['StudentNameupd'];
        $FatherNameupd = $_POST['FatherNameupd'];
        $RegistrationNoupd = $_POST['RegistrationNoupd'];
        $Branchupd = $_POST['Branchupd'];
        $receiptNo1upd = $_POST['receiptNo1upd'];
        $Date2upd = $_POST['Date2upd'];
        $TutionFee1upd = $_POST['TutionFee1upd'];
        $StudentFund1upd = $_POST['StudentFund1upd'];
        $SecurityAmountupd = $_POST['SecurityAmountupd'];
        $PDcupd = $_POST['PDcupd'];
        $HostelCharges1upd = $_POST['HostelCharges1upd'];
        $TotalAmount19upd = $_POST['TotalAmount19upd'];
        $receiptNo2upd = $_POST['receiptNo2upd'];
        $Date29upd = $_POST['Date29upd'];
        $TutionFeeupd = $_POST['TutionFeeupd'];
        $TotalAmount234upd = $_POST['TotalAmount234upd'];
        $TotalAmount1upd = $_POST['TotalAmount1upd'];
        $receiptNo3upd = $_POST['receiptNo3upd'];
        $Date21upd = $_POST['Date21upd'];
        $TutionFee11upd = $_POST['TutionFee11upd'];
        $StudentFund11upd = $_POST['StudentFund11upd'];
        $HostelCharges11upd = $_POST['HostelCharges11upd'];
        $TotalAmount25upd = $_POST['TotalAmount25upd'];
        $receiptNo4upd = $_POST['receiptNo4upd'];
        $Date28upd = $_POST['Date28upd'];
        $TutionFee2upd = $_POST['TutionFee2upd'];
        $TotalAmount890upd = $_POST['TotalAmount890upd'];
        $TotalAmount11upd = $_POST['TotalAmount11upd'];
        $receiptNo5upd = $_POST['receiptNo5upd'];
        $Date31upd = $_POST['Date31upd'];
        $TutionFee31upd = $_POST['TutionFee31upd'];
        $StudentFund31upd= $_POST['StudentFund31upd'];
        $HostelCharges31upd = $_POST['HostelCharges31upd'];
        $TotalAmount31upd = $_POST['TotalAmount31upd'];
        $receiptNo6upd = $_POST['receiptNo6upd'];
        $Date32upd = $_POST['Date32upd'];
        $TutionFee3upd = $_POST['TutionFee3upd'];
        $TotalAmount120upd = $_POST['TotalAmount120upd'];
        $TotalAmount345upd = $_POST['TotalAmount345upd'];
        $grandupd = $_POST['grandupd'];

        $query = "UPDATE `feeinformation1` SET `StudentName`='$StudentNameupd',`FatherName`='$FatherNameupd',`RegistrationNo`='$RegistrationNoupd',`Branch`='$Branchupd',`receiptNo1`='$receiptNo1upd',`Date2`='$Date2upd',`TutionFee1`='$TutionFee1upd',`StudentFund1`='$StudentFund1upd',`SecurityAmount`='$SecurityAmountupd',`PDc`='$PDcupd',`HostelCharges1`='$HostelCharges1upd',`TotalAmount19`='$TotalAmount19upd',`receiptNo2`='$receiptNo2upd',`Date29`='$Date29upd',`TutionFee`='$TutionFeeupd',`TotalAmount234`='$TotalAmount234upd',`TotalAmount1`='$TotalAmount1upd',`receiptNo3`='$receiptNo3upd',`Date21`='$Date21upd',`TutionFee11`='$TutionFee11upd',`StudentFund11`='$StudentFund11upd',`HostelCharges11`='$HostelCharges11upd',`TotalAmount25`='$TotalAmount25upd',`receiptNo4`='$receiptNo4upd',`Date28`='$Date28upd',`TutionFee2`='$TutionFee2upd',`TotalAmount890`='$TotalAmount890upd',`TotalAmount11`='$TotalAmount11upd',`receiptNo5`='$receiptNo5upd',`Date31`='$Date31upd',`TutionFee31`='$TutionFee31upd',`StudentFund31`='$StudentFund31upd',`HostelCharges31`='$HostelCharges31upd',`TotalAmount31`='$TotalAmount31upd',`receiptNo6`='$receiptNo6upd',`Date32`='$Date32upd',`TutionFee3`='$TutionFee3upd',`TotalAmount120`='$TotalAmount120upd',`TotalAmount345`='$TotalAmount345upd',`grand`='$grandupd' WHERE `id`='$hidden_user_idupd'";
        mysqli_query($db,$query);
    }
?>