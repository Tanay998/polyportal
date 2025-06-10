<?php 
include('conn.php');
    extract($_POST);
    if(isset($_POST['readrecord']) && isset($_POST['myInput']) && isset($_POST['finy'])){
        $data="SELECT * FROM `record` WHERE `Course`='$myInput' AND `RegNo`='$finy'";
        $result = mysqli_query($db, $data);
        $output='
            <div>
        ';
        while($row = mysqli_fetch_array($result))
        {
            $output.='
                '.$row['Profile Picture'].'
            ';
        }
        $output.='</div>';
        echo $output;
    }
?>