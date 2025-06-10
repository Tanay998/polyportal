<?php 
    include('conn.php');
    extract($_POST);
    if(isset($_POST['readrecord']) && isset($_POST['myInput']) && isset($_POST['fyear'])){
        $data = '<table class="table table-bordered table-striped table-responsive">
            <tr>
                <th>S.No</th>
                <th>Student Name</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Category</th>
                <th>Fee</th>
            </tr>';
            if($myInput=="" && $fyear==""){
                $sql = "SELECT * FROM `record`";
                $row = mysqli_query($db,$sql);
                $count = mysqli_num_rows($row);
                if(mysqli_num_rows($row)>0){
                    $number = 1;
                    while($result=mysqli_fetch_array($row)){
                        $data.='<tr>
                            <td>'.$number.'</td>
                            <td><a class="btn btn-primary" target="_blank" href="showdata115.php?pname='.$result['First Name'].' && pcourse='.$result['Course'].'">'.$result['First Name'].'</a></td>
                            <td>'.$result['Father Name'].'</td>
                            <td>'.$result['Mother Name'].'</td>
                            <td>'.$result['Email'].'</td>
                            <td>'.$result['Gender'].'</td>
                            <td>'.$result['Category'].'</td>
                            <td><a class="btn btn-success" target="_blank" href="FeeShow11.php?regNo='.$result['RegNo'].'">ADD FEE</a></td>
                        </tr>';
                        $number++;
                    }
                    echo "<h2>Total Number of Students: ".$count."</h2>";
                }
            }
            else{
                $sql1 = "SELECT * FROM `record` WHERE `Course`='$myInput' AND `AdmissionNo1`='$fyear'";
                $row1 = mysqli_query($db,$sql1);
                $count1 = mysqli_num_rows($row1);
                if(mysqli_num_rows($row1)>0){
                    $number1 = 1;
                    while($result1=mysqli_fetch_array($row1)){
                        $data.='<tr>
                            <td>'.$number1.'</td>
                            <td><a class="btn btn-primary" target="_blank" href="showdata115.php?pname='.$result1['First Name'].' && pcourse='.$result1['Course'].'">'.$result1['First Name'].'</a></td>
                            <td>'.$result1['Father Name'].'</td>
                            <td>'.$result1['Mother Name'].'</td>
                            <td>'.$result1['Email'].'</td>
                            <td>'.$result1['Gender'].'</td>
                            <td>'.$result1['Category'].'</td>
                            <td><a class="btn btn-success" target="_blank" href="FeeShow11.php?regNo='.$result1['RegNo'].'">ADD FEE</a></td>
                        </tr>';
                        $number1++;
                    }
                    echo "<h2>Total Number of Students: ".$count1."</h2>";
                }
            }
            $data.='</table>';
            echo $data;
    }
?>