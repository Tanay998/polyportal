<?php
    include('conn.php');
    if(isset($_POST['submit'])){
        $Course = $_POST['Course'];
        $RegNo = $_POST['RegNo'];
        $year = $_POST['year'];
        $gapAffidavit = $_FILES['file3351'];
        $filename = $gapAffidavit['name'];
        $fileerror = $gapAffidavit['error'];
        $filetmp = $gapAffidavit['tmp_name'];
        $fileext = explode('.', $filename);
        $filecheck= strtolower(end($fileext));
        $fileextstored = array('png','jpg','jpeg');
        $destinationfile = "upload/GapAffidavit/".$filename;

        move_uploaded_file($filetmp,$destinationfile);
        if($year==1){
        $query ="UPDATE `record1` SET `Gap Affidavit Picture`='$destinationfile' WHERE `Course`='$Course' AND `RegNo`='$RegNo' AND `Year`='$year'";
        if(mysqli_query($db,$query)){
            echo "<script>
				if(confirm('Your information has been updated'))
					{
						location.replace('docupdate.php');
					}
					
				</script>";
        }
        }
        else if($year==2){
            $query ="UPDATE `record2` SET `Gap Affidavit Picture`='$destinationfile' WHERE `Course`='$Course' AND `RegNo`='$RegNo' AND `Year`='$year'";
            if(mysqli_query($db,$query)){
                echo "<script>
                if(confirm('Your information has been updated'))
                {
                    location.replace('docupdate.php');
                }
                
                        
                    </script>";
            } 
        }
        else{
            $query ="UPDATE `record3` SET `Gap Affidavit Picture`='$destinationfile' WHERE `Course`='$Course' AND `RegNo`='$RegNo' AND `Year`='$year'";
        if(mysqli_query($db,$query)){
            echo "<script>
				if(confirm('Your information has been updated'))
					{
						location.replace('docupdate.php');
					}
					
				</script>";
        }
        }
    }

?>