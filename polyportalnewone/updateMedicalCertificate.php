<?php
    include('conn.php');
    if(isset($_POST['submit'])){
        $Course = $_POST['Course'];
        $RegNo = $_POST['RegNo'];
        $year = $_POST['year'];
        $medicalCertificate = $_FILES['file3'];
        $filename = $medicalCertificate['name'];
        $fileerror = $medicalCertificate['error'];
        $filetmp = $medicalCertificate['tmp_name'];
        $fileext = explode('.', $filename);
        $filecheck= strtolower(end($fileext));
        $fileextstored = array('png','jpg','jpeg');
        $destinationfile = "upload/MedicalCertificate/".$filename;

        move_uploaded_file($filetmp,$destinationfile);
        if($year==1){
        $query ="UPDATE `record1` SET `Medical Certificate Picture`='$destinationfile' WHERE `Course`='$Course' AND `RegNo`='$RegNo' AND `Year`='$year'";
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
            $query ="UPDATE `record2` SET `Medical Certificate Picture`='$destinationfile' WHERE `Course`='$Course' AND `RegNo`='$RegNo' AND `Year`='$year'";
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
            $query ="UPDATE `record3` SET `Medical Certificate Picture`='$destinationfile' WHERE `Course`='$Course' AND `RegNo`='$RegNo' AND `Year`='$year'";
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